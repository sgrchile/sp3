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
                        <H1 class="text-center"><strong>ACTUALIZAR CLIENTE {!! $cliente->CLI_RUT !!}</strong></H1>
                    </div>
                    @if (session('status_cliente'))
                        <div class="alert alert-success">
                            {{ session('status_cliente') }}
                        </div>
                    @endif
                    <div class="porlets-content">
                        <!-- FORM INICIO -->

                        <form id="form1" name="form1" method="post" action="{{ route('update.cliente',[$cliente->CLI_RUT]) }}">
                            {{ csrf_field() }}
                            <table class="table-condensed text-right" align="center">
                                <tr>
                                    <td> RUT:</td>
                                    <td>
                                    {{ Form::text('rut',$cliente->CLI_RUT,['class'=>'form-control', 'required','readOnly', 'pattern'=>'[A-Za-z]{4-16}','maxlength'=>'11','style'=>'width:175px']) }}
                                    </td>
                                    <td><a style="color: #9A0000">* </a> NOMBRE:</td>
                                    <td>
                                        {{ Form::text('nombre',$cliente->CLI_NOMBRE,['class'=>'form-control','style'=>'width:175px', 'required', 'pattern'=>'[A-Za-z]{4-16}']) }}
                                    </td>

                                </tr>
                                <tr>
                                    <td>NOMBRE DE FANTASIA:</td>
                                    <td>
                                        {{ Form::text('nombref',$cliente->CLI_NOMBRE,['class'=>'form-control', 'required', 'pattern'=>'[A-Za-z]{4-16}','style'=>'width:175px']) }}
                                    </td>

                                    <td><a style="color: #9A0000">* </a> TELEFONO :</td>
                                    <td>
                                        {{ Form::text('telefono',$cliente->CLI_FONO,['class'=>'form-control','style'=>'width:175px']) }}
                                    </td>
                                </tr>
                                <tr>
                                    <td><a style="color: #9A0000">* </a> EMAIL:</td>
                                    <td>
                                        {{ Form::email('email', $cliente->CLI_EMAIL,['class'=>'form-control','required','style'=>'width:175px']) }}
                                    </td>

                                    <td> TELEFONO 2:</td>
                                    <td>
                                        {{ Form::text('telefono2',$cliente->CLI_FONO2,['class'=>'form-control','required','style'=>'width:175px']) }}
                                    </td>
                                </tr>
                                <tr>
                                    <td><a style="color: #9A0000">* </a> ACTIVIDAD COMERCIAL: </td>
                                    <td >
                                        {{ Form::text('actcomercial',$cliente->CLI_ACT_COMERCIAL,['class'=>'form-control', 'required','style'=>'width:175px']) }}
                                    </td>

                                    <td>SITIO WEB: </td>
                                    <td >
                                        {{ Form::text('sitioweb',$cliente->CLI_SITIO_WEB,['class'=>'form-control', 'required','style'=>'width:175px']) }}
                                    </td>
                                </tr>
                                <tr>
                                    <td>GLOSA: </td>
                                    <td >
                                        {{ Form::text('glosa',$cliente->CLI_GLOSA,['class'=>'form-control','class'=>'form-control', 'required','style'=>'width:175px']) }}
                                    </td>

                                    <td>RUBRO:</td>
                                    <td>
                                        {!! Form::select('rubro',App\Rubro::where('RUB_COD','=',$cliente->CLI_RUBRO)->pluck('RUB_DESC','RUB_COD'),['class'=>'form-control','style'=>'width:175px']) !!}
                                    </td>
                                </tr>
                                <tr>
                                    <td>SUB RUBRO:</td>
                                    <td>
                                        {!! Form::select('subrubro',App\SubRubro::where('SUB_RUB_COD','=',$cliente->CLI_SUB_RUBRO)->pluck('SUB_RUB_DESC','SUB_RUB_COD'),['class'=>'form-control','style'=>'width:175px']) !!}
                                    </td>
                                    <td>ACTIVIDAD:</td>
                                    <td>
                                        {!! Form::select('actividad',App\Actividad::where('ACT_COD_COD','=',$cliente->CLI_ACTIVIDAD)->pluck('ACT_DESC','ACT_COD_COD'),['class'=>'form-control','id'=>'actividad','style'=>'width:175px']) !!}
                                    </td>
                                </tr>
                                <tr>
                                    <td>BANCO:</td>
                                    <td>
                                        {!! Form::select('banco',App\Banco::where('BCO_ID','=',$cliente->CLI_BANCO)->pluck('BCO_DESC','BCO_ID'),['class'=>'form-control','id'=>'banco','style'=>'width:175px']) !!}
                                    </td>
                                    <td>TIPO DE CUENTA:</td>
                                    <td>
                                        {!! Form::select('tipocuenta',App\TipoCuenta::where('TCTA_BCO','=',$cliente->CLI_TCTA_BCO)->pluck('TCTA_DESC','TCTA_BCO'),['class'=>'form-control','id'=>'tipocuenta','style'=>'width:175px']) !!}
                                    </td>
                                </tr>
                                <tr>
                                    <td>Nº DE CUENTA: </td>
                                    <td >
                                        {{ Form::number('nrocuenta',$cliente->CLI_NRO_CTA,['class'=>'form-control','required','style'=>'width:175px']) }}
                                    </td>
                                    <td>ORIGEN: </td>
                                    <td >
                                        {{ Form::text('origen',$cliente->CLI_ORIGEN,['class'=>'form-control', 'required','style'=>'width:175px']) }}
                                    </td>
                                </tr>
                                <tr>
                                    <td>PAIS:</td>
                                    <td>
                                        {!! Form::select('pais',App\Pais::where('PAI_COD','=',$cliente->CLI_PAIS)->pluck('PAI_DESC','PAI_COD'),['class'=>'form-control','id'=>'pais','style'=>'width:175px']) !!}
                                    </td>
                                    <td>REGION:</td>
                                    <td>
                                        {!! Form::select('region',App\Region::where('REG_COD','=',$cliente->CLI_REGION)->pluck('REG_DESC','REG_COD'),['class'=>'form-control','id'=>'region','style'=>'width:175px']) !!}
                                    </td>
                                </tr>
                                <tr>
                                    <td>PROVINCIA:</td>
                                    <td>
                                        {!! Form::select('provincia',App\Provincia::where('PV_COD','=',$cliente->CLI_PROVINCIA)->pluck('PV_DESC','PV_COD'),['class'=>'form-control','id'=>'provincia','style'=>'width:175px']) !!}
                                    </td>
                                    <td>CIUDAD:</td>
                                    <td>
                                        {!! Form::select('ciudad',App\Ciudad::where('CIU_COD','=',$cliente->CLI_CIUDAD)->pluck('CIU_DESC','CIU_COD'),['class'=>'form-control','id'=>'ciudad','style'=>'width:175px']) !!}
                                    </td>
                                </tr>
                                <tr>
                                    <td><a style="color: #9A0000">* </a> DIRECCION:</td>
                                    <td>
                                        {{ Form::text('direccion',$cliente->CLI_DIRECCION,['class'=>'form-control', 'required','style'=>'width:175px']) }}
                                    </td>
                                </tr>
                            </table>
                            <button class="btn btn-primary btn-lg">GUARDAR</button>
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
