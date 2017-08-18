@extends('layouts.app')
@section('content')

<div class="row">
  <div class="col-xs-12 col-md-12 col-sm-12">
    <div class="block-web">
      <div class="header">
        <div class="actions"></div>
        <h1 class="content-header text-center text-uppercase"><b>LISTA de Clientes</b></h1>
      </div>
      <div class="porlets-content">
        <div class="table-responsive">

            <!-- TABLA INICIO -->
            <table class="display table-hover table-condensed table-bordered table-striped text-uppercase" id="dynamic-table">
            <tr>
              <td>RUT</td>
              <td>Nombre</td>
              <td>Actividad</td>
              <td>Contacto</td>
              <td>Tipo cuenta</td>
              <td>Fono</td>
              <td>Email</td>
              <td>Editar</td>
              <td>Seleccionar</td>
            </tr>
            @foreach($clientes as $cliente)
              <tr>
                <td>{{ $cliente->CLI_RUT }}</td>
                <td>{{ $cliente->CLI_NOMBRE }}</td>
                <td>{{ $cliente->CLI_ACT_COMERCIAL }}</td>
                <td>{{ $cliente->CLI_CONTACTO }}</td>
                <td>{{ $cliente->tipo_cuenta->TCTA_DESC }}</td>
                <td>{{ $cliente->CLI_FONO }}</td>
                <td>{{ $cliente->CLI_EMAIL }}</td>
                <td><a href="{{ 'as' }}"> Editar </a></td>
                <td><a href="{{ 'as' }}"> Seleccionar </a></td>
              </tr>
            @endforeach
            </table>


            <br>
            <div class="container">  <a href="{{route('ModuloOt')}}"><button class="btn btn-primary btn-lg">Volver</button></a></div>



            <!-- TABLA FINAL -->
              </table>
            </div><!--/table-responsive-->
          </div><!--/porlets-content-->
        </div><!--/block-web-->
      </div><!--/col-md-12-->
    </div><!--/row-->



@endsection
