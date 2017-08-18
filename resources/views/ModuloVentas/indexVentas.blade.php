@extends('layouts.app')
@section('content')

<div class="row">
  <div class="col-xs-12 col-md-12 col-sm-12">
    <div class="block-web">
      <div class="header">
        <div class="actions"></div>
        <h1 class="text-center text-uppercase">Módulo ventas</h1>
      </div>
      <div class="porlets-content">
        <!-- FORM INICIO -->
        <div class="container-fluid" align="center">

          <table >

            <tr>
              <td><a href="{{route('historialDeVentas')}}"><button class="btn btn-primary btn-lg" style="width:280px; margin-bottom: 15px; margin-left:15px;"> HISTORIAL DE VENTAS</button></a></td>
              <td><a href="{{route('formularioDeVentas')}}"><button class='btn btn-primary btn-lg'   style="width:280px; margin-bottom: 15px;margin-left:15px;"> VENTAS</button></a></td>
            </tr>

            <tr>
              <td><a href="{{route('listaCotizaciones')}}"><button class="btn btn-primary btn-lg"  style="width:280px; margin-bottom: 15px;margin-left:15px;">COTIZACIONES</button></a></td>
              <td><a href="{{route('ModuloInventario.Activos.Listado')}}"><button class="btn btn-primary btn-lg" style="width:280px; margin-bottom: 15px;margin-left:15px;"> CATALOGO DE ACTIVOS</button></a></td>
            </tr>

            <tr>
              <td><a href="{{route('catalogoProductos')}}"><button class="btn btn-primary btn-lg" style="width:280px; margin-bottom: 15px;margin-left:15px;"> CATALOGO DE PRODUCTOS</button></a></td>
              <td><a href="{{route('catalogoServicios')}}"><button class="btn btn-primary btn-lg" style="width:280px; margin-bottom: 15px;margin-left:15px;"> CATALOGO DE SERVICIOS</button></a></td>

            </tr>
          </table>

        </div>


        <!-- FORM FINAL -->

      </div><!--/porlets-content-->
    </div><!--/block-web-->
  </div><!--/col-md-12-->
</div><!--/row-->



<br>

<br>
<br>
</div>
<a href="javascript:history.back(1)"><button class="btn btn-primary btn-lg">Volver</button></a>
@endsection
