
<div class="modal fade " id="regEgreso" role="dialog">
    <div class="modal-dialog modal-lg" align="center">

        <!-- Modal content-->
        <div class="modal-content ">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">×</button>
                <h4 class="modal-title">REGISTRO DE EGRESO</h4>
            </div>
            <div class="modal-body">
                <form id="form1" name="form1" method="post" action="{{ route('moduloCaja.registro.post') }}">
                    {{ csrf_field() }}
                    <input type="hidden" name="_type" value="egreso">
                    <table class="table-condensed text-right" align="center">

                        <tr>
                            <td><label>EMPRESA:</label></td>
                            <td>
                                <!--colocar en el value el nombre de la empresa por la cual esta logueado el usuario-->
                                {{ Form::select('empresa',App\Empresa::pluck('EMP_DESC','EMP_ID'),Auth::user()->PRO_EMP,
                                ['style'=>'width:175px;','class'=>'form-control','readOnly']) }}
                            </td>
                        </tr>

                        <tr>
                            <td><label>TIPO CUENTA:</label></td>
                            <td>
                                {{ Form::select('tipo_cuenta',App\TipoCuenta::pluck('TCTA_DESC','TCTA_BCO'),Auth::user()->PRO_TCTA_BCO,
                                ['style'=>'width:175px;','class'=>'form-control','readOnly']) }}
                            </td>
                        </tr>

                        <tr>
                            <td><label>Nº DE CUENTA:</label></td>
                            <td>
                                {{ Form::select('nro_cuenta',App\CuentaEmpresa::pluck('CTAE_NUMERO_CUENTA','CTAE_ID'),$solicitud->SF_CTAC,
                                ['style'=>'width:175px;','class'=>'form-control','readOnly']) }}
                                <!--<input type="text" style="width:175px;" class="form-control" name="nro_cuenta" readOnly  value="{{ $solicitud->SF_CTAC }}">-->
                            </td>
                        </tr>

                        <tr>
                            <td><label>FECHA:</label></td>
                            <td>
                                <input type="date" value="{{ Carbon\Carbon::now()->toDateString() }}" style="width:175px;" class="form-control" name="fecha" readOnly>
                            </td>
                        </tr>

                        <tr>
                            <td><label>FUENTE:</label></td>
                            <td>
                                {{ Form::select('fuente',App\Fuente::pluck('FTE_DESC','FTE_ID'),null,
                                ['style'=>'width:175px;','class'=>'form-control','readOnly']) }}
                            </td>
                        </tr>

                        <tr>
                            <td><label>CAUSA:</label></td>

                            <!--heredada por la solicitud de fondo, si  viene -->
                            <td>
                                {{ Form::select('causa',App\Causa::pluck('CAU_DESC','CAU_ID'),$solicitud->causa->CAU_ID,
                              ['style'=>'width:175px;','class'=>'form-control','readOnly']) }}
                            </td>

                        </tr>

                        <tr>
                            <td><label>FOLIO:</label></td>
                            <td><input type="text" style="width:175px;" class="form-control" name="folio" required></td>
                        </tr>

                        <tr>
                            <td><label>DESCRIPCION:</label></td>
                            <td><textarea type="text" style="width:175px; max-width:175px;" class="form-control" name="descripcion" readOnly>{{ $solicitud->SF_DESC }}</textarea></td>
                        </tr>

                        <tr>
                            <td><label>DOCUMENTO FUENTE:</label></td>

                            <td>
                            {{ Form::select('tipo_documento',App\TipoDocumento::pluck('TDC_DESC','TDC_ID'),null,
                           ['style'=>'width:175px;','class'=>'form-control']) }}
                            <!--<input type="text" style="width:175px;" class="form-control" name="docFte" readOnly value="SOLICITUD DE FONDO">-->
                            </td>

                        </tr>

                        <tr>
                            <td><label>Nº DE DOCUMENTO:</label></td>
                            <td><input type="text" style="width:175px;" class="form-control" name="nro_documento"
                                       required></td>
                        </tr>

                        <tr>
                            <td><label>MONTO:</label></td>
                            <td><input type="number" min="0" value="{{ $solicitud->SF_MONTO }}" style="width:175px;" class="form-control" name="monto"
                                       readOnly></td>
                        </tr>
                        <tr>
                            <td colspan="2" align="center">
                                <input class="btn btn-primary btn-lg" name="egreso_boton" type="submit" id="egreso_boton" value="REGISTRAR EGRESO" /></td>
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