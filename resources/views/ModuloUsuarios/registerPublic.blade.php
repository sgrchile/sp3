<!doctype html>
<html lang="es">
  <head>
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
                        <div class="card-body">
                            <h5 class="card-title text-center">Registro de Personas</h5>
                            <div id="accordion">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item active" id="step1"><a href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">General</a></li>
                                        <li class="breadcrumb-item" id="step2"><a href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Contacto</a></li>
                                        <li class="breadcrumb-item" id="step3"><a href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseTwo">Ubicación</a></li>
                                        <li class="breadcrumb-item" id="step4"><a href="#" data-toggle="collapse" data-target="#collapsefour" aria-expanded="false" aria-controls="collapseTwo">Pagos</a></li>
                                        <li class="breadcrumb-item" id="step5"><a href="#" data-toggle="collapse" data-target="#collapsefive" aria-expanded="false" aria-controls="collapseTwo">Extras</a></li>
                                    </ol>
                                </nav>
                                <div class="card">
                                    <div id="collapseOne" class="collapse show" data-parent="#accordion">
                                        <div class="card-header">
                                            <h5 class="mb-0">General</h5>
                                        </div>
                                        <div class="card-body row">
                                            <div class="form-group col-12 col-md-6">
                                                <label for="nombre">Nombre</label>
                                                <input type="text" class="form-control" id="nombre">
                                            </div>
                                            <div class="form-group col-12 col-md-6">
                                                <label for="paterno">Apellido Paterno</label>
                                                <input type="text" class="form-control" id="paterno">
                                            </div>
                                            <div class="form-group col-12 col-md-6">
                                                <label for="materno">Apellido Materno</label>
                                                <input type="text" class="form-control" id="materno">
                                            </div>
                                            <div class="form-group col-12 col-md-6">
                                                <label for="rut">R.U.T</label>
                                                <input type="text" class="form-control" id="rut">
                                            </div>
                                            <div class="form-group col-12 col-md-6">
                                                <label for="fecha">Fecha de Nacimiento</label>
                                                <input type="date" class="form-control" id="fecha">
                                            </div>
                                            <div class="form-group col-12 col-md-6">
                                                <label for="sexo">Sexo</label>
                                                <select class="form-control" id="sexo">
                                                    <option value="1">Hombre</option>
                                                    <option value="2">Mujer</option>
                                                    <option value="3">Indefinido</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-12 col-md-6">
                                                <label for="estado">Estado civil</label>
                                                <select class="form-control" id="estado">
                                                    <option value="1">Viudo</option>
                                                    <option value="2">Soltero (a)</option>
                                                    <option value="3">Separado(a)</option>
                                                    <option value="4">Divorciado(a)</option>
                                                    <option value="5">Convive</option>
                                                    <option value="6">Casado(a)</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-12 col-md-6">
                                                <label for="email">Email</label>
                                                <input type="email" class="form-control" id="email">
                                            </div>
                                            <div class="form-group col-12 col-md-6">
                                                <label for="nacionalidad">Nacionalidad</label>
                                                <select class="form-control" id="nacionalidad">
                                                    <option value="1">Chilena</option>
                                                    <option value="2">Extranjera</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-12 col-md-6">
                                                <label for="contrasena">Contraseña</label>
                                                <input type="password" class="form-control" id="contrasena">
                                            </div>
                                            <div class="form-group col-12 col-md-6">
                                                <label for="contrasenar">Repita contraseña</label>
                                                <input type="password" class="form-control" id="contrasenar">
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <a href="/" class="btn btn-secondary">Volver</a>
                                            <a href="#" class="btn btn-primary" data-toggle="collapse" data-target="#collapseTwo">Paso 2</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div id="collapseTwo" class="collapse" aria-labelledby="step2" data-parent="#accordion">
                                        <div class="card-header">
                                            <h5 class="mb-0">Contacto</h5>
                                        </div>
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label for="telefono">Teléfono</label>
                                                <input type="number" class="form-control" id="telefono">
                                            </div>
                                            <div class="form-group">
                                                <label for="telefonodos">Teléfono secundario</label>
                                                <input type="number" class="form-control" id="telefonodos">
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <a href="#" data-toggle="collapse" data-target="#collapseOne">Volver al paso 2</a>
                                            <a href="#" data-toggle="collapse" data-target="#collapseThree">Paso 3</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div id="collapseThree" class="collapse" aria-labelledby="step3" data-parent="#accordion">
                                        <div class="card-header">
                                            <h5 class="mb-0">Ubicación</h5>
                                        </div>
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label for="direccion">Dirección</label>
                                                <input type="text" class="form-control" id="direccion">
                                            </div>
                                            <div class="form-group">
                                                <label for="pais">País</label>
                                                <select class="form-control" id="pais">
                                                    <option value="1">Otro</option>
                                                    <option value="2">Chile</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="region">Región</label>
                                                <select class="form-control" id="region">
                                                    <option value="1">No corresponde</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="provincia">Provincia</label>
                                                <select class="form-control" id="provincia">
                                                    <option value="1">No corresponde</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="ciudad">Ciudad</label>
                                                <select class="form-control" id="ciudad">
                                                    <option value="1">No corresponde</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="referencia">Referencia</label>
                                                <input type="text" class="form-control" id="referencia">
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <a href="#" data-toggle="collapse" data-target="#collapseTwo">Volver al paso 3</a>
                                            <a href="#" data-toggle="collapse" data-target="#collapsefour">Paso 4</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div id="collapsefour" class="collapse" aria-labelledby="step4" data-parent="#accordion">
                                        <div class="card-header">
                                            <h5 class="mb-0">Pagos</h5>
                                        </div>
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label for="fechapago">Fecha de Pago</label>
                                                <input type="email" class="form-control" id="fechapago">
                                            </div>
                                            <div class="form-group">
                                                <label for="ncuenta">Número de cuenta</label>
                                                <input type="text" class="form-control" id="ncuenta">
                                            </div>
                                            <div class="form-group">
                                                <label for="banco">Banco</label>
                                                <input type="text" class="form-control" id="banco">
                                            </div>
                                            <div class="form-group">
                                                <label for="bancocuenta">Tipo de cuenta</label>
                                                <input type="text" class="form-control" id="bancocuenta">
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <a href="#" data-toggle="collapse" data-target="#collapseThree">Volver al paso 4</a>
                                            <a href="#" data-toggle="collapse" data-target="#collapsefive">Paso 5</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div id="collapsefive" class="collapse" aria-labelledby="step5" data-parent="#accordion">
                                        <div class="card-header">
                                            <h5 class="mb-0">Extras</h5>
                                        </div>
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label for="medico">Seguro Médico</label>
                                                <input type="text" class="form-control" id="medico">
                                            </div>
                                            <div class="form-group">
                                                <label for="afp">AFP</label>
                                                <input type="text" class="form-control" id="afp">
                                            </div>
                                            <div class="form-group">
                                                <label for="rubro">Rubro</label>
                                                <input type="text" class="form-control" id="rubro">
                                            </div>
                                            <div class="form-group">
                                                <label for="subrubro">Sub-Rubro</label>
                                                <input type="text" class="form-control" id="subrubro">
                                            </div>
                                            <div class="form-group">
                                                <label for="web">Sitio Web</label>
                                                <input type="text" class="form-control" id="web">
                                            </div>
                                            <div class="form-group">
                                                <label for="facebook">Facebook</label>
                                                <input type="text" class="form-control" id="facebook">
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <a href="#" data-toggle="collapse" data-target="#collapsefour">Volver al paso 4</a>
                                            <button type="button" class="btn btn-primary">Registrar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
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