<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Plataforma SP3</title>
<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
<link href="css/font-awesome.css" rel="stylesheet" type="text/css" />
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="css/animate.css" rel="stylesheet" type="text/css" />
<link href="css/admin.css" rel="stylesheet" type="text/css" />
</head>
<body class="light_theme  fixed_header left_nav_fixed">
<div class="wrapper">

  <div class="login_page">
  <div class="login_content">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="logo" style="display:block; background-color:black;"><img src="{{ asset('images/sp3-hor.png') }}" class="img-responsive center-block"></div>
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('PRO_RUN') ? ' has-error' : '' }}">
                            <label for="rut" class="col-md-4 control-label">Empresa</label>

                            <div class="col-sm-10">
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
                        </div>

                        <div class="form-group{{ $errors->has('PRO_RUN') ? ' has-error' : '' }}">
                            <label for="rut" class="col-md-4 control-label">RUT</label>

                            <div class="col-sm-10">
                                <input id="PRO_RUN" type="text" class="form-control" name="PRO_RUN" value="{{ old('PRO_RUN') }}" required autofocus>

                                @if ($errors->has('PRO_RUN'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('PRO_RUN') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Contraseña</label>

                            <div class="col-sm-10">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class=" col-sm-10">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Recordarme
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Iniciar sesión
                                </button>

                                <!--<a class="btn btn-link" href="{{ route('password.request') }}">
                                    ¿Olvidaste tu contraseña?
                                </a>-->
                            </div>
                        </div>
                    </form>

            </div>
        </div>
    </div>
 </div>
  </div>

</div>

<script src="js/jquery-2.1.0.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/common-script.js"></script>
<script src="js/jquery.slimscroll.min.js"></script>
</body>
</html>
