@extends('layouts.app')
@section('content')


<div class="row">
  <div class="col-xs-12 col-md-12 col-sm-12">
    <div class="block-web">
      <div class="header">
        <div class="actions"></div>
        <h1 class="text-center text-uppercase">FICHA LICITACION</h1>
      </div>
      <div class="porlets-content">
        <!-- FORM INICIO -->



          <div class="table-responsive" align="Center">

            <table class="table-condensed text-right" align="center">
              <tr>
                <td>CLASE DE LICITACION:</td>
                <td>
                  <select class="form-control" style="width:175px;">
                    <option>PUBLICA</option>
                    <option>PRIVADA</option>

                  </select>
                </td>

                <td>MANDANTE:</td>
                <td>
                    <input type="text" style="width:175px;" required class="form-control" />
                </td>

                <td>FOLIO LICITACION:</td>
                <td><input type="text" style="width:175px;" required class="form-control" /></td>

              </tr>

              <tr>
                <td>NOMBRE:</td>
                <td><input type="text" style="width:175px;" required class="form-control" /></td>

                <td>MONTO NETO:</td>
                <td><input type="text" style="width:175px;" required class="form-control" /></td>

                <td>FECHA DE CIERRE</td>
                <td><input type="date" style="width:175px;" required class="form-control" /></td>

              </tr>
              <tr>
                <td class="text-center" colspan="6">DESCRIPCION</td>
              </tr>
              <tr>

                <td colspan="6">

                  <textarea class="form-control" rows=10 style="width:923px; max-width:923px;"></textarea>

                </td>
              </tr>

            </table>

            <h3 class="text-center">BASES Y DOCUMENTOS LICITACION</h3>

            <table class="table table-bordered" align="center">
              <tr>
                <td>ID</td>
                <td>NOMBRE</td>
                <td>DOCUMENTO</td>
                <td>ACCION</td>
              </tr>

              <tr>
                <td>ID</td>
                <td>NOMBRE</td>
                <td>URL</td>
                <td><button class="btn btn-primary btn-lg">QUITAR</button></td>
              </tr>

              <tr>
                <td></td>
                <td><Input  class="form-control" style="width:300px;"/></td>
                <td><Input  class="form-control" style="width:300px;"/></td>
                <td><button class="btn btn-primary btn-lg">CARGAR</button></td>
              </tr>


            </table>

            <h3 class="text-center">GARANTIAS</h3>

            <table class="table table-bordered" align="center">
              <tr>
                <td>ID</td>
                <td>NOMBRE</td>
                <td>VALOR</td>
                <td colspan="2">ACCION</td>
              </tr>

              <tr>
                <td>ID</td>
                <td><Input  class="form-control" style="width:300px;"/></td>
                <td><Input  class="form-control" style="width:300px;"/></td>
                <td>
                  <button class="btn btn-primary btn-lg">QUITAR</button>
                  <button class="btn btn-primary btn-lg">EDITAR</button>
                </td>
              </tr>

              <tr>
                <td></td>
                <td><Input  class="form-control" style="width:300px;"/></td>
                <td><Input  class="form-control" style="width:300px;"/></td>
                <td><button class="btn btn-primary btn-lg">CARGAR</button></td>
              </tr>

            </table>

            <h3 class="text-center">VISITAS A TERRENO</h3>

            <table class="table table-bordered" align="center">
              <tr>
                <td>ID</td>
                <td>FECHA</td>
                <td>LUGAR</td>
                <td>CARACTER</td>
                <td colspan="2">ACCION</td>
              </tr>

              <tr>
                <td>ID</td>
                <td><Input type="date"  class="form-control" style="width:300px;"/></td>
                <td><Input type="text" class="form-control" style="width:300px;"/></td>
                <td>
                    <select class="form-control">
                      <option value="">OBLIGATORIO</option>
                      <option value="">OPCIONAL</option>
                    </select>
                </td>
                <td>
                  <button class="btn btn-primary btn-lg">QUITAR</button>
                  <button class="btn btn-primary btn-lg">EDITAR</button>
                </td>
              </tr>

              <tr>
                <td></td>
                <td><Input  type="date"  class="form-control" style="width:300px;"/></td>
                <td><Input  type="text" class="form-control" style="width:300px;"/></td>
                <td>
                    <select class="form-control">
                      <option value="">OBLIGATORIO</option>
                      <option value="">OPCIONAL</option>
                    </select>
                </td>
                <td><button class="btn btn-primary btn-lg">CARGAR</button></td>
              </tr>

            </table>

            <h3 class="text-center">ANEXOS</h3>

            <table class="table table-bordered" align="center">
              <tr>
                <td>ID</td>
                <td>NOMBRE</td>
                <td>BASE</td>
                <td>DOCUMENTO</td>
                <td >ACCION</td>
              </tr>

              <tr>
                <td>ID</td>
                <td></td>
                <td><button class="btn btn-primary btn-lg">VER</button></td>
                <td><button class="btn btn-primary btn-lg">VER</button></td>

                <td>
                  <button class="btn btn-primary btn-lg">QUITAR</button>

                </td>
              </tr>

              <tr>
                <td></td>
                <td><Input  class="form-control" /></td>
                <td><Input  class="form-control" /></td>
                <td><Input  class="form-control" /></td>

                <td><button class="btn btn-primary btn-lg">CARGAR</button></td>
              </tr>

            </table>


          </div>



        <!-- FORM FINAL -->

      </div><!--/porlets-content-->
    </div><!--/block-web-->
  </div><!--/col-md-12-->
</div><!--/row-->



<br>

<br>
<div class="container">

<a href="javascript:history.back(1)"><button class="btn btn-primary btn-lg">Volver</button></a>

</div>
</a>
<br>

@endsection
