<div class="table-responsive">
    <table class="table" id="formularios-table">
        <thead>
        <tr>
            <th>Comercio</th>
            <th>Rubro</th>
            <th>Departamento</th>
            <th>Ciudad</th>
            <th>Direccion</th>
            <th>Formas de pago</th>
            <th>Metodo de envio</th>
            <th>Tecnologias utilizadas</th>
            <th>Metodo de publicidad</th>
            <th>Comercio electronico</th>
            <th>Aumento de ventas</th>
            <th>Adopto el comercio electronico</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($formularios as $formulario)
            <tr>
                <tr>
                    <td>{{ $formulario->nombre_comercio }}</td>
                     <td>{{ $formulario->rubro->nombre_rubro }}</td>
                      <td>{{ $formulario->departamento->nombre_departamento }}</td>
                       <td>{{ $formulario->ciudad->nombre_ciudad }}</td>
                       <td>{{ $formulario->direccion }}</td>
                   <td>{{ $formulario->forma_de_pago }}</td>
               <td>{{ $formulario->metodo_envio }}</td>
               <td>{{ $formulario->tecnologia_venta_producto }}</td>
               <td>{{ $formulario->publicidad_de_producto }}</td>
               <td>{{ $formulario->fue_util_para_el_negocio }}</td>
               <td>{{ $formulario->noto_aumento_de_ventas }}</td>
               <td>{{ $formulario->siguio_utlizando }}</td>

                <td width="120">
                    {!! Form::open(['route' => ['formularios.destroy', $formulario->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('formularios.show', [$formulario->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('formularios.edit', [$formulario->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
