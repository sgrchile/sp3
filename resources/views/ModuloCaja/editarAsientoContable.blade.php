@extends('layouts.app')
@section('content')

  <div class="row">
    <div class="col-xs-12 col-md-12 col-sm-12">
      <div class="block-web">
        <div class="header">
          <div class="actions"></div>
          <h1 class="text-center text-uppercase">MODULO DE CAJA</h1>
        </div>
        <div class="porlets-content"  >
          <!-- FORM INICIO -->

          <h3 class="text-center">EDITAR ASIENTO CONTABLE</h3>

          <table class="table-condensed" align="center" style="text-align:right;">

            <tr>
              <td>TIPO DE MOVIMIENTO</td>
              <td>
                {{ Form::select('tp_movimiento',App\TipoMovimiento::pluck('TMOV_DESC','TMOV_ID'),null,['class'=>'form-control']) }}
              </td>
            </tr>
            <tr>
              <td>FECHA</td>
              <td>
                {{ Form::date('fecasiento',\Carbon\Carbon::now()->format('d-m-Y'),['class'=>'form-control']) }}
              </td>
            </tr>

            <tr>
              <td>COMENTARIO</td>
              <td> <textarea  class="form-control" style=" width:175px; max-width:175px; max-height:175px;"></textarea></td>
            </tr>




          </table>

          <table class="table table-bordered">

            <tr>
              <td>CUENTA</td>
              <td>DEBE</td>
              <td>HABER</td>
              <td>ACCION</td>
            </tr>

            <tr>
              <td><input type="number" readonly class="form-control" style="width:175px;"></td>
              <td><input type="number" readonly class="form-control" style="width:175px;"></td>
              <td><input type="number" readonly  class="form-control" style="width:175px;"></td>
              <td>    <button class="btn btn-primary btn-sm">ELIMINAR</button></td>
            </tr>
            <tr>
              <td>
                {{ Form::select('tp_cuenta',App\Tp_Cuenta::pluck('DESC_TP_CUENTA','ID_TP_CUENTA'),null,['class'=>'form-control']) }}
              </td>
              <td><input type="number"  class="form-control" style="width:175px;"></td>
              <td><input type="number"  class="form-control" style="width:175px;"></td>
              <td>  <button class="btn btn-primary btn-sm">AGREGAR</button></td>

            </tr>
          </table>

          <div class="container" align="center">            
          <button class="btn btn-primary btn-lg">EDITAR</button>
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
