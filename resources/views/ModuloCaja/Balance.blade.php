@extends('layouts.app')
@section('content')

    <div class="row">
        <div class="col-xs-12 col-md-12 col-sm-12">
            <div class="block-web">
                <div class="header">
                    <div class="actions"></div>
                    <h1 class="text-center text-uppercase">BALANCE GENERAL TRIBUTARIO</h1>
                </div>

                <div class="porlets-content">

                    <table class="table-condensed text-right" align="center">
                        <tr>
                            <td>
                                {{Form::label('nombre',$emp->EMP_DESC,['id'=>'nombre','class'=>'form-control','style'=>'width:175px'])}}
                            </td>
                            <td>
                                {{Form::label('rut',$emp->RUT_EMP,['id'=>'rut','class'=>'form-control','style'=>'width:175px'])}}
                            </td>
                            <td>
                                {{Form::label('rlegal',$emp->REP_LEG_EMP,['id'=>'rlegal','class'=>'form-control','style'=>'width:175px'])}}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                {{Form::label('direccion',$emp->DIREC_EMP,['id'=>'direccion','class'=>'form-control','style'=>'width:175px'])}}
                            </td>
                            <td>
                                {{Form::label('ciudad',App\Ciudad::find($emp->CIUDAD_EMP)->CIU_DESC,['id'=>'ciudad','class'=>'form-control','style'=>'width:175px'])}}
                            </td>
                            <td>
                                {{Form::label('comuna',App\Provincia::find($emp->COMUNA_EMP)->PV_DESC,['id'=>'comuna','class'=>'form-control','style'=>'width:175px'])}}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                {{Form::label('giro','Giro',['id'=>'giro','class'=>'form-control','style'=>'width:175px'])}}
                            </td>
                            <td>
                                {{Form::label('codac',$emp->COD_AC_EMP,['id'=>'codac','class'=>'form-control','style'=>'width:175px'])}}
                            </td>
                        </tr>
                    </table>
                    <table class="table table-bordered" id="mytable" align="center">
                        <tr align="center">
                            <th rowspan="2">ID</th>
                            <th rowspan="2">CUENTAS</th>
                            <th colspan="2">SUMAS</th>
                            <th colspan="2">SALDOS</th>
                            <th colspan="2">INVENTARIO</th>
                            <th colspan="2">RESULTADOS</th>
                        </tr>
                        <tr>
                            <td>DEBE</td>
                            <td>HABER</td>
                            <td>DEUDOR</td>
                            <td>ACREEDOR</td>
                            <td>ACTIVO</td>
                            <td>PASIVO</td>
                            <td>PERDIDAS</td>
                            <td>GANANCIAS</td>
                        </tr>
                        <?php
                        $tdebe=0;
                        $thaber=0;
                        $tdeu=0;
                        $tacre=0;
                        $tact=0;
                        $tpas=0;
                        $tperd=0;
                        $tgan=0;
                        ?>
                        @foreach($ctas = App\CuentaContable::all()
                        ->where('FECHA_CONT','>',$desde)
                        ->where('FECHA_CONT','<',$hasta)
                        ->where('MONTO_CTA_CONT','<>',0)
                        ->where('EMP_CTA_CONT','=',$emp->EMP_ID) as $cta)
                        <tr>
                            <td>
                                {!! $cta->ID_CTA_CONT !!}
                            </td>
                            <td>
                                {!! $cta->NOM_CTA_CONT !!}
                            </td>
                            <!--sumas-->
                            <?php
                                $ctasasientos = App\AsientoCuenta::all()->where('ID_CTA_CONT','=',$cta->ID_CTA_CONT);
                                $sumad=0;
                                $sumah=0;
                                for ($i=0;$i<$ctasasientos->count();$i++){
                                    foreach ($ctasasientos as $ctaasi){
                                        $sumad=$sumad + $ctaasi->ASIENTO_DEBE;
                                        $sumah=$sumah + $ctaasi->ASIENTO_HABER;
                                        $tdebe=$tdebe+$sumad;
                                        $thaber=$thaber+$sumah;
                                    }

                                }
                                    ?>
                            <td>{!! $sumad !!}</td>
                            <td>{!! $sumah !!}</td>
                            <!--saldos-->
                            <?php
                            $sdeudor=0;
                            $sacreedor=0;
                            switch($cta->TP_CTA_CON){
                                case 1:
                                    if($sumad>=$sumah){
                                        $sdeudor = $sumad - $sumah;
                                    }
                                    else{
                                        $sacreedor = $sumah - $sumad;
                                    }
                                break;
                                case 2:
                                    if($sumad<=$sumah){
                                        $sacreedor = $sumah - $sumad;
                                    }
                                    else{
                                        $sdeudor = $sumad - $sumah;
                                    }
                                    break;
                                case 3:
                                    if($sumad<=$sumah){
                                        $sacreedor = $sumah - $sumad;
                                    }
                                    else{
                                        $sdeudor = $sumad - $sumah;
                                    }
                                    break;
                                case 4:
                                    if($sumad>=$sumah){
                                        $sdeudor = $sumad - $sumah;
                                    }
                                    else{
                                        $sacreedor = $sumah - $sumad;
                                    }
                                    break;
                                case 5:
                                    if($sumad<=$sumah){
                                        $sacreedor = $sumah - $sumad;
                                    }
                                    else{
                                        $sdeudor = $sumad - $sumah;
                                    }
                                    break;
                                case 6:
                                    if($sumad<=$sumah){
                                        $sacreedor = $sumah - $sumad;
                                    }
                                    else{
                                        $sdeudor = $sumad - $sumah;
                                    }
                                    break;
                            }
                            $tdeu=$tdeu + $sdeudor;
                            $tacre=$tacre + $sacreedor;
                            ?>

                            <td>{!! $sdeudor !!}</td>
                            <td>{!! $sacreedor !!}</td>
                            <?php
                                    $sact=0;
                                    $spas=0;
                                    $sperd=0;
                                    $sgan=0;
                            switch($cta->TP_CTA_CON){
                                case 1:
                                    $sact = $sdeudor;
                                    break;
                                case 2:
                                    $spas = $sacreedor;
                                    break;
                                case 3:
                                    $sgan = $sacreedor;
                                    break;
                                case 4:
                                    $sperd = $sdeudor;
                                    break;
                                case 5:
                                    $spas = $sacreedor;
                                    break;
                                case 6:
                                    $spas = $sacreedor;
                                    break;
                                    }
                            $tact=$tact + $sact;
                            $tpas=$tpas + $spas;
                            $tperd=$tperd + $sperd;
                            $tgan=$tgan + $sgan;
                                ?>
                            <!--inventario-->
                            <td>{!! $sact !!}</td>
                            <td>{!! $spas !!}</td>
                            <!--resultados-->
                            <td>{!! $sperd !!}</td>
                            <td>{!! $sgan !!}</td>
                        </tr>
                        @endforeach
                        <tr style="border-top: 5px solid black;">
                            <th colspan="2" style="border-right: 5px solid black;">SUMAS</th>
                            <td>{!! $tdebe !!}</td>
                            <td>{!! $thaber !!}</td>
                            <td>{!! $tdeu !!}</td>
                            <td>{!! $tacre !!}</td>
                            <td>{!! $tact !!}</td>
                            <td>{!! $tpas !!}</td>
                            <td>{!! $tperd !!}</td>
                            <td>{!! $tgan !!}</td>
                        </tr>
                        <tr>
                            <th colspan="2" style="border-right: 5px solid black;">UTILIDAD</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <?php
                                $utilp=0;
                                $utilg=0;
                                $utila=0;
                                $utilpa=0;
                                if ($tact>$tpas){
                                    $utilpa=$tact-$tpas;
                                }else{
                                    $utila=$tpas-$tact;
                                }
                                if ($tperd>$tgan){
                                    $utilg=$tperd-$tgan;
                                }else{
                                    $utilp=$tgan-$tperd;
                                }
                                    ?>
                            <td>{!! $utila !!}</td>
                            <td>{!! $utilpa !!}</td>
                            <td>{!! $utilp !!}</td>
                            <td>{!! $utilg !!}</td>
                        </tr>
                        <tr style="border: 5px solid black;">
                            <th colspan="2" style="border-right: 5px solid black;">TOTALES</th>
                            <td>{!! $tdebe !!}</td>
                            <td>{!! $thaber !!}</td>
                            <td>{!! $tdeu !!}</td>
                            <td>{!! $tacre !!}</td>
                            <td>{!! $tact+$utila !!}</td>
                            <td>{!! $tpas+$utilpa !!}</td>
                            <td>{!! $tperd+$utilp !!}</td>
                            <td>{!! $tgan+$utilg !!}</td>
                        </tr>

                    </table>

                </div><!--/porlets-content-->
            </div><!--/block-web-->
        </div><!--/col-md-12-->
    </div><!--/row-->
    </div>
    <br>


    <div class="container">
        <a href="{{route('Contable')}}"><button class="btn btn-primary btn-lg">Volver</button></a>

    </div>
    </a>
    <br>

@endsection
