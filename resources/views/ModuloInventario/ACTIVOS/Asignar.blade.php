@extends('layouts.app')
@section('content')
<div class="container" align="center">

  <div class="row">
    <div class="col-xs-12 col-md-12 col-sm-12">
      <div class="block-web">
        <div class="header">
          <div class="actions"></div>
          <h1 class=" text-center text-uppercase" >ASIGNACION DE ACTIVOS</h1>
        </div>
        <div class="porlets-content">
          <!-- FORM INICIO -->

          <table class="table-condensed text-right" align="center" >
            <tr>
              <td>PERSONAL:</td>
              <td><input type="text" width="175px"></td>
              <td>
                <button type="button" class="btn btn-primary btn-xs"  data-toggle="modal" data-target="#selPer" data-backdrop="static">  <i class="fa fa-search" style="font-size:29px"></i></button>
              </td>


            </tr>
          </table>

          <!-- Modal  SELECCION DE EMPLEADO-->
          <div class="modal fade" id="selPer" role="dialog">
            <div class="modal-dialog">
              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">×</button>
                  <h4 class="modal-title">SELECCIONAR EMPLEADO</h4>
                </div>
                <div class="modal-body">
                  <table class="table-bordered">
                    <tr>
                      <td>RUT</td>
                      <td>NOMBRE</td>
                      <td>APELLIDO</td>
                      <td>EMPRESA</td>
                      <td>CARGO</td>
                      <td>ACCION</td>
                    </tr>
                    @foreach($prov as $proveedores)
                    <tr>
                      <td>{{ $proveedores->PRO_RUN }}</td>
                      <td>{{ $proveedores->PRO_NOMBRE }}</td>
                      <td>{{ $proveedores->PRO_APE_PAT }}</td>
                      <td>{{ $proveedores->PRO_APE_MAT }}</td>
                      <td>{{ $proveedores->PRO_CAR_ID }}</td>
                      <td>ACCION</td>
                    </tr>
                    @endforeach

                  </table>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                </div>
              </div>
            </div>
          </div>
          <!-- Modal //SELECCION DE EMPLEADO-->

          <h3 class="text-uppercase text-center ">ACTIVOS ASIGNADOS</h3>
          <table class="table table-bordered" align="center">


            <td>ID</td>
            <td>DESCRIPCION</td>
            <td>INFO</td>
            <td>ESTADO</td>
            <td>ENCARGADO</td>
            <td>ACCION</td>
          </tr>


          <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>

            <td style="width:100px;">
              <button type="button" class="btn btn-primary btn-xs">DESASIGNAR</button>
            </td>
          </tr>

        </table>

          <h3 class="text-uppercase text-center ">ACTIVOS DISPONIBLES</h3>
          <table class="table table-bordered" align="center">


            <td>ID</td>
            <td>DESCRIPCION</td>
            <td>INFO</td>
            <td>ESTADO</td>
            <td>ENCARGADO</td>
            <td>ACCION</td>
          </tr>

          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td style="width:100px;"><button type="button" class="btn btn-primary btn-xs">ASIGNAR</button></td>

        </table>


          <!-- FORM FINAL -->

        </div><!--/porlets-content-->
      </div><!--/block-web-->
    </div><!--/col-md-12-->
  </div><!--/row-->

</div>
<br>
<br>
<div class="container">  <a href="{{route('indexActivos')}}"><button class="btn btn-primary btn-lg">Volver</button></a></div>
<br>
<br>


@endsection
