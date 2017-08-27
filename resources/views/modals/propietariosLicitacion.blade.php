<!-- Modal -->
<div class="modal fade" id="propietariosLicitacion" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">×</button>
        <h4 class="modal-title text-center">PROPIETARIOS</h4>
      </div>
      <div class="modal-body">

        <div class="table-responsive">
          <table class="table-condensed table-bordered" align="center">
            <tr>
              <td>RUT</td>
              <td>NOMBRE</td>
              <td  style="width:150px;">ACCION</td>
            </tr>
            <tr>
              <td></td>
              <td></td>

              <td>

                <button class="btn btn-primary btn-md" data-toggle="modal" data-target="#confirmacion" data-backdrop="static">AGREGAR</button>
              </td>
            </tr>
          </table>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">CERRAR </button>
      </div>
    </div>

  </div>
</div>




<!-- Modal -->
<div class="modal fade" id="confirmacion" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">×</button>
        <h4 class="modal-title text-center">CONFIRMACION</h4>
      </div>
      <div class="modal-body">
        <table align="center">
          <tr>
            <td>
              <button class="btn btn-primary btn-md">SI</button>
            </td>
            <td>
              <button class="btn btn-primary btn-md">NO</button>
            </td>
          </tr>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">CERRAR </button>
      </div>
    </div>

  </div>
</div>
