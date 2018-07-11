@extends('layouts.app')
@section('content')

<div class="container-fluid"  align="center">
<div class="row">
  <div class="col-xs-12 col-md-12 col-sm-12">
    <div class="block-web">
      <div class="header">
        <div class="actions"></div>
        <h1 class="text-center text-uppercase">ORDEN DE COMPRA</h1>
      </div>
      <div class="porlets-content">
        <!-- FORM INICIO -->

        <div class="row">
          <div class="col-sm-6">
            <h4 class="text-left text-uppercase">FOLIO: {{ $oc->OC_FOLIO }}</h4>
          </div>
          <div class="col-sm-6">
            <h4 class="text-right text-uppercase">LOGO </h4>
          </div>
        </div>

        <h3 class="text-center">DATOS PROVEEDOR</h3>
        <table class="table-condensed">
          <tr>
            <td>PROVEEDOR:</td>
            <td><input type="text" readOnly value="{{ App\Proveedor::find($oc->OC_PRO_RUN)->PRO_NOMBRE }}" style="width:175px;" class="form-control"></td>
            <td>RUT:</td>
            <td><input type="text" readOnly  style="width:175px;" value="{{ $oc->OC_PRO_RUN }}" class="form-control"></td>
          </tr>

        </table>

        <h3 class="text-center text-uppercase">ARTICULOS PEDIDOS</h3>

        <table class="table-condensed table-bordered">

          <tr>

            <td>COD. ART.</td>
            <td>DESC. ART.</td>
            <td>EN STOCK</td>
            <td>VALOR</td>
            <td>CANTIDAD</td>
            <td>TOTAL</td>

          </tr>
          <?php
            $sum=0;
          ?>
          @foreach($articulos as $art)
          <tr>
            <td>{{ $art->OFAR_ID }}</td>
            <td>{{ $art->OFAR_DESC }}</td>
            <td>{{ $art->OFAR_CAPACIDAD }}</td>
            <td>{{ $art->OFAR_VALOR }}</td>
            <td><input type="text" value="{{ $oc->OC_CANTIDAD }}" readOnly  style="width:175px;" class="form-control"></td>
            <td><input type="text" value="{{ $oc->OC_TOTAL }}" readOnly  style="width:175px;" class="form-control"></td>
            <?php
                  $sum = $sum + $oc->OC_TOTAL;
                  ?>
          </tr>
          @endforeach

          <tr>


            <td colspan="5" class="text-right">TOTAL:</td>
            <td><input type="text" readOnly value="{{ $sum }}" style="width:175px;" class="form-control"></td>

          </tr>


        </table>

        <br>

        <table class="table-condensed">

          <tr>
            <td>CAMBIAR ESTADO:</td>
            <td>
              <!--  AQUI DEBE EXISTIR UNA CONDICION SI LA OC ESTA CON ESTADO:

              REALIZADA POR DEFECTO EL CBX DEBE MOSTRAR: VERIFICADO Y RECHAZAR
              VERIFICADO POR DEFECTO EL CBX DEBE MOSTRAR: APROBAR Y RECHAZAR
              APROBAR POR DEFECTO EL CBX DEBE MOSTRAR: PEDIR


            -->
            <select class="form-control" style="width:175px;" >
              <option value="VERIFICADO">VERIFICADO</option>
              <option value="APROBADO">APROBADO</option>
              <option value="RECHAZADO">RECHAZADO</option>
              <option value="PEDIR">PEDIR</option>
            </select>

          </td>

          <td><button class="btn btn-primary btn-lg">APLICAR</button></td>

        </tr>

      </table>

        <!-- FORM FINAL -->

      </div><!--/porlets-content-->
    </div><!--/block-web-->
  </div><!--/col-md-12-->
</div><!--/row-->

<br>

</div>
<div class="container">

<a href="javascript:history.back(1)"><button class="btn btn-primary btn-lg">Volver</button></a>

</div>

<br>

@endsection
