
<!--DOCUMENTOS RENDIDOS-->
<div class="modal fade" id="ModActividad" role="dialog" >
<div class="modal-dialog modal-lg">

<!-- Modal content-->
<div class="modal-content" >
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h4 class="modal-title text-center">MODIFICAR ACTIVIDAD</h4>
</div>
<div class="modal-body">



    <form id="form1" name="form1" method="post" action="{{ route('post.clientes') }}">
      {{ csrf_field() }}
      <table class="table-condensed text-right" align="center">
        <tr>
          <td>FECHA:</td>
          <td>
              <input type="date"  style="width:175px;" class="form-control" required="required"/>
          </td>

          <td>HORA:</td>
          <td>
              <input type="text"  style="width:175px;" class="form-control"required="required"/>
          </td>
        </tr>
        <tr>

          <td>CLIENTE:</td>
          <td><input type="text"  style="width:175px;" class="form-control"required="required"/></td>

          <td>CONTACTO:</td>
          <td>
              <input type="text"  style="width:175px;" class="form-control" required/>
          </td>

        </tr>

      </table>

      <button class="btn btn-primary btn-lg">MODIFICAR</button>
    </form>
  </div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
</div>
</div>
</div>
</div>
