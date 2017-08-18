@extends('layouts.app')
@section('content')
<div class="row">
  <div class="col-xs-12 col-md-12 col-sm-12">
    <div class="block-web">
      <div class="header">
        <div class="actions"></div>
        <h1 class="content-header text-center text-uppercase"><b>mis datos</b></h1>
      </div>
      <div class="porlets-content">
        <!-- FORM INICIO -->
        <div class="container" align="center">


        <table class="table-condensed  text-right" align="center" style="text-align:right;" >
            <tr>
                <td>NOMBRE:</td>
                <td><input type="text" class="form-control" readOnly value="{{$proveedores->PRO_NOMBRE}}" style="width:175px;"></td>
                <td>APELLIDOS:</td>
                <td><input type="text"  class="form-control"readonly value="{{$proveedores->PRO_APE_PAT}}" style="width:175px;"></td>
                <td>RUN:</td>
                <td><input type="text" class="form-control" readOnly value="{{$proveedores->PRO_RUN}}" style="width:175px;"></td>
            </tr>
            <tr>
                <td>GIRO:</td>
                <td><input type="text" class="form-control" readOnly value="{{$proveedores->PRO_GIRO}}"style="width:175px;"></td>
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
        </div>
        <br>
        <div class="container">  <a href="{{route('perfil')}}"><button class="btn btn-primary btn-lg">Volver</button></a></div>
        <br>
        <br>

        <!-- FORM FINAL -->

      </div><!--/porlets-content-->
    </div><!--/block-web-->
  </div><!--/col-md-12-->
</div><!--/row-->


@endsection
