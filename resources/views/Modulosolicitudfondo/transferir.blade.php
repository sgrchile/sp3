@extends('layouts.app')
@section('content')

<div class="row">
  <div class="col-xs-12 col-md-12 col-sm-12">
    <div class="block-web">
      <div class="header">
        <div class="actions"></div>
        <h1 class="text-center text-uppercase">Transferencia de fondos</h1>
      </div>
      <div class="porlets-content">
        <!-- FORM INICIO -->

        <form action="{{ isset($solicitud) ? route('patch.modificar.espera', $solicitud->SF_SOLICITUD_ID) : '' }}" method="post" id="patch_modificar_transferir">

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
      <td><label>TIPO CUENTA:</label></td>
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
    <!--
    <select id="selectBox" style="width:175px" >
    <!--si la opcion  es transferido abrir el modal de registro de egreso cuando este todo lleno
    <option value="0">Selecionar</option>
    <option value="1" data-toggle="modal" data-target="#regEgreso">Transferido</option>
    <option value="2">En espera</option>

    </select>
    -->
    <a href={{ route('patch.modificar.espera', isset($solicitud) ? $solicitud->SF_SOLICITUD_ID : '')}}><button class="btn btn-primary btn-lg">atrás</button></a>
    <!--<a href={{ route('post.regEgreso', isset($solicitud) ? $solicitud->SF_SOLICITUD_ID : '')}}><button class="btn btn-primary btn-lg">Transferido</button></a>-->
    <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#regEgreso" data-backdrop="static">  Transferido </button>
    </td>
    </tr>
  </table>
</form>
        <!-- FORM FINAL -->

      </div><!--/porlets-content-->
    </div><!--/block-web-->
  </div><!--/col-md-12-->
</div><!--/row-->

@include('modals.RegEgreso')


<!--MODAL SELECCION TRANSFERIR-->

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
    <td><a href={{route('get.modificar.transferir', $sfondo->SF_SOLICITUD_ID)}}><button class="btn btn-primary btn-sm"> &#10004;</button></a></td>
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

<script>
function fAgrega() {
    var x = document.getElementById("bfondo").getAttribute("fondo-id");
    document.getElementById("fondo").innerHTML = x;
}
</script>



<br>
<br>

</div>
<br>
<div class="container">
  <a href="{{route('SolFon')}}"><button class="btn btn-primary btn-lg">Volver</button></a>
</div>

<br>
@endsection
