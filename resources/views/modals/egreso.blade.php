<!-- Modal REGISTRO DE INGRESO-->
<div class="modal fade " id="regEgreso" role="dialog" >
  <div class="modal-dialog modal-lg" align="center">
  <!-- Modal content-->
  <div class="modal-content " >
  <div class="modal-header">
  <button type="button" class="close" data-dismiss="modal">×</button>
  <h4 class="modal-title">REGISTRO DE EGRESO</h4>
  </div>
  <div class="modal-body">
  <!--
  ESTADO POR DEFECTO SON
  POR CONCILIAR
  TIPO DE MOVIMIENTO ES INGRESO POR DEFECTO
  -->
  <form id="form1" name="form1" method="post" action="{{ route('moduloCaja.registro.post') }}">
  {{ csrf_field() }}
  <input type="hidden" name="_type" value="egreso"/>
  <table class="table-condensed " align="center" style=" border-collapse: separate; border-spacing: 10px; " >
  <tr>
  <td><label>EMPRESA:</label></td>
  <td>
  <select style="width:225px;" class="form-control" name="empresa">
      @foreach($empresas as $empresa)
          <option value="{{ $empresa->EMP_ID }}">{{ $empresa->EMP_DESC }}</option>
      @endforeach
  </select>
  </td>
  </tr>
  <tr>
  <td><label>TIPO CUENTA:</label></td>
  <td>
  <select style="width:225px;" class="form-control" name="tipo_cuenta" required>
      @foreach($tipo_cuentas as $tipo_cuenta)
          <option value="{{ $tipo_cuenta->TCTA_BCO }}">{{ $tipo_cuenta->TCTA_DESC }}</option>
      @endforeach
  </select>
  </td>
  </tr>
  <tr>
  <td><label>Nº DE CUENTA:</label></td>
  <td>
      <select style="width:225px;" class="form-control" name="nro_cuenta" required>
          @foreach($cuentas as $cuenta)
              <option value="{{ $cuenta->CTAE_ID }}">{{ $cuenta->CTAE_NUMERO_CUENTA }}</option>
          @endforeach
      </select>
  </td>
  </tr>
  <tr>
  <td><label>FECHA:</label></td>
  <td><input type="date" style="width:225px;" value="{!! $fecha=strftime( "%Y-%m-%d", time() ) !!}" class="form-control" name="fecha" readonly> </td>
  </tr>
  <tr>
  <td><label>FUENTE:</label></td>
  <td><select style="width:225px;" class="form-control" name="fuente" required>
      @foreach($fuentes as $fuente)
          <option value="{{ $fuente->FTE_ID }}">{{ $fuente->FTE_DESC }}</option>
      @endforeach
  </select> </td>
  </tr>
  <tr>
  <td><label>CAUSA:</label></td>
  <td>
  <select style="width:225px;" class="form-control" name="causa" required>
      @foreach($causas as $causa)
          <option value="{{ $causa->CAU_ID }}">{{ $causa->CAU_DESC }}</option>
      @endforeach
  </select>
  </td>
  </tr>
  <tr>
  <td><label>FOLIO:</label></td>
  <td><input type="text" style="width:225px;" class="form-control" name="folio" required> </td>
  </tr>
  <tr>
  <td><label>DESCRIPCION:</label></td>
  <td><textarea type="text" style="width:225px; max-width:225px;" class="form-control" name="descripcion" required></textarea> </td>
  </tr>
  <tr>
  <td><label>DOCUMENTO FUENTE:</label></td>
  <td>
  <select style="width:225px;" class="form-control" name="tipo_documento" required>
      @foreach($tipo_documentos as $tipo_documento)
          <option value="{{ $tipo_documento->TDC_ID }}">{{ $tipo_documento->TDC_DESC }}</option>
      @endforeach
  </select>
  </td>
  </tr>
  <tr>
  <td><label>Nº DE DOCUMENTO:</label></td>
  <td><input type="text" style="width:225px;" class="form-control" name="nro_documento" required> </td>
  </tr>
  <tr>
  <td><label>MONTO:</label></td>
  <td><input type="number" min="0" style="width:225px;" class="form-control" name="monto" required> </td>
  </tr>
  <tr>
  <td colspan="2" align="center">
  <button type="submit" class="btn btn-primary btn-lg">REGISTRAR EGRESO</button>
  </td>
  </tr>
  </table>
  </form>
  </div>
  <div class="modal-footer">
  <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
  </div>
  </div>
  </div>
</div>
<!--// Modal REGISTRO DE INGRESO-->
