<?php

namespace App\Http\Controllers;

use App\Models\Encuestado;
use App\Models\Resultado;
use App\Models\Pregunta;
use App\Models\Respuesta;
use Illuminate\Http\Request;

class ResultadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $encuestados = Encuestado::all();
        return view('resultados.index',compact('encuestados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $encuestados = Encuestado::find($id);
        $preguntas = Pregunta::select('preguntas.id','preguntas.nombre')
        ->join('encuestas', 'encuestas.id', '=', 'preguntas.encuestas_id')
        ->where('encuestas.id', 1 )
        ->get();
        $respuestas = Respuesta::select('encuestado_id','respuestas.preguntas_id', 'respuestas.opcion')
        ->join('resultados', 'resultados.respuestas_id', '=', 'respuestas.id')
        ->where('resultados.encuestado_id', $id)
        ->get();
        return view('resultados.show',compact('encuestados', 'preguntas', 'respuestas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
