
<div class="modal fade" id="editarCuenta" role="dialog" >
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content" >
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title text-center">EDITAR CUENTA</h4>
      </div>
      <div class="modal-body" align="center">

        {!! Form::open(['route' => 'put.editarCuenta', 'method' => 'put']) !!}
        {{ csrf_field() }}
        <table class="table-condensed text-right">

          <tr>
            <td>ID CUENTA</td>
            <td>
              {{ Form::text('idcuenta',$cuenta->ID_CTA_CONT,['class'=>'form-control','style'=>'width:175px','readOnly']) }}
            </td>
          </tr>

          <tr>
            <td>CLASE DE CUENTA:</td>
            <td>
              {{ Form::select('clasecta',App\ClaseCuenta::pluck('DESC_CL_CUENTA','ID_CL_CUENTA'),$cuenta->CL_CTA_CONT,
              ['class'=>'form-control','style'=>'width:175px']) }}
            </td>
          </tr>

          <tr>
            <td>TIPO DE CUENTA:</td>
            <td>
              {{ Form::select('tipocta',App\Tp_Cuenta::pluck('DESC_TP_CUENTA','ID_TP_CUENTA'),$cuenta->TP_CTA_CON,
          ['class'=>'form-control','style'=>'width:175px']) }}
            </td>
          </tr>

          <tr>
            <td>NOMBRE DE LA CUENTA</td>
            <td>
              {{ Form::text('nomcta',$cuenta->NOM_CTA_CONT,['class'=>'form-control','style'=>'width:175px','require' ]) }}
            </td>
          </tr>

        </table>

        <button class="btn btn-primary btn-lg">EDITAR</button>
        {!! Form::close() !!}

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
