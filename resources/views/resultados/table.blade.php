<div class="table-responsive">
    <table class="table" id="departamentos-table">
        <thead>
        <tr>
            <th>Nombre de la encuesta</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @forelse($resultados as $resultado)
            <tr>
                <td>{{ $resultado->encuestado_id }}</td>
                <td>{{ $resultado->respuestas_id }}</td>
                <td width="120">
                    {{-- {!! Form::open(['route' => ['encuestas.destroy', $encuesta->id], 'method' => 'delete']) !!} --}}
                    <div class='btn-group'>
                        <a href="{{ url('resultados/show'. $resultado->id) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        {{-- <a href="{{ route('encuestas.edit', [$encuesta->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a> --}}
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
            @empty
            <span>no hay registros</span>
        @endforelse
        </tbody>
    </table>
</div>
