
<!--DOCUMENTOS RENDIDOS-->
<div class="modal fade" id="regActividad" role="dialog" >
<div class="modal-dialog modal-lg">

<!-- Modal content-->
<div class="modal-content" >
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h4 class="modal-title text-center">REGISTRAR ACTIVIDAD</h4>
</div>
<div class="modal-body">



    <form id="form1" name="form1" method="post" action="{{ route('post.actividad') }}">
      {{ csrf_field() }}
      <table class="table-condensed text-right" align="center">
          <tr>

              <td>CLIENTE:</td>
              <td>
                  <input type="text" value="{{ $cliente->CLI_RUT }}" name="cliente" style="width:175px;" class="form-control" id="cliente" readOnly/>
              </td>
              <td>ACTIVIDAD</td>
              <td>
                  {{ Form::select('tp_act',App\TpActividad::pluck('DESC_TP_ACTIVIDAD','ID_TP_ACTIVIDAD'),null,
                  ['class'=>'form-control','style'=>'width:175px','placeholder'=>'Seleccione']) }}
              </td>

          </tr>
        <tr>
          <td>FECHA:</td>
          <td>
              {{ Form::date('fecha', \Carbon\Carbon::now()->format('d-m-Y'),['class'=>'form-control','style'=>'width:175px']) }}
              <!--<input type="date"  style="width:175px;" class="form-control" required="required"/>-->
          </td>

          <td>HORA:</td>
          <td>
              {{ Form::time('hora', \Carbon\Carbon::now(),['class'=>'form-control','style'=>'width:175px']) }}
              <!-- <input type="text"  style="width:175px;" class="form-control"required="required"/>-->
          </td>
        </tr>
          <tr>
              <td>DESCRIPCION:</td>
              <td>
                  <textarea id="descripcion" name="descripcion" class="form-control" style=" width:175px; max-width:175px; max-height:175px;" required></textarea>
              </td>
          </tr>

      </table>

      <button class="btn btn-primary btn-lg">REGISTRAR</button>
    </form>
  </div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
</div>
</div>
</div>
</div>
