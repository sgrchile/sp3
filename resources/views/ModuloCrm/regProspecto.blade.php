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

                                    <td><a style="color: #9A0000">* </a> APELLIDO PATERNO:</td>
                                    <td>
                                        {{ Form::text('ape_pat',null,['class'=>'form-control','style'=>'width:175px', 'required', 'pattern'=>'[A-Za-z]{4-16}']) }}
                                    </td>
                                    <td><a style="color: #9A0000">* </a> APELLIDO MATERNO:</td>
                                    <td>
                                        {{ Form::text('ape_mat',null,['class'=>'form-control','style'=>'width:175px', 'required', 'pattern'=>'[A-Za-z]{4-16}']) }}
                                    </td>

                                </tr>
                                <tr>
                                    <td>DENOMINACION:</td>
                                    <td>
                                        {{ Form::text('denomin',null,['class'=>'form-control', 'required', 'pattern'=>'[A-Za-z]{4-16}','style'=>'width:175px']) }}
                                    </td>

                                    <td><a style="color: #9A0000">* </a> IDENTIFICADOR:</td>
                                    <td>
                                    {{ Form::text('rut',null,['class'=>'form-control', 'required', 'pattern'=>'[A-Za-z]{4-16}','maxlength'=>'11','style'=>'width:175px']) }}
                                    <!--<input type="text" id="rut" name="rut"  style="width:175px;" class="form-control" maxlength="10" required /><!--oninput="checkRut(this)"-->
                                    <!--<script src="{{asset('js/validarRUT.js')}}"></script>-->
                                    </td>
                                    <td><a style="color: #9A0000">* </a> TELEFONO:</td>
                                    <td>
                                        {{ Form::number('telefono',null,['class'=>'form-control','style'=>'width:175px']) }}
                                    </td>
                                </tr>
                                <tr>
                                    <td><a style="color: #9A0000">* </a> EMAIL:</td>
                                    <td>
                                        {{ Form::email('email', null,['class'=>'form-control','placeholder'=>'example@gmail.com','required','style'=>'width:175px']) }}
                                    </td>

                                    <td> TELEFONO 2:</td>
                                    <td>
                                        {{ Form::number('telefono2',null,['class'=>'form-control','style'=>'width:175px']) }}
                                    </td>
                                    <td> FECHA DE NACIMIENTO:</td>
                                    <td>
                                        {{ Form::date('fec_nac',null,['class'=>'form-control','style'=>'width:175px']) }}
                                    </td>

                                </tr>

                                <tr>
                                    <td>EMPRESA : </td>
                                    <td>
                                        {{ Form::text('emp',App\Empresa::pluck('EMP_DESC','EMP_ID'),null,
                                        ['class'=>'form-control','style'=>'width:175px']) }}
                                    </td>

                                    <td><a style="color: #9A0000">* </a> ACTIVIDAD COMERCIAL: </td>
                                    <td >
                                        {{ Form::text('actcomercial',null,['class'=>'form-control', 'required','style'=>'width:175px']) }}
                                    </td>

                                    <td>SITIO WEB: </td>
                                    <td >
                                        {{ Form::text('sitioweb',null,['class'=>'form-control', 'required','style'=>'width:175px']) }}
                                    </td>

                                </tr>

                                <tr>
                                    <td>GLOSA: </td>
                                    <td >
                                        {{ Form::text('glosa',null,['class'=>'form-control','class'=>'form-control', 'required','style'=>'width:175px']) }}
                                    </td>

                                    <td>RUBRO:</td>
                                    <td>
                                        {!! Form::select('rubro',$rubro,null,['class'=>'form-control','style'=>'width:175px']) !!}
                                    </td>

                                </tr>

                                <tr>

                                    <td>SUB RUBRO:</td>
                                    <td>
                                        {!! Form::select('subrubro',$subrubro,null ,['class'=>'form-control','style'=>'width:175px','placeholder'=>'Seleccione']) !!}
                                    </td>
                                    <td>ACTIVIDAD:</td>
                                    <td>
                                        {!! Form::select('actividad',$actividad,null ,['class'=>'form-control','id'=>'actividad','style'=>'width:175px']) !!}
                                    </td>

                                </tr>
                                <tr>

                                    <td>BANCO:</td>
                                    <td>
                                        {!! Form::select('banco',$banco,null,['class'=>'form-control','id'=>'banco','style'=>'width:175px']) !!}
                                    </td>

                                    <td>TIPO DE CUENTA:</td>
                                    <td>
                                        {!! Form::select('tipocuenta',$tipocuenta,null,['class'=>'form-control','id'=>'tipocuenta','style'=>'width:175px']) !!}
                                    </td>

                                </tr>

                                <tr>

                                    <td>Nº DE CUENTA: </td>
                                    <td >
                                        {{ Form::number('nrocuenta',null,['class'=>'form-control','required','style'=>'width:175px']) }}
                                    </td>

                                    <td>ORIGEN: </td>
                                    <td >
                                        {{ Form::text('origen',null,['class'=>'form-control', 'required','style'=>'width:175px']) }}
                                    </td>
                                </tr>


                                <tr>

                                    <td>PAIS:</td>
                                    <td>
                                        {!! Form::select('pais',$pais,null,['class'=>'form-control','id'=>'pais','style'=>'width:175px']) !!}
                                    </td>
                                    <td>REGION:</td>
                                    <td>
                                        {!! Form::select('region',$region,null,['class'=>'form-control','id'=>'region','style'=>'width:175px']) !!}
                                    </td>

                                </tr>

                                <tr>

                                    <td>PROVINCIA:</td>
                                    <td>
                                        {!! Form::select('provincia',$provincia,null,['class'=>'form-control','id'=>'provincia','style'=>'width:175px']) !!}
                                    </td>

                                    <td>CIUDAD:</td>
                                    <td>
                                        {!! Form::select('ciudad',$ciudad,null,['class'=>'form-control','id'=>'ciudad','style'=>'width:175px']) !!}
                                    </td>
                                </tr>
                                <tr>
                                    <td><a style="color: #9A0000">* </a> DIRECCION:</td>
                                    <td>
                                        {{ Form::text('direccion',null,['class'=>'form-control', 'required','style'=>'width:175px']) }}
                                    </td>
                                    <td><a style="color: #9A0000">* </a> TEMPERATURA:</td>
                                    <td>
                                        {{ Form::select('temperatura',App\Temperatura::pluck('desc_temp','id_temp'),['class'=>'form-control','style'=>'width:175px']) }}
                                    </td>
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
@endsection
