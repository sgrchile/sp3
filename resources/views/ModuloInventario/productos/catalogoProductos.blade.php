@extends('layouts.app')
@section('content')

<div class="container" align="center">

  <div class="row">
    <div class="col-xs-12 col-md-12 col-sm-12">
      <div class="block-web">
        <div class="header">
          <div class="actions"></div>
          <h1 class="text-center text-uppercase">CATALOGO DE PRODUCTOS</h1>
        </div>
        <div class="porlets-content">
          <!-- FORM INICIO -->

          <table class="table-condensed text-right" align="center">

            <tr>
              <td>BUSCAR POR NOMBRE:</td>
              <td>

                <select required class="form-control" style="width:175px;">
                  <option></option>
                  <option></option>
                  <option></option>
                  <option></option>
                  <option></option>
                </select>
              </td>
              <td><button type="button" class="btn btn-primary btn-xs">  <i class="fa fa-search" style="font-size:29px"></i></button></td>
            </tr>
            <tr>
              <td>BUSCAR POR CENTRO DE NEGOCIO:</td>
              <td>
                <select required class="form-control" style="width:175px;">
                  <option></option>
                  <option></option>
                  <option></option>
                  <option></option>
                  <option></option>
                </select>
              </td>
              <td><button type="button" class="btn btn-primary btn-xs">  <i class="fa fa-search" style="font-size:29px"></i></button></td>
            </tr>
          </table>

          <table class=" table-condensed table-bordered ">
            <tr>
              <td>ESTADO</td>
              <td>ID</td>
              <td>NOMBRE</td>
              <td>DESCRIPCION</td>
              <td>GARANTIAS</td>
              <td>COSTO TOTAL</td>
              <td>MARGEN</td>
              <td>VALOR VENTA</td>
              <td>DSCTO. MAX.</td>
              <td>COM. DE VENTA</td>
              <td colspan=3>ACCION</td>
            </tr>

            @foreach($invprod as $pro)
            <tr>
              <td>{{ App\EstadoProducto::find($pro->PROD_ESTADO)->DESC_EST_PROD }}</td>
              <td>{{ $pro->PROD_PRO_COD }}</td>
              <td>{{ $pro->PROD_NOMBRE }}</td>
              <td>{{ $pro->PROD_DESC }}</td>
              <td>{{ $pro->PROD_GARANTIAS }}</td>
              <td>{{ $pro->PROD_PRECIO_COSTO }}</td>
              <td>{{ $pro->PROD_MARGEN }}</td>
              <td>{{ $pro->PROD_PRECIO_VENTA }}</td>
              <td>{{ $pro->PROD_DSCTO_MAX }}</td>
              <td>{{ $pro->PROD_COMISION_VENTA }}</td>
              <td><button type="button" class="btn btn-primary btn-xs">ELIMINAR</button></td>
              <td><a href="{{route('modificarProductos')}}"><button type="button" class="btn btn-primary btn-xs">MODIFICAR</button></a></td>
              <td><a href="{{route('fichaDeProducto')}}"><button type="button" class="btn btn-primary btn-xs">VER</button></a></td>
            </td>
          </tr>
            @endforeach

          <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td colspan=3>
              <a href="{{route('registrarProductos')}}"><button type="button" class="btn btn-primary btn-xs">AGREGAR</button></a>
            </td>
          </tr>
        </table>

          <!-- FORM FINAL -->

        </div><!--/porlets-content-->
      </div><!--/block-web-->
    </div><!--/col-md-12-->
  </div><!--/row-->

</div>

<br >
<div class="container">
<a href="javascript:history.back(1)"><button class="btn btn-primary btn-lg">Volver</button></a>

</div>
</a>
<br>

@endsection
