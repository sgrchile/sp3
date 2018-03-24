
<div class="modal fade " id="regOportunidad" role="dialog">
    <div class="modal-dialog modal-lg" align="center">

        <!-- Modal content-->
        <div class="modal-content ">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">×</button>
                <h4 class="modal-title">REGISTRAR OPORTUNIDAD  </h4>
            </div>
            <div class="modal-body">

              <table class="table-condensed text-right" align="center">
                <tr>
                  <td>ETIQUETA:</td>
                  <td>
                      <input name="nombre" type="text"  style="width:175px;" class="form-control" id="nombre" pattern="[A-Za-z]{4-16}" required="required"/>
                  </td>

                  <td>CONTACTO:</td>
                  <td>
                    {{ Form::select('contacto', App\Contactos::pluck('CONT_NOM','CONT_CLI_ID')->where('CONT_CLI_ID','=',$cliente->CLI_RUT)) }}
                  </td>
                </tr>

                <tr>

                  <td>PROCESO DE NEGOCIO:</td>
                  <td>
                    {{ Form::select('procneg', App\Proceso::pluck('PRO_DESC','PRO_ID')) }}
                  </td>

                  <td>ETAPA:</td>
                  <td>
                    {{ Form::select('etapa', App\Etapa::pluck('DESC_ETAPA','ID_ETAPA')) }}
                  </td>



                </tr>

                <tr>

                  <td>PROBABILIDAD:</td>
                  <td>
                    {{ Form::selectRange('number', 10, 100) }}
                  </td>

                  <td>TASA:</td>
                  <td>
                    {{ Form::number('tasa',null,['class'=>'form-control', 'required']) }}
                  </td>
                </tr>

                <tr>

                  <td>MONEDA: </td>
                  <td >
                    {{ Form::select('moneda', App\Moneda::pluck('DESC_MONEDA','ID_MONEDA')) }}
                  </td>

                  <td>TOTAL: </td>
                  <td >
                    {{ Form::number('total',null,['class'=>'form-control', 'required']) }}
                  </td>

                </tr>


                <tr>

                  <td>FECHA DE INGRESO:</td>
                  <td>
                    {{ Form::date('fechaingreso',\Carbon\Carbon::now()->format('d-m-Y')) }}
                  </td>

                  <td>FECHA DE CIERRRE:</td>
                  <td>
                    {{ Form::date('fechacierre',\Carbon\Carbon::now()->format('d-m-Y')) }}
                    <!--<input  type="date"   style="width:175px;" class="form-control" required/>-->
                  </td>
                </tr>
                <tr>

                  <td>CENTRO DE NEGOCIO:</td>
                  <td>
                    {{ Form::select('centoneg', App\CentroNegocio::pluck('CT_PROCESO','CT_ID')) }}
                  </td>

                  <td>ESTADO DE PROPUESTA:</td>
                  <td>
                    {{ Form::select('estpro', App\Estado::pluck('EST_DESC','EST_ID')) }}
                  </td>

                </tr>
                <tr>
                  <td>CLIENTE:</td>
                  <td><input type="text" value="{{ $cliente->CLI_RUT }}" name="cliente" style="width:175px;" class="form-control" id="cliente" readOnly/></td>

                </tr>



              </table>

              <button class="btn btn-primary btn-lg">REGISTRO</button>
            </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          </div>
      </div>
  </div>
</div>
