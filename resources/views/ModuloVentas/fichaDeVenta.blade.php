@extends('layouts.app')
@section('content')

<div class="row">
  <div class="col-xs-12 col-md-12 col-sm-12">
    <div class="block-web">
      <div class="header">
        <div class="actions"></div>
        <h1 class="content-header text-center text-uppercase"><b>FICHA DE VENTA</b></h1>
      </div>
      <div class="porlets-content">
        <!-- FORM INICIO -->
        <div class="container" align="center">


          <h1 class="text-center">FICHA DE VENTA: ###### </h1>

          <table class=" table-condensed text-right" >
            <tr>
              <td><h4>FOLIO:</h4></td>
              <td> <input  type="text"  class="form-control" readOnly style="width:175px;"/></td>
            </tr>
            <tr>
              <td><h4>FECHA:</h4></td>
              <td> <input  type="text"  class="form-control" readOnly style="width:175px;"/></td>
            </tr>
            <tr>
              <td><h4>VENDEDOR:</h4></td>
              <td> <input  type="text"  class="form-control" readOnly style="width:175px;"/></td>
            </tr>

          </table>


          <br>


          <h4 class="text-center">ITEMS DE VENTA</h4>

          <table class="table table-responsive table-bordered" align="center">

            <tr>
              <td>TIPO</td>
              <td>ID</td>
              <td>DESCRIPCION</td>
              <td>VALOR UNITARIO</td>
              <td>CANTIDAD</td>
              <td>DESCUENTO</td>
              <td>TOTAL</td>
            </tr>

            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>



            <tr>
              <td colspan="6" class="text-right">TOTAL NETO:</td>
              <td> <input  type="text"  class="form-control" readOnly style="width:175px;"/></td>
            </tr>

            <tr>
              <td colspan="6" class="text-right">IVA:</td>
              <td> <input  type="text"  class="form-control" readOnly style="width:175px;"/></td>
            </tr>

            <tr>
              <td colspan="6" class="text-right">TOTAL BRUTO:</td>
              <td> <input  type="text" class="form-control" readOnly style="width:175px;"/></td>
            </tr>

            <tr>
              <td colspan="6" class="text-right">TOTAL COMISION:</td>
              <td> <input  type="text" class="form-control" readOnly style="width:175px;"/></td>
            </tr>


          </table>

          <button class="btn btn-primary btn-lg" >IMPRIMIR VENTA</button>
          <button class="btn btn-primary btn-lg" >ANULAR VENTA</button>
        </div>


        <!-- FORM FINAL -->

      </div><!--/porlets-content-->
    </div><!--/block-web-->
  </div><!--/col-md-12-->
</div><!--/row-->
<br>
<br>
</div>
<a href="javascript:history.back(1)"><button class="btn btn-primary btn-lg">Volver</button></a>
@endsection
