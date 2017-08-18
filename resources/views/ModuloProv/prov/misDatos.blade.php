@extends('layouts.app')
@section('content')
<br>
<div class="container" align="center">

<h1 class=" text-center text-uppercase">MIS DATOS</h1>
<br>
<br>
<table class="table-condensed text-right" align="center" style="text-align:right;" >
<tr>
<td>NOMBRE:</td>
<td><input type="text" class="form-control" readOnly value="{{$proveedores->PRO_NOMBRE}}" style="width:175px;"></td>
<td>RUT:</td>
<td><input type="text" class="form-control" readOnly value="{{$proveedores->PRO_RUN}}" style="width:175px;"></td>
<td>RAZON SOCIAL:</td>
<td><input type="text" class="form-control" readOnly value="{{$proveedores->PRO_RAZON_SOCIAL}}" style="width:175px;"></td>
</tr>
<tr>
<td>GIRO:</td>
<td><input type="text" class="form-control" readOnly value="{{$proveedores->PRO_GIRO}}" style="width:175px;"></td>
<td>RUBRO:</td>
<td><input type="text" class="form-control" readOnly value="{{$proveedores->PRO_RUBRO}}" style="width:175px;"></td>
<td>SUB RUBRO:</td>
<td><input type="text" class="form-control" readOnly value="{{$proveedores->PRO_SUBRUBRO}}" style="width:175px;"></td>
</tr>
<tr>
<td>PAIS:</td>
<td><input type="text" class="form-control" readOnly value="{{ App\Pais::find($proveedores->PRO_PAI_COD)->PAI_DESC }}" style="width:175px;"></td>
<td>REGION</td>
<td><input type="text" class="form-control" readOnly value="{{ App\Region::find($proveedores->PRO_REG_COD)->REG_DESC }}" style="width:175px;"></td>
<td>CIUDAD:</td>
<td><input type="text" class="form-control" readOnly value="{{ App\Ciudad::find($proveedores->PRO_CIU_COD)->CIU_DESC }}" style="width:175px;"></td>
</tr>
<tr>
  <td>PROVINCIA:</td>
  <td><input type="text" class="form-control" readOnly value="{{ App\Provincia::find($proveedores->PRO_PV_COD)->PV_DESC }}" style="width:175px;"></td>
  <td>CONTACTO SECUNDARIO:</td>
  <td><input type="text" class="form-control" readOnly value="{{$proveedores->PRO_CONTACTO_SECUNDARIO}}" style="width:175px;"></td>
  <td>EMAIL:</td>
  <td><input type="email" class="form-control" readOnly value="{{$proveedores->PRO_EMAIL}}" style="width:175px;"></td>
</tr>
<tr>
  <td>TELEFONO:</td>
  <td><input type="email" class="form-control" readOnly value="{{$proveedores->PRO_TEL}}" style="width:175px;"></td>
  <td>FACEBOOK:</td>
  <td><input type="email" class="form-control" readOnly value="{{$proveedores->PRO_FACEBOOK}}" style="width:175px;"></td>
</tr>
<tr>
  <td>Nº CUENTA:</td>
  <td><input type="text" class="form-control" readOnly value="{{$proveedores->PRO_N_CUENTA}}" style="width:175px;"></td>
  <td>BANCO:</td>
  <td><input type="text" class="form-control" readOnly value="{{ App\Banco::find($proveedores->PRO_BCO_ID)->BCO_DESC }}" style="width:175px;"></td>
  <td>TIPO DE CUENTA:</td>
  <td><input type="text" class="form-control" readOnly value="{{ App\TipoCuenta::find($proveedores->PRO_TCTA_BCO)->TCTA_DESC }}" style="width:175px;"></td>
</tr>
</table>
<!--
<h1 class=" text-center text-uppercase" >MIS EVALUACIONES</h1>
<table class="table table-bordered" align="center" >
  <tr>
    <td>OFERTA</td>
    <td>DESCRIPCION</td>
    <td>COMENTARIO</td>
    <td>CALIFICACION</td>
  </tr>
</table>
 -->
</div>
<br>
<div class="container">  <a href="{{route('perfil')}}"><button class="btn btn-primary btn-lg">Volver</button></a></div>
<br>
<br>

@endsection
