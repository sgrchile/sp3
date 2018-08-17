@extends('layouts.app')
@section('content')

<div class="container-fluid " align="center">

  <div class="row">
    <div class="col-xs-12 col-md-12 col-sm-12">
      <div class="block-web">
        <div class="header">
          <div class="actions"></div>
          <h1 class="text-center text-uppercase">Solicitar fondos</h1>
        </div>
        <div class="porlets-content">
          <!-- FORM INICIO -->

          <form id="form1" name="form1" method="post" action="{{ route('insertSolFon') }}">
            {{ csrf_field() }}

            <h4 class="text-center text-uppercase">DATOS EMPRESA</h4>
            <table class="table-condensed"  align="center" style="text-align:right" >
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

              </tr>

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

                  <select  style="width:175px" name="emp_causa" class="form-control" id="sol_tipocuenta">
                    <!--Este select se llena segun empresa con la tabla CTAE_CUENTA_EMPRESA-->
                    <!-- CAUSA 1 ES IGUAL A OT-->
                    @foreach($causas as $causa)
                    <option value="{{ $causa->CAU_ID }}">{{ $causa->CAU_DESC }}</option>
                    @endforeach
                  </select>
                </td>
              </tr>

              <tr>
                <td><label>ASOCIADO A:</label></td>
                <!--id de la orden de trabajo, esto solo aplica cuando la causa es igual a 1 y cuando no aplica se rellena el valor con 0,
                agregar una  condcicion para saber cuando es orden de trabajo, de otra manera este control no se muestra
              -->

              <td align="left"><input  style="width:275px" id="ot" name="emp_ot" class="form-control" readonly></td>
              <td><button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#selOt" >Seleccionar OT</button></td>
            </tr>
            <tr>
              <td><label>SOLICITANTE:</label></td><!--id del login que esta logueado-->

              <td><input  style="width:275px" type="text" class="form-control" id="solRut" name="emp_solicitante" value={{ Auth::user()->PRO_RUN }} readonly></td>
            </tr>

          </table>

          <h4 class="text-center text-uppercase">DATOS RECEPTOR</h4>

          <table class="table-condensed"  align="center" style="text-align:right" >

            <tr>
              <td><label>RECEPTOR RUT:</label></td>
              <td><input type="text" style="width:275px" class="form-control" id="id_receptor" name="rec_id" readonly></td>
              <td> <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-backdrop="static" data-target="#selRecep">Seleccionar</button></td>
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
              <td><input type="text" style="width:275px" id="nCuenta" required class="form-control" name="rec_nrocuenta"></td>
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
                <textarea  style="max-width:600px;" class="form-control" rows="5" type="text" id="descripcion" name="rec_descripcion" required/></textarea>
              </td>
            </tr>

            <tr>
              <td colspan="2" align="center"> <input class="btn btn-primary btn-lg" name="adsol_boton" type="submit" id="adsol_boton" value="Solicitar" /></td>
            </tr>

          </table>

        </form>
      </div>
    </div>

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
                        <td>{{ $ot->cliente->CLI_NOMBRE }}</td>
                        <td>{{ $ot->cliente->CLI_RUT }}</td>
                        <td><button data-ot-id="{{ $ot->OT_ID }}" class="btn btn-primary btn-xs" data-dismiss="modal">&#10004;</button></td>
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
                        <td>{{ $personal->PER_RUT }}</td>
                        <td>{{ $personal->PER_NOMBRE }}</td>
                        <td>{{ $personal->PER_APE }}</td>
                        <td>{{ $personal->empresa->EMP_DESC }}</td>
                        <td>{{ $personal->cargo->CAR_DESC }}</td>
                        <td><button data-personal-id="{{ $personal->PER_RUT }}" class="btn btn-primary btn-xs" data-dismiss="modal">&#10004;</button></td>
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

          </div>
          <br>
          <br>
          <a href="javascript:history.back(1)"><button class="btn btn-primary btn-lg">Volver</button></a>

          <!-- FORM FINAL -->

        </div><!--/porlets-content-->
      </div><!--/block-web-->
    </div><!--/col-md-12-->
  </div><!--/row-->


  <br>




</div>
@endsection
