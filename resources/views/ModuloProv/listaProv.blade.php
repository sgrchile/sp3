@extends('layouts.app')
@section('content')

    <div class="container" align="center"ng-app="">

        <div class="row">
            <div class="col-xs-12 col-md-12 col-sm-12">
                <div class="block-web">
                    <div class="header">
                        <div class="actions"></div>
                        <h1 class="text-center text-uppercase">LISTADO DE PROVEEDORES</h1>

                    </div>
                    <div class="porlets-content">
                        <!-- FORM INICIO -->
                        @if (session('status_prov'))
                            <div class="alert alert-warning">
                                {{ session('status_prov') }}
                            </div>
                        @endif
                        <table class="table table-bordered table-hover" id="clients-table">
                            <thead>
                            <tr>
                                <td>{{ __('RUT') }}</td>
                                <td>{{ __('NOMBRE') }}</td>
                                <td>{{ __('EMAIL') }}</td>
                                <td>{{ __('TELEFONO') }}</td>
                                <td>{{ __('CONTACTO') }}</td>
                                <td style="width:210px;">ACCION</td>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($proveedores as $proveedor)
                                <tr>
                                    <td>{{ $proveedor->PRO_RUN }}</td>
                                    <td>{{ $proveedor->PRO_NOMBRE }}</td>
                                    <td>{{ $proveedor->PRO_APE_PAT }}</td>
                                    <td>{{ $proveedor->CLI_FONO }}</td>
                                    <td>{{ $proveedor->CLI_CONTACTO }}</td>
                                    <td>
                                        <a href="{{route('fichaClienteConsolidado',$proveedor->CLI_RUT)}}"><button class="btn btn-primary btn-xs" onclick="" style="width:130px;"> VER FICHA</button></a>
                                        <a href="{{ route('cliente.destroy',$proveedor->CLI_RUT) }}" onclick="return confirm('¿Desea eliminar éste proveedor?')" ><button class="btn btn-primary btn-xs"
                                                                                                                                                                      style="width:65px;" >ELIMINAR</button></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{ $proveedores->links() }}

                    </div><!--/porlets-content-->
                </div><!--/block-web-->
            </div><!--/col-md-12-->
        </div><!--/row-->

    </div>

    <div class="container">
        <a redirect()->back()"><button class="btn btn-primary btn-lg"> Volver</button></a>

    </div>
    </a>
    <br>

@endsection
