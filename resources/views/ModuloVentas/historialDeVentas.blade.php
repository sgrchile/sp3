@extends('layouts.app')
@section('content')

<div class="row">
  <div class="col-xs-12 col-md-12 col-sm-12">
    <div class="block-web">
      <div class="header">
        <div class="actions"></div>
        <h1 class="text-center">HISTORIAL DE VENTAS</h1>
      </div>
      <div class="porlets-content">
        <!-- FORM INICIO -->
        <div class="container-fluid" align="center">

          <table class="table-condensed table-bordered">
            <tr>
              <td>ID</td>
              <td>FOLIO</td>
              <td>FECHA</td>
              <td>FORMA DE PAGO</td>
              <td>VENDEDOR</td>
              <td>TOTAL BRUTO</td>
              <td>TOTAL NETO</td>
              <td>TOTAL COMISION</td>
              <td>ACCION</td>

            </tr>

            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td>
                <a href="{{route('fichaDeVenta')}}"><button class="btn btn-primary btn-xs" style="margin-bottom:15px; margin-lefth:15px;">VER VENTA</button></a>
                <button class="btn btn-primary btn-xs"  style="margin-bottom:15px; margin-lefth:15px;">ANULAR VENTA</button>
              </td>
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
