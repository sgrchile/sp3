@extends('layouts.app')
@section('content')

    {!! Html::script('js/jquery-2.1.1.min.js') !!}
    {!! Html::script('js/dropdown.js') !!}

    <div align="center">
        <div class="row">
            <div class="col-xs-12 col-md-12 col-sm-12">
                <div class="block-web">
                    <div class="header">
                        <div class="actions"></div>
                        <H1 class="text-center"><strong>COMVERTIR EN CLIENTE A {!! $cliente->CLI_NOMBRE !!} </strong></H1>
                    </div>
                    <div class="porlets-content">
                        <!-- FORM INICIO -->

                        <form id="form1" name="form1" method="post" action="{{ route('convertir') }}">
                            {{ csrf_field() }}
                            <table class="table-condensed text-right" align="center">
                                <tr>
                                    <td><a style="color: #9A0000">* </a> NOMBRE:</td>
                                    <td>
                                        {{ Form::text('nombre',$cliente->CLI_NOMBRE,['class'=>'form-control','style'=>'width:175px', 'required']) }}
                                    </td>

                                    <td>NOMBRE DE FANTASIA:</td>
                                    <td>
                                        {{ Form::text('nombref',$cliente->CLI_NOM_FANT,['class'=>'form-control','style'=>'width:175px']) }}
                                    </td>
                                </tr>
                                <tr>
                                    <td><a style="color: #9A0000">* </a> RUT:</td>
                                    <td>
                                    <!--{{ Form::text('rut',$cliente->CLI_RUT_COTIZ,['class'=>'form-control', 'required','maxlength'=>'11','style'=>'width:175px']) }}-->
                                        <input type="text" id="rut" name="rut"  style="width:175px;" class="form-control" maxlength="11" required oninput="checkRut(this)"/>
                                        <script src="{{asset('js/validarRUT.js')}}"></script>
                                    </td>
                                    <td><a style="color: #9A0000">* </a> TELEFONO:</td>
                                    <td>
                                        {{ Form::number('telefono',$cliente->CLI_FONO,['class'=>'form-control','style'=>'width:175px']) }}
                                    </td>
                                </tr>
                                <tr>
                                    <td><a style="color: #9A0000">* </a> EMAIL:</td>
                                    <td>
                                        {{ Form::email('email', $cliente->CLI_EMAIL,['class'=>'form-control','placeholder'=>'example@gmail.com','required','style'=>'width:175px']) }}
                                    </td>

                                    <td> TELEFONO 2:</td>
                                    <td>
                                        {{ Form::number('telefono2',$cliente->CLI_FONO2,['class'=>'form-control','style'=>'width:175px']) }}
                                    </td>

                                </tr>

                                <tr>

                                    <td><a style="color: #9A0000">* </a> ACTIVIDAD COMERCIAL: </td>
                                    <td >
                                        {{ Form::text('actcomercial',$cliente->CLI_ACT_COMERCIAL,['class'=>'form-control', 'required','style'=>'width:175px']) }}
                                    </td>

                                    <td>SITIO WEB: </td>
                                    <td >
                                        {{ Form::text('sitioweb',$cliente->CLI_SITIO_WEB,['class'=>'form-control','style'=>'width:175px']) }}
                                    </td>

                                </tr>

                                <tr>
                                    <td>CUMPLEAÑOS: </td>
                                    <td >
                                        {{ Form::date('cumpleaños',Carbon\Carbon::now(),['class'=>'form-control','style'=>'width:175px']) }}
                                    </td>

                                    <td>RUBRO:</td>
                                    <td>
                                        <select name="rubro" class="form-control"  id="rubro" STYLE="width: 175px;">
                                            <option value="">Seleccione</option>
                                            @foreach($rubro as $rub)
                                                <option value="{{ $rub->RUB_COD }}">{{ $rub->RUB_DESC }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                </tr>

                                <tr>

                                    <td>SUB RUBRO:</td>
                                    <td>
                                        <select name="subrubro"  class="form-control" style="width:175px;" id="subrubro">
                                            <option value="">Seleccione</option>
                                        </select>
                                    </td>
                                    <td>ACTIVIDAD:</td>
                                    <td>
                                        <select name="actividad"  class="form-control" style="width:175px;" id="actividad">
                                            <option value="">Seleccione</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>PAIS:</td>
                                    <td>
                                        <select name="pais"  class="form-control" id="pais">
                                            <option value="">Seleccione</option>
                                            @foreach($pais as $pai)
                                                <option value="{{ $pai->PAI_COD }}">{{ $pai->PAI_DESC }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>REGION:</td>
                                    <td>
                                        <select name="region"  class="form-control" id="region">
                                            <option value="">Seleccione</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>PROVINCIA:</td>
                                    <td>
                                        <select name="provincia"  class="form-control" id="provincia">
                                            <option value="">Seleccione</option>
                                        </select>
                                    </td>

                                    <td>CIUDAD:</td>
                                    <td>
                                        <select name="ciudad"  class="form-control" id="ciudad">
                                            <option value="">Seleccione</option>
                                        </select>
                                    </td>
                                </tr>
                                <input  style="visibility:hidden" name="idprosp" value="{{ $cliente->CLI_PROSP_ID }}" class="form-control">
                                <input  style="visibility:hidden" name="emp" value="{{ $cliente->CLI_ID_EMP }}" class="form-control">
                                <tr>
                                    <td><a style="color: #9A0000">* </a> DIRECCION:</td>
                                    <td>
                                        {{ Form::text('direccion',$cliente->CLI_DIRECCION,['class'=>'form-control','style'=>'width:175px']) }}
                                    </td>
                                    <td>PROPIETARIO</td>
                                    <td>
                                        {{ Form::text('prop',$cliente->CLI_PROPIETARIO,['class'=>'form-control','style'=>'width:175px','readonly']) }}
                                    </td>
                                </tr>


                            </table>
                            <button onclick="return confirm('¿Esta seguro que desea comvertir a cliente?')" class="btn btn-primary btn-lg">REGISTRAR</button>
                        </form>


                        <!-- FORM FINAL -->

                    </div><!--/porlets-content-->
                </div><!--/block-web-->
            </div><!--/col-md-12-->
        </div><!--/row-->
    </div>
    <br>
    <div class="container">  <a href="{{ route('CRM') }}"><button class="btn btn-primary btn-lg">Volver</button></a></div>

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
@endsection
