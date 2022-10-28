<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title >Encuesta</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</head>
<style>
    .card{
        background-color: #636363;
    }
    .container{
        background-color: #393D40;
    }
    body{
        background-color: #393D40;
    }
</style>
<body>
    <div >
        <div class="container">
            <br>
            @if (count($errors) > 0)
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
            <div class="col-md-10 col-xs-12" style="align-items: center;  margin-left:10%; justify-content: center;">

                <h4 style="color:white";>{{ $encuesta->nombre }}</h4>
            </div>

            {!! Form::open(['route' => 'form_view.store']) !!}
            @csrf

            <div class="card">
                <div class="card-body">
                    <div class="form-group
                    col-sm-4" style="color:white";>
                        {!! Form::label('email', 'Email:') !!}
                        {!! Form::text('email', null, ['class' => 'form-control']) !!}
                    </div>
                    <div>
                        <div class="form-group
                        col-sm-12"style="color:white";>
                            @foreach ($preguntas as $pr)
                                <div class="form-group
                                col-sm-12">
                                    <label><b>{{ $pr->nombre }}</b></label>
                                    <div class="form-group
                                    col-sm-12"style="color:white";>
                                        @foreach ($respuestas as $r)
                                            @if ($r->preguntas_id == $pr->id)
                                                <div>
                                                    <label>
                                                        {!! Form::radio('respuestas['.$pr->id.']', $r->id, null, ['class' => 'mr-1']) !!}
                                                        {{ $r->opcion }}
                                                    </label>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <br>

            <div class="form-group row">
                <div class="col-sm-8">
                    <button type="submit" class="btn btn-primary">ENVIAR</button>
                </div>
            </div>
            {!! Form::close() !!}

        </div>
    </div>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @if (session('guardado') == 'si')
        <script type="text/javascript">
            Swal.fire({
                icon: 'success',
                title: 'Muchas gracias',
                confirmButtonColor: '#0083DE',
                text: '¡Su respuesta ha sido guardada!',
            })
        </script>
    @endif
</body>

</html>
