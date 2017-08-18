@extends('layouts.app')
@section('content')


<br>
<div class="container" align="center">
<h1 class=" text-center text-uppercase" >CONSULTA DE OFERTAS</h1>

<form id="form1" name="form1" method="post" action="{{ route('Lista') }}">
{{ csrf_field() }}

<table class="table-condensed">
  <tr>
    <td><h4>BUSCAR PROVEEDOR:</h4></td>
    <td><input type="text" name="search" placeholder="Ingrese nombre o Run Proveedor" class="form-control" style="width:275px;"></td>
    <td><button type="submit" class="btn btn-primary btn-sm">  <i class="fa fa-search" style="font-size:36px"></i></button></td>

  </tr>

</table>

</form>
<h3 class=" text-center text-uppercase" >OFERTA ARTÍCULOS</h3>
<table class=" table-bordered">
<tr>
    <td>ID</td>
    <td>DESCRIPCIÓN</td>
    <td>RAZON DE COBRO</td>
    <td>DIAS DE ENTREGA</td>
    <td>HORARIO INICIO</td>
    <td>HORARIO FIN</td>
    <td>CAPACIDAD</td>
    <td>VALOR</td>
    <td>ESTADO PROVEEDOR</td>
    <td>ESTADO ADMINISTRATIVO</td>
    <td>ACCION</td>
</tr>
@foreach($articulos as $articulo)
  <tr>
    <td>{{ $articulo->OFAR_ID }}</td>
    <td>{{ $articulo->OFAR_DESC }}</td>
    <td>{{ $articulo->OFAR_RAZON_COBRO }}</td>
    <td>{{ $articulo->OFAR_DIAS_ENTREGA }}</td>
    <td>{{ $articulo->OFAR_HORARIO_ENT_INI }}</td>
    <td>{{ $articulo->OFAR_HORARIO_ENT_FIN }}</td>
    <td>{{ $articulo->OFAR_CAPACIDAD }}</td>
    <td>{{ $articulo->OFAR_VALOR }}</td>
    <td>{{ App\EstadoOfertaProveedor::find($articulo->OFAR_ESTP_ID)->ESTP_DESC }}</td>
    <td>{{ App\EstadoOfertaAdministrador::find($articulo->OFAR_ESTA_ID)->ESTA_DESC }}</td>
    <td><a href={{route('EvaluarArticulo', $articulo->OFAR_ID)}}><button class="btn btn-primary btn-sm">EVALUAR</button></a></td>
  </tr>
@endforeach
</table>
<h3 class=" text-center text-uppercase" >ARRIENDO DE MAQUINARIA</h3>
<table class=" table-bordered">
<tr>
    <td>ID</td>
    <td>DESCRIPCIÓN</td>
    <td>TIPO VEHICULO</td>
    <td>SEGUROS ASOCIADOS</td>
    <td>OPERARIO</td>
    <td>LICENCIA DE CONDUCIR</td>
    <td>CURSOS</td>
    <td>DIAS LABORALES</td>
    <td>HORARIO INICIO</td>
    <td>HORARIO FIN</td>
    <td>COBERTURA DE SERVICIO</td>
    <td>VALOR</td>
    <td>ESTADO PROVEEDOR</td>
    <td>ESTADO ADMINISTRATIVO</td>
    <td>ACCION</td>
</tr>
@foreach($arriendos as $arriendo)
  <tr>
    <td>{{ $arriendo->ARM_ID }}</td>
    <td>{{ $arriendo->ARM_DESCRIPCION }}</td>
    <td>{{ $arriendo->ARM_TP_VEHICULO }}</td>
    <td>{{ $arriendo->ARM_SEGUROS_ASOCIADOS }}</td>
    <td>{{ $arriendo->ARM_OPERARIO }}</td>
    <td>{{ $arriendo->ARM_LICENCIAS_CONDUCIR }}</td>
    <td>{{ $arriendo->ARM_CURSOS }}</td>
    <td>{{ $arriendo->ARM_DIAS_LABORALES }}</td>
    <td>{{ $arriendo->ARM_HOR_INI }}</td>
    <td>{{ $arriendo->ARM_HOR_FIN }}</td>
    <td>{{ $arriendo->ARM_COB_SERVICIO }}</td>
    <td>{{ $arriendo->ARM_VALOR }}</td>
    <td>{{ App\EstadoOfertaProveedor::find($arriendo->ARM_ESTP_ID)->ESTP_DESC }}</td>
    <td>{{ App\EstadoOfertaAdministrador::find($arriendo->ARM_ESTA_ID)->ESTA_DESC }}</td>
    <td><a href={{route('EvaluarArriendo', $arriendo->ARM_ID)}}><button class="btn btn-primary btn-sm">EVALUAR</button></a></td>
  </tr>
