
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
                  <td>NOMBRE:</td>
                  <td>
                      <input name="nombre" type="text"  style="width:175px;" class="form-control" id="nombre" pattern="[A-Za-z]{4-16}" required="required"/>
                  </td>

                  <td>CONTACTO:</td>
                  <td>
                    <select style="width:175px;" class="form-control"  required>

                      <option value=""></option>

                    </select>
                  </td>
                </tr>

                <tr>

                  <td>PROCESO DE NEGOCIO:</td>
                  <td>

                    <select style="width:175px;" class="form-control"  required>

                      <option value=""></option>

                    </select>

                  </td>

                  <td>ETAPA:</td>
                  <td>
                    <select style="width:175px;" class="form-control"  required>

                    <option value=""></option>

                    </select>
                  </td>



                </tr>

                <tr>

                  <td>PROBABILIDAD:</td>
                  <td>
                    <input type="text"  style="width:175px;" class="form-control" required/>
                  </td>

                  <td>TASA:</td>
                  <td>
                    <input type="text"  style="width:175px;" class="form-control" required/>
                  </td>
                </tr>

                <tr>

                  <td>MONEDA: </td>
                  <td >
                      <input  type="text"   style="width:175px;" class="form-control" required/>
                  </td>

                  <td>TOTAL: </td>
                  <td >
                      <input  type="text"   style="width:175px;" class="form-control" required/>
                  </td>

                </tr>


                <tr>

                  <td>FECHA DE INGRESO:</td>
                  <td>
                    <input  type="date"   style="width:175px;" class="form-control" required/>
                  </td>

                  <td>FECHA DE CIERRRE:</td>
                  <td>
                    <input  type="date"   style="width:175px;" class="form-control" required/>
                  </td>



                </tr>
                <tr>

                  <td>CENTRO DE NEGOCIO:</td>
                  <td>
                    <select style="width:175px;" class="form-control"  required>

                    <option value=""></option>

                    </select>

                  </td>

                  <td>ESTADO DE PROPUESTA:</td>
                  <td>
                    <select style="width:175px;" class="form-control"  required>

                    <option value=""></option>

                    </select>
                  </td>

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
