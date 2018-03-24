
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

    <form id="form1" name="form1" method="put" action="{{ route('update.actividad')}}">
      {{ csrf_field() }}
      <table class="table-condensed text-right" align="center">
        <tr>
          <td>FECHA:</td>
          <td>
            {{ Form::date('fechaingreso',$act->FECHA_ACT,['class'=>'form-control','style'=>'width:175px','required']) }}
          </td>

          <td>HORA:</td>
          <td>
            {{ Form::time('hora', $act->HORA,['class'=>'form-control','style'=>'width:175px','required']) }}
            <!-- <input type="text"  style="width:175px;" class="form-control" required="required"/>-->
          </td>
        </tr>
        <tr>

          <td>CLIENTE:</td>
            <td>
            {{ Form::text('cliente',$act->ID_CLIENTE_ACT,['class'=>'form-control','style'=>'width:175px;','required','readOnly']) }}
          </td>

          <td>CONTACTO:</td>
          <td>
              {{ Form::select('contacto',App\Contactos::where('CONT_CLI_ID','=',$act->ID_CLIENTE_ACT)->pluck('CONT_NOM','ID_CONT'),$act->NOM_CONT_ACT,
              ['class'=>'form-control','style'=>'width:175px']) }}
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
