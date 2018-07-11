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
            <!--<tr>
              <td>BUSCAR PROVEEDOR DE SERVICIOS:</td>
              <td ><input type="text" required class="form-control" style="width:175px;"/></td>
              <td align="left"><button type="button" class="btn btn-primary btn-xs">  <i class="fa fa-search" style="font-size:29px"></i></button></td>
            </tr>-->

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
              <!--<td align="left"><button type="button" class="btn btn-primary btn-xs">  <i class="fa fa-search" style="font-size:29px"></i></button></td>-->
            </tr>
          </table>

        <div class="container" align="center" ng-switch="myVar">

            <div ng-switch-when="4">
              <h3 class=" text-center text-uppercase" >PRODUCTOS</h3>

              <table class="table-condensed table-bordered">

                <tr>
                  <td>COD. OFERTA</td>
                  <td>RUT PROVEEDOR</td>
                  <td>DESC.</td>
                  <td>RAZON DE COBRO</td>
                  <td>DIAS DE ENTREGA</td>
                  <td>HORARIO INICIO</td>
                  <td>HORARIO FIN</td>
                  <td>ORIENTACION</td>
                  <td>VALOR</td>

                </tr>
                @foreach($ofertaarts as $ofertaart)
                <tr>
                  <td>{{ $ofertaart->OFAR_ID }}</td>
                  <td>{{ $ofertaart->OFAR_PRO_RUN }}</td>
                  <td>{{ $ofertaart->OFAR_DESC }}</td>
                  <td>{{ $ofertaart->OFAR_RAZON_COBRO }}</td>
                  <td>{{ $ofertaart->OFAR_DIAS_ENTREGA }}</td>
                  <td>{{ $ofertaart->OFAR_HORARIO_ENT_INI }}</td>
                  <td>{{ $ofertaart->OFAR_HORARIO_ENT_FIN }}</td>
                  <td>{{ App\Orientacion::find($ofertaart->OFAR_OR_COD)->OR_DESC }}</td>
                  <td>{{ $ofertaart->OFAR_VALOR }}</td>
                </tr>
                  @endforeach
              </table>
              {{ $ofertaarts->links() }}
            </div>

            <div ng-switch-when="2">
              <h3 class=" text-center text-uppercase" >ARRIENDO DE MAQUINARIA</h3>
              <table class="table-condensed table-bordered">

                <tr>
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
                  <td>VALOR</td>

                </tr>
                @foreach($maquinas as $maquina)
                <tr>
                  <td>{{ $maquina->ARM_ID }}</td>
                  <td>{{ $maquina->ARM_PRO_RUN }}</td>
                  <td>{{ $maquina->ARM_TP_VEHICULO }}</td>
                  <td>{{ $maquina->ARM_SEGUROS_ASOCIADOS }}</td>
                  <td>{{ $maquina->ARM_OPERARIO }}</td>
                  <td>{{ $maquina->ARM_LICENCIAS_CONDUCIR }}</td>
                  <td>{{ $maquina->ARM_CURSOS }}</td>
                  <td>{{ $maquina->ARM_DIAS_LABORALES }}</td>
                  <td>{{ $maquina->ARM_HOR_INI }}</td>
                  <td>{{ $maquina->ARM_HOR_FIN }}</td>
                  <td>{{ $maquina->ARM_COB_SERVICIO }}</td>
                  <td>{{ $maquina->ARM_RAZON_COBRO }}</td>
                  <td>{{ $maquina->ARM_VALOR }}</td>
                </tr>
                  @endforeach
              </table>
              {{ $maquinas->links() }}
            </div>

            <div ng-switch-when="1">
              <h3 class=" text-center text-uppercase" >SERVICIOS TECNICO-PROFESIONALES</h3>
              <table class=" table-bordered">

                <tr>
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
                @foreach($servpro as $serprof)
                <tr>
                  <td>{{ $serprof->STP_COD }}</td>
                  <td>{{ $serprof->STP_PRO_RUN }}</td>
                  <td>{{ $serprof->STP_FORMACION }}</td>
                  <td>{{ $serprof->STP_FORMACION_ESTABLECIMIENTO }}</td>
                  <td>{{ $serprof->STP_ANHOS_EXPERIENCIA }}</td>
                  <td>{{ $serprof->STP_FORTALEZAS }}</td>
                  <td>{{ $serprof->STP_DEBILIDADES }}</td>
                  <td>{{ $serprof->STP_DESC_EXP_LABORAL }}</td>
                  <td>{{ $serprof->STP_BUSC_O_OF }}</td>
                  <td>{{ $serprof->STP_CURSOS_PST_GRADOS }}</td>
                  <td>{{ $serprof->STP_COB_SERV }}</td>
                  <td>{{ $serprof->STP_VALOR }}</td>
                </tr>
                @endforeach
              </table>
              {{ $servpro->links() }}
            </div>

            <div ng-switch-when="3">
              <h3 class=" text-center text-uppercase">SERVICIOS</h3>
              <table class="table-condensed table-bordered">

                <tr>
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
                @foreach($servicios as $serv)
                <tr>
                  <td>{{ $serv->OFSER_COD }}</td>
                  <td>{{ $serv->OFSER_PRO_RUN }}</td>
                  <td>{{ $serv->OFSER_DESCRIPCION }}</td>
                  <td>{{ $serv->OFSER_DIAS_LABORALES }}</td>
                  <td>{{ $serv->OFSER_HORARIOS_TRABAJO_INI }}</td>
                  <td>{{ $serv->OFSER_HORARIOS_TRABAJO_FIN }}</td>
                  <td>{{ $serv->OFSER_COBERTURA_SERVICIO }}</td>
                  <td>{{ $serv->OFSER_RAZ_COBRO }}</td>
                  <td>{{ $serv->OFSER_VALOR }}</td>
                </tr>
                  @endforeach
              </table>
              {{ $servicios->links() }}
            </div>
          </div>

        <!-- FORM FINAL -->

      </div><!--/porlets-content-->
    </div><!--/block-web-->
  </div><!--/col-md-12-->
</div><!--/row-->



<br>

<div class="container">

<a href="{{ route('inventario') }}"><button class="btn btn-primary btn-lg">Volver</button></a>

</div>
</a>
<br>

@endsection
