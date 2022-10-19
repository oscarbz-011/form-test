<!-- Departamento Id Field -->
<div class="col-sm-12">
    {!! Form::label('departamento_id', 'Departamento:') !!}
    <p>{{ $ciudad->departamento->nombre_departamento }}</p>
</div>

<!-- Nombre Ciudad Field -->
<div class="col-sm-12">
    {!! Form::label('nombre_ciudad', 'Nombre Ciudad:') !!}
    <p>{{ $ciudad->nombre_ciudad }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $ciudad->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $ciudad->updated_at }}</p>
</div>

