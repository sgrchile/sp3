@extends('layouts.app')
@section('content')

<div class="container-fluid " align="center">
<br>

<div class="row">
  <div class="col-xs-12 col-md-12 col-sm-12">
    <div class="block-web">
      <div class="header">
        <div class="actions"></div>
      <h1 class="text-center text-uppercase">Rendición Solicitud de Fondos</h1>
      </div>
      <div class="porlets-content">
        <!-- FORM INICIO -->

        <table class="table-condensed"  align="center" style="text-align:right" >
          <tr>
            <td colspan="3">
              <h2 class="text-center text-uppercase">DATOS EMPRESA</h2>
            </td>
          </tr>

          <tr >
            <td><label>Número de Solicitud:</label>  </td>
            <td><input style="width:175px" class="form-control" name="nsolfon" type="number"  id="idsol" readonly></td>
            <td><button class="btn btn-primary btn-md" data-toggle="modal" data-target="#selEvaluar">Consultar Aquí</button></td>

          </tr>

          <tr>
            <td><label>TIPO DE CUENTA</label></td>
            <td><input type="text" class="form-control" style="width:175px" readonly></td>
          </tr>
          <tr>
            <td><label>CAUSA:</label></td>
            <td><input type="text" class="form-control" id="causa" style="width:175px" value="" readonly></td>
          </tr>

          <tr>
            <td><label>ASOCIADO A:</label></td>
            <td><input class="form-control"  style="width:175px"  type="text" id="asoc" 	value="" readonly/></td>
          </tr>
          <tr>
            <td><label>SOLICITANTE:</label></td>
            <td><input  class="form-control" style="width:175px"  type="text" id="solRut" value="" readonly></td>
          </tr>

          <tr>
            <td colspan="3" >
              <h2 class="text-center text-uppercase">DATOS RECEPTOR</h2>
            </td>
          </tr>

          <tr>
            <td><label>RECEPTOR RUT:</label></td>
            <td><input class="form-control" type="text" style="width:175px" id="recepRut" value="" readonly></td>
          </tr>
          <tr>
            <td><label>CUENTA:</label></td>
            <td><input class="form-control" type="text" style="width:175px"  id="nCuentaAsoc" value="" readonly></td>
          </tr>

          <tr>
            <td><label>BANCO:</label> </td>
            <td><input class="form-control" type="text" style="width:175px"  id="banco" value="" readonly></td>
          </tr>
          <tr>

            <td><label>Nº DE CUENTA:</label></td>
            <td><input class="form-control" type="text" id="nCuenta" style="width:175px" value="" readonly></td>
          </tr>

          <tr>
            <td><label>MONTO:</label></td>
            <td><input class="form-control"  type="number"  style="width:175px"  id="monto" value="" readonly></td>
          </tr>

          <tr>
            <td  colspan="4" align="center"><label class="text-center">DESCRIPCIÓN:</label></td>
          </tr>

          <tr>
            <td colspan="4" align="center">
            <textarea  style="max-width:600px;" class="form-control" rows="5" name="desc" type="text" id="Descripcion" value="" readonly></textarea>
            </td>
          </tr>

        </table>

        <button onclick="return confirm('¿Desea Hacer la Rendicion de fondos?')" class="btn btn-primary btn-lg">RENDIR</button>

        <button class="btn btn-primary btn-lg">INGRESAR DOCUMENTOS </button>

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
    <td>ACCIÓN</td>
    </tr>
    	@foreach($sfondos as $sfondo)
    		<tr>
    			<td>{{$loop->iteration}}</td>
    			<td>{{ $sfondo->SF_FECHA }}</td>
    			<td>{{ $sfondo->SF_RECEPTOR }}</td>
    			<td>{{ $sfondo->SF_MONTO }}</td>
    			<td>{{ $sfondo->SF_DESC }}</td>
    			<!-- <td><button id="bfondo" data-fondo-id="{{ $sfondo->SF_SOLICITUD_ID  }}" class="btn btn-primary btn-sm" data-dismiss="modal">&#10004;</button></td> -->
          <td><a href={{route('ingresardocSf', $sfondo->SF_SOLICITUD_ID)}}><button class="btn btn-primary btn-sm">Ingresar Documentos</button></a></td>
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

<!-- Modal rendir-->
<div class="modal fade" id="myModal1" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title text-center">Datos de rendición</h4>
      </div>
      <div class="modal-body">
        <table class="table-condensed" align="center">
          <tr>
              <td>Monto</td>
              <td><input type="text" name="desc" disabled></td>
          </tr>
          <tr>
              <td>Rendido</td>
              <td><input type="text" name="monto" disabled></td>
          </tr>
          <tr>
              <td>Diferencia</td>
              <td><input type="text" name="rend" disabled></td>
          </tr>
      </table>
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-default" id="myBtn3">Aceptar</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
 <!-- Modal -->


<div class="container">
<a href="{{route('SolFon')}}"><button class="btn btn-primary btn-lg">Volver</button></a>
</div>
<br>
<br>


@endsection
