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
        <td><a class="btn btn-primary" data-toggle="modal" data-target="#selTransferir">Consultar Aquí</a></td>
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
    <!--
    <select id="selectBox" style="width:175px" >
    <!--si la opcion  es transferido abrir el modal de registro de egreso cuando este todo lleno
    <option value="0">Selecionar</option>
    <option value="1" data-toggle="modal" data-target="#regEgreso">Transferido</option>
    <option value="2">En espera</option>

    </select>
    -->
    <a href={{ route('patch.modificar.espera', isset($solicitud) ? $solicitud->SF_SOLICITUD_ID : '')}}><button class="btn btn-primary btn-lg">En Espera</button></a>
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

<!-- Modal REGISTRO DE EGRESO-->
<div class="modal fade " id="regEgreso" role="dialog">
    <div class="modal-dialog modal-lg" align="center">

        <!-- Modal content-->
        <div class="modal-content ">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">×</button>
                <h4 class="modal-title">REGISTRO DE EGRESO</h4>
            </div>
            <div class="modal-body">
                <!--

                ESTADO POR DEFECTO SON
                POR CONCILIAR
                TIPO DE MOVIMIENTO ES EGRESO POR DEFECTO

                -->

                <form id="registro_egreso_ajax" name="form2" method="post"
                      action="{{ route('moduloCaja.registro.post') }}">
                    {{ csrf_field() }}
                    <input type="hidden" name="_type" value="egreso"/>
                    <table class="table-condensed " align="center"
                           style=" border-collapse: separate; border-spacing: 10px; ">

                        <tr>
                            <td><label>EMPRESA:</label></td>
                            <td>
                              <!--colocar en el value el nombre de la empresa por la cual esta logueado el usuario-->
                              <input type="text" class="form-control" readOnly value="" style="width:175px;">
                            </td>
                        </tr>

                        <tr>
                            <td><label>TIPO CUENTA:</label></td>
                            <td>
                                <input  type="text" style="width:175px;" class="form-control" name="tipo_cuenta" readOnly>
                            </td>
                        </tr>

                        <tr>
                            <td><label>Nº DE CUENTA:</label></td>
                            <td>
                                <input type="text" style="width:175px;" class="form-control" name="nro_cuenta" readOnly  value="">


                            </td>
                        </tr>

                        <tr>
                            <td><label>FECHA:</label></td>
                            <td><input type="date" style="width:175px;" class="form-control" name="fecha" readOnly></td>
                        </tr>

                        <tr>
                            <td><label>FUENTE:</label></td>
                            <td><input type="text" style="width:175px;" class="form-control"  readOnly></td>
                        </tr>

                        <tr>
                            <td><label>CAUSA:</label></td>

                              <!--heredada por la solicitud de fondo, si  viene -->
                              <td><input type="text" style="width:175px;" class="form-control"  readOnly></td>

                        </tr>

                        <tr>
                            <td><label>FOLIO:</label></td>
                            <td><input type="text" style="width:175px;" class="form-control" name="folio" required></td>
                        </tr>

                        <tr>
                            <td><label>DESCRIPCION:</label></td>
                            <td><textarea type="text" style="width:175px; max-width:175px;" class="form-control" name="descripcion" readOnly></textarea></td>
                        </tr>

                        <tr>
                            <td><label>DOCUMENTO FUENTE:</label></td>

                            <td><input type="text" style="width:175px;" class="form-control" name="docFte" readOnly value="SOLICITUD DE FONDO"></td>

                        </tr>

                        <tr>
                            <td><label>Nº DE DOCUMENTO:</label></td>
                            <td><input type="text" style="width:175px;" class="form-control" name="nro_documento"
                                       required></td>
                        </tr>

                        <tr>
                            <td><label>MONTO:</label></td>
                            <td><input type="number" min="0" style="width:175px;" class="form-control" name="monto"
                                       readOnly></td>
                        </tr>
                        <tr>
                            <td colspan="2" align="center">
                                <button type="submit" class="btn btn-primary btn-lg">REGISTRAR EGRESO</button>
                            </td>
                        </tr>
                    </table>
                </form>
                <div class="alert alert-success hide" id="success_egreso"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!--// Modal REGISTRO DE EGRESO-->



<br>
<br>

</div>
<br>
<div class="container">
  <a href="javascript:history.back(1)"><button class="btn btn-primary btn-lg">Volver</button></a>
</div>

<br>
@endsection
