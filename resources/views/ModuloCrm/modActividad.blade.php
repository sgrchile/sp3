@extends('layouts.app')
@section('content')
    <div class="container" align="center">
        <div class="row">
            <div class="col-xs-12 col-md-12 col-sm-12">
                <div class="block-web">
                    <div class="header">
                        <div class="actions"></div>
                        <H1 class="text-center"><strong>MODIFICAR ACTIVIDAD </strong></H1>
                    </div>
                    <div class="porlets-content">
                        <!-- FORM INICIO -->

                        <form id="form1" name="form1" method="post" action="{{ route('path.actividad') }}">
                            {{ csrf_field() }}
                            <table class="table-condensed text-right" align="center">

                                <tr>
                                    <td>CLIENTE:</td>
                                    <td>
                                        {{ Form::select('cliente',App\Cliente::all()->where('CLI_EMP','=',Auth::user()->PRO_EMP)->pluck('CLI_NOMBRE','CLI_RUT'),null,
                                        ['class'=>'form-control','style'=>'width:175px','placeholder'=>'Seleccione']) }}
                                    </td>
                                    <td>ACTIVIDAD</td>
                                    <td>
                                        {{ Form::select('tp_act',App\TpActividad::pluck('DESC_TP_ACTIVIDAD','ID_TP_ACTIVIDAD'),null,
                                        ['class'=>'form-control','style'=>'width:175px','placeholder'=>'Seleccione']) }}
                                    </td>

                                </tr>
                                <tr>
                                    <td>FECHA:</td>
                                    <td>
                                    {{ Form::date('fecha', \Carbon\Carbon::now(),['class'=>'form-control','style'=>'width:175px']) }}
                                    <!--<input type="date"  style="width:175px;" class="form-control" required="required"/>-->
                                    </td>
                                    <td>DESCRIPCION:</td>
                                    <td>
                                        <textarea id="descripcion" name="descripcion" class="form-control" style=" width:175px; max-width:175px; max-height:175px;" required></textarea>
                                    </td>
                                </tr>
                                </tr>
                                <tr>
                                    <td>HORA:</td>
                                    <td>
                                    {{ Form::time('hora', \Carbon\Carbon::now(),['class'=>'form-control','style'=>'width:175px']) }}
                                    <!-- <input type="text"  style="width:175px;" class="form-control"required="required"/>-->
                                    </td>
                                    <td>PRIORIDAD</td>
                                    <td>
                                        {{ Form::select('prioridad', App\Prioridad::pluck('DESC_PRORIDAD','ID_PRIORIDAD'),null,
                                        ['class'=>'form-control','style'=>'width:175px','placeholder'=>'Seleccione']) }}
                                    </td>
                                </tr>

                            </table>
                            <button class="btn btn-primary btn-lg">CREAR</button>
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