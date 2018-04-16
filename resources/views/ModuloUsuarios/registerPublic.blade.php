<!doctype html>
<html lang="es">
  <head>
    <meta NAME="robots" CONTENT="NoIndex, NoFollow">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Plataforma SP3</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
  </head>
  <body style="background-image:url(images/login-fondo.jpg);background-size: cover;background-repeat:no-repeat;">
    <header style="background-color:#000;border-bottom: solid 8px #FFCC00;">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-5 my-3">
                    <img src="images/log_sp3_horizontal.png" class="img-fluid" alt="Logo SP3">
                </div>
            </div>
        </div>
    </header>
    <section>
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-8 my-3">
                    <div class="card" style="border:1px solid #000;background: linear-gradient(white, #cfcdce);">
                        <div class="card-body pb-0">
                            <h5 class="card-title text-center">Bienvenido a Servicios Profesionales SP3</h5>
                            <div class="row">
                                <div class="col-6">
                                    <img src="images/login_anfitrion.png" class="img-fluid" alt="Ejecutiva Bienvenida">
                                </div>
                                <div class="col-6">
                                    <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                                        {{ csrf_field() }}
                                        <div class="form-group{{ $errors->has('PRO_RUN') ? ' has-error' : '' }}">
                                            <label for="rut">Empresa</label>
                                            <select class="form-control" required autofocus>
                                                <option value="0">Seleccione </option>
                                                <option value="1">BIOGEST </option>
                                                <option value="2">TRENER </option>
                                                <option value="3">LOICA </option>
                                                <option value="4">KUTRALCO </option>
                                                <option value="5">IMPROTOUR </option>
                                            </select>
                                            @if ($errors->has('PRO_RUN'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('PRO_RUN') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="form-group{{ $errors->has('PRO_RUN') ? ' has-error' : '' }}">
                                            <label for="rut">RUT</label>
                                            <input id="PRO_RUN" type="text" class="form-control" name="PRO_RUN" value="{{ old('PRO_RUN') }}" required autofocus>
                                            @if ($errors->has('PRO_RUN'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('PRO_RUN') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                            <label for="password">Contraseña</label>
                                            <input id="password" type="password" class="form-control" name="password" required>
                                            @if ($errors->has('password'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="form-group form-check">
                                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                            <label class="form-check-label" for="remember">Recordarme</label>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Iniciar sesión</button>
                                        <a href="">Regístrate</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-md-center mt-3">
                        <div class="col-2 pl-0 pr-0 mr-2">
                            <img src="images/empresas/logo_biogest.png" class="img-fluid" alt="Logo biogest">
                        </div>
                        <div class="col-2 pl-0 pr-0 mr-2">
                            <img src="images/empresas/logo_kutralco.png" class="img-fluid" alt="Logo kutralco">
                        </div>
                        <div class="col-2 pl-0 pr-0 mr-2">
                            <img src="images/empresas/logo_loica.png" class="img-fluid" alt="Logo loica">
                        </div>
                        <div class="col-2 pl-0 pr-0 mr-2">
                            <img src="images/empresas/logo_sgr.png" class="img-fluid" alt="Logo sgr">
                        </div>
                        <div class="col-2 pl-0 pr-0 mr-1">
                            <img src="images/empresas/logo_trener.png" class="img-fluid" alt="Logo trener">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer>
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
  </body>
</html>