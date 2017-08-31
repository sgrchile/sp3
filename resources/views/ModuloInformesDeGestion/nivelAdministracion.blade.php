@extends('layouts.app')
@section('content')


<div class="row">
  <div class="col-xs-12 col-md-12 col-sm-12">
    <div class="block-web">
      <div class="header">
        <div class="actions"></div>
        <h1 class="text-center text-uppercase">NIVEL ADMINISTRACION</h1>
      </div>
      <div class="porlets-content">
        <!-- FORM INICIO -->

        <table class="table-condensed" align="center">
          <tr>
            <td>PERIODO</td>
            <td>
              <input type="month" class="form-control" />
            </td>
          </tr>

        </table>

        <h3 class="text-center">RESUMEN GENERAL</h3>

        <div class="table-responsive">

          <table class="table table-bordered">
            <tr>
              <td>DINERO EN CUENTA</td>
              <td><input type="text"/></td>

              <td>CUENTAS POR PAGAR</td>
              <td><input type="text"/></td>

              <td>BONO ADMINISTRADOR</td>
              <td><input type="text"/></td>


            </tr>
            <tr>
              <td>META COMERCIAL</td>
              <td><input type="text"/></td>

              <td>COTIZACIONES</td>
              <td><input type="text"/></td>

              <td>EVALUACIONES CLIENTES</td>
              <td><input type="text" /></td>

            </tr>

            <tr>

              <td>CUENTAS POR COBRAR</td>
              <td><input type="text"/></td>

              <td>DINERO EN PRENDA</td>
              <td><input type="text"/></td>

              <td>RETIROS</td>
              <td><input type="text"/></td>

            </tr>

            <tr>

              <td>USO DE PRESUPUESTO </td>
              <td><input type="text"/></td>

              <td>EFECTIVIDAD COTIZACIONES</td>
              <td><input type="text"/></td>

              <td>PROVEEDORES</td>
              <td><input type="text"/></td>


            </tr>
            <tr>

              <td>CALIDAD DE PROVEEDORES</td>
              <td><input type="text"/></td>

            </tr>
          </table>

        </div>

        <h3 class="text-center">RESUMEN COMERCIAL</h3>

        <table class="table-condensed text-right">
          <tr>
            <td>
              VENTA DEL MES
            </td>

            <td>
              <input type="text" readonly class="form-control" />
            </td>
          </tr>
          <tr>
            <td>
              META DEL MES
            </td>

            <td>
              <input type="text" readonly class="form-control" />
            </td>
          </tr>
        </table>

        <div class="table-responsive">

          <table class="table table-bordered">
            <tr>
              <td>Nº </td>
              <td>CLIENTE</td>
              <td>CTZ</td>
              <td>OT</td>
              <td>OC</td>
              <td>DESCRIPCION</td>
              <td>MONTO</td>
              <td>FECHA DE EJECUCION</td>
            </tr>

            <tr>
              <td> </td>
              <td></td>
              <td> </td>
              <td> </td>
              <td> </td>
              <td> </td>
              <td> </td>
              <td> </td>
            </tr>
          </table>


        </div>

        <h3 class="text-center">RESUMEN OPERACIONAL</h3>

        <table class="table-condensed text-right">
          <tr>
            <td>
              EQUIPOS OPERATIVOS
            </td>

            <td>
              <input type="text" readonly class="form-control" />
            </td>
          </tr>
          <tr>
            <td>
              TASA DE OCUPACION
            </td>

            <td>
              <input type="text" readonly class="form-control" />
            </td>
          </tr>

          <tr>
            <td>
              EJECUCION AL MES
            </td>

            <td>
              <input type="text" readonly class="form-control" />
            </td>
          </tr>
          <tr>
            <td>
              META DEL MES
            </td>

            <td>
              <input type="text" readonly class="form-control" />
            </td>
          </tr>
        </table>

        <div class="table-responsive">

          <table class="table table-bordered">
            <tr>
              <td>Nº </td>
              <td>CLIENTE</td>
              <td>CTZ</td>
              <td>OT</td>
              <td>OC</td>
              <td>DESCRIPCION</td>
              <td>MONTO</td>
              <td>ESTADO</td>
              <td>EVALUACION</td>
            </tr>

            <tr>
              <td> </td>
              <td></td>
              <td> </td>
              <td> </td>
              <td> </td>
              <td> </td>
              <td> </td>
              <td> </td>
            </tr>
          </table>


        </div>

        <h3 class="text-center">RESUMEN PRESUPUESTARIO</h3>

        <table class="table-condensed text-right">
          <tr>
            <td>
              USADO DEL MES
            </td>

            <td>
              <input type="text" readonly class="form-control" />
            </td>
          </tr>
          <tr>
            <td>
              PRESUPUESTO DEL MES
            </td>

            <td>
              <input type="text" readonly class="form-control" />
            </td>
          </tr>

        </table>

        <div class="table-responsive">

          <table class="table table-bordered">
            <tr>
              <td>Nº </td>
              <td>CLIENTE</td>
              <td>CTZ</td>
              <td>OT</td>
              <td>OC</td>
              <td>DESCRIPCION</td>
              <td>MONTO</td>
              <td>ESTADO</td>
              <td>EVALUACION</td>
            </tr>

            <tr>
              <td> </td>
              <td></td>
              <td> </td>
              <td> </td>
              <td> </td>
              <td> </td>
              <td> </td>
              <td> </td>
            </tr>
          </table>


        </div>

        <h3 class="text-center">CONTROL Y ACCESOS</h3>

        <div class="table-responsive">

          <table class="table table-bordered">
            <tr>
              <td>Nº</td>
              <td>PERSONAL</td>
              <td>PC ASIGNADO</td>
              <td>ESTADO</td>
              <td>ACCESO</td>

            </tr>

            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td><button class="btn btn-primary btn-lg">ACCEDER</button></td>

            </tr>

          </table>
        </div>

        <h3 class="text-center">OTROS ANTECEDENTES</h3>

        <div class="table-responsive">

          <table class="table table-bordered">
            <tr>
              <td>Nº</td>
              <td>PERSONAL</td>
              <td>SOLICITUD</td>
              <td>DESCRIPCION</td>
              <td>FECHA</td>

            </tr>

            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>

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
