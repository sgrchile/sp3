
<div class="modal fade" id="nuevaCuenta" role="dialog" >
<div class="modal-dialog modal-lg">

<!-- Modal content-->
<div class="modal-content" >
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title text-center">NUEVA CUENTA</h4>
    </div>
    <div class="modal-body" align="center">
      {!! Form::open(['route' => 'post.ctacontable', 'method' => 'post']) !!}
      {{ csrf_field() }}

      <table class="table-condensed text-right">

        <tr>
          <td>EMPRESA</td>
          <td>
            {{ Form::select('empresa',App\Empresa::pluck('EMP_DESC','EMP_ID'),null,
            ['class'=>'form-control','style'=>'width:175px','placeholder'=>'Seleccione','id'=>'empresa','require']) }}
          </td>
        </tr>

        <tr>
          <td>TIPO DE CUENTA:</td>
          <td>
              {{ Form::select('tpcuenta',App\Tp_Cuenta::pluck('DESC_TP_CUENTA','ID_TP_CUENTA'),null,
              ['class'=>'form-control','style'=>'width:175px','placeholder'=>'Seleccione','id'=>'tpcuenta','require']) }}
          </td>
        </tr>

        <tr>
          <td>CLASE DE CUENTA:</td>
          <td>
            {{ Form::select('clasecuenta',App\ClaseCuenta::pluck('DESC_CL_CUENTA','ID_CL_CUENTA'),null,
            ['class'=>'form-control','style'=>'width:175px','placeholder'=>'Seleccione','id'=>'clasecuenta','require']) }}
          </td>
        </tr>

        <tr>
          <td>NOMBRE DE LA CUENTA</td>
          <td>{{ Form::text('nomcta',null,['class'=>'form-control','style'=>'width:175px','require' ]) }}</td>
        </tr>

      </table>

      <a><button class="btn btn-primary btn-lg">REGISTRAR</button></a>

      {!! Form::close() !!}
    </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
