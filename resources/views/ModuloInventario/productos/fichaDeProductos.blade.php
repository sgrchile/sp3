@extends('layouts.app')
@section('content')


<div class="container" align="center">

  <div class="row">
    <div class="col-xs-12 col-md-12 col-sm-12">
      <div class="block-web">
        <div class="header">
          <div class="actions"></div>
          <h1 class="text-center text-uppercase">FICHA DE PRODUCTO</h1>
        </div>
        <div class="porlets-content">
          <!-- FORM INICIO -->

          <table class=" table-condensed table-bordered ">
            <tr>
              <td>TIPO OFERTA</td>
              <td>RUT PROV. </td>
              <td>DESC</td>
              <td>COSTO</td>
              <td>VALOR </td>

            </tr>

            <tr>

              <td></td>
              <td></td>
              <td></td>
              <td></td>

              <td></td>
            </tr>

            <tr>

              <td colspan=4 class="text-right">TOTAL</td>
              <td colspan=1 ><input type="text"  readOnly class="form-control" style="width:175px;"></td>

            </tr>

          </table>


          <table class="table-condensed" style="text-align:right" align="center">
            <tr>
              <td  colspan="2" align=center ><label>DESCRIPCION:</label></td>
            </tr>
            <tr>
              <td colspan="2">
                <textarea rows="10" class="form-control" readOnly required style="width:500px; max-width:500px;"></textarea>
              </td>
            </tr>

            <tr>
              <td  colspan="2" align=center ><label>PUBLICO OBJETIVO:</label></td>
            </tr>
            <tr>
              <td colspan="2">
                <textarea rows="10" class="form-control" readOnly required style="width:500px; max-width:500px;"></textarea>
              </td>
            </tr>

            <tr>
              <td  colspan="2" align=center ><label>GARANTIAS:</label></td>
            </tr>
            <tr>
              <td colspan="2">
                <textarea rows="10" class="form-control" readOnly name="descripcion" required style="width:500px; max-width:500px;"></textarea>
              </td>
            </tr>
          </table>

          <table class="table-condensed" style="text-align:right" align="center">


            <tr>
              <td>MARGEN::</td>
              <td><input type="text" class="form-control"  style="width:175px;" readOnly></td>
            </tr>

            <tr>
              <td>VALOR VENTA:</td>
              <td><input type="text" class="form-control" style="width:175px;" readOnly></td>
            </tr>
            <tr>
              <td>COMICION DE VENTA:</td>
              <td><input type="text" class="form-control"  style="width:175px;" readOnly></td>
            </tr>

            <tr>
              <td>CAPACIDAD DE EJECUCION:</td>
              <td><input type="text" class="form-control"  style="width:175px;" readOnly></td>
            </tr>

            <tr>
              <td>MAXIMO DESCUENTO:</td>
              <td><input type="text" class="form-control"  style="width:175px;" readOnly></td>
            </tr>

            <tr>
              <td>URL FOTO:</td>
              <td><input type="text" class="form-control"  style="width:175px;" readOnly></td>
            </tr>

            <tr>
              <td>PUBLICO OBJETIVO:</td>
              <td><input type="text" class="form-control"  style="width:175px;" readOnly></td>
            </tr>
            <tr>
              <td>CENTRO DE NEGOCIOS:</td>
              <td><input type="text" class="form-control"  style="width:175px;" readOnly></td>
            </tr>

            <tr>
              <td>ESTADO:</td>
              <td><input type="text" class="form-control"  style="width:175px;" readOnly></td>
            </tr>


          </table>

          <!-- FORM FINAL -->

        </div><!--/porlets-content-->
      </div><!--/block-web-->
    </div><!--/col-md-12-->
  </div><!--/row-->

</div>
<div class="container">
<a href="javascript:history.back(1)"><button class="btn btn-primary btn-lg">Volver</button></a>

</div>
</a>
<br>

@endsection
