<div class="table-responsive">
    <table class="table" id="departamentos-table">
        <thead>
        <tr>
            <th>Nombre de la encuesta</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($encuestas as $encuesta)
            <tr>
                <td>{{ $encuesta->nombre }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['encuestas.destroy', $encuesta->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('encuestas.show', [$encuesta->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('encuestas.edit', [$encuesta->id]) }}"
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
