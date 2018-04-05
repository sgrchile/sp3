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
                    <H1 class="text-center"><strong>CONVERTIR EN CLIENTE </strong></H1>
                </div>
                <div>
                    @if (session('status_cliente'))
                        <div class="alert alert-warning">
                            {{ session('status_cliente') }}
                        </div>
                    @endif
                </div>
                <div class="porlets-content">
                    <!-- FORM INICIO -->

                    <form id="form1" name="form1" method="post" action="{{ route('convertir',$cliente->CLI_RUT) }}">
                        {{ csrf_field() }}
                        <table class="table-condensed text-right" align="center">
                            <tr>
                                <td><a style="color: #9A0000">* </a> NOMBRE:</td>
                                <td>
                                    {{ Form::text('nombre',$cliente->CLI_NOMBRE,['class'=>'form-control','style'=>'width:175px', 'required', 'pattern'=>'[A-Za-z]{4-16}']) }}
                                </td>

                            </tr>
                            <tr>

                                <td><a style="color: #9A0000">* </a> RUT:</td>
                                <td>
                                    {{ Form::text('rut',$cliente->CLI_RUT,['class'=>'form-control', 'required', 'pattern'=>'[A-Za-z]{4-16}','maxlength'=>'11','style'=>'width:175px','oninput'=>"checkRut(this)"]) }}
                                    <!--<input type="text" id="rut" name="rut"  style="width:175px;" class="form-control" maxlength="10" required /><!--oninput="checkRut(this)"-->
                                    <script src="{{asset('js/validarRUT.js')}}"></script>
                                </td>
                            </tr>
                            <tr>
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
                            </tr>
                            <tr>
                                <td>ACTIVIDAD:</td>
                                <td>
                                    {!! Form::select('actividad',App\Actividad::where('ACT_COD_COD','=',$cliente->CLI_ACTIVIDAD)->pluck('ACT_DESC','ACT_COD_COD'),['class'=>'form-control','id'=>'actividad','style'=>'width:175px']) !!}
                                </td>
                            </tr>
                        </table>
                        <button class="btn btn-primary btn-lg">COMVERTIR</button>
                    </form>
                    <!-- FORM FINAL -->
                </div><!--/porlets-content-->
            </div><!--/block-web-->
        </div><!--/col-md-12-->
    </div><!--/row-->
</div>
<br>
<div class="container">  <a href="{{ route('CRM') }}"><button class="btn btn-primary btn-lg">Volver a CRM</button></a></div>
@endsection
