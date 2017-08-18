@extends('layouts.app')
@section('content')
<div class="row">
  <div class="col-xs-12 col-md-12 col-sm-12">
    <div class="block-web">
      <div class="header">
        <div class="actions"></div>
        <h1 class=" text-center text-uppercase" >CARGOS</h1>
      </div>
      <div class="porlets-content">
        <!-- FORM INICIO -->

        <div class="container" >

          <h3 class=" text-center text-uppercase" >CARGOS REGISTRADOS</h3>

            <table style="text-align:right" class="table-bordered table-condensed" >

              <tr>
                <td>ID</td>
                <td>CARGO</td>
                <td>NIVEL</td>
                <td>ACCION</td>
              </tr>

              <tr>
                <td></td>
                <td></td>
                <td></td>
                <td>
                  <button class="btn btn-primary btn-sm">ELIMINAR</button>
                  <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modCargo" data-backdrop="static">MODIFICAR</button>

                  <!-- Modal Modificar-->
                  <div class="modal fade" id="modCargo" role="dialog">
                    <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                    <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    </div>
                    <div class="modal-body">
                    <table class="table-condensed text-right" align="center"  >
                    <tr>
                      <td>NOMBRE CARGO:</td>
                      <td><input type="text" required style="width:175px;"></td>
                    </tr>

                    <tr>
                      <td>NIVEL:</td>
                      <td>
                        <select name="" style="width:175px;">
                        <option value=""></option>
                        <option value=""></option>
                        <option value=""></option>
                        <option value=""></option>
                        </select>
                      </td>
                    </tr>
                    <tr>
                      <td colspan="2" align="center"><button class="btn btn-primary btn-sm">MODIFICAR CARGO</button></td>
                    </tr>
                    </table>
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    </div>
                    </div>

                    </div>
                  </div>
                  <!-- Modal //Modificar Cargo-->
                </td>
              <tr>
                <td></td>
                <td></td>
                <td></td>
                <td><button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#agregar" data-backdrop="static">AGREGAR</button>

                  <!-- Modal Modificar-->
                  <div class="modal fade" id="agregar" role="dialog">
                    <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                    <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    </div>
                    <div class="  modal-body">
                    <table class="table-condensed text-right" align="center" >
                    <tr>
                      <td>NOMBRE CARGO:</td>
                      <td><input type="text" required style="width:175px;"></td>
                    </tr>

                    <tr>
                      <td>NIVEL:</td>
                      <td>
                        <select name="" style="width:175px;">
                        <option value=""></option>
                        <option value=""></option>
                        <option value=""></option>
                        <option value=""></option>
                        </select>
                      </td>
                    </tr>
                    <tr>
                      <td colspan="2" align="center"><button class="btn btn-primary btn-sm">NUEVO CARGO</button></td>
                    </tr>
                    </table>
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    </div>
                    </div>

                    </div>
                  </div>
                  <!-- Modal //Modificar Cargo-->

                </td>

                <button class="btn btn-primary btn-lg">Aplicar y guardar</button>

              </tr>

            </table>
          <br>
          <br>
        </div>

        <!-- FORM FINAL -->

      </div><!--/porlets-content-->
    </div><!--/block-web-->
  </div><!--/col-md-12-->
</div><!--/row-->
<br>

<br>


<div class="container"><a href="{{route('configuracion')}}"><button class="btn btn-primary btn-lg">Volver</button></a></div>

<br>
<br>



@endsection
