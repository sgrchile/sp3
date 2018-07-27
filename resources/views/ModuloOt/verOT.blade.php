@extends('layouts.app')
@section('content')

<div class="container text-center" align="center">

  <div class="row">
    <div class="col-xs-12 col-md-12 col-sm-12">
      <div class="block-web">
        <div class="header">
          <div class="actions"></div>
          <h1 class="text-center text-uppercase">Estado OT</h1>
        </div>
        <div class="porlets-content">
          <!-- FORM INICIO -->

          <form id="form1" name="form1" method="post" action="">
            <table class="table-condensed " align="center" style="text-align: right;">
              <tr>
                <td><label>ID SERVICIO:</label></td>
                <td><input type="text" readonly class="form-control" value="{{ $orden_trabajo->OT_ID }}" /></td>
                <td><label>ID CLIENTE:</label></td>
                <td><input type="text" readonly class="form-control" value="{{ $orden_trabajo->OT_CLI_RUT }}"/></td>

              </tr>
              <tr>
                <td><label>CENTRO DE NEGOCIO:</label></td>
                <td><input type=" text" readonly class="form-control" value="{{ $orden_trabajo->centro_negocio->CT_PROCESO }}"/></td>
                <td><label>MONTO NETO:</label></td>
                <td><input type=" text" readonly class="form-control" value="{{ $orden_trabajo->OT_MONTO_NETO }}"/></td>

                <tr>
                  <td><label>ENCARGADO:</label></td>
                  <td><input type=" text" readonly class="form-control" value="{{ $orden_trabajo->OT_PER_RUT_ENCARGADO }}"/></td>

                  <td ><label>ESTADO:</label></td>
                  <td><input type=" text" id="estado" readonly class="form-control" value="{{ $orden_trabajo->estado->EST_DESC }}" /></td>
                </tr>

                <tr>

                  <td><label> FECHA DE INICIO:</label></td>
                  <td><input type="date" readonly class="form-control" value="{{ $orden_trabajo->OT_FECHA_INI }}"/></td>
                  <td><label> FECHA DE TERMINO:</label></td>
                  <td><input type="date" readonly class="form-control" value="{{ $orden_trabajo->OT_FECHA_FIN }}"/></td>

                </tr>

                <tr>
                  <td colspan="8" align="center"><label>OC/CONTRATO:</label>
                    <textarea rows="4" cols="50" style="width:500px; max-width:500px;" class="form-control" readonly id="oc">{{ $orden_trabajo->OT_OC }}</textarea></td>
                  </tr>

                  <tr>
                    <td colspan="8" align="center"><label>Descripcion:</label>
                      <textarea rows="4" cols="50" style="width:500px; max-width:500px" class="form-control" readonly>{{ $orden_trabajo->OT_DESC }}</textarea></td>
                    </tr>



                    <tr>

                      <td colspan="8" align="center"><label>
                        <a href="{{ route('modificaOt', $orden_trabajo->OT_ID) }}" class="btn btn-primary" id="myBtn3">Modificar</a>
                      </label>
                    </td>
                  </tr>

                </table>
              </form>


              <h1 class="text-center text-uppercase">Facturas</h1>

              <table class="table" border="1" align="center">

                <tr>
                  <td>Fecha</td>

                  <td>Folio</td>

                  <td>Cliente</td>

                  <td>Monto</td>

                  <td>Estado</td>
                </tr>

              </table>
              <br>



              <h1 class="text-center text-uppercase">Solicitudes De fondos</h1>

              <table class="table" border="1" align="center">

                <tr>
                  <td>ID</td>

                  <td>Fecha</td>

                  <td>Descripcion</td>

                  <td>Monto</td>

                  <td>Estado</td>
                </tr>

              </table>
              <br>
              <h1 class="text-center" >DOCUMENTOS PENDIENTES</h1>

              <table class="table" border="1" align="center">

                <tr>
                  <td>Rut</td>

                  <td>Tipo documento</td>

                  <td>Folio</td>


                  <td>Proveedor</td>


                  <td>Descripcion</td>

                  <td>Monto por pagar</td>
                </tr>
              </table>

              <h1 class="text-center" >PROVEEDORES</h1>

              <table class="table" border="1" align="center">

                <tr>
                  <td>Rut</td>
                  <td>Nombre</td>
                  <td>Tipo Item</td>
                  <td>Descripcion</td>
                  <td>Accion</td>
                </tr>

                <tr>
                  <td>##</td>
                  <td>##</td>
                  <td>## </td>
                  <td>##</td>
                  <td><button class='btn btn-primary btn-sm'>Evaluar</button></td>
                </tr>
              </table>

              <div class="container " align="center">
                <!--<button type="submit" id="ingDoc" class="btn btn-primary btn-lg">Modificar</button>-->
                <!--<button type="submit" id="ingDoc" class="btn btn-primary btn-lg">Imprimir</button>-->
              </div>

          <!-- FORM FINAL -->

        </div><!--/porlets-content-->
      </div><!--/block-web-->
    </div><!--/col-md-12-->
  </div><!--/row-->





</div>

<div class="container">  <a href="{{route('ModuloOt.listaOt')}}"><button class="btn btn-primary btn-lg">Volver</button></a></div>


<br>
</div>
@endsection
