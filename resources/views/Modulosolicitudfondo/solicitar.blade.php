@extends('layouts.app')
@section('content')

    {!! Html::script('js/jquery-2.1.1.min.js') !!}
<div class="row">
  <div class="col-xs-12 col-md-12 col-sm-12">
    <div class="block-web">
      <div class="header">
        <div class="actions"></div>
        <h1 class="content-header text-center text-uppercase"><b>Solicitar fondos</b></h1>
      </div>
      <div class="porlets-content">
        <!-- FORM INICIO -->
        <div class="container-fluid " align="center" >

        <br>
        <div class="container" align="center">

          <form id="form1" name="form1" method="post" action="{{ route('insertSolFon') }}">
          {{ csrf_field() }}

          <h4 class="text-center text-uppercase">DATOS EMPRESA</h4>
          <table class="table-condensed form-group text-right text-uppercase"  align="center" style="text-align:right" >
          <tr>

          <td><label>TIPO DE CUENTA</label></td>

          <td>
          <select  style="width:275px" name="emp_tipocuenta" class="form-control" id="sol_tipocuenta">
          <!--Este select se llena segun empresa con la tabla CTAE_CUENTA_EMPRESA . CTAE_DESC-->
          @foreach($tipo_cuentas as $tipo_cuenta)
          	<option value="{{ $tipo_cuenta->TCTA_BCO }}">{{ $tipo_cuenta->TCTA_DESC }}</option>
          @endforeach
          </select>
          </td>

          <tr>
          <td><label>Nº de cuenta:</label></td>
          <td>
          <select  style="width:275px" name="emp_nrocuenta" class="form-control" id="sol_nrocuenta">
          <!--Este select se llena segun empresa con la tabla CTAE_CUENTA_EMPRESA . CTAE_NUMERO_CUENTA-->
          @foreach($cuentas as $cuenta)
          	<option value="{{ $cuenta->CTAE_ID }}">{{ $cuenta->CTAE_NUMERO_CUENTA }}</option>
          @endforeach
          </select>
          </td>
          </tr>

          <tr>
          <td><label>CAUSA:</label></td>
          <td>

          <select  style="width:275px" name="emp_causa" class="form-control" id="emp_causa" >
        <!--Este select se llena segun empresa con la tabla CTAE_CUENTA_EMPRESA-->
          <!-- CAUSA 1 ES IGUAL A OT-->
              <option value="">Seleccione</option>
          @foreach($causas as $causa)
          	<option value="{{ $causa->CAU_ID }}">{{ $causa->CAU_DESC }}</option>
          @endforeach
          </select>
          </td>
          </tr>

          <tr id="asociado">

              <td><label>ASOCIADO A:</label></td>
              <!--id de la orden de trabajo, esto solo aplica cuando la causa es igual a 1 y cuando no aplica se rellena el valor con 0,
              agregar una  condcicion para saber cuando es orden de trabajo, de otra manera este control no se muestra
              -->
              <td align="left"><input  style="width:275px" id="ot" name="emp_ot" class="form-control" readonly></td>
              <td><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#selOt" >Seleccionar</button></td>

          </tr>

              <tr>
                  <td><label>SOLICITANTE:</label></td><!--id del login que esta logueado-->

                  <td>
                      <input  style="width:275px" type="text" class="form-control" id="solRut" name="emp_solicitante" value={{ Auth::user()->PRO_RUN }} readonly>
                  </td>
              </tr>

          </table>

          <h4 class="text-center text-uppercase">DATOS RECEPTOR</h4>

          <table class="table-condensed"  align="center" style="text-align:right" >

          <tr>
          <td><label>RECEPTOR RUT:</label></td>
          <td><input type="text" style="width:275px" class="form-control" id="id_receptor" name="rec_id" readonly></td>
          <td> <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-backdrop="static" data-target="#selRecep">Seleccionar</button></td>
          </tr>
          <tr>
          <td><label>BANCO:</label> </td>
          <td>
          <select style="width:275px" class="form-control" name="rec_banco">
          @foreach($bancos as $banco)
          		<option value="{{ $banco->BCO_ID }}">{{ $banco->BCO_DESC }}</option>
          @endforeach
          </select>

          </td>
          </tr>

          <tr>
          <td><label>TIPO DE CUENTA:</label></td>
          <td>
          <select style="width:275px" class="form-control" name="rec_tipocuenta">
          @foreach($tipo_cuentas as $tipo_cuenta)
          	<option value="{{ $tipo_cuenta->TCTA_BCO }}">{{ $tipo_cuenta->TCTA_DESC }}</option>
          @endforeach
          </select>
          </td>
          </tr>


          <tr>
          <td><label>Nº DE CUENTA:</label></td>
          <td><input type="text" style="width:275px" value="{{ Auth::user()->PRO_N_CUENTA}}" id="nCuenta" required class="form-control" name="rec_nrocuenta"></td>
          </tr>

          <tr>
          <td><label>MONTO:</label></td>
          <td><input  type="number" style="width:275px" id="monto" required class="form-control" min="0" name="rec_monto"></td>
          </tr>

          <tr>
          <td  colspan="2" align="center"><label class="text-center">DESCRIPCION:</label></td>
          </tr>

          <tr>
          <td colspan="2" align="center">
          <textarea  style="max-width:600px;" class="form-control" placeholder="desglose aquí su solicitud" rows="5" type="text" id="descripcion" name="rec_descripcion" required/></textarea>
          </td>
          </tr>

          <tr>
          <td colspan="2" align="center"> <input class="btn btn-primary btn-lg"  onclick="return confirm('¿Desea Hacer la Solicitud de fondos?')" name="adsol_boton" type="submit" id="adsol_boton" value="Solicitar" /></td>
          </tr>

          </table>

          </form>
          </div>
        </div>
        <a href="{{route('SolFon')}}"><button class="btn btn-primary btn-lg">Volver</button></a>
        <!-- Modal -->
         <div class="modal fade" id="selOt" role="dialog" >
           <div class="modal-dialog modal-lg">

             <!-- Modal content-->
             <div class="modal-content" >
               <div class="modal-header">
                 <button type="button" class="close" data-dismiss="modal">&times;</button>
                 <h4 class="modal-title">Seleccionar	</h4>
               </div>
               <div class="modal-body">
                <table class="table table-bordered" id="table_ot">

                <tr>
                <td>ID</td>
                <td>OC</td>
                <td>CLIENTE</td>
                <td>CLI RUT</td>
                <td>Seleccionar</td>
                </tr>
             @foreach ($ordenes_trabajo as $ot)
               <tr>
                 <td>{{ $ot->OT_ID }}</td>
                 <td>{{ $ot->OT_OC }}</td>
                 <td>{{ App\Cliente::find($ot->OT_CLI_RUT)->CLI_NOMBRE }}</td>
                 <td>{{ App\Cliente::find($ot->OT_CLI_RUT)->CLI_RUT }}</td>
                 <td><button data-ot-id="{{ $ot->OT_ID }}" class="btn btn-primary btn-sm" data-dismiss="modal">&#10004;</button></td>
               </tr>
             @endforeach
                </table>
               </div>
               <div class="modal-footer">
                 <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
               </div>
             </div>
           </div>
         </div>

             <div class="modal fade" id="selRecep" 	>
             <div class="modal-dialog modal-lg">
             <div class="modal-content">
             <div class="modal-header">
             <button type="button" class="close" data-dismiss="modal">&times;</button>
             <h4 class="modal-title">Seleccionar Proveedor</h4>
             </div>
             <div class="modal-body">



             <table align="center" class="table table-bordered" id="table_personal">

             <tr>
             <td>RUT</td>
             <td>NOMBRE</td>
             <td>APELLIDO</td>
             <td>EMPRESA</td>
             <td>CARGO</td>
             <td>SELECCIONAR</td>
             </tr>
             	@foreach($personales as $personal)
             		<tr>
             			<td>{{ $personal->PRO_RUN }}</td>
             			<td>{{ $personal->PRO_NOMBRE }}</td>
             			<td>{{ $personal->PRO_APE_PAT }}</td>
                        <td>{{ App\Empresa::find($personal->PRO_EMP)->EMP_DESC }}</td>
                        @if(App\Cargo::find($personal->PRO_CAR_ID) != null)
             			<td>{{ App\Cargo::find($personal->PRO_CAR_ID)->CAR_DESC }}</td>
                        @else
                            <td>{!! 'Ninguno' !!}</td>
                        @endif
             			<td><button data-personal-id="{{ $personal->PRO_RUN }}" class="btn btn-primary btn-sm" data-dismiss="modal">&#10004;</button></td>
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

             <br>
             <br>

        <!-- FORM FINAL -->

      </div><!--/porlets-content-->
    </div><!--/block-web-->
  </div><!--/col-md-12-->
</div><!--/row-->

<script  type='text/javascript'>
    $(document).ready(function(){
        $("#emp_causa").on("change", function(){
            let causa = $(this).val();

            if (causa == 2 || causa == 5 || causa == 7){
                $("#ot").empty();
                $('#asociado').hide();
            }else{
                $('#asociado').show();
            }
        });
        $("#mostrar").on( "click", function() {
            $('#target').show(); //muestro mediante id
            $('.target').show(); //muestro mediante clase
        });
        $("#ocultar").on( "click", function() {
            $('#target').hide(); //oculto mediante id
            $('.target').hide(); //muestro mediante clase
        });
    });
</script>


@endsection
