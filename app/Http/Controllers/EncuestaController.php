<?php

namespace App\Http\Controllers;

use App\Models\Encuesta;
use App\Models\Pregunta;
use App\Models\Respuesta;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;


class EncuestaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $encuestas = Encuesta::all();
        return view('encuestas.index',compact('encuestas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('encuestas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();

        $encuestas = Encuesta::create($input);

        Flash::success('Encuesta saved successfully.');

        return redirect(route('encuestas.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $encuestas = Encuesta::find($id);
        $preguntas = Pregunta::select('preguntas.nombre')
        ->join('encuestas', 'encuestas.id', '=', 'preguntas.encuestas_id')->where('encuestas.id', $id )
        ->get();
        $respuestas = Respuesta::select('respuestas.id','respuestas.opcion','respuestas.preguntas_id')
        ->join('preguntas','preguntas.id','=','respuestas.preguntas_id')->join('encuestas', 'encuestas.id', '=', 'preguntas.encuestas_id')->where('encuestas.id', $id )
        ->get();

        if (empty($encuestas)) {
            Flash::error('Departamento not found');

            return redirect(route('encuestas.index'));
        }

        return view('encuestas.show',compact('encuestas','preguntas','respuestas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $departamento = Encuesta::find($id);

        if (empty($encuestas)) {
            Flash::error('Encuesta not found');

            return redirect(route('encuestas.index'));
        }

        return view('encuestas.edit', compact('encuestas'));
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
        $encuestas = Encuesta::find($id);

        if (empty($encuestas)) {
            Flash::error('Encuesta not found');

            return redirect(route('encuestas.index'));
        }

        $encuestas = $this->Encuesta->update($request->all(), $id);

        Flash::success('Encuesta updated successfully.');

        return redirect(route('encuestas.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $encuestas = Encuesta::find($id);

        if (empty($encuestas)) {
            Flash::error('Encuesta not found');

            return redirect(route('encuestas.index'));
        }

        $this->Encuesta->delete($id);

        Flash::success('Encuesta deleted successfully.');

        return redirect(route('encuestas.index'));
    }
}
