@extends('layouts.app')
@section('content')

<div class="container" align="center">

  <div class="row">
    <div class="col-xs-12 col-md-12 col-sm-12">
      <div class="block-web">
        <div class="header">
          <div class="actions"></div>
          <h1 class="text-center text-uppercase">SOLICITAR INSUMO</h1>
        </div>
        <div class="porlets-content">
          <!-- FORM INICIO -->

          <table class=" table-condensed table-bordered" align="center">
            <tr>

              <td>NOMBRE</td>
              <td>DESCRIPCION</td>
              <td>MARCA</td>
              <td>MOTIVO</td>
              <td>CANTIDAD</td>
              <td>COSTO</td>
              <td>ACCION</td>
            </tr>

            <tr>

              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td><input type="number"  min=0 style="width:80px"  class="form-control" readOnly/></td>
              <td><input type="number"  min=0 style="width:175px"  class="form-control" readOnly/></td>
              <td><button class="btn btn-primary btn-xs">ELIMINAR</button></td>
            </tr>

            <tr>
              <td>
                <select required style="width:175px;" class="form-control">>
                  <option></option>
                  <option></option>
                  <option></option>
                  <option></option>
                  <option></option>
                </select>
              </td>
              <td><input type="text"  style="width:175px"  class="form-control" readOnly/></td>
              <td><input type="text"  style="width:175px"  class="form-control" readOnly/></td>
              <td><textarea type="text"  style="width:175px; max-width:175px;" class="form-control"></textarea></td>
              <td><input type="number" min=0  style="width:80px"  class="form-control" /></td>
              <td><input type="number"  min=0 style="width:175px"  class="form-control" readOnly/></td>
              <td><button class="btn btn-primary btn-xs" >AGREGAR</button></td>
            </tr>

          </table>

          <table class="table-condensed">

            <tr>
              <td>&nbsp;</td>
              <td>TOTAL:</td>
              <td><input type="number"  style="width:175px"  class="form-control" readOnly/></td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
          </table>
          <br>
          <br>
          <button class="btn btn-primary btn-lg">SOLICITAR INSUMOS</button>

          <!-- Modal -->
          <div class="modal fade" id="AGREGAR" role="dialog">
            <div class="modal-dialog">

              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">×</button>
                  <h4 class="modal-title">INSUMOS</h4>
                </div>
                <div class="modal-body">
                  <table class=" table-condensed text-right">
                    <tr>
                      <td>NOMBRE DEL INSUMO:</td>
                      <td>
                        <select required style="width:175px;" class="form-control">>
                          <option>REFACCION</option>
                          <option>CONSUMIBLE</option>
                          <option>PRIMEROS AUXILIOS</option>
                          <option>ART. OFICINA</option>
                          <option>ART. ASEO</option>
                        </select>
                      </td>
                    </tr>

                    <tr>
                      <td>INFORMACION:</td>
                      <td><textarea type="text" readOnly  style="width:175px; max-width:175px;" class="form-control"></textarea></td>
                    </tr>


                    <tr>
                      <td>TIPO:</td>
                      <td>
                        <input type="text" readOnly  style="width:175px;" class="form-control" />
                      </td>
                    </tr>

                    <tr>
                      <td>VALOR:</td>
                      <td><input type="text" readOnly  style="width:175px;" class="form-control"></td>
                    </tr>

                    <tr>
                      <td>CANTIDAD:</td>
                      <td><input type="text" required  style="width:175px;" class="form-control"></td>
                    </tr>
                  </table>
                  <button class="btn btn-primary btn-lg">AGREGAR</button>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">CERRAR</button>
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
<div class="container">
<a href="javascript:history.back(1)"><button class="btn btn-primary btn-lg">Volver</button></a>

</div>
</a>
<br>

@endsection
