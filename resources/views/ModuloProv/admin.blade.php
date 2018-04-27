@extends('layouts.app')
@section('content')
    <div class="container" align="center">
        <div class="row">
            <div class="col-xs-12 col-md-12 col-sm-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Administración de Módulo Proveedores</h3>
                    </div>
                    <div class="panel-body">
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#alta" aria-controls="alta" role="tab" data-toggle="tab">Alta de Proveedor</a></li>
                        </ul>
                        <div class="tab-content">
                            <a href="#" class="btn btn-primary pull-left">Autorizar ingreso al sistema</a>
                            <div role="tabpanel" class="tab-pane active" id="alta">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nombre</th>
                                            <th>Apellido Paterno</th>
                                            <th>Apellido Materno</th>
                                            <th>Email</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($proveedores as $proveedor)
                                        <tr>
                                            <td>{{ $proveedor->PRO_RUN }}</td>
                                            <td>{{ $proveedor->PRO_NOMBRE }}</td>
                                            <td>{{ $proveedor->PRO_APE_PAT }}</td>
                                            <td>{{ $proveedor->PRO_APE_MAT }}</td>
                                            <td>{{ $proveedor->PRO_EMAIL }}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                {{ $proveedores->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
