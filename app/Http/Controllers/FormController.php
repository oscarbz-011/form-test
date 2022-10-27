<?php


namespace App\Http\Controllers;

use App\Http\Requests\CreateFormularioRequest;
use App\Http\Requests\UpdateFormularioRequest;
use App\Repositories\FormularioRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use App\Models\Encuesta;
use App\Models\Encuestado;
use App\Models\Pregunta;
use App\Models\Respuesta;
use App\Models\Resultado;
use Flash;
use DB;
use Response;
class FormController extends Controller
{
    private $formularioRepository;

    /**
     * Show the form for creating a new Formulario.
     *
     * @return Response
     */


    public function create()
    {

        $ide = 1;
        $encuesta = Encuesta::find($ide);
        $preguntas = Pregunta::select('preguntas.id', 'preguntas.nombre')
            ->join('encuestas', 'encuestas.id', '=', 'preguntas.encuestas_id')->where('encuestas.id', $ide)
            ->get();
        $respuestas = Respuesta::select('respuestas.id', 'respuestas.opcion', 'respuestas.preguntas_id')
            ->join('preguntas', 'preguntas.id', '=', 'respuestas.preguntas_id')->join('encuestas', 'encuestas.id', '=', 'preguntas.encuestas_id')->where('encuestas.id', $ide)
            ->get();
        ///////////////////
        $opciones = Respuesta::select('respuestas.opcion')->join('preguntas', 'respuestas.preguntas_id', '=', 'preguntas.id')
            ->where('preguntas.id', $ide)->get();

        $op = Respuesta::select('respuestas.opcion')->join('preguntas', 'respuestas.preguntas_id', '=', 'preguntas.id')
            ->where('preguntas.id', 1)->get();


        return view('form_view.form', compact('preguntas', 'respuestas', 'opciones', 'encuesta'));
    }

    public function store(Request $request)
    {

        $rules = request()->validate([
            'email' => 'required |email|unique:encuestado,email'
        ]);
        $encuestado = Encuestado::create([
            'email' => $request->email
        ]);

        if ($request->has('respuestas')) {
            $encuestado->respuesta()->attach($request->respuestas);
        }


        return redirect('/')->with('guardado', 'si');
    }


}
