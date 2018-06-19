@extends('layouts.app')
@section('content')

    {!! Html::script('js/jquery-2.1.1.min.js') !!}
    {!! Html::script('js/dropdown.js') !!}

<div class="row">
  <div class="col-xs-12 col-md-12 col-sm-12">
    <div class="block-web">
      <div class="header">
        <div class="actions"></div>
        <h1 class="content-header" align="center"><b>REGISTRO PERSONA PROVEEDOR</b></h1>
      </div>
      <div class="porlets-content">
        <!-- FORM INICIO -->
        <form class="form-horizontal" method="post" action="{{ route('post.registrar.prooveedor.persona') }}">
          {{ csrf_field() }}
        <div class="form-group">
        <table class="table-condensed text-right" align="center" style="text-align:right;" >
          <table class="table-condensed text-right" align="center" >

          <tr>
          <td>NOMBRE:</td>
              <td>
                  {{ Form::text('nombre',null,['class'=>'form-control','required','style'=>'width:175px']) }}
              </td>

          <td>APELLIDO PATERNO:</td>
              <td>
                  {{ Form::text('apellido_paterno',null,['class'=>'form-control','required','style'=>'width:175px']) }}
              </td>
          <td>APELLIDO MATERNO:</td>
              <td>
                  {{ Form::text('apellido_materno',null,['class'=>'form-control','style'=>'width:175px']) }}
              </td>

        </tr>
        <tr>
            <td>RUT:</td>
            <td>
                <input type="text" id="rut" name="rut"  style="width:175px;" class="form-control" maxlength="11" required oninput="checkRut(this)"/>
                <script src="{{asset('js/validarRUT.js')}}"></script>
            </td>


            <td>FECHA DE NAC.:</td>
            <td>
                {{ Form::date('fecha_nacimiento', \Carbon\Carbon::now()->format('d-m-Y'),['class'=>'form-control form-control-inline input-medium default-date-picker'
              ,'style'=>'width:175px']) }}
            </td>

            <td>CELULAR:</td>
            <td>
                {{ Form::number('celular',null,['class'=>'form-control','required','style'=>'width:175px']) }}
            </td>
          </tr>
          <tr>

            <td>FONO EMERGENCIA:</td>
              <td>
                  {{ Form::number('celular_dos',null,['class'=>'form-control','style'=>'width:175px']) }}
              </td>

            <td>REFERENCIA:</td>
              <td>
                  {{ Form::text('referencia',null,['class'=>'form-control','style'=>'width:175px']) }}
              </td>
            <td>EMAIL:</td>
              <td>
                  {{ Form::email('email',null,['class'=>'form-control','required','style'=>'width:175px','placeholder'=>'example@gmail.com']) }}
              </td>

        </tr>
        <tr>
            <td>NACIONALIDAD:</td>
            <td>
              <select style="width:175px;" class="form-control" name="nacionalidad">
                <option>Seleccionar</option>
                <option value="1">Chilena</option>
                <option value="2">Extranjera</option>
              </select>
            </td>

            <td>GENERO:</td>
            <td>
              <select style="width:175px;" class="form-control" name="sexo">
                <option>Seleccionar</option>
                <option value="1">HOMBRE</option>
                <option value="2">MUJER</option>
              </select>
            </td>

            <td>DIRECCION:</td>
            <td>
                {{ Form::text('direccion',null,['class'=>'form-control','required','style'=>'width:175px']) }}
            </td>
        </tr>
        <tr>
            <td>PAIS:</td>
            <td>
                <select style="width:175px;" name="pais" class="form-control" id="pais">
                    <option value="">Seleccione</option>
                    @foreach($pais as $pai)
                        <option value="{{ $pai->PAI_COD }}">{{ $pai->PAI_DESC }}</option>
                    @endforeach
                </select>
            </td>
            <td>REGION:</td>
            <td>
                <select style="width:175px;" name="region" class="form-control" id="region">
                    <option value="">Seleccione</option>
                </select>
            </td>
            <td>PROVINCIA:</td>
            <td>
                <select style="width:175px;" name="provincia" class="form-control" id="provincia">
                    <option value="">Seleccione</option>
                </select>
            </td>
        </tr>
         <tr>
            <td>CIUDAD:</td>
             <td>
                 <select style="width:175px;" name="ciudad" class="form-control" id="ciudad">
                     <option value="">Seleccione</option>
                 </select>
             </td>
          <td>FORMA DE PAGO:</td>
          <td>
            <select style="width:175px;" class="form-control" name="fecha_pago">
            <option>Seleccionar</option>
            <option value="Quincena">Quincena</option>
            <option value="Fin de mes">Fin de mes</option>
            </select>
          </td>
          <td>RUBRO</td>
             <td>
                 <select name="rubro" class="form-control" id="rubro" STYLE="width: 175px;">
                     <option value="">Seleccione</option>
                     @foreach($rubro as $rub)
                         <option value="{{ $rub->RUB_COD }}">{{ $rub->RUB_DESC }}</option>
                     @endforeach
                 </select>
             </td>
         </tr>
         <tr>
          <td>SUB-RUBRO</td>
             <td>
                 <select name="subrubro" class="form-control" style="width:175px;" id="subrubro">
                     <option value="">Seleccione</option>
                 </select>
             </td>
             <td>ACTIVIDAD:</td>
             <td>
                 <select name="actividad" class="form-control" style="width:175px;" id="actividad">
                     <option value="">Seleccione</option>
                 </select>
             </td>
          <td>Nº CUENTA:</td>
          <td><input type="text" class="form-control" name="nro_cuenta"  style="width:175px;"></td>

         </tr>
         <tr>
             <td>BANCO:</td>
             <td>
                 <select style="width:175px;" class="form-control" name="banco">
                     <option>Seleccionar</option>
                     @foreach($bancos as $banco)
                         <option value="{{ $banco->BCO_ID }}">{{ $banco->BCO_DESC }}</option>
                     @endforeach
                 </select>
             </td>
            <td>TIPO DE CUENTA:</td>
            <td>
              <select style="width:175px;" class="form-control" name="tipo_cuenta">
                <option>Seleccionar</option>
                @foreach($tipo_cuentas as $tipo_cuenta)
                  <option value="{{ $tipo_cuenta->TCTA_BCO }}">{{ $tipo_cuenta->TCTA_DESC }}</option>
                @endforeach
              </select>
            </td>
            <td>SITIO WEB:</td>
            <td>
                <input type="url" name="sitio_web" class="form-control">
            </td>
         </tr>
         <tr>
              <td>EMPRESA:</td>
              <td>
                  <select class="form-control" required name="empresa">
                      <option>Seleccionar</option>
                      @foreach ($empresas as $empresa)
                          <option value="{{ $empresa->EMP_ID }}">{{ $empresa->EMP_DESC }}</option>
                      @endforeach
                  </select>
              </td>
             <td>FACEBOOK (URL):</td>
             <td>
                 <input type="text" name="facebook" class="form-control">
             </td>
          </tr>
        </table>
        </div>
        <center><button type="submit" class="btn btn-primary btn-lg">REGISTRAR</button></center>
        </form>

        <br>
        <div class="container">  <a href="{{route('PROV')}}"><button class="btn btn-primary btn-lg">Volver</button></a></div>


        <!-- FORM FINAL -->

      </div><!--/porlets-content-->
    </div><!--/block-web-->
  </div><!--/col-md-12-->
</div><!--/row-->


<script>
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

    $("#rubro").on("change", function(){
        let rubro = $(this).val();
        $("#subrubro").empty();
        $.get("https://plataforma.sgrchile.com/api/subrubro/" + rubro).done(function(data){
            if (data !== null){
                if (Object.keys(data).length > 0 ){
                    $.each(data, function( index, value ){
                        let option = "<option value='"+ value.SUB_RUB_COD + "'>" + value.SUB_RUB_DESC+ "</option>";
                        $("#subrubro").append(option);
                    });
                    $("#subrubro").trigger("change");
                }
            }
        });
    });

    $("#subrubro").on("change", function(){
        let subrubro = $(this).val();
        $("#actividad").empty();
        $.get("https://plataforma.sgrchile.com/api/actividad/" + subrubro).done(function(data){
            if (data !== null){
                if (Object.keys(data).length > 0 ){
                    $.each(data, function( index, value ){
                        let option = "<option value='"+ value.ACT_COD_COD + "'>" + value.ACT_DESC+ "</option>";
                        $("#actividad").append(option);
                    });
                    $("#actividad").trigger("change");
                }
            }
        });
    });
</script>
<br>
<br>





@endsection
