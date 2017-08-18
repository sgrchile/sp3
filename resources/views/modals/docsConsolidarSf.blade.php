<!--DOCUMENTOS RENDIDOS-->
<div class="modal fade" id="documentos" role="dialog" >
<div class="modal-dialog modal-lg">

<!-- Modal content-->
<div class="modal-content" >
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h4 class="modal-title text-center">DOCUMENTOS RENDIDOS</h4>
</div>
<div class="modal-body">
  <table align="center" class="table table-bordered" id="table_sfondos">

              <tr>
                  <td><label>ID</label></td>
                  <td><label>Fecha</label></td>
                  <td><label>Tipo</label></td>
                  <td><label>Nº documento</label></td>
                  <td><label>Proveedor</label></td>
                  <td><label>Monto</label></td>
                  <td><label>Gasto</label></td>
              </tr>
              @foreach($documentos as $docs)
              		<tr>
            			<td>{{ $docs->DOC_ID }}</td>
            			<td>{{ $docs->DOC_FECHA }}</td>
                  <td>{{ App\TipoDocumento::find($docs->DOC_TIPO_DOC)->TDC_DESC }}</td>
                  <td>{{ $docs->DOC_N_DOC }}</td>
            			<td>{{ $docs->DOC_PROVEEDOR }}</td>
            			<td>{{ $docs->DOC_MONTO }}</td>
                  <td>{{ App\TipoGasto::find($docs->DOC_TIPO_GASTO)->TPG_DESC }}</td>
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
<!--DOCUMENTOS RENDIDOS-->
