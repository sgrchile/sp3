@extends('layouts.app')
@section('content')

<div class="row">
  <div class="col-xs-12 col-md-12 col-sm-12">
    <div class="block-web">
      <div class="header">
        <div class="actions"></div>
        <h1 class="content-header" align="center"><b>MIS EVALUACIONES POR TIPO DE OFERTAS</b></h1>
      </div>
      <div class="porlets-content">
        <div class="table-responsive">
          <!-- TABLA INICIO -->

          <h3 class=" text-center text-uppercase">OFERTA DE ARTÍCULOS</h3>
            <table class="display table-hover table-condensed table-bordered table-striped text-uppercase" id="dynamic-table">
          <tr>
            <th>ID</th>
            <th>DESCRIPCIÓN</th>
            <th>COMENTARIO</th>
            <th>CALIFICACION</th>
          </tr>
          @foreach($articulos as $articulo)
            <tr>
              <td>{{ $articulo->OFAR_ID }}</td>
              <td>{{ $articulo->OFAR_DESC }}</td>
              <td>{{ $articulo->OFAR_COMENTARIO }}</td>
              <td>{{ $articulo->OFAR_CALIFICACION }}</td>
            </tr>
          @endforeach
        </table>

        <br>

        <h3 class=" text-center text-uppercase">SERVICIOS TÉCNICOS PROFESIONALES</h3>
        <table class="display table-hover table-condensed table-bordered table-striped text-uppercase" id="dynamic-table">
          <tr>
            <th>ID</th>
            <th>DESCRIPCIÓN</th>
            <th>COMENTARIO</th>
            <th>CALIFICACION</th>
          </tr>
          @foreach($profesionales as $profesional)
            <tr>
              <td>{{ $profesional->STP_COD }}</td>
              <td>{{ $profesional->STP_DESCRIPCION }}</td>
              <td>{{ $profesional->STP_COMENTARIO }}</td>
              <td>{{ $profesional->STP_CALIFICACION }}</td>
            </tr>
          @endforeach
        </table>

        <br>
        <h3 class=" text-center text-uppercase">ARRIENDO DE MAQUINARIAS</h3>
        <table class="display table-hover table-condensed table-bordered table-striped text-uppercase" id="dynamic-table">
          <tr>
            <th>ID</th>
            <th>DESCRIPCIÓN</th>
            <th>COMENTARIO</th>
            <th>CALIFICACION</th>
          </tr>
          @foreach($arriendos as $arriendo)
            <tr>
              <td>{{ $arriendo->ARM_ID }}</td>
              <td>{{ $arriendo->ARM_DESCRIPCION }}</td>
              <td>{{ $arriendo->ARM_COMENTARIO }}</td>
              <td>{{ $arriendo->ARM_CALIFICACION }}</td>
            </tr>
          @endforeach
        </table>

        <br>
        <h3 class=" text-center text-uppercase">SERVICIOS</h3>
        <table class="display table-hover table-condensed table-bordered table-striped text-uppercase" id="dynamic-table">
          <tr>
            <th>ID</th>
            <th>DESCRIPCIÓN</th>
            <th>COMENTARIO</th>
            <th>CALIFICACION</th>
          </tr>
          @foreach($servicios as $servicio)
            <tr>
              <td>{{ $servicio->OFSER_COD }}</td>
              <td>{{ $servicio->OFSER_DESCRIPCION }}</td>
              <td>{{ $servicio->OFSER_COMENTARIO }}</td>
              <td>{{ $servicio->OFSER_CALIFICACION }}</td>
            </tr>
          @endforeach
        </table>
        </div>
        <br>
        <div class="container">  <a href="{{route('perfil')}}"><button class="btn btn-primary btn-lg">Volver</button></a></div>
        <br>


        <!-- TABLA FINAL -->
          </table>
        </div><!--/table-responsive-->
      </div><!--/porlets-content-->
    </div><!--/block-web-->
  </div><!--/col-md-12-->
</div><!--/row-->



<br>
@endsection
