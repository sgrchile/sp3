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
          <h3 class="text-center">PLAN DE CUENTAS</h3>

          <div class="table-responsive"  >

            <table class="table table-bordered">
              <tr>
                <td>CLASE</td>
                <td>TIPO DE CUENTA</td>
                <td>CUENTA</td>
                <td>MONTO</td>
                <td>ACCION</td>
              </tr>

              <tr>
                <td>CLASE</td>
                <td>TIPO DE CUENTA</td>
                <td>CUENTA</td>
                <td>MONTO</td>
                <td><button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#editarCuenta" data-backdrop="static" >EDITAR</button></td>
              </tr>

            </table>
          </div>
          <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#nuevaCuenta" data-backdrop="static">NUEVA CUENTA</button>

          @include('modals.editarCuenta')
          @include('modals.NuevaCuenta')

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
