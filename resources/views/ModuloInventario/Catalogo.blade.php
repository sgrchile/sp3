@extends('layouts.app')
@section('content')


<div class="row">
  <div class="col-xs-12 col-md-12 col-sm-12">
    <div class="block-web">
      <div class="header">
        <div class="actions"></div>
        <h1 class="text-center text-uppercase">CATALOGO</h1>
      </div>
      <div class="porlets-content">
        <!-- FORM INICIO -->



        <div class="container"  ng-app="">

          <table class="table-condensed text-right" align="center">
            <tr>
              <td>BUSCAR PROVEEDOR DE SERVICIOS:</td>
              <td ><input type="text" required class="form-control" style="width:175px;"/></td>
              <td align="left"><button type="button" class="btn btn-primary btn-xs">  <i class="fa fa-search" style="font-size:29px"></i></button></td>
            </tr>


            <tr>
              <td style="text-align:right">ORIENTADO A:</td>
              <td style="text-align:right">
                <select class="form-control" style="width:175px;" name="orientado" >
                  <option value="0">Seleccione</option>
                  <option value="1">Turismo</option>
                  <option value="2">Ingeniería</option>
                  <option value="3">Administración</option>
                  <option value="4">Producción Gráfica</option>
                </select>
              </td>
              <td align="left"><button type="button" class="btn btn-primary btn-xs">  <i class="fa fa-search" style="font-size:29px"></i></button></td>
            </tr>
            <tr>
              <td style="text-align:right">TIPO DE OFERTA:</td>
              <td style="text-align:right">
                <select class="form-control" style="width:175px;" ng-model="myVar">
                  <option value="1">Servicio Profesional o Técnico</option>
                  <option value="2">Trasporte / Arriendo maquinaria</option>
                  <option value="3">Oferta de Servicios</option>
                  <option value="4">Oferta de Artículos</option>
                </select>
              </td>
              <td align="left"><button type="button" class="btn btn-primary btn-xs">  <i class="fa fa-search" style="font-size:29px"></i></button></td>
            </tr>
          </table>

        <div class="container" align="center" ng-switch="myVar">

            <div ng-switch-when="1">
              <h3 class=" text-center text-uppercase" >PRODUCTOS</h3>

              <table class="table-condensed table-bordered">

                <tr>
                  <td>ID</td>
                  <td>COD. OFERTA</td>
                  <td>RUT PROVEEDOR</td>
                  <td>DESC.</td>
                  <td>RAZON DE COBRO</td>
                  <td>DIAS DE ENTREGA</td>
                  <td>HORARIO INICIO</td>
                  <td>HORARIO FIN</td>
                  <td>COBERTURA DE SERVICIO</td>
                  <td>VALOR</td>

                </tr>

                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>

                </tr>

              </table>
            </div>

            <div ng-switch-when="2">
              <h3 class=" text-center text-uppercase" >ARRIENDO DE MAQUINARIA</h3>
              <table class="table-condensed table-bordered">

                <tr>
                  <td>ID</td>
                  <td>COD. OFERTA</td>
                  <td>RUT PROVEEDOR</td>
                  <td>TIPO VEHICULO</td>
                  <td>SEGUROS ASOCIADOS</td>
                  <td>OPERARIO</td>
                  <td>LICENCIA DE CONDUCIR</td>
                  <td>CURSOS</td>
                  <td>DIAS LABORALES</td>
                  <td>HORARIO INICIO</td>
                  <td>HORARIO FIN</td>
                  <td>COBERTURA DE SERVICIO</td>
                  <td>RAZON DE COBRO</td>

                </tr>

                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>

                </tr>


              </table>
            </div>

            <div ng-switch-when="3">
              <h3 class=" text-center text-uppercase" >SERVICIOS TECNICO-PROFESIONALES</h3>
              <table class=" table-bordered">

                <tr>
                  <td>ID</td>
                  <td>COD. OFERTA</td>
                  <td>RUT PROVEEDOR</td>
                  <td>FORMACION</td>
                  <td>ESTABLECIMIENTO</td>
                  <td>AÑOS DE EXPERIENCIA</td>
                  <td>FORTALEZAS</td>
                  <td>DEBILIDADES</td>
                  <td>DESCRIPCION EXPERIENCIA LABORAL</td>
                  <td>BUSCO O OFRESCO</td>
                  <td>CURSOS POST GRADO</td>
                  <td>RAZON DE COBRO</td>
                  <td>VALOR</td>

                </tr>

                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>

                </tr>


              </table>
            </div>

            <div ng-switch-when="4">
              <h3 class=" text-center text-uppercase">SERVICIOS</h3>
              <table class="table-condensed table-bordered">

                <tr>
                  <td>ID</td>
                  <td>COD. OFERTA</td>
                  <td>RUT PROVEEDOR</td>
                  <td>DESCRIPCION</td>
                  <td>DIAS LABORALES</td>
                  <td>HORARIO INICIO</td>
                  <td>HORARIO FIN</td>
                  <td>COVERTURA DE SERVICIO</td>
                  <td>RAZON DE COBRO</td>
                  <td>VALOR</td>

                </tr>

                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>

                </tr>

              </table>
            </div>
          </div>

        <!-- FORM FINAL -->

      </div><!--/porlets-content-->
    </div><!--/block-web-->
  </div><!--/col-md-12-->
</div><!--/row-->



<br>

<div class="container">

<a href="javascript:history.back(1)"><button class="btn btn-primary btn-lg">Volver</button></a>

</div>
</a>
<br>

@endsection
