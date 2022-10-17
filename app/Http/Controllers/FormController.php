<?php


namespace App\Http\Controllers;

use App\Http\Requests\CreateFormularioRequest;
use App\Http\Requests\UpdateFormularioRequest;
use App\Repositories\FormularioRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use App\Models\Rubro;
use App\Models\Ciudad;
use App\Models\Departamento;
use Flash;
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
        $rubros = Rubro::pluck('nombre_rubro','id');
        $departamentos = Departamento::pluck('nombre_departamento','id');
        $ciudades = Ciudad::pluck('nombre_ciudad','id');

        return view('form_view.formulario',compact('rubros','departamentos','ciudades'));
    }

    public function store(CreateFormularioRequest $request)
    {

        $form=Form::create([
            'nombre_comercio'=>$request->nombre_comercio,
            'rubro_id'=>$request->rubro_id,
            'departamento_id'=>$request->departamento_id,
            'ciudad_id'=>$request->ciudad_id,
            'direccion'=>$request->direccion,
            'metodo_envio'=>implode(',',$request->metodo_envio),
            'tecnologia_venta_producto'=>implode(',',$request->tecnologia_venta_producto),
            'publicidad_de_producto'=>implode(',',$request->publicidad_de_producto),
            'fue_util_para_el_negocio'=>$request->fue_util_para_el_negocio,
            'noto_aumento_de_ventas'=>$request->noto_aumento_de_ventas,
            'siguio_utlizando'=>$request->siguio_utlizando,
            'forma_de_pago' =>implode(',',$request->forma_de_pago,)
        ]);

        return view('form_view.formulario', compact('form'));
    }



}
