@extends('layouts.app')
@section('content')


<br>
<div class="container-fluid " align="center">

  <div class="row">
    <div class="col-xs-12 col-md-12 col-sm-12">
      <div class="block-web">
        <div class="header">
          <div class="actions"></div>
          <h1 class="text-center text-uppercase">    Ingreso Documentos</h1>

        </div>
        <div class="porlets-content">
          <!-- FORM INICIO -->

          <form id="form1" name="form1" method="post" action="{{ route('crearIngDoc.post') }}">
              {{ csrf_field() }}
                     <!-- <input name="sol" type="hidden" value="170119182016" rehacerlo="" agregar="" campo="" de="" rut="" proveedor="">-->
            	<table class="table-condensed" align="center">
                      <tbody>
                        <tr>
                          <td><label>Proveedor</label></td>
                          <td><input  style="width:175px" placeholder="Ingrese Rut" type="text" class="form-control" name="rutProv" id="rut" ></td>
                          <td><label>N° Solicitud</label></td>
                          <td><input  style="width:175px" type="text" name="idsol" id="idsol" value="{{ $sfondos->SF_SOLICITUD_ID  }}" class="form-control" readonly></td>
                          <td><label>Tipo Doc:</label></td>
                          <td>
                              <select style="width:175px;" name="tipodoc" id="tipodoc" class="form-control" required>
                                    <option value="0">Seleccione</option>
                                    @foreach($tipodocs as $tipodoc)
                                      <option value="{{ $tipodoc->TDC_ID }}">{{ $tipodoc->TDC_DESC }}</option>
                                    @endforeach
                               </select>
                          </td>
                          <td><label>Fecha: </label></td>
                          <td><input   type="date"  style="width:175px" name="fecha"class="form-control" id="fecha" required="required"></td>
                        </tr>
                        <tr>
                          <td><label>Nº documento:</label></td>
                          <td> <input  style="width:175px" name="nodoc" type="text" id="nodoc" class="form-control" required="required"></td>
                          <td><label>Receptor:</label></td>
                          <td> <input  style="width:175px" placeholder="Ingrese Rut" name="rutRecep" type="text" id="prove" class="form-control" required="required"></td>
                          <td><label>Tipo Gasto:</label></td>
                          <td>
                              <select style="width:175px;" name="tipogasto" class="form-control" id="tipogasto">
                                <option value="0">Seleccione</option>
                                @foreach($tipogastos as $tipogasto)
                                  <option value="{{ $tipogasto->TPG_ID }}">{{ $tipogasto->TPG_DESC }}</option>
                                @endforeach
                              </select>
                          </td>
                          <td><label>Monto: </label></td>
                          <td><input style="width:175px" name="monto" type="text" id="monto" class="form-control" required="required"></td>
                        </tr>
                      </tbody>
            	</table>

                <br>
            <center><input class="btn btn-primary btn-lg" name="adot_boton" type="submit" id="adot_boton" value="Agregar Documentos"></center>
          </form>
          <br>
          <table class="table" align="center" >

                      <tr>
                          <td><label>ID</label></td>
                          <td><label>Fecha</label></td>
                          <td><label>Tipo</label></td>
                          <td><label>Nº documento</label></td>
                          <td><label>Proveedor</label></td>
                          <td><label>Monto</label></td>
                          <td><label>Gasto</label></td>
                          <td><label>Acción</label></td>
                          <!-- <td><label>Acción</label></td> -->
                      </tr>
                      @foreach($docsPorSolFon as $docs)
                      		<tr>
                    			<td>{{ $docs->DOC_ID }}</td>
                    			<td>{{ $docs->DOC_FECHA }}</td>
                          <td>{{ App\TipoDocumento::find($docs->DOC_TIPO_DOC)->TDC_DESC }}</td>
                          <td>{{ $docs->DOC_N_DOC }}</td>
                    			<td>{{ $docs->DOC_PROVEEDOR }}</td>
                    			<td>{{ $docs->DOC_MONTO }}</td>
                          <td>{{ App\TipoGasto::find($docs->DOC_TIPO_GASTO)->TPG_DESC }}</td>
                          <td><a href={{route('eliminarDoc', $docs->DOC_ID)}}><button class="btn btn-primary btn-sm">Eliminar</button></a></td>
                    		</tr>
                    	@endforeach

          </table>

        </div>

        <form id="form1" name="form1" method="post" action="{{ route('patch.ModIngDocSf', $sfondos->SF_SOLICITUD_ID) }}">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}
        <table class="table-condensed">
          <tr>
          <td>Total Monto Documentos:</td>
          <td><b><input  style="width:175px"name="suma" type="text" id="suma" value="{{$sumita}}" class="form-control" readonly></b></td>
          <td>Total Solicitud de Fondo:</td>
          <td><b><input  style="width:175px"name="montosolfon" type="text" id="montosolfon" value="{{$sfondos->SF_MONTO}}" class="form-control" readonly></b></td>
          </tr>
        </table>
        <br>
        <!-- FORM FINAL -->

      </div><!--/porlets-content-->
    </div><!--/block-web-->
  </div><!--/col-md-12-->
</div><!--/row-->
        <center><button type="submit" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal1" >Rendir Documentos</button></a></center>
<br>


</div>

<a href="{{route('SolFon')}}"><button class="btn btn-primary btn-lg">Volver</button></a>
@endsection
