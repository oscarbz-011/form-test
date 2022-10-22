@include('layouts/app')
<!DOCTYPE html>
<html lang="en">
<head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Inicio de sesión</title>
     <link rel="icon" type="image/png" href="/logomis.png" />
    <meta name="description" content="CoreUI Template - InfyOm Laravel Generator">
    <meta name="keyword" content="CoreUI,Bootstrap,Admin,Template,InfyOm,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <!-- Bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@coreui/coreui@2.1.16/dist/css/coreui.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@icon/coreui-icons-free@1.0.1-alpha.1/coreui-icons-free.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css"
          rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.3.0/css/flag-icon.min.css">
</head>
<body background="back2.jpg" style="size:cover">
   
        <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-xl-10">
            <div class="card rounded-3 text-black">
                <div class="row g-0">
                <div class="col-lg-6">
                    <div class="card-body p-md-5 mx-md-4">
                    <div class="text-center">
                            <img src="/logomis.png"
                        style="width: 100px;" alt="logo">
                        <h4 class="mt-1 mb-5 pb-1">ANALISIS DE SISTEMAS</h4>
                    </div>

                    <form method="post" action="{{ url('/login') }}">
                        {{ csrf_field() }}
                        <p></p>

                        <div class="form-outline mb-4">
                        <input type="email" id="form2Example11" class="form-control {{ $errors->has('email')?'is-invalid':'' }}"
                            placeholder="Email"  name="email" />
                        <label class="form-label" for="form2Example11">Email</label>
                        </div>

                        <div class="form-outline mb-4">
                        <input type="password" id="form2Example22" class="form-control {{ $errors->has('password')?'is-invalid':'' }}"  placeholder="Password" name="password"/>
                        <label class="form-label" for="form2Example22">Password</label>
                        </div>

                        <div class="text-center pt-1 mb-5 pb-1">
                        <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit">Iniciar Sesion</button>
                        {{--<a class="text-muted" href="#!">Forgot password?</a>--}}
                        </div>

                        <div class="d-flex align-items-center justify-content-center pb-4">
                        <p class="mb-0 me-2">¿No tienes una cuenta?</p>
                        </div>
                        <div class="d-flex align-items-center justify-content-center pb-4">
                        <a type="button" class="btn btn-outline-danger" href="/register">Registrarse</a>
                        </div>
                        

                    </form>

                    </div>
                </div>
                {{--
                <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                    <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                    </div>
                </div>--}}
                </div>
            </div>
            </div>
        </div>
        </div>
    </section>

<!-- CoreUI and necessary plugins-->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@coreui/coreui@2.1.16/dist/js/coreui.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.4.0/perfect-scrollbar.js"></script>
</body>
</html>
