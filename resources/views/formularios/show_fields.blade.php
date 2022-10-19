<!-- Nombre comercio Field -->
<div class="col-sm-12">
    {!! Form::label('nombre_comercio', 'Comercio') !!}
    <p>{{ $formulario->nombre_comercio }}</p>
</div>

<!-- Rubro Id Field -->
<div class="col-sm-12">
    {!! Form::label('rubro_id', 'Rubro') !!}
    <p>{{ $formulario->rubro->nombre_rubro }}</p>
</div>

<!-- Departamento Id Field -->
<div class="col-sm-12">
    {!! Form::label('departamento_id', 'Departamento') !!}
    <p>{{ $formulario->departamento->nombre_departamento }}</p>
</div>

<!-- Ciudad Id Field -->
<div class="col-sm-12">
    {!! Form::label('ciuadad_id', 'Ciudad') !!}
    <p>{{ $formulario->ciudad->nombre_ciudad }}</p>
</div>

<!-- Direccion Field -->
<div class="col-sm-12">
    {!! Form::label('direccion', 'Direccion') !!}
    <p>{{ $formulario->direccion }}</p>
</div>

<!-- Forma De Pago Field -->
<div class="col-sm-12">
    {!! Form::label('forma_de_pago', '¿Qué formas de pago admitía?') !!}
    <p>{{ $formulario->forma_de_pago }}</p>
</div>

<!-- Metodo Envio Field -->
<div class="col-sm-12">
    {!! Form::label('metodo_envio', '¿Qué métodos de envío utilizaban?') !!}
    <p>{{ $formulario->metodo_envio }}</p>
</div>

<!-- Tecnologia Venta Producto Field -->
<div class="col-sm-12">
    {!! Form::label('tecnologia_venta_producto', '¿Qué tecnologías utilizó para la venta de sus productos?') !!}
    <p>{{ $formulario->tecnologia_venta_producto }}</p>
</div>

<!-- Publicidad De Producto Field -->
<div class="col-sm-12">
    {!! Form::label('publicidad_de_producto', '¿Cómo publicitaron sus productos?') !!}
    <p>{{ $formulario->publicidad_de_producto }}</p>
</div>

<!-- Fue Util Para El Negocio Field -->
<div class="col-sm-12">
    {!! Form::label('fue_util_para_el_negocio', '¿Fue útil para tu negocio vender de forma electrónica?') !!}
    <p>{{ $formulario->fue_util_para_el_negocio }}</p>
</div>

<!-- Noto Aumento De Ventas Field -->
<div class="col-sm-12">
    {!! Form::label('noto_aumento_de_ventas', '¿Notó un aumento en las ventas de sus productos?') !!}
    <p>{{ $formulario->noto_aumento_de_ventas }}</p>
</div>

<!-- Siguio Utlizando Field -->
<div class="col-sm-12">
    {!! Form::label('siguio_utlizando', '¿Siguió utilizando las ventas electrónicas en su negocio?') !!}
    <p>{{ $formulario->siguio_utlizando }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $formulario->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $formulario->updated_at }}</p>
</div>
