@extends('layouts.app')
@section('content')

<div class="container-fluid " align="center">

  <br>

  <div class="row">
    <div class="col-xs-12 col-md-12 col-sm-12">
      <div class="block-web">
        <div class="header">
          <div class="actions"></div>
          <h1 class="text-center text-uppercase">Documento por consolidar</h1>
        </div>
        <div class="porlets-content">
          <!-- FORM INICIO -->
          <h2 class="text-center text-uppercase">DATOS EMPRESA</h2>


          <form action="{{ isset($solicitud) ? route('get.modificar.consolidar', $solicitud->SF_SOLICITUD_ID) : '' }}" method="post" id="patch.modificar.consolidar">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}
          <table class="table-condensed"  align="center" style="text-align:right" >
            <tr>
              <td align="center"><label>Número de Solicitud:</label></td>
              <td><input style="width:175px" class="form-control"	 name="nsolfon" type="number" value="{{ isset($solicitud) ? $solicitud->SF_SOLICITUD_ID : '' }}" id="idsol" readonly></td>
              <td>
              <a class="btn btn-primary" data-toggle="modal" data-target="#selEvaluar">Consultar Aquí</a></td>

            </tr>
            <tr>
              <td><label>TIPO DE CUENTA</label></td>
              <td><input style="width:175px"  type="text" readonly class="form-control" value="{{ isset($solicitud) ? $solicitud->tipo_cuenta->TCTA_DESC : '' }}"></td>
              <td><label>CAUSA:</label></td>
              <td><input style="width:175px" type="text" id="causa" readonly class="form-control" value="{{ isset($solicitud) ? $solicitud->causa->CAU_DESC : '' }}"></td>
            </tr>

            <tr>
              <td><label>ASOCIADO A:</label></td>
              <td><input  style="width:175px"  type="text" id="asoc" class="form-control" readonly value="{{ isset($solicitud) ? $solicitud->SF_ASOCIADO_A : '' }}"/></td>
              <td><label>SOLICITANTE:</label></td>
              <td><input  style="width:175px"  type="text" id="solRut" readonly value="{{ isset($solicitud) ? $solicitud->SF_SOLICITANTE_RUT : '' }}" class="form-control"></td>
            </tr>
          </table>
          <h2 class="text-center text-uppercase">DATOS RECEPTOR</h2>

          <table class="table-condensed"  align="center" style="text-align:right" >
            <tr>
              <td><label>RECEPTOR RUT:</label></td>
              <td><input type="text" style="width:175px" id="recepRut" readonly class="form-control" value="{{ isset($solicitud) ? $solicitud->SF_RECEPTOR_RUT : '' }}"></td>
              <td><label>CUENTA:</label></td>
              <td><input type="text" style="width:175px"  id="nCuentaAsoc" readonly class="form-control" value="{{ isset($solicitud) ? $solicitud->SF_N_CTA_RECEPTOR : '' }}"></td>
            </tr>
            <tr>
              <td><label>BANCO:</label> </td>
              <td><input type="text" style="width:175px"  id="banco" readonly class="form-control" value="{{ isset($solicitud) ? $solicitud->banco->BCO_DESC : '' }}"></td>
              <td><label>Nº DE CUENTA:</label></td>
              <td><input style="width:175px" type="text" id="nCuenta" readonly class="form-control" value="{{ isset($solicitud) ? $solicitud->tipo_cuenta->TCTA_DESC: '' }}"></td>
            </tr>
            <tr>
              <td  colspan="4" align="center"><label class="text-center">DESCRIPCIÓN:</label></td>
            </tr>
              <tr>
              <td colspan="4" align="center">
              <textarea  style="max-width:600px;" class="form-control" rows="5" id="Descripcion" readonly>{{ isset($solicitud) ? $solicitud->SF_DESC : '' }}</textarea>
            </td>
            </tr>
            <tr>
              <td><label>MONTO:</label> </td>
              <td><input  type="number"  style="width:175px"  id="monto" readonly class="form-control" value="{{ isset($solicitud) ? $solicitud->SF_MONTO : '' }}"></td>
              <td><label>RENDIDO:</label></td>
              <td><input  type="number"  style="width:175px"  id="rendido" readonly class="form-control" value="{{ isset($solicitud) ? $solicitud->SF_MONTO_RENDIDO	 : '' }}"></td>
            </tr>
            <tr>

              <td><label>DIFERENCIA:</label> </td>
              <td><input  type="number"  style="width:175px"  id="diferencia" readonly class="form-control" value="{{ isset($solicitud) ? $solicitud->SF_DIFERENCIA	 : '' }}"></td>

            </tr>
          </table>
          <table class="table-condensed"  align="center" style="text-align:right" >
            <tr>
              <td>
              <input type="submit" class="btn btn-primary btn-lg" value="Consolidar"></a>
              </form>

              <a class="btn btn-primary btn-lg" data-toggle="modal" data-target="#documentos">Ver Documentos</a></td>
              </td>
            </tr>
          </table>

          <!-- FORM FINAL -->

        </div><!--/porlets-content-->
      </div><!--/block-web-->
    </div><!--/col-md-12-->
  </div><!--/row-->

</div>


<!--IMPORTANTE AQUIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIII ESTA LA SELECCION DE EL FONDO A EVALUAR-->
<!--SELECCIONAR EVALUAR-->
<div class="modal fade" id="selEvaluar" role="dialog" >
  <div class="modal-dialog modal-lg">

  <!-- Modal content-->
  <div class="modal-content" >
  <div class="modal-header">
  <button type="button" class="close" data-dismiss="modal">&times;</button>
  <h4 class="modal-title text-center">Selección de solicitud</h4>
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
    			<td><a href={{route('get.modificar.consolidar', $sfondo->SF_SOLICITUD_ID)}}><button class="btn btn-primary btn-sm"> &#10004;</button></a></td>
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
@include('modals.docsConsolidarSf')
<br>
<br>
<a href="{{route('SolFon')}}"><button class="btn btn-primary btn-lg">Volver</button></a>
</div>

@endsection
