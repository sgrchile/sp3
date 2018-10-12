<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Resumen</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/funnel.js"></script>
</head>
<body>
@extends('layouts.app')
@section('content')
<div class="container">
    <div class="col-md-12">
        <div class="panel-group" id="busqueda" role="tablist">
            <div class="panel panel-primary">
                <div class="panel-heading" role="tab">
                    <h3 class="panel-title" style="color:#FFF;"><a role="button" data-toggle="collapse" data-parent="#busqueda" href="#busquedaT">Búsqueda</a></h3>
                </div>
                <div id="busquedaT" class="panel-collapse collapse in" role="tabpanel">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Empresa</label>
                                            <select class="form-control" id="emp" name="emp">
                                                <option value="">Seleccione</option>
                                                @foreach($empresa as $emp)
                                                    <option value="{{ $emp->EMP_ID }}">{{ $emp->EMP_DESC }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Etapas</label>
                                            <select class="form-control" id="etapa" name="etapa">
                                                <option value="">Seleccione</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Proceso de negocio</label>
                                            <select class="form-control" id="procneg" name="procneg">
                                                <option value="">Seleccione</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Mes</label>
                                            {{ Form::selectMonth('mes',null,['class'=>'form-control']) }}
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Año</label>
                                            <select class="form-control">
                                                <?php $year = date("Y");
                                                for ($i=2015; $i<=$year; $i++){
                                                    echo '<option value="'.$i.'">'.$i.'</option>';
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-default">Limpiar</button>
                                <button type="button" id="btnbuscar" class="btn btn-primary">Buscar</button>
                            </div>
                            <div class="col-md-6">
                                <div id="funel"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel-group" id="oportunidades" role="tablist">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title" style="color:#FFF;"><a role="button" data-toggle="collapse" data-parent="#oportunidades" href="#oportunidadesT">Resumen de oportunidades</a></h3>
                </div>
                <div id="oportunidadesT" class="panel-collapse collapse in" role="tabpanel">
                    <div class="panel-body">
                        <table class="table table-hover table-striped">
                            <thead>
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col">Proceso de negocio</th>
                                    <th scope="col">Etapa</th>
                                    <th scope="col">Probabilidad %</th>
                                    <th scope="col">Esperado $</th>
                                </tr>
                            </thead>
                            <tbody id="oportunidades.table">
                                @foreach($oportunidad as $oport)
                                    <tr>
                                        <th scope="col">{{ $oport->ID_OPORTUNIDAD }}</th>
                                        <th scope="col">{{ App\Proceso::find($oport->PROC_NEGOCIO)->PRO_DESC }}</th>
                                        <th scope="col">{{ App\Etapa::find($oport->ETAPA)->DESC_ETAPA }}</th>
                                        <th scope="col">{{ $oport->PROBABILIDAD }}</th>
                                        <th scope="col">{{ $oport->TOTAL }}</th>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel-group" id="actividades" role="tablist">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title" style="color:#FFF;"><a role="button" data-toggle="collapse" data-parent="#actividades" href="#actividadesT">Próximas actividades</a></h3>
                </div>
                <div id="actividadesT" class="panel-collapse collapse in" role="tabpanel">
                    <div class="panel-body">
                        <table class="table table-hover table-striped">
                            <thead>
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col">Empresa</th>
                                    <th scope="col">Responsable</th>
                                    <th scope="col">Asunto</th>
                                    <th scope="col">Actividad</th>
                                    <th scope="col">Fecha inicio</th>
                                    <th scope="col">Estado</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($actividad as $act)
                                    <tr>
                                        <th scope="col"></th>
                                        @if($act->EMP_ACT != null)
                                        <th scope="col">{{ App\Empresa::find($act->EMP_ACT)->EMP_DESC }}</th>
                                        @endif
                                        <th scope="col">{{ $act->RESPONSABLE_ACT }}</th>
                                        <th scope="col">{{ $act->DESC_ACT }}</th>
                                        <th scope="col">{{ App\TpActividad::find($act->TP_ACTIVIDAD)->DESC_TP_ACTIVIDAD }}</th>
                                        <th scope="col">{{ $act->FECHA_ACT }}</th>
                                        <th scope="col">{{ $act->EST_ACTIVIDAD }}</th>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel-group" id="candidatos" role="tablist">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title" style="color:#FFF;"><a role="button" data-toggle="collapse" data-parent="#candidatos" href="#candidatosT">Últimos Prospectos</a></h3>
                </div>
                <div id="candidatosT" class="panel-collapse collapse in" role="tabpanel">
                    <div class="panel-body">
                        <table class="table table-hover table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Empresa</th>
                                    <th scope="col">Procedencia</th>
                                    <th scope="col">Fecha</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($prospectos as $prosp)
                                    <tr>
                                        <td>{{ $prosp->CLI_NOMBRE }}</td>
                                        @if($prosp->CLI_ID_EMP != null)
                                        <td>{{ App\Empresa::find($prosp->CLI_ID_EMP)->EMP_DESC }}</td>
                                            @else
                                            <td>sin datos</td>
                                        @endif
                                        @if($prosp->CLI_PROCEDENCIA != null)
                                        <td>{{ App\Procedencia::find($prosp->CLI_PROCEDENCIA)->DESC_PROCEDENCIA }}</td>
                                            @else
                                            <td>sin datos</td>
                                        @endif
                                        <td>{{ ($prosp->CREATED_AT) }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel-group" id="cuentas" role="tablist">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title" style="color:#FFF;"><a role="button" data-toggle="collapse" data-parent="#cuentas" href="#cuentasT">Últimos Clientes</a></h3>
                </div>
                <div id="cuentasT" class="panel-collapse collapse in" role="tabpanel">
                    <div class="panel-body">
                        <table class="table table-hover table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Rut</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Empresa</th>
                                    <th scope="col">Propietario</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($clientes as $cli)
                                    <tr>
                                        <td>{{ $cli->CLI_RUT }}</td>
                                        <td>{{ $cli->CLI_NOMBRE }}</td>
                                        @if($cli->CLI_EMP != null)
                                        <td>{{ App\Empresa::find($cli->CLI_EMP)->EMP_DESC }}</td>
                                        @endif
                                        <td>{{ $cli->CLI_PROPIETARIO }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
<script>

$(document).ready(function(){
    Highcharts.chart('funel', {
        chart: {
            type: 'funnel'
        },
        title: {
            text: ''
        },
        plotOptions: {
            series: {
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b> ({point.y:,.0f})',
                    color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black',
                    softConnector: true
                },
                center: ['40%', '50%'],
                neckWidth: '30%',
                neckHeight: '25%',
                width: '80%'
            }
        },
        legend: {
            enabled: false
        },
        credits:{
            enabled: false
        },
        series: [{
            name: 'Unique users',
            data: [
                ['Website visits', 15654],
                ['Downloads', 4064],
                ['Requested price list', 1987],
                ['Invoice sent', 976],
                ['Finalized', 846]
            ]
        }]
    });
    $("#emp").on("change", function(){
        let emp = $(this).val();
        $("#procneg").empty();
        $.get("https://plataforma.sgrchile.com/api/procneg/" + emp).done(function(data){
            if (data !== null){
                if (Object.keys(data).length > 0 ){
                    $.each(data, function( index, value ){
                        let option = "<option value='"+ value.PRO_ID + "'>" + value.PRO_DESC+ "</option>";
                        $("#procneg").append(option);
                    });
                    $("#procneg").trigger("change");
                }
            }
        });
    });
    $("#procneg").on("change", function(){
        let procneg = $(this).val();
        $("#etapa").empty();
        $.get("https://plataforma.sgrchile.com/api/etapa/" + procneg).done(function(data){
            if (data !== null){
                if (Object.keys(data).length > 0 ){
                    $.each(data, function( index, value ){
                        let option = "<option value='"+ value.ID_ETAPA + "'>" + value.DESC_ETAPA+ "</option>";
                        $("#etapa").append(option);
                    });
                    $("#etapa").trigger("change");
                }
            }
        });
    });

    $("#btnbuscar").on("click", function () {
        //alert($("#emp").val());
        let emp = $("#emp").val();
        $.get("https://plataforma.sgrchile.com/api/oportunidades/" + emp).done(function(data){
            if (data !== null){
                alert(data);
                if (Object.keys(data).length > 0 ){
                    $.each(data, function( index, value ){
                        alert(value);
                        let row = "<tr><th scope='row'>" + (index + 1) +"</th><td>" + value.PROC_NEGOCIO +"</td><td>" + value.ETAPA +"</td><td>" + value.PROBABILIDAD +"</td><td>" + value.TASA +"</td><td>" + value.TOTAL +"</td></tr>";
                        $("#oportunidades.table").append(row);
                    });
                }
                else
                {
                    let row = "<tr><th scope='row' colspan='6'>(sin datos)</th></tr>";
                    $("oportunidades.table").append(row);
                }
            }
            else{
                let row = "<tr><th scope='row' colspan='6'>(sin datos)</th></tr>";
                $("oportunidades.table").append(row);
            }
        });
    });

});
</script>
</body>
</html>
