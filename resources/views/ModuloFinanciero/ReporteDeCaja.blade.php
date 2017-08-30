@extends('layouts.app')
@section('content')
<div class="container" align="center">

<div class="row">
  <div class="col-xs-12 col-md-12 col-sm-12">
    <div class="block-web">
      <div class="header">
        <div class="actions"></div>
        <h1 class="text-center text-uppercase">REPORTE DE CAJA</h1>
      </div>
      <div class="porlets-content">
        <!-- FORM INICIO -->

        <div class="table-responsive">
          <table class="table-condensed text-right">
            <tr>
              <td>CUENTA </td>
              <td>
                <select class="form-control" style="width:175px;">
                  <option></option>
                  <option></option>
                  <option></option>
                </select>
              </td>
              <td>ESTADO </td>
              <td>
                <select class="form-control" style="width:175px;">
                  <option>CERRADO</option>
                  <option>EN PROCESO</option>
                  <option></option>
                </select>
              </td>
            </tr>
            <tr>
              <td>DESDE </td>
              <td><input type="date" class="form-control" style="width:175px;" /></td>
              <td>HASTA </td>
              <td><input type="date" class="form-control" style="width:175px;" /></td>
            </tr>
            <tr>
              <td>SALDO INICIAL </td>
              <td><input type="text" class="form-control" style="width:175px;" /></td>
              <td>SALDO  </td>
              <td><input type="text" class="form-control" style="width:175px;" /></td>
            </tr>
            <tr>
              <td>ABONO INICIAL </td>
              <td><input type="text" class="form-control" style="width:175px;" /></td>
              <td>TOTAL CARGO </td>
              <td><input type="text" class="form-control" style="width:175px;" /></td>
            </tr>
          </table>
          <button class="btn btn-primary btn-lg">BUSCAR</button>
        </div>
        <h3 class="text-center">CARTOLA INTERNA</h3>
        <div class="table-responsive">
          <table class="table table-bordered" align="center">
            <tr>
              <td>FECHA</td>
              <td>MOVIMIENTO</td>
              <td>MONTO</td>
              <td>SALDO</td>
            </tr>

          </table>

        </div>



        <!-- FORM FINAL -->

      </div><!--/porlets-content-->
    </div><!--/block-web-->
  </div><!--/col-md-12-->
</div><!--/row-->



<br>

</div>
<br>
<div class="container">

<a href="javascript:history.back(1)"><button class="btn btn-primary btn-lg">Volver</button></a>

</div>
</a>
<br>

@endsection
