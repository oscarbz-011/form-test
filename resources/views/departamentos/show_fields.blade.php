<!-- Nombre Departamento Field -->
<div class="col-sm-12">
    {!! Form::label('nombre_departamento', 'Nombre Departamento:') !!}
    <p>{{ $departamento->nombre_departamento }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $departamento->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $departamento->updated_at }}</p>
</div>

