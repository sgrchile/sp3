@extends('layouts.app')
@section('content')

<div class="row">
  <div class="col-xs-12 col-md-12 col-sm-12">
    <div class="block-web">
      <div class="header">
        <div class="actions"></div>
        <h1 class="text-center">Evaluar Solicitud de Fondos</h1>
      </div>
      <div class="porlets-content">
        <!-- FORM INICIO -->

        <form action="{{ isset($solicitud) ? route('patch.modificar.evaluar', $solicitud->SF_SOLICITUD_ID) : '' }}" method="post" id="patch.modificar.evaluar">

  <table class="table-condensed"  align="center" style="text-align:right" >
          {{ csrf_field() }}
          {{ method_field('PATCH') }}
    <tr>
        <td colspan="3"><h2 class="text-center text-uppercase">DATOS EMPRESA</h2></td>
    </tr>

    <tr>

        <td><label>Número de Solicitud:</label></td>
        <td><input style="width:175px" class="form-control" type="number" id="nro_solicitud" value="{{ isset($solicitud) ? $solicitud->SF_SOLICITUD_ID : '' }}" id="idsol" readonly></td>
        <td><a class="btn btn-primary" data-toggle="modal" data-target="#selTransferir">traer</a></td>
    </tr>

    <tr>
      <td><label>TIPO DE CUENTA</label></td>
      <td><input style="width:175px"  type="text" readonly class="form-control" value="{{ isset($solicitud) ? $solicitud->tipo_cuenta->TCTA_DESC : '' }}"></td>
    </tr>

    <tr>
      <td><label>CAUSA:</label></td>
      <td><input style="width:175px" type="text" id="causa" readonly class="form-control" value="{{ isset($solicitud) ? $solicitud->causa->CAU_DESC : '' }}"></td>
    </tr>

    <tr>
      <td><label>ASOCIADO A:</label></td>
      <td><input  style="width:175px"  type="text" id="asoc" class="form-control" readonly value="{{ isset($solicitud) ? $solicitud->SF_ASOCIADO_A : '' }}"/></td>
    </tr>

    <tr>
      <td><label>SOLICITANTE:</label></td>
      <td><input  style="width:175px"  type="text" id="solRut" readonly value="{{ isset($solicitud) ? $solicitud->SF_SOLICITANTE_RUT : '' }}" class="form-control"></td>
    </tr>

    <tr>
    <td colspan="3"><h2 class="text-center text-uppercase">DATOS RECEPTOR</h2></td>
    </tr>

    <tr>
      <td><label> RUT RECEPTOR :</label></td>
      <td><input type="text" style="width:175px" id="recepRut" readonly class="form-control" value="{{ isset($solicitud) ? $solicitud->SF_RECEPTOR_RUT : '' }}"></td>
    </tr>
    <tr>
      <td><label>CUENTA:</label></td>
      <td><input type="text" style="width:175px"  id="nCuentaAsoc" readonly class="form-control" value="{{ isset($solicitud) ? $solicitud->SF_N_CTA_RECEPTOR : '' }}"></td>
    </tr>

    <tr>
      <td><label>BANCO:</label> </td>
      <td><input type="text" style="width:175px"  id="banco" readonly class="form-control" value="{{ isset($solicitud) ? $solicitud->banco->BCO_DESC : '' }}"></td>
    </tr>
    <tr>
      <td><label>Nº DE CUENTA:</label></td>
      <td><input style="width:175px" type="text" id="nCuenta" readonly class="form-control" value="{{ isset($solicitud) ? $solicitud->tipo_cuenta->TCTA_DESC: '' }}"></td>
    </tr>

    <tr>
    <td><label>MONTO:</label></td>
    <td><input  type="number"  style="width:175px"  id="monto" readonly class="form-control" value="{{ isset($solicitud) ? $solicitud->SF_MONTO : '' }}"></td>
    </tr>

    <tr>
    <td  colspan="4" align="center"><label class="text-center">DESCRIPCIÓN:</label></td>
    </tr>

    <tr>
    <td colspan="4" align="center">
    <textarea  style="max-width:600px;" class="form-control" rows="5" id="Descripcion" readonly>{{ isset($solicitud) ? $solicitud->SF_DESC : '' }}</textarea>
    </td>
    </tr>

  </table>

  <table class="table-condensed"  align="center" style="text-align:right" >
    <tr>
      <td>
        <select  class="form-control" required name="slcambiarestado" style="width:175px" >
        <option value="0">Seleccione</option>
        <option value="5">Aprobar</option>
        <option value="4">Rechazar</option>
        </select>
      </td>

      <td>
        <input type="submit" class="btn btn-primary btn-lg" value="Aplicar" />
        </form>
      </td>
    </tr>
  </table>
</form>
        <!-- FORM FINAL -->

      </div><!--/porlets-content-->
    </div><!--/block-web-->
  </div><!--/col-md-12-->
</div><!--/row-->





<!--MODAL SELECCION EVALUAR-->

<div class="modal fade" id="selTransferir" role="dialog" >
    <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content" >
    <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title text-center">Seleccion de solicitud</h4>
    </div>
    <div class="modal-body">
    <table align="center" class="table table-bordered" id="table_sfondos">
    <tr>
    <td>ID</td>
    <td>FECHA</td>
    <td>RECEPTOR</td>
    <td>MONTO</td>
    <td>DESCRIPCIÓN</td>
    <td>SELECCIONAR</td>
    </tr>
    @foreach($sfondos as $sfondo)
    <tr>
    <td>{{ $sfondo->SF_SOLICITUD_ID  }}</td>
    <td>{{ $sfondo->SF_FECHA }}</td>
    <td>{{ $sfondo->SF_RECEPTOR }}</td>
    <td>{{ $sfondo->SF_MONTO }}</td>
    <td>{{ $sfondo->SF_DESC }}</td>
    <td><a href={{route('get.modificar.evaluar', $sfondo->SF_SOLICITUD_ID)}}><button class="btn btn-primary btn-sm"> &#10004;</button></a></td>
    </tr>
    @endforeach
    </table>
    </div>
    <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
    </div>
    </div>
    </div>
</div>
<!--SELECCIONAR EVALUAR-->


<br>
<br>

</div>
<br>
<div class="container">
  <a href="{{route('SolFon')}}"><button class="btn btn-primary btn-lg">Volver</button></a>
</div>

<br>
@endsection
