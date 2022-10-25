<!-- Nombre Departamento Field -->
<div class="col-sm-12">
    {!! Form::label('nombre', 'Nombre:') !!}
    <p>{{ $encuestas->nombre }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    @foreach ($preguntas as $pregunta)

    <p>{{ $pregunta->nombre }}</p>



    
    @endforeach



</div>
{{--
<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $encuestas->updated_at }}</p>
</div> --}}

