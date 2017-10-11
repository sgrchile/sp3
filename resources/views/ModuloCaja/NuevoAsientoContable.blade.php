@extends('layouts.app')
@section('content')

  <div class="row">
    <div class="col-xs-12 col-md-12 col-sm-12">
      <div class="block-web">
        <div class="header">
          <div class="actions"></div>
          <h1 class="text-center text-uppercase">MODULO DE CAJA</h1>
        </div>
        <div class="porlets-content">
          <!-- FORM INICIO -->

          <h3 class="text-center">NUEVO ASIENTO CONTABLE</h3>

          <table class="table-condensed" align="center" style="text-align:right;">

            <tr>
              <td>TIPO DE MOVIMIENTO</td>
              <td>
                <select class="form-control" style="width:175px;" name="">
                  <option value=""></option>
                  <option value=""></option>
                  <option value=""></option>
                  <option value=""></option>
                </select>
              </td>
            </tr>
            <tr>
              <td>FECHA</td>
              <td> <input type="date" required class="form-control" style="width:175px;"></td>
            </tr>

            <tr>
              <td>COMENTARIO</td>
              <td> <textarea  class="form-control" style=" width:175px; max-width:175px; max-height:175px;"></textarea></td>
            </tr>




          </table>

          <table class="table table-bordered">

            <tr>
              <td>CUENTA</td>


              <td>DEBE</td>
              <td>HABER</td>
              <td>ACCION</td>
            </tr>

            <tr>
              <td><input type="number" readonly class="form-control" style="width:175px;"</td>
              <td><input type="number" readonly class="form-control" style="width:175px;"</td>
              <td><input type="number" readonly  class="form-control" style="width:175px;"</td>
              <td>    <button class="btn btn-primary btn-sm">ELIMINAR</button></td>

            </tr>

            <tr>

              <td>
                <select class="form-control" style="width:175px;" name="">
                  <option value=""></option>
                  <option value=""></option>
                  <option value=""></option>
                  <option value=""></option>
                </select>
              </td>
              <td><input type="number"  class="form-control" style="width:175px;"</td>
              <td><input type="number"  class="form-control" style="width:175px;"</td>
              <td>  <button class="btn btn-primary btn-sm">AGREGAR</button></td>

            </tr>




          </table>

          <div class="container" align="center">

          <button class="btn btn-primary btn-lg">REGISTAR</button>
          </div>

          <!-- FORM FINAL -->
        </div><!--/porlets-content-->
      </div><!--/block-web-->
    </div><!--/col-md-12-->
  </div><!--/row-->
</div>
<br>


<div class="container">
<a href="javascript:history.back(1)"><button class="btn btn-primary btn-lg">Volver</button></a>

</div>
</a>
<br>

@endsection
