<div class="table-responsive">
    <table class="table" id="departamentos-table">
        <thead>
        <tr>
            <th>Nombre Departamento</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($departamentos as $departamento)
            <tr>
                <td>{{ $departamento->nombre_departamento }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['departamentos.destroy', $departamento->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('departamentos.show', [$departamento->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('departamentos.edit', [$departamento->id]) }}"
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
