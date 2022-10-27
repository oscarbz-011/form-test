<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Respuesta;
use App\Models\Pregunta;
use App\Models\Resultado;

class GraficoController extends Controller
{
    public function index(){

        $preguntas = Pregunta::select('preguntas.id','preguntas.nombre')->where('preguntas.encuestas_id',1)->get();
        $datos = [];
        return view('graficos.index', ["datos"=>json_encode($datos)])->with('preguntas',$preguntas);


    }
    public function show($id)
    {

        $respuestas = Respuesta::select('respuestas.preguntas_id', 'respuestas.opcion')
        ->selectRaw('count(respuestas.id) as total')
        ->join('resultados', 'resultados.respuestas_id', '=', 'respuestas.id')
        ->join('preguntas','preguntas.id','=','respuestas.preguntas_id')
        ->where('preguntas.id',$id)
        ->groupBy('respuestas.preguntas_id','respuestas.opcion')
        ->get();

        $preguntas = Pregunta::select('preguntas.id','preguntas.nombre')->where('preguntas.encuestas_id',1)->get();

        $datos = [];
        foreach ($respuestas as $r) {
            $datos[] = ['name'=>$r->opcion, 'y'=>$r->total];
        }


        return view('graficos.index', ["datos"=>json_encode($datos)])->with('preguntas',$preguntas);
    }


}
