@extends('layouts.app')
@section('content')


<div class="container" align="center">

  <div class="row">
    <div class="col-xs-12 col-md-12 col-sm-12">
      <div class="block-web">
        <div class="header">
          <div class="actions"></div>
          <h1 class="text-center text-uppercase">Procesar OT</h1>
        </div>
        <div class="porlets-content">
          <!-- FORM INICIO -->


          <form id="form1" name="form1" method="post" action="{{ route('patch.orden_trabajo', $orden_trabajo->OT_ID) }}">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}
            <table class="table-condensed" align="center" style="text-align: right;"  >
              <tr>
                <td><label>ID SERVICIO:</label></td>
                <td><input type="text" name="id_servicio" class="form-control" value="{{ $orden_trabajo->OT_ID }}" readonly/></td>
                <td><label>ID CLIENTE:</label></td>
                <td>
                  <select name="id_cliente" class="form-control">
                    @foreach($clientes as $cliente)
                    <option
                    value="{{ $cliente->CLI_RUT }}"
                    {{
                      $orden_trabajo->OT_CLI_RUT == $cliente->CLI_RUT
                      ? 'selected'
                      : ''
                    }}
                    >{{ $cliente->CLI_RUT }}</option>
                    @endforeach
                  </select>
                </td>

              </tr>
              <tr>
                <td><label>CENTRO DE NEGOCIO:</label></td>
                <td>
                  <select name="centro_negocio" class="form-control">
                    @foreach($centro_negocios as $centro_negocio)
                    <option
                    value="{{ $centro_negocio->CT_ID }}"
                    {{
                      $orden_trabajo->OT_CENTRO_NEGOCIO_ID == $centro_negocio->CT_ID
                      ? 'selected'
                      : ''
                    }}
                    >{{ $centro_negocio->CT_PROCESO }}</option>
                    @endforeach
                  </select>
                </td>
                <td><label>MONTO NETO:</label></td>
                <td><input type="number" name="monto_neto" class="form-control" value="{{ $orden_trabajo->OT_MONTO_NETO }}"/></td>
              </tr>
              <tr>
                <td><label>ENCARGADO:</label></td>
                <td>
                  <select name="id_encargado" class="form-control">
                    @foreach($encargados as $encargado)
                    <option
                    value="{{ $encargado->PRO_RUN}}"
                    {{
                      $orden_trabajo->OT_PER_RUT_ENCARGADO == $encargado->PRO_RUN
                      ? 'selected'
                      : ''
                    }}
                    >{{ $encargado->PRO_NOMBRE }}</option>
                    @endforeach
                  </select>
                </td>
                <!--esto debe ser un select-->
                <td ><label>ESTADO:</label></td>
                <td>
                  <select name="id_estado" class="form-control">
                    @foreach($estados as $estado)
                    <option
                    value="{{ $estado->EST_ID}}"
                    {{
                      $orden_trabajo->OT_EST_ID == $estado->EST_DESC
                      ? 'selected'
                      : ''
                    }}
                    >{{ $estado->EST_DESC }}</option>
                    @endforeach
                  </select>
                </td>
              </tr>

              <tr>

                <td><label> FECHA DE INICIO:</label></td>
                <td><input type="date" readonly class="form-control" value="{{ $orden_trabajo->OT_FECHA_INI }}" /></td>
                <td><label> FECHA DE TERMINO:</label></td>
                <td><input type="date" class="form-control" name="fecha_fin" value="{{ $orden_trabajo->OT_FECHA_FIN }}" /></td>

              </tr>
              <tr>
                <td><label> SOLICITUD FONDO $</label></td>
                <td><input type="text" readonly class="form-control" value="{{$sumaSF}}" /></td>
                <td><label> MARGEN $</label></td>
                <td><input type="text" readonly class="form-control" value="{{$margen_pesos}}" /></td>
              </tr>

              <tr>
                <td><label>MARGEN %</label></td>
                <td><input type="text" readonly class="form-control" value="{{$margen_porcentual}}" /></td>
              </tr>

              <tr>
                <td colspan="8" align="center"><label>OC/CONTRATO:</label>
                  <br>
                  <textarea rows="4" cols="50" style="width:500px; max-width:500px;" name="oc" id="oc" class="form-control">{{ $orden_trabajo->OT_OC }}</textarea></td>
                </tr>

                <tr>
                  <td colspan="8" align="center"><label>Descripción:</label>
                    <br>
                    <textarea rows="4" cols="50" style="width:500px; max-width:500px" name="descripcion" class="form-control">{{ $orden_trabajo->OT_DESC }}</textarea></td>
                  </tr>



                  <tr>

                    <td colspan="8" align="center"><label>
                      <button type="submit" class="btn btn-primary btn-md" id="myBtn3">Procesar</button>
                    </label>
                  </td>
                </tr>
              </table>



            </form>

            <br>


            <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#solFondo" data-backdrop="static">Solicitar fondos</button>

            <!-- Modal SOLICITAR FONDO-->
            <div class="modal fade " id="solFondo" role="dialog" >
              <div class="modal-dialog modal-lg" align="center">

                <!-- Modal content-->
                <div class="modal-content " style="width:900px" >
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                  </div>
                  <div class="modal-body ">

                    <form id="form1" name="form1" method="post" action="{{ route('insertSolFon') }}">
                      {!! csrf_field () !!}
                      <h2 class="text-center text-uppercase">DATOS EMPRESA</h2>
                      <table class="table-condensed"  align="center" style="text-align:right" >


                        <tr>

                          <td><label>TIPO DE CUENTA</label></td>

                          <td>
                            <!--Este select se llena segun empresa con la tabla CTAE_CUENTA_EMPRESA-->
                            {{ Form::select('emp_tipocuenta',  App\TipoCuenta::all()
                            ->where('TCTA_BCO','=',Auth::user()->PRO_TCTA_BCO)
                            ->pluck('TCTA_DESC','TCTA_BCO'),
                            ['id'=>'emp_tipocuenta','style'=>'width:175px']) }}
                          </td>
                        </tr>
                        <tr>

                          <td><label>NRO DE CUENTA</label></td>

                          <td>
                            <!--Este select se llena segun empresa con la tabla CTAE_CUENTA_EMPRESA-->
                            {{ Form::select('emp_nrocuenta',  App\CuentaEmpresa::all()
                            ->where('CTAE_EMP_ID','=',Auth::user()->PRO_EMP)->pluck('CTAE_NUMERO_CUENTA','CTAE_ID'),
                            ['id'=>'emp_nrocuenta','style'=>'width:175px']) }}
                          </td>
                        </tr>

                        <tr>
                          <td><label>CAUSA:</label></td>
                          <td>
                            {{ Form::select('emp_causa',  App\Causa::pluck('CAU_DESC','CAU_ID'),
                            ['id'=>'emp_causa','style'=>'width:175px','required']) }}
                          </td>
                        </tr>

                        <tr>
                          <td><label>ASOCIADO A:</label></td><!--id de la orden de trabajo-->
                          <td><input  style="width:175px" name="emp_ot" type="text" id="emp_ot" value="{!! $orden_trabajo->OT_ID !!}" readonly required="required"/>
                          </td>
                        </tr>

                        <tr>
                          <td><label>SOLICITANTE:</label></td><!--id del login que esta logueado-->
                          <td><input  style="width:175px" name="emp_solicitante" value="{{ Auth::user()->PRO_RUN }}" readonly type="text" id="emp_solicitante"></td>
                        </tr>

                      </table>

                      <h2 class="text-center text-uppercase">DATOS RECEPTOR</h2>

                      <table class="table-condensed"  align="center" style="text-align:right" >

                        <tr>
                          <td><label>RECEPTOR RUT:</label></td>
                          <td><input type="text" name="rec_id" id="rec_id" value="{{ Auth::user()->PRO_RUN }}" readonly></td>
                        </tr>


                        <tr>
                          <td><label> TIPO CUENTA:</label></td>
                          <td>
                            {{ Form::select('rec_tipocuenta',App\TipoCuenta::all()
                            ->where('TCTA_BCO','=',Auth::user()->PRO_TCTA_BCO)
                            ->pluck('TCTA_DESC','TCTA_BCO'),null,
                            ['id'=>'rec_tipocuenta','class'=>'form-control','style'=>'width:175px']) }}
                          </td>
                        </tr>

                        <tr>
                          <td><label>BANCO:</label> </td>
                          <td>
                            {{ Form::select('rec_banco',App\Banco::all()
                            ->where('BCO_ID','=',Auth::user()->PRO_BCO_ID)
                            ->pluck('BCO_DESC','BCO_ID'),null,
                            ['class'=>'form-control','style'=>'width:175px']) }}
                          </td>
                        </tr>

                        <tr>
                          <td><label>Nº DE CUENTA:</label></td>
                          <td><input type="text" id="rec_nrocuenta" name="rec_nrocuenta" value="{{ Auth::user()->PRO_N_CUENTA }}" readonly required="required"></td>
                        </tr>

                        <tr>
                          <td><label>MONTO:</label></td>
                          <td><input  style="width:175px" name="rec_monto" required="required" type="number"  min="0" id="rec_monto"></td>
                        </tr>

                        <tr>
                          <td  colspan="2" align="center"><label class="text-center">DESCRIPCION:</label></td>
                        </tr>

                        <tr>
                          <td colspan="2" align="center">
                            <textarea  style="max-width:600px;" class="form-control" rows="5" name="rec_descripcion" type="text" id="rec_descripcion" required/></textarea>
                          </td>
                        </tr>

                        <tr>
                          <td colspan="2" align="center"> <input class="btn btn-primary btn-lg" name="adsol_boton" type="submit" id="adsol_boton" value="Solicitar" /></td>
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

            <!--// Modal Transferir-->

            <!-- Modal -->
            <div class="modal fade" id="myModal" role="dialog" >
              <div class="modal-dialog modal-lg">

                <!-- Modal content-->
                <div class="modal-content" >
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title text-center">Seleccion de solicitud</h4>
                  </div>
                  <div class="modal-body">


                    <!--no muestra datos por que esta condicionado para mostar todos las solicitudes que no esten finalizadas o aprobadas-->
                    <table class='table-bordered' align='center' border = '1'>
                      <tr>
                        <td>ID Sol</td>
                        <td>Tipo cuenta</td>
                        <td>Solicitante</td>
                      </tr>

                      <tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td>
                        <td>$row[3]</td>

                        <td>?sol=$row[0]> Seleccionar</td></tr>

                      </table>

                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- //Modal seleccion-->


              <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#docPen" data-backdrop="static">Ingresar documento pendiente</button>


              <!-- Modal INGRESO DE DOCUMENTO PENDIENTE-->
              <div class="modal fade " id="docPen" role="dialog" >
                <div class="modal-dialog modal-lg" align="center">

                  <!-- Modal content-->
                  <div class="modal-content " >
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">×</button>
                      <h4 class="modal-title">INGRESAR DOCUMENTO PENDIENTE</h4>
                    </div>
                    <div class="modal-body">

                      <form id="form1" name="form1" method="post" action="">

                        <table  class="table-condensed" style="text-align:right; border:none" >

                          <tr>
                            <td><label>FECHA DE DOCUMENTO</label></td>
                            <td><input type="date" required style="width:175px;"></td>
                          </tr>


                          <tr>
                            <td><label>TIPO DOCUMENTO:</label></td>
                            <td>
                              <select  style="width:175px;">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                              </select>
                            </td>
                          </tr>

                          <tr>
                            <td><label>FOLIO:</label></td>
                            <td><input type="text" required style="width:175px;"></td>
                          </tr>

                          <tr>
                            <!--
                            MODAL CON TODOS LOS PROVEEDORES
                            FILTRO POR RUT Y LUEGO TODOS LOS OTROS DATOS

                            ESTADO ENTRA POR DEFECTO "PENDIENTE", EMPRESA SEGUN USUARIO

                          -->
                          <td><label>RUT PROVEEDOR:</label></td>
                          <td><input type="text" required style="width:175px;"></td>
                        </tr>

                        <tr>
                          <td><label>GLOSA:</label></td>
                          <td><input type="number" required style="width:175px;"></td>
                        </tr>

                        <tr>
                          <td><label>TOTAL:</label></td>
                          <td><input type="number" required style="width:175px;"></td>
                        </tr>

                        <tr>
                          <td><label>NETO:</label></td>
                          <td><input type="number" required style="width:175px;"></td>
                        </tr>

                        <tr>
                          <td><label>IMPUESTO:</label></td>
                          <td><input type="number" required style="width:175px;"></td>
                        </tr>

                        <tr><td colspan="2" align="center"><button type="submit" id="ingDoc" class="btn btn-primary btn-lg">Ingresar documento</button></td></tr>

                      </table>

                    </form>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                  </div>
                </div>
              </div>
            </div>

            <!--// Modal INGRESO DE DOCUMENTO PENDIENTE-->


            <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#solfact" data-backdrop="static">Solicitar facturación</button>

            <!-- Modal SOLICITAR FACTURACION-->
            <div class="modal fade " id="solfact" role="dialog" >
              <div class="modal-dialog modal-lg" align="center">

                <!-- Modal content-->
                <div class="modal-content " >
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h4 class="modal-title">SOLICITAR FACTURACION</h4>
                  </div>
                  <div class="modal-body">

                    <form id="form1" name="form1" method="post" action="">

                      <table  class="table-condensed" style="text-align:right; border:none" >

                        <tr>
                          <td><label>TIPO DE FACTURA:</label></td>
                          <td>
                            <select style="width:175px;">
                              <option>1</option>
                              <option>2</option>
                            </select>
                          </td>
                        </tr>

                        <tr>
                          <td><label>GLOSA:</label></td>
                          <td><input type="text" required></td>
                        </tr>

                        <tr>
                          <td><label>MONTO NETO:</label></td>
                          <td><input type="text" required></td>
                        </tr>

                        <tr>
                          <td colspan="2" align="center"><button type="submit" id="ingDoc" class="btn btn-primary btn-lg">Solicitar facturación</button>
                          </td>
                        </tr>
                        <tr>
                          <td colspan="2" align="center"><a href=""> <button type="submit" class="btn btn-primary btn-lg"> Proveedor </button></a>
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

            <!--// Modal SOLICITAR FACTURACION-->


          <!-- FORM FINAL -->

        </div><!--/porlets-content-->
      </div><!--/block-web-->
    </div><!--/col-md-12-->
  </div><!--/row-->




</div>
<br>
<div class="container"><a href="{{route('ModuloOt.listaOt')}}"><button class="btn btn-primary btn-lg">Volver</button></a></div>

<br>
<br>

@endsection
