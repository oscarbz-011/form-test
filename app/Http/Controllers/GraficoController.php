<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Respuesta;
use App\Models\Pregunta;
use App\Models\Resultado;

class GraficoController extends Controller
{
    public function grafico()
    {
        $respuestas = Respuesta::select('respuestas.preguntas_id', 'respuestas.opcion')
        ->selectRaw('count(respuestas.id) as total')
        ->join('resultados', 'resultados.respuestas_id', '=', 'respuestas.id')
        ->where('respuestas.preguntas_id', 1)
        ->groupBy('respuestas.preguntas_id','respuestas.opcion')
        ->get();

        $datos = [];
        foreach ($respuestas as $r) {
            $datos[] = ['name'=>$r->opcion, 'y'=>$r->total];
        }

        return view('graficos.index', compact('respuestas', 'datos'));
    }
}
