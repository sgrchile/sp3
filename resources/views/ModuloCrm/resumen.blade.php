<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Resumen</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title" style="color:#FFF;">Resumen de oportunidades</h3>
            </div>
            <div class="panel-body">
            </div>
        </div>
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title" style="color:#FFF;">Próximas actividades</h3>
            </div>
            <div class="panel-body">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title" style="color:#FFF;">Últimos candidatos</h3>
                    </div>
                    <div class="panel-body">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel panel-primary"> 
                    <div class="panel-heading">
                        <h3 class="panel-title" style="color:#FFF;">Últimas cuentas</h3>
                    </div>
                    <div class="panel-body">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection

</body>
</html>