@endforeach
</table>

<h3 class=" text-center text-uppercase" >SERVICIOS TECNICO-PROFESIONALES</h3>
<table class=" table-bordered">

<tr>
    <td>ID</td>
    <td>DESCRIPCIÓN</td>
    <td>FORMACION</td>
    <td>ESTABLECIMIENTO</td>
    <td>AÑOS DE EXPERIENCIA</td>
    <td>FORTALEZAS</td>
    <td>DEBILIDADES</td>
    <td>DESCRIPCION EXPERIENCIA LABORAL</td>
    <td>BUSCO O OFRESCO</td>
    <td>CURSOS POST GRADO</td>
    <td>VALOR</td>
    <td>ESTADO PROVEEDOR</td>
    <td>ESTADO ADMINISTRATIVO</td>
    <td>ACCION</td>
</tr>
@foreach($profesionales as $profesional)
  <tr>
    <td>{{ $profesional->STP_COD }}</td>
    <td>{{ $profesional->STP_DESCRIPCION }}</td>
    <td>{{ $profesional->STP_FORMACION }}</td>
    <td>{{ $profesional->STP_FORMACION_ESTABLECIMIENTO }}</td>
    <td>{{ $profesional->STP_ANHOS_EXPERIENCIA }}</td>
    <td>{{ $profesional->STP_FORTALEZAS }}</td>
    <td>{{ $profesional->STP_DEBILIDADES }}</td>
    <td>{{ $profesional->STP_DESC_EXP_LABORAL }}</td>
    <td>{{ $profesional->STP_BUSC_O_OF }}</td>
    <td>{{ $profesional->STP_CURSOS_PST_GRADOS }}</td>
    <td>{{ $profesional->STP_VALOR }}</td>
    <td>{{ App\EstadoOfertaProveedor::find($profesional->STP_ESTA_ID)->ESTP_DESC }}</td>
    <td>{{ App\EstadoOfertaAdministrador::find($profesional->STP_ESTP_ID)->ESTA_DESC }}</td>
    <td><a href={{route('EvaluarProfesional', $profesional->STP_COD)}}><button class="btn btn-primary btn-sm">EVALUAR</button></a></td>
  </tr>
@endforeach

</table>


<h3 class=" text-center text-uppercase">SERVICIOS</h3>
<table class="table table-bordered">
<tr>
    <td>ID</td>
    <td>DESCRIPCIÓN</td>
    <td>DIAS LABORALES</td>
    <td>HORARIO INICIO</td>
    <td>HORARIO FIN</td>
    <td>COBERTURA DE SERVICIO</td>
    <td>RAZON DE COBRO</td>
    <td>VALOR</td>
    <td>ESTADO PROVEEDOR</td>
    <td>ESTADO ADMINISTRATIVO</td>
    <td>ACCION</td>
</tr>
  @foreach($servicios as $servicio)
    <tr>
      <td>{{ $servicio->OFSER_COD }}</td>
      <td>{{ $servicio->OFSER_DESCRIPCION }}</td>
      <td>{{ $servicio->OFSER_DIAS_LABORALES }}</td>
      <td>{{ $servicio->OFSER_HORARIOS_TRABAJO_INI }}</td>
      <td>{{ $servicio->OFSER_HORARIOS_TRABAJO_FIN }}</td>
      <td>{{ $servicio->OFSER_COBERTURA_SERVICIO }}</td>
      <td>{{ $servicio->OFSER_RAZ_COBRO }}</td>
      <td>{{ $servicio->OFSER_VALOR }}</td>
      <td>{{ App\EstadoOfertaProveedor::find($servicio->OFSER_ESTP_ID)->ESTP_DESC }}</td>
      <td>{{ App\EstadoOfertaAdministrador::find($servicio->OFSER_ESTA_ID)->ESTA_DESC }}</td>
      <td><a href={{route('EvaluarServicio', $servicio->OFSER_COD)}}><button class="btn btn-primary btn-sm">EVALUAR</button></a></td>
    </tr>
  @endforeach
</table>

</div>
<br>
<div class="container">  <a href="{{route('misOfertas')}}"><button class="btn btn-primary btn-lg">Volver</button></a></div>



<br>
<br>

@endsection
