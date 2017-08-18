@extends('layouts.app')
@section('content')
<div class="row">
  <div class="col-xs-12 col-md-12 col-sm-12">
    <div class="block-web">
      <div class="header">
        <h1 class="content-header text-center text-uppercase"><b>DETALLE DE: {{ $personal->PRO_NOMBRE or '' }} {{ $personal->PRO_APE_PAT or '' }}</b></h1>
      </div>
      <div class="porlets-content">
        <div class="row">
          <div class="col-xs-8 col-md-10">
        <div class="table-responsive">
            <table class="display table-hover table-bordered table-striped text-uppercase" id="dynamic-table">
            <!-- TABLA INICIO -->

              <tr>
                <th>NOMBRE:</th>
                  <td>{{ $personal->PRO_NOMBRE  or '' }}</td>
              </tr>

              <tr>
                <th>APELLIDO PATERNO:</th>
                  <td>{{ $personal->PRO_APE_PAT  or '' }}</td>
              </tr>

              <tr>
                <th>APELLIDO MATERNO:</th>
                  <td>{{ $personal->PRO_APE_MAT  or '' }}</td>
              </tr>

              <tr>
                <th>RUT:</th>
                  <td>{{ $personal->PRO_RUN  or '' }}</td>
              </tr>

              <tr>
                <th>FECHA DE NACIMIENTO:</th>
                  <td>{{ $personal->PRO_FECHA_NAC  or '' }}</td>
              </tr>

              <tr>
                <th>CELULAR:</th>
                  <td>{{ $personal->PRO_CELULAR  or '' }}</td>
              </tr>

              <tr>
                <th>CONTACTO SECUNDARIO:</th>
                  <td>{{ $personal->PRO_CONTACTO_SECUNDARIO  or '' }}</td>
              </tr>

              <tr>
                <th>REFERENCIA:</th>
                  <td>{{ $personal->PRO_REFERENCIA  or '' }}</td>
              </tr>

              <tr>
                <th>EMAIL:</th>
                  <td>{{ $personal->PRO_EMAIL  or '' }}</td>
              </tr>

              <tr>
                <th>NACIONALIDAD:</th>
                  <td>{{ $personal->PRO_NACIONALIDAD  or '' }}</td>
              </tr>

              <tr>
                <th>PAIS:</th>
                  <td>{{ $personal->PRO_PAI_COD  or '' }}</td>
              </tr>

              <tr>
                <th>SEXO:</th>
                  <td>{{ $personal->PRO_SEXO  or '' }}</td>
              </tr>

              <tr>
                <th>DIRECCION:</th>
                  <td>{{ $personal->PRO_DIRECCION  or '' }}</td>
              </tr>

              <tr>
                <th>REGION:</th>
                  <td>{{ $personal->PRO_REG_COD  or '' }}</td>
              </tr>

              <tr>
                <th>PROVINCIA:</th>
                  <td>{{ $personal->PRO_PV_COD  or '' }}</td>
              </tr>

              <tr>
                <th>CIUDAD:</th>
                  <td>{{ $personal->PRO_CIU_COD  or '' }}</td>
              </tr>

              <tr>
                <th>AFP:</th>
                  <td>{{ $personal->PRO_AFP  or '' }}</td>
              </tr>

              <tr>
                <th>SEGURO MEDICO:</th>
                  <td>{{ $personal->PRO_SEG_MED  or '' }}</td>
              </tr>

              <tr>
                <th>EMPRESA:</th>
                  <td>{{ $personal->PRO_EMP  or '' }}</td>
              </tr>

              <tr>
                <th>FECHA DE PAGO:</th>
                  <td>{{ $personal->PRO_FECHA_PAGO  or '' }}</td>
              </tr>

              <tr>
                <th>TIPO DE PERSONAL:</th>
                  <td>{{ $personal->PRO_TP_COD  or '' }}</td>
              </tr>

              <tr>
                <th>CARGO:</th>
                  <td>{{ $personal->PRO_CAR_ID  or '' }}</td>
              </tr>

              <tr>
                <th>Nº CUENTA:</th>
                  <td>{{ $personal->PRO_N_CUENTA  or '' }}</td>
              </tr>

              <tr>
                <th>BANCO:</th>
                  <td>{{ $personal->PRO_BCO_ID  or '' }}</td>
              </tr>

              <tr>
                <th>TIPO DE CUENTA:</th>
                  <td>{{ $personal->PRO_TCTA_BCO  or '' }}</td>
              </tr>

              <tr>
                <th>CONTRATO</th>
                  <td>{{ $personal->PRO_CONTRATO  or '' }}</td>
              </tr>

            <!-- TABLA FINAL -->

              </table>
            </div><!--/table-responsive-->
            </div>
            </div>
          </div><!--/porlets-content-->
        </div><!--/block-web-->
      </div><!--/col-md-12-->
    </div><!--/row-->






        <br>
        <br>
        <h3 class="text-uppercase text-center ">ACTIVOS ASIGNADOS</h3>
        <table class="table-condensed table-bordered" align="center">

        <tr>
        <td>ACTIVOS</td>

        <td>ACCION</td>
        </tr>

        <tr>
        <td></td>
        <td>
        <button type="button" class="btn btn-primary btn-sm">DESASIGNAR</button>
        <button type="button" class="btn btn-primary btn-sm">ASIGNAR</button>
        </td>
        </tr>

        </table>


        </div>
        <!-- FORM FINAL -->

      </div><!--/porlets-content-->
    </div><!--/block-web-->
  </div><!--/col-md-12-->
</div><!--/row-->
<br>
<div class="container">  <a href="{{route('admRRHH')}}"><button class="btn btn-primary btn-lg">Volver</button></a></div>



<br>
<br>

@endsection
