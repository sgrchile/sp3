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
                        <H1 class="text-center"><strong>REGISTRO DE PROSPECTO </strong></H1>
                    </div>
                    <div class="alert alert-info" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <strong><i>La sección a la que usted acaba de ingresar, se encuentra en etapa de programación. Disculpe las molestias</i></strong>
                    </div>
                    <div class="porlets-content">
                        <!-- FORM INICIO -->

                        <form id="form1" name="form1" method="post" action="{{ route('post.prospecto') }}">
                            {{ csrf_field() }}
                            <table class="table-condensed text-right" align="center">
                                <tr>
                                    <td><a style="color: #9A0000">* </a> NOMBRE:</td>
                                    <td>
                                        {{ Form::text('nombre',null,['class'=>'form-control','style'=>'width:175px', 'required', 'pattern'=>'[A-Za-z]{4-16}']) }}
                                    </td>

                                    <td> APELLIDO PATERNO:</td>
                                    <td>
                                        {{ Form::text('ape_pat',null,['class'=>'form-control','style'=>'width:175px', 'pattern'=>'[A-Za-z]{4-16}']) }}
                                    </td>
                                    <td> APELLIDO MATERNO:</td>
                                    <td>
                                        {{ Form::text('ape_mat',null,['class'=>'form-control','style'=>'width:175px', 'pattern'=>'[A-Za-z]{4-16}']) }}
                                    </td>

                                </tr>
                                <tr>
                                    <td>DENOMINACION:</td>
                                    <td>
                                        {{ Form::text('denomin',null,['class'=>'form-control', 'pattern'=>'[A-Za-z]{4-16}','style'=>'width:175px']) }}
                                    </td>

                                    <td><a style="color: #9A0000">* </a> IDENTIFICADOR:</td>
                                    <td>
                                    {{ Form::text('rut',null,['class'=>'form-control', 'required', 'pattern'=>'[A-Za-z]{4-16}','maxlength'=>'11','style'=>'width:175px']) }}
                                    <!--<input type="text" id="rut" name="rut"  style="width:175px;" class="form-control" maxlength="10" required /><!--oninput="checkRut(this)"-->
                                    <!--<script src="{{asset('js/validarRUT.js')}}"></script>-->
                                    </td>
                                    <td><a style="color: #9A0000">* </a> TELEFONO:</td>
                                    <td>
                                        {{ Form::number('telefono',null,['class'=>'form-control','style'=>'width:175px','required']) }}
                                    </td>
                                </tr>
                                <tr>
                                    <td><a style="color: #9A0000">* </a> EMAIL:</td>
                                    <td>
                                        {{ Form::email('email', null,['class'=>'form-control','placeholder'=>'example@gmail.com','required','style'=>'width:175px']) }}
                                    </td>

                                    <td><a style="color: #9A0000">* </a> TELEFONO 2:</td>
                                    <td>
                                        {{ Form::number('telefono2',null,['class'=>'form-control','required','style'=>'width:175px']) }}
                                    </td>
                                    <td> FECHA DE NACIMIENTO:</td>
                                    <td>
                                        {{ Form::date('fec_nac',null,['class'=>'form-control','style'=>'width:175px']) }}
                                    </td>

                                </tr>

                                <tr>
                                    <td>EMPRESA : </td>
                                    <td>
                                        {{ Form::text('emp',null,
                                        ['class'=>'form-control','style'=>'width:175px']) }}
                                    </td>
                                    <td> SITIO WEB: </td>
                                    <td >
                                        {{ Form::text('sitioweb',null,['class'=>'form-control','style'=>'width:175px']) }}
                                    </td>
                                    <td> CARGO : </td>
                                    <td >
                                        {{ Form::select('cargo',$cargos,null,['class'=>'form-control','style'=>'width:175px']) }}
                                    </td>

                                </tr>

                                <tr>
                                    <td>RUBRO:</td>
                                    <td>
                                        <select name="rubro"  class="form-control" id="rubro" STYLE="width: 175px;">
                                            <option value="">Seleccione</option>
                                            @foreach($rubro as $rub)
                                                <option value="{{ $rub->RUB_COD }}">{{ $rub->RUB_DESC }}</option>
                                            @endforeach
                                        </select>
                                    </td>
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
                                    <td>ZIP:</td>
                                    <td >
                                        {{ Form::text('zip',null,['class'=>'form-control','style'=>'width:175px']) }}
                                    </td>
                                    <td>CASILLA : </td>
                                    <td >
                                        {{ Form::text('casilla',null,['class'=>'form-control','class'=>'form-control','style'=>'width:175px']) }}
                                    </td>
                                    <td><a style="color: #9A0000">* </a> DIRECCION:</td>
                                    <td>
                                        {{ Form::text('direccion',null,['class'=>'form-control', 'required','style'=>'width:175px']) }}
                                    </td>
                                </tr>
                                <tr>
                                    <td>AREA :</td>
                                    <td>
                                        <select name="area"  class="form-control" id="area">
                                            <option value="">Seleccione</option>
                                            @foreach($area as $proc)
                                                <option value="{{ $proc->ID_AREA }}">{{ $proc->DESC_AREA }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>SERVICIO REQUERIDO :</td>
                                    <td>
                                        <select name="serv_req"  class="form-control" id="serv_req" >
                                            <option value="">Seleccione</option>
                                        </select>
                                    </td>
                                    <td>COMO SUPO DE NOSOTROS? :</td>
                                    <td>
                                        {!! Form::select('procedencia',App\Procedencia::pluck('DESC_PROCEDENCIA','ID_PROCEDENCIA'),null,
                                        ['class'=>'form-control','id'=>'procedencia','style'=>'width:175px','placeholder'=>'Seleccione']) !!}
                                    </td>
                                </tr>
                                <tr>
                                    <td>CATEGORIA :</td>
                                    <td>
                                        {!! Form::select('categoria',$categoria,null,['class'=>'form-control','id'=>'categoria','style'=>'width:175px']) !!}
                                    </td>
                                    <td>URGENCIA : </td>
                                    <td >
                                        {{ Form::text('urgencia',null,['class'=>'form-control','style'=>'width:175px']) }}
                                    </td>
                                    <td> TEMPERATURA:</td>
                                    <td>
                                        {{ Form::select('temperatura',App\Temperatura::pluck('desc_temp','id_temp'),null,['class'=>'form-control','style'=>'width:175px']) }}
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
                                    <td>PROVINCIA:</td>
                                    <td>
                                        <select name="provincia"  class="form-control" id="provincia">
                                            <option value="">Seleccione</option>
                                        </select>
                                    </td>
                                </tr>

                                <tr>
                                    <td>CIUDAD:</td>
                                    <td>
                                        <select name="ciudad"  class="form-control" id="ciudad">
                                            <option value="">Seleccione</option>
                                        </select>
                                    </td>
                                    <!--<td>RUT COTIZACION :</td>
                                    <td>
                                        {!! Form::text('rut_cot',null,['class'=>'form-control','id'=>'rut_cot','style'=>'width:175px']) !!}
                                    </td>-->
                                    <td>COMENTARIOS :</td>
                                    <td>
                                        {!! Form::text('comentario',null,['class'=>'form-control','id'=>'comentario','style'=>'width:175px']) !!}
                                    </td>
                                </tr>
                                <tr>


                                </tr>

                            </table>
                            <button class="btn btn-primary btn-lg">REGISTRAR</button>
                        </form>


                        <!-- FORM FINAL -->

                    </div><!--/porlets-content-->
                </div><!--/block-web-->
            </div><!--/col-md-12-->
        </div><!--/row-->
    </div>
    <br>
    <div class="container">  <a href="{{ route('CRM') }}"><button class="btn btn-primary btn-lg">Volver</button></a></div>

    <script  type='text/javascript'>
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
        $(document).ready(function(){
            $("#area").on("change", function(){
                let serv_req = $(this).val();
                $("#serv_req").empty();
                $.get("https://plataforma.sgrchile.com/api/area/" + serv_req).done(function(data){
                    if (data !== null){
                        if (Object.keys(data).length > 0 ){
                            $.each(data, function( index, value ){
                                let option = "<option value='"+ value.ID_AREA_SERV + "'>" + value.DESC_AREA_SERV+ "</option>";
                                $("#serv_req").append(option);
                            });
                            $("#serv_req").trigger("change");
                        }
                    }
                });
            });

        });
    </script>
@endsection
