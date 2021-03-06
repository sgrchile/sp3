
<div class="modal fade " id="regContactoCliente" role="dialog">
    <div class="modal-dialog modal-lg" align="center">

        <!-- Modal content-->
        <div class="modal-content ">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">×</button>
              <h4 class="modal-title">REGISTRO DE CONTACTO</h4>
          </div>
          <div class="modal-body">
            <form id="form1" name="form1" method="post" action="{{ route('post.contacto') }}">
              {{ csrf_field() }}
              <table class="table-condensed text-right" align="center">

                <tr>
                    <td>NOMBRE:</td>
                    <td>
                    <input name="nombre" type="text"  style="width:175px;" class="form-control" id="nombre" required/>
                    </td>

                    <td>CELULAR:</td>
                    <td>
                    <input name="celular" type="text"  style="width:175px;" class="form-control" id="celular" required/>
                    </td>
                </tr>
                <tr>

                    <td>EMAIL EMPRESARIAL:</td>
                    <td>
                    <input type="email" name="email empresarial" style="width:175px;" class="form-control" id="email_emp" required/>

                    </td>

                    <td>EMAIL PERSONAL:</td>
                    <td><input type="email" name="email" style="width:175px;" class="form-control" id="email" required/></td>
                </tr>

                <tr>
                  <td>CLIENTE:</td>
                <td><input type="text" value="{{ $cliente->CLI_RUT }}" name="cliente" style="width:175px;" class="form-control" id="cliente" readOnly/></td>
                    <td>CIUDAD:</td>
                    <td>
                        {!! Form::select('ciudad', App\Ciudad::pluck('CIU_DESC', 'CIU_COD')) !!}
                    </td>
                </tr>


              </table>
              <button class="btn btn-primary btn-lg">REGISTRAR</button>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          </div>
      </div>
  </div>
</div>
