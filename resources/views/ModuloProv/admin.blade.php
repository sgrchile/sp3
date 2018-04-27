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
                            <a href="#" class="btn btn-primary pull-left" id="btnAlta">Autorizar ingreso al sistema</a>
                            <div role="tabpanel" class="tab-pane active" id="alta">
                                <table class="table table-hover" id="tabla.proveedores">
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
                                            <th>{{ $proveedor->PRO_RUN }}</th>
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
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function(){
        $("#tabla\\.proveedores tr").on('click', function() {
            activate(this);
        });

        $("#btnAlta").on("click", function(){
            let filas = $("#tabla\\.proveedores tr");

            $.each(filas, function(i, val) {
                if ($(val).hasClass('active') == true){
                    let user = $(val).children("th").html();
                    $.get(window.location.protocol + "://" + window.location.hostname + '/modulo/proveedores/admin/autorizar/' + user);
                }
            });
        })
    });

    function activate(element) {
        $.each($(element).parent().children(), function(i, val) {
            $(val).removeClass('active');
        });
        $(element).addClass('active');
    }
</script>