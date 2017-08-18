@extends('layouts.app')
@section('content')


<div class="container"  align="center">
  <div class="row">
    <div class="col-xs-12 col-md-12 col-sm-12">
      <div class="block-web">
        <div class="header">
          <div class="actions"></div>
          <h1 class="text-center text-uppercase">PREPARACION DE GUIA DE DESPACHO</h1>
        </div>
        <div class="porlets-content">
          <!-- FORM INICIO -->

          <table class="table-condensed text-right" align="center">
            <tr>
              <td>BUSCAR OC:</td>
              <td ><input type="text" required class="form-control" style="width:175px;"/></td>
              <td align="left"><button type="button" class="btn btn-primary btn-xs">  <i class="fa fa-search" style="font-size:29px"></i></button></td>
            </tr>


          </table>



          <table class="table-condensed table-bordered">

            <tr>
              <td>COD OC.</td>
              <td>COD. ARTICULO</td>
              <td>DESC. ART.</td>
              <td>CANTIDAD</td>
              <td>VALOR</td>
              <td>TOTAL</td>
              <td>FECHA DE CREACION</td>
              <td>ESTADO</td>
              <td>ESTADO DE EJECUCION</td>
              <td >ACCION</td>


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
              <td></td>


              <td><a href="{{route('SolicitudDeFondoOc')}}" data-toggle="modal" data-target="#guiaDespacho" data-backdrop="static"><button class="btn btn-primary btn-xs">ING. GUIA DE DESAPACHO</button></a></td>
            </tr>

          </table>

          <!-- Modal -->
          <div class="modal fade" id="guiaDespacho" role="dialog">
            <div class="modal-dialog">

              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">×</button>
                  <h4 class="modal-title text-center">DETALLE DEL ENVIO</h4>
                </div>
                <div class="modal-body " align="center">

                  <table class="table-condensed text-right" align="center">




                    <tr>
                      <td>DIRECCION DE ENTREGA</td>
                      <td><textarea type="text" required  style="width:175px; max-width:175px;" class="form-control"></textarea></td>
                    </tr>

                    <tr>
                      <td>EMPRESA DE PAQUETERIA:</td>
                      <td><input type="text" required  style="width:175px;" class="form-control"></td>
                    </tr>

                    <tr>
                      <td>Nº DE SEGUIMIENTO:</td>
                      <td><input type="text" required  style="width:175px;" class="form-control"></td>
                    </tr>

                  </table>
                  <button class="btn btn-primary btn-lg">ENVIAR</button>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                </div>
              </div>

            </div>
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
