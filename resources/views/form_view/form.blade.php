<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Encuesta</title>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </head>
    <body>
        <div>
            <div class="container">
                <br>
                @if (count($errors)>0)
                <br>
                <div class="alert alert-danger" role="alert">
                    <u>
                        @foreach ($errors->all() as $error)
                        <li>
                            {{ $error }}
                        </li>
                        @endforeach
                    </u>
                </div>
                @endif
                <div class="col-md-10 col-xs-12" style="align-self: center; margin-left:10%" >
                    <h4>{{$encuesta->nombre}}</h4>
                </div>

                {!! Form::open(['route' => 'form_view.store']) !!}
                    @csrf

                    <div>


                        {{-- <div class="card">
                            <div class="card-body">
                                <div class="form-group col-sm-6">
                                    {!! Form::label('email', 'Email:') !!}
                                    {!! Form::text('email', null, ['class' => 'form-control']) !!}
                                </div>
                                @foreach ($preguntas as $pr )
                                    <div class="form-group">
                                    <div class="form-group col-md-6">
                                        <a href="{{ route('listaop', [$pr->id]) }}">{{$pr->nombre}}</a>
                                        @foreach ($opciones as $op)
                                        <div>
                                            @if($op->preguntas_id = $pr->id)
                                                <label>
                                                    {!! Form::checkbox('respuestas[]', $op->id, null, ['class'=>'mr-1']) !!}
                                                    {{$op->opcion}}

                                                </label>


                                            @endif



                                        </div>
                                        @endforeach
                                    </div>
                                    </div>
                                @endforeach
                            </div>
                        </div> --}}


                    </div>
                    <div>
                        <div class="card">
                            <div class="card-body">
                                <div class="form-group col-sm-6">
                                    {!! Form::label('email', 'Email:') !!}
                                    {!! Form::text('email', null, ['class' => 'form-control']) !!}
                                </div>
                                <div class="row">

                                    <div class="form-group col-sm-6">
                                        @foreach ($preguntas as $pr )
                                            <div class="form-group">
                                            <div class="form-group col-md-6">

                                                <label >{{$pr->nombre}}</label>

                                                {{-- @foreach ($respuestas as $r)
                                                <div>
                                                    <label>
                                                        {!! Form::checkbox('respuestas[]', $r->id, null, ['class'=>'mr-1']) !!}
                                                        {{$r->opcion}}

                                                    </label>
                                                </div>
                                                @endforeach --}}
                                            </div>

                                            </div>
                                        @endforeach
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <br>
                                        @foreach ($respuestas as $r)
                                        <div>
                                            <label>
                                                {!! Form::checkbox('respuestas[]', $r->id, null, ['class'=>'mr-1']) !!}
                                                {{$r->opcion}}

                                            </label>

                                        </div>
                                        @endforeach

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <br>

                    <div class="form-group row">
                      <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">enviar</button>
                      </div>
                    </div>
                    {!! Form::close() !!}

            </div>
        </div>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            @if(session('guardado')=='si')
                  <script type="text/javascript">
                        Swal.fire({
                              icon: 'success',
                              title: 'Muchas gracias',
                              confirmButtonColor:'#0083DE',
                              text: '¡Su respuesta ha sido guardada!',
                        })
                  </script>
            @endif
    </body>
</html>

