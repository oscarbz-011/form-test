<!-- Nombre Ciudad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre_ciudad', 'Nombre Ciudad:') !!}
    {!! Form::text('nombre_ciudad', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group col-sm-6">
    {!! Form::label('departamento_id', 'departamento:') !!}
    {!! Form::select('departamento_id', $departamentos, null, ['required','class' => 'form-control','placeholder'=>'Seleccione']) !!}
</div>
