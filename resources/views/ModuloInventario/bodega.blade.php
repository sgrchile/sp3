@extends('layouts.app')
@section('content')

<div class="container" align="center">

<div class="row">
  <div class="col-xs-12 col-md-12 col-sm-12">
    <div class="block-web">
      <div class="header">
        <div class="actions"></div>
        <h1 class="text-center text-uppercase">BODEGA EMPRESA</h1>
      </div>
      <div class="porlets-content">
        <!-- FORM INICIO -->
        <table  align="center">
          <tr>
            <td align="center">

              <a href="{{route('indexActivos')}}"><button class="btn btn-primary btn-lg"  style="width:150px; margin-bottom:15px;"> ACTIVOS</button></a>
              <a href="{{route('insumos')}}"><button class="btn btn-primary btn-lg" style="width:150px; margin-bottom:15px;"> INSUMOS</button></a>
              <a href="{{route('Productos')}}"><button class="btn btn-primary btn-lg" style="width:150px; margin-bottom:15px;">PRODUCTOS</button></a>
              <a href="{{route('Servicios')}}"><button class="btn btn-primary btn-lg" style="width:150px; margin-bottom:15px;"> SERVICIOS</button></a>
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
<br >
<br >
<div class="container">
<a href="{{route('inventario')}}"><button class="btn btn-primary btn-lg">Volver</button></a>

</div>
</a>
<br>

@endsection
