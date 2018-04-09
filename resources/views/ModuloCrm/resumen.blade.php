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
                                            <label>Equipo</label>
                                            <select class="form-control">
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Periodicidad de cierre</label>
                                            <select class="form-control">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Proceso de negocio</label>
                                            <select class="form-control">
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Mes</label>
                                            <select class="form-control">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Año</label>
                                            <select class="form-control">
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-default">Limpiar</button>
                                <button type="button" class="btn btn-primary">Buscar</button>
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
                                    <th scope="col">Probabilidad</th>
                                    <th scope="col">Esperado</th>
                                    <th scope="col">Real</th>
                                </tr>
                            </thead>
                            <tbody id="oportunidades.table">
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
                                    <th scope="col">Equipo</th>
                                    <th scope="col">Responsable</th>
                                    <th scope="col">Asunto</th>
                                    <th scope="col">Actividad</th>
                                    <th scope="col">Fecha inicio</th>
                                    <th scope="col">Estado</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row" colspan="7">(sin datos)</th>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="panel-group" id="candidatos" role="tablist">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title" style="color:#FFF;"><a role="button" data-toggle="collapse" data-parent="#candidatos" href="#candidatosT">Últimos candidatos</a></h3>
                        </div>
                        <div id="candidatosT" class="panel-collapse collapse in" role="tabpanel">
                            <div class="panel-body">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col"></th>
                                            <th scope="col">Idetificador</th>
                                            <th scope="col">Nombre</th>
                                            <th scope="col">Empresa</th>
                                            <th scope="col">Procedencia</th>
                                            <th scope="col">Fecha</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row" colspan="6">(sin datos)</th>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel-group" id="cuentas" role="tablist">
                    <div class="panel panel-primary"> 
                        <div class="panel-heading">
                            <h3 class="panel-title" style="color:#FFF;"><a role="button" data-toggle="collapse" data-parent="#cuentas" href="#cuentasT">Últimas cuentas</a></h3>
                        </div>
                        <div id="cuentasT" class="panel-collapse collapse in" role="tabpanel">
                            <div class="panel-body">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col"></th>
                                            <th scope="col">Idetificador</th>
                                            <th scope="col">Nombre</th>
                                            <th scope="col">Empresa</th>
                                            <th scope="col">Propietario</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row" colspan="5">(sin datos)</th>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
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

    $.get("https://plataforma.sgrchile.com/api/crm/oportunidades",).done(function(data){
        if (data !== null){
            if (Object.keys(data).length > 0 ){
                $.each(data, function( index, value ){
                    let row = "<tr><th scope='row'>" + (index + 1) +"</th><td>" + value.PROC_NEGOCIO +"</td><td>" + value.ETAPA +"</td><td>" + value.PROBABILIDAD +"</td><td>" + value.TASA +"</td><td>" + value.TOTAL +"</td></tr>";
                    $("oportunidades\\.table").append(row);
                });
            }
            else
            {
                let row = "<tr><th scope='row' colspan='6'>(sin datos)</th></tr>";
                $("oportunidades\\.table").append(row);  
            }
        }
        else{
            let row = "<tr><th scope='row' colspan='6'>(sin datos)</th></tr>";
            $("oportunidades\\.table").append(row);  
        }
    });
});
</script>
</body>
</html>
