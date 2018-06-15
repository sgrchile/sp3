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
                        <h5 class="card-title text-center">Registro de Empresa</h5>
                        <div id="accordion">
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
                                       <!-- <div class="form-group col-12 col-md-6">
                                            <label for="paterno">Apellido Paterno</label>
                                            <input type="text" class="form-control" id="paterno">
                                        </div> -->
                                        <!--<div class="form-group col-12 col-md-6">
                                            <label for="materno">Apellido Materno</label>
                                            <input type="text" class="form-control" id="materno">
                                        </div>-->
                                        <div class="form-group col-12 col-md-6">
                                            <label for="rut">R.U.T</label>
                                            <input type="text" class="form-control" id="rut">
                                        </div>
                                        <div class="form-group col-12 col-md-6">
                                            <label for="fecha">Fecha Fundación</label>
                                            <input type="date" class="form-control" id="fecha">
                                        </div>
                                        <div class="form-group col-12 col-md-6">
                                            <label for="razonsocial">Razon Social</label>
                                            <input type="text" class="form-control" id="razonsocial">
                                        </div>
                                        <div class="form-group col-12 col-md-6">
                                            <label for="juridica">Persona Juridica</label>
                                            <select class="form-control" id="juridica">
                                            </select>
                                        </div>
                                        <div class="form-group col-12 col-md-6">
                                            <label for="repleg">Reprecentante Legal</label>
                                            <input type="text" class="form-control" id="repleg">
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
                                <div id="collapseTwo" class="collapse" data-parent="#accordion">
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
                                        <div class="form-group">
                                            <label for="redes">Redes Sociales</label>
                                            <input type="text" class="form-control" id="redes">
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <a href="#" class="btn btn-secondary" data-toggle="collapse" data-target="#collapseOne">Volver al paso 1</a>
                                        <a href="#" class="btn btn-primary" data-toggle="collapse" data-target="#collapseThree">Paso 3</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div id="collapseThree" class="collapse" data-parent="#accordion">
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
                                    </div>
                                    <div class="card-footer">
                                        <a href="#" class="btn btn-secondary" data-toggle="collapse" data-target="#collapseTwo">Volver al paso 2</a>
                                        <a href="#" class="btn btn-primary" data-toggle="collapse" data-target="#collapsefour">Paso 4</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div id="collapsefour" class="collapse" data-parent="#accordion">
                                    <div class="card-header">
                                        <h5 class="mb-0">Pagos</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="fechapago">Pago</label>
                                            <select class="form-control" id="pago">
                                                <option value="1">Día</option>
                                                <option value="2">Semana</option>
                                                <option value="3">Quincena</option>
                                                <option value="4">Mes</option>
                                            </select>
                                        </div>
                                        <div class="form-group" id="select.fecha">
                                            <label for="fechapago">Fecha de Pago</label>
                                            <select class="form-control" id="fechapago">
                                                <option value="0">No corresponde</option>
                                                <option value="1">25</option>
                                                <option value="2">26</option>
                                                <option value="3">27</option>
                                                <option value="4">28</option>
                                                <option value="5">29</option>
                                                <option value="6">30</option>
                                                <option value="7">1</option>
                                                <option value="8">2</option>
                                                <option value="9">3</option>
                                                <option value="10">4</option>
                                                <option value="11">5</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="ncuenta">Número de cuenta</label>
                                            <input type="number" class="form-control" id="ncuenta">
                                        </div>
                                        <div class="form-group">
                                            <label for="banco">Banco</label>
                                            <select class="form-control" id="banco">
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="bancocuenta">Tipo de cuenta</label>
                                            <select class="form-control" id="bancocuenta">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <a href="#" class="btn btn-secondary" data-toggle="collapse" data-target="#collapseThree">Volver al paso 3</a>
                                        <a href="#" class="btn btn-primary" data-toggle="collapse" data-target="#collapsefive">Paso 5</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div id="collapsefive" class="collapse" data-parent="#accordion">
                                    <div class="card-header">
                                        <h5 class="mb-0">Extras</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="pagweb">Pagina Web</label>
                                            <input type="text" class="form-control" id="pagweb">
                                        </div>
                                       <div class="form-group">
                                            <label for="dicom">Dicom</label>
                                            <select class="form-control" id="dicom">
                                                <option value="si">si</option>
                                                <option value="no">no</option>
                                            </select>
                                        </div>
                                        <!--<div class="form-group">
                                            <label for="logo">Logo</label>
                                            <input type="file" class="form-control" id="logo">
                                        </div>
                                        <div class="form-group">
                                            <label for="ventas">Tipo de cuenta</label>
                                            <select class="form-control" id="ventas">
                                            </select>
                                        </div>-->
                                    </div>
                                    {{ csrf_field() }}
                                    <div class="card-footer">
                                        <a href="#" class="btn btn-secondary" data-toggle="collapse" data-target="#collapsefour">Volver al paso 4</a>
                                        <button type="button" class="btn btn-primary" id="btnRegistrar">Registrar</button>
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
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
<script>
    $(document).ready(function(){
        $.get("https://plataforma.sgrchile.com/api/pais").done(function(data){
            let option = "<option value='0'>Seleccione</option>";
            $("#pais").append(option);
            if (data !== null){
                if (Object.keys(data).length > 0 ){
                    $.each(data, function( index, value ){
                        let option = "<option value='"+ value.PAI_COD + "'>" + value.PAI_DESC+ "</option>";
                        $("#pais").append(option);
                    });
                }
            }
        });
        $.get("https://plataforma.sgrchile.com/api/bancos").done(function(data){
            let option = "<option value='0'>Seleccione</option>";
            $("#banco").append(option);
            if (data !== null){
                if (Object.keys(data).length > 0 ){
                    $.each(data, function( index, value ){
                        let option = "<option value='"+ value.BCO_ID + "'>" + value.BCO_DESC+ "</option>";
                        $("#banco").append(option);
                    });
                }
            }
        });
        $.get("https://plataforma.sgrchile.com/api/bancos/cuentas").done(function(data){
            let option = "<option value='0'>Seleccione</option>";
            $("#bancocuenta").append(option);
            if (data !== null){
                if (Object.keys(data).length > 0 ){
                    $.each(data, function( index, value ){
                        let option = "<option value='"+ value.TCTA_BCO + "'>" + value.TCTA_DESC+ "</option>";
                        $("#bancocuenta").append(option);
                    });
                }
            }
        });
        $.get("https://plataforma.sgrchile.com/api/salud").done(function(data){
            let option = "<option value='0'>Seleccione</option>";
            $("#medico").append(option);
            if (data !== null){
                if (Object.keys(data).length > 0 ){
                    $.each(data, function( index, value ){
                        let option = "<option value='"+ value.SALUD_ID + "'>" + value.SALUD_NOMBRE+ "</option>";
                        $("#medico").append(option);
                    });
                }
            }
        });
        $.get("https://plataforma.sgrchile.com/api/afp").done(function(data){
            let option = "<option value='0'>Seleccione</option>";
            $("#afp").append(option);
            if (data !== null){
                if (Object.keys(data).length > 0 ){
                    $.each(data, function( index, value ){
                        let option = "<option value='"+ value.AFP_ID + "'>" + value.AFP_NOMBRE+ "</option>";
                        $("#afp").append(option);
                    });
                }
            }
        });
        $.get("https://plataforma.sgrchile.com/api/persjuridica").done(function(data){
            let option = "<option value='0'>Seleccione</option>";
            $("#juridica").append(option);
            if (data !== null){
                if (Object.keys(data).length > 0 ){
                    $.each(data, function( index, value ){
                        let option = "<option value='"+ value.ID_PERS_JURIDICA + "'>" + value.DESC_PERS_JURIDICA+ "</option>";
                        $("#juridica").append(option);
                    });
                }
            }
        });
        $("#pais").on("change", function(){
            let pais = $(this).val();

            if (pais == 1){
                $("#region").empty();
                $.get("https://plataforma.sgrchile.com/api/region").done(function(data){
                    if (data !== null){
                        if (Object.keys(data).length > 0 ){
                            $.each(data, function( index, value ){
                                let option = "<option value='"+ value.REG_COD + "'>" + value.REG_DESC+ "</option>";
                                $("#region").append(option);
                            });
                            $("#region").trigger("change");
                        }
                    }
                });
            }
            else{
                $("#region").empty();
                $("#provincia").empty();
                $("#ciudad").empty();
                let option = "<option value='0'>No corresponde</option>";
                $("#region").append(option);
                $("#provincia").append(option);
                $("#ciudad").append(option);
            }
        });
        $("#region").on("change", function(){
            let region = $(this).val();
            $("#provincia").empty();
            $.get("https://plataforma.sgrchile.com/api/provincia/" + region).done(function(data){
                if (data !== null){
                    if (Object.keys(data).length > 0 ){
                        $.each(data, function( index, value ){
                            let option = "<option value='"+ value.PV_COD + "'>" + value.PV_DESC+ "</option>";
                            $("#provincia").append(option);
                        });
                        $("#provincia").trigger("change");
                    }
                }
            });
        });

        $("#provincia").on("change", function(){
            let provincia = $(this).val();
            $("#ciudad").empty();
            $.get("https://plataforma.sgrchile.com/api/ciudad/" + provincia).done(function(data){
                if (data !== null){
                    if (Object.keys(data).length > 0 ){
                        $.each(data, function( index, value ){
                            let option = "<option value='"+ value.CIU_COD + "'>" + value.CIU_DESC+ "</option>";
                            $("#ciudad").append(option);
                        });
                        $("#ciudad").trigger("change");
                    }
                }
            });
        });

        $("#pago").on("change", function(){
            let pago = $(this).val();

            if (pago != 1){
                $("#select\\.fecha").addClass("d-none");
                $("#fechapago").val(0);
            }
            else{
                $("#select\\.fecha").removeClass("d-none");
            }
        });

        $("#btnRegistrar").on("click", function(){
            let validos = validateInput();

            let inputs = {
                nombre: $("#nombre").val(),
                rut: $("#rut").val(),
                fecha: $("#fecha").val(),
                rasonsocial: $("#razonsocial").val(),
                repleg: $("#repleg").val(),
                email: $("#email").val(),
                nacionalidad: $("#nacionalidad").val(),
                contrasena: $("#contrasena").val(),
                contrasenar: $("#contrasenar").val(),
                telefono: $("#telefono").val(),
                telefonodos: $("#telefonodos").val(),
                direccion: $("#direccion").val(),
                pais: $("#pais").val(),
                region: $("#region").val(),
                provincia: $("#provincia").val(),
                ciudad: $("#ciudad").val(),
                pago: $("#pago").val(),
                fechapago: $("#fechapago").val(),
                ncuenta: $("#ncuenta").val(),
                banco: $("#banco").val(),
                bancocuenta: $("#bancocuenta").val(),
                _token: $('input[name="_token"]').val()
            };
            if (validos == true){
                $.post("{{ route('registrar.proveedor.empresa') }}",inputs).done(function(data){
                    alert(data.respuesta);
                    alert("Su cuenta fue creada, validaremos sus datos a la brevedad para activar su cuenta");
                    location.href ="https://plataforma.sgrchile.com/";
                }).fail(function(data){
                    $.each( data.responseJSON, function( i, val ) {
                        alert(val);
                        if (i =="nombre" || i =="rut" || i =="fecha" || i =="razonsocial" || i =="repleg" || i =="email" || i =="contrasena" || i =="contrasenar"){
                            $('#collapseOne').collapse('show');
                        }
                        else if (i == "telefono" || i == "telefonodos"){
                            $('#collapseTwo').collapse('show');
                        }
                        else if (i == "direccion" || i == "pais" || i == "region" || i == "provincia" || i == "ciudad"){
                            $('#collapseThree').collapse('show');
                        }
                        else if(i == "pago" || i == "fechapago" || i == "ncuenta" || i == "banco" || i == "bancocuenta"){
                            $('#collapsefour').collapse('show');
                        }
                        $("#"+i).focus();
                        $("#"+i).addClass("is-invalid");
                    });
                });
            }
        });
    });

    function validateInput(){
        var respuesta = true;

        let inputs = {
            nombre: $("#nombre").val(),
            rut: $("#rut").val(),
            fecha: $("#fecha").val(),
            rasonsocial: $("#razonsocial").val(),
            repleg: $("#repleg").val(),
            email: $("#email").val(),
            nacionalidad: $("#nacionalidad").val(),
            contrasena: $("#contrasena").val(),
            contrasenar: $("#contrasenar").val(),
            telefono: $("#telefono").val(),
            telefonodos: $("#telefonodos").val(),
            direccion: $("#direccion").val(),
            pais: $("#pais").val(),
            region: $("#region").val(),
            provincia: $("#provincia").val(),
            ciudad: $("#ciudad").val(),
            pago: $("#pago").val(),
            fechapago: $("#fechapago").val(),
            ncuenta: $("#ncuenta").val(),
            banco: $("#banco").val(),
            bancocuenta: $("#bancocuenta").val(),
            _token: $('input[name="_token"]').val()
        };

        $.each( inputs, function( i, val ) {
            $("#"+i).removeClass("is-invalid");
        });

        $.each( inputs, function( i, val ) {
            let value = $.trim(val);

            if (value.length < 1 && i !== "telefonodos"){
                alert("Falta un campo obligatorio");
                if (i =="nombre" || i =="rut" || i =="fecha" || i =="razonsocial" || i =="repleg" || i =="email" || i =="nacionalidad" || i =="contrasena" || i =="contrasenar"){
                    $('#collapseOne').collapse('show');
                }
                else if (i == "telefono" || i == "telefonodos"){
                    $('#collapseTwo').collapse('show');
                }
                else if (i == "direccion" || i == "pais" || i == "region" || i == "provincia" || i == "ciudad"){
                    $('#collapseThree').collapse('show');
                }
                else if(i == "pago" || i == "fechapago" || i == "ncuenta" || i == "banco" || i == "bancocuenta"){
                    $('#collapsefour').collapse('show');
                }
                $("#"+i).focus();
                $("#"+i).addClass("is-invalid");
                respuesta = false;
                return false;
            }

            if (i == "rut"){
                let element = $("#"+i)
                element = element[0];
                if (checkRut(element) == false){
                    alert("RUT inválido");
                    $('#collapseOne').collapse('show');
                    $("#"+i).focus();
                    $("#"+i).addClass("is-invalid");
                    respuesta = false;
                    return false;
                }
            }

            if (i == "fecha"){
                let nacimiento = new Date($("#fecha").val()).getTime();
                let hoy = new Date().getTime();
            }

            if (i == "email"){
                if (validarEmail(value) == false){
                    alert("Email Inválido");
                    $('#collapseOne').collapse('show');
                    $("#"+i).focus();
                    $("#"+i).addClass("is-invalid");
                    respuesta = false;
                    return false;
                }
            }

            if (i == "contrasenar"){
                if (value !== $("#contrasena").val()){
                    alert("La contraseña no coincide con su repetición");
                    $('#collapseOne').collapse('show');
                    $("#"+i).focus();
                    $("#"+i).addClass("is-invalid");
                    respuesta = false;
                    return false;
                }
            }
        });
        return respuesta;
    }

    function checkRut(rut) {
        // Despejar Puntos
        var valor = rut.value.replace('.','');
        // Despejar Guión
        valor = valor.replace('-','');

        // Aislar Cuerpo y Dígito Verificador
        cuerpo = valor.slice(0,-1);
        dv = valor.slice(-1).toUpperCase();

        // Formatear RUN
        rut.value = cuerpo + '-'+ dv

        // Si no cumple con el mínimo ej. (n.nnn.nnn)
        if(cuerpo.length < 7) {
            return false;
        }

        // Calcular Dígito Verificador
        suma = 0;
        multiplo = 2;

        // Para cada dígito del Cuerpo
        for(i=1;i<=cuerpo.length;i++) {

            // Obtener su Producto con el Múltiplo Correspondiente
            index = multiplo * valor.charAt(cuerpo.length - i);

            // Sumar al Contador General
            suma = suma + index;

            // Consolidar Múltiplo dentro del rango [2,7]
            if(multiplo < 7) { multiplo = multiplo + 1; } else { multiplo = 2; }

        }

        // Calcular Dígito Verificador en base al Módulo 11
        dvEsperado = 11 - (suma % 11);

        // Casos Especiales (0 y K)
        dv = (dv == 'K')?10:dv;
        dv = (dv == 0)?11:dv;

        // Validar que el Cuerpo coincide con su Dígito Verificador
        if(dvEsperado != dv) {
            return false;
        }

        // Si todo sale bien, eliminar errores (decretar que es válido)
        return true;
    }

    function validarEmail(valor) {
        if (/^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i.test(valor)){
            return true;
        }
        return false;
    }
</script>
</body>
</html>