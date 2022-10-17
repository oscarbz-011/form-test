<!-- Nombre Rubro Field -->
<div class="col-sm-12">
    {!! Form::label('nombre_rubro', 'Nombre Rubro:') !!}
    <p>{{ $rubro->nombre_rubro }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $rubro->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $rubro->updated_at }}</p>
</div>

