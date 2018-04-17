@extends('layouts.app')
@section('content')

    <div class="row">
        <div class="col-xs-12 col-md-12 col-sm-12">
            <div class="block-web">
                <div class="header">
                    <div class="actions"></div>
                </div>
                <div class="porlets-content">
                    <!-- FORM INICIO -->

                    <h3 class="text-center">ASIENTO CONTABLES</h3>

                    <table class="table-condensed text-right" align="center">
                        <tr>
                            <td>USUARIO:</td>
                            <td>
                                <input type="text" value="{!! $asiento->ID_USUARIO_ASIENTO !!}" class="form-control" style="width:175px;" readonly>
                            </td>

                        </tr>
                        <tr>
                            <td>TIPO DE MOVIMIENTO:</td>
                            <td>
                                {{ Form::text('tp_movimiento',$asiento->TP_MOVIMIENTO,['class'=>'form-control', 'style'=>'width:175px;','readonly']) }}
                            </td>
                        </tr>
                        <tr>
                            <td>FECHA CONTABLE</td>
                            <td>
                                {{ Form::date('fecasiento',$asiento->FECHA_CONT,['class'=>'form-control','readonly']) }}
                            </td>
                        </tr>

                        <tr>
                            <td>COMENTARIO</td>
                            <td> <textarea id="comentario" name="comentario" class="form-control" style=" width:175px; max-width:175px; max-height:175px;" readonly>{!! $asiento->COMENT_ASIENT !!}</textarea></td>
                        </tr>

                    </table>

                    <table class="table table-bordered" id="mytable">

                        <tr>
                            <td>CUENTA</td>
                            <td>DEBE</td>
                            <td>HABER</td>
                        </tr>

                        @foreach($ctasiento as $cta)
                        <tr>
                            <td>
                                {!! App\CuentaContable::find($cta->ID_CTA_CONT)->NOM_CTA_CONT !!}
                            </td>
                            <td>
                                {!! $cta->ASIENTO_DEBE !!}
                            </td>
                            <td>
                                {!! $cta->ASIENTO_HABER !!}
                            </td>

                        </tr>
                        @endforeach
                    </table>

                    <table class="table table-bordered" id="mytableresult">
                        <tr>

                            <td>
                                {{ Form::label('total','TOTAL',['id'=>'total','class'=>'form-control','style'=>'width:175px']) }}
                            </td>
                            <td>
                                {!! $asiento->TOTAL_DEBE !!}
                            </td>
                            <td>
                                {!! $asiento->TOTAL_HABER !!}
                            </td>

                        </tr>

                    </table>

                <!-- FORM FINAL -->
                </div><!--/porlets-content-->
            </div><!--/block-web-->
        </div><!--/col-md-12-->
    </div><!--/row-->
    </div>
    <br>


    <div class="container">
        <a href="{{route('AsientosContables')}}"><button class="btn btn-primary btn-lg">Volver</button></a>

    </div>
    </a>
    <br>

@endsection
