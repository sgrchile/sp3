@extends('layouts.app')
@section('content')


<div class="container" align="center">
  <div class="row">
    <div class="col-xs-12 col-md-12 col-sm-12">
      <div class="block-web">
        <div class="header">
          <div class="actions"></div>
          <h1 class="text-center text-uppercase">REGISTRAR PRODUCTO</h1>
        </div>
        <div class="porlets-content">
          <!-- FORM INICIO -->
          <table class=" table-condensed table-bordered ">
            <tr>
              <td>RUT PROV. </td>
              <td>DESC</td>
              <td>COSTO</td>
              <td>CANTIDAD</td>
              <td>VALOR </td>
              <td>ACCION</td>
            </tr>

            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>

              <td>
                <a href="{{route('registrarServicio')}}"><button type="button" class="btn btn-primary btn-xs">ELIMINAR</button></a>
              </td>
            </tr>

            <tr>

              <td>
                <select required class="form-control" style="width:175px;">
                  <option></option>
                  <option></option>
                  <option></option>
                  <option></option>
                  <option></option>
                </select>
              </td>
              <td>
                <select required class="form-control" style="width:175px;">
                  <option></option>
                  <option></option>
                  <option></option>
                  <option></option>
                  <option></option>
                </select>
              </td>
              <td></td>
              <td></td>
              <td></td>

              <td>
                <a href="{{route('registrarServicio')}}"><button type="button" class="btn btn-primary btn-xs">AGREGAR</button></a>
              </td>
            </tr>

            <tr>

              <td colspan=4 class="text-right">TOTAL</td>
              <td colspan=1 ><input type="text"  class="form-control" style="width:175px;"></td>

            </tr>

          </table>


          <table class="table-condensed" style="text-align:right" align="center">
            <tr>
              <td  colspan="2" align=center ><label>DESCRIPCION:</label></td>
            </tr>
            <tr>
              <td colspan="2">
                <textarea rows="10" class="form-control" name="descripcion" required style="width:500px; max-width:500px;"></textarea>
              </td>
            </tr>

            <tr>
              <td  colspan="2" align=center ><label>PUBLICO OBJETIVO:</label></td>
            </tr>
            <tr>
              <td colspan="2">
                <textarea rows="10" class="form-control" name="descripcion" required style="width:500px; max-width:500px;"></textarea>
              </td>
            </tr>

            <tr>
              <td  colspan="2" align=center ><label>GARANTIAS:</label></td>
            </tr>
            <tr>
              <td colspan="2">
                <textarea rows="10" class="form-control" name="descripcion" required style="width:500px; max-width:500px;"></textarea>
              </td>
            </tr>
          </table>

          <table class="table-condensed"  style="text-align:right" align="center">

            <tr>
              <td>MARGEN::</td>
              <td><input type="number" required class="form-control"  style="width:175px;"></td>
            </tr>

            <tr>
              <td>VALOR VENTA:</td>
              <td><input type="number" required class="form-control" style="width:175px;"></td>
            </tr>
            <tr>
              <td>COMICION DE VENTA:</td>
              <td><input type="number" required class="form-control"  style="width:175px;"></td>
            </tr>

            <tr>
              <td>CAPACIDAD DE EJECUCION:</td>
              <td><input type="number" required class="form-control"  style="width:175px;"></td>
            </tr>

            <tr>
              <td>MAXIMO DESCUENTO:</td>
              <td><input type="number" required class="form-control"  style="width:175px;"></td>
            </tr>

            <tr>
              <td>URL FOTO:</td>
              <td><input type="text" required class="form-control"  style="width:175px;"></td>
            </tr>

            <tr>
              <td>PUBLICO OBJETIVO:</td>
              <td><input type="number" required class="form-control"  style="width:175px;"></td>
            </tr>


            <tr>
              <td>CENTRO DE NEGOCIOS:</td>
              <td>    <select required class="form-control" style="width:175px;">
                <option></option>
                <option></option>
                <option></option>
                <option></option>
                <option></option>
              </select>
            </td>
          </tr>


        </table>

          <button class="btn btn-primary btn-lg">REGISTRAR</button>


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
