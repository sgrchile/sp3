@extends('layouts.app')
@section('content')

  {!! Html::script('js/jquery-2.1.1.min.js') !!}
  {!! Html::script('js/dropdown.js') !!}

<div class="row">
  <div class="col-xs-12 col-md-12 col-sm-12">
    <div class="block-web">
      <div class="header">
        <div class="actions"></div>
        <h1 class="content-header" align="center"><b>REGISTRO PROVEEDOR EMPRESA</b></h1>
      </div>
      <div class="porlets-content">
        <!-- FORM INICIO -->

        <form id="form1" name="form1" method="post" action="{{ route('provEmpresa.crear.post') }}">
        {{ csrf_field() }}
        <table class="table-condensed text-right" align="center" style="text-align:right;" >
          <tr>
            <td><label>NOMBRE:</label></td>
            <td><input type="text" required name="nombre" class="form-control"  style="width:175px;"></td>
            <td><label>RUT:</label></td>
            <td><input type="text" required name="rut" class="form-control" style="width:175px;"></td>
            <td><label>RAZON SOCIAL:</label></td>
            <td><input type="text" required name="razon_social" class="form-control" style="width:175px;"></td>
          </tr>
        <tr>
        <td><label>RUBRO</label></td>
        <td>
          {{ Form::select('rubro',App\Rubro::pluck('RUB_DESC','RUB_COD'),null,['class'=>'form-control','placeholder'=>'Seleccione','style'=>'width:175px']) }}
        </td>

        <td><label>SUB RUBRO:</label></td>
        <td>
          {{ Form::select('subrubro',App\SubRubro::pluck('SUB_RUB_DESC','SUB_RUB_COD'),null,['class'=>'form-control','placeholder'=>'Seleccione','style'=>'width:175px']) }}
        </td>
        <td><label>TIPO DE CUENTA:</label></td>
        <td>
          <select style="width:175px;" class="form-control" name="tipo_cuenta">
            <option value="0">Seleccione</option>
            @foreach($tipo_cuentas as $tipo_cuenta)
              <option value="{{ $tipo_cuenta->TCTA_BCO }}">{{ $tipo_cuenta->TCTA_DESC }}</option>
            @endforeach
          </select>
        </td>
        </tr>
        <tr>
        <td><label>PAIS:</label></td>
        <td>
          <select style="width:175px;" class="form-control" name="pais">
            <option>Seleccionar</option>
            @foreach($paises as $pais)
              <option value="{{ $pais->PAI_COD }}">{{ $pais->PAI_DESC }}</option>
            @endforeach
          </select>
        </td>
        <td><label>REGION:</label></td>
        <td>
          <select style="width:175px;" class="form-control" name="region" id="region">
            <option>Seleccionar</option>
            @foreach ($regiones as $region)
              <option value="{{ $region->REG_COD }}">{{ $region->REG_DESC }}</option>
            @endforeach
          </select>
        </td>
        <td><label>PROVINCIA:</label></td>
          <td>
            {{ Form::select('provincia',App\Provincia::pluck('PV_DESC','PV_COD'),null,['class'=>'form-control','placeholder'=>'Seleccione','style'=>'width:175px']) }}
          </td>
        </tr>
        <tr>
          <td><label>CIUDAD:</label></td>
          <td>
            {{ Form::select('ciudad',App\Ciudad::pluck('CIU_DESC','CIU_COD'),null,['class'=>'form-control','placeholder'=>'Seleccione','style'=>'width:175px']) }}
          </td>
          <td><label>CONTACTO SECUNDARIO:</label></td>
          <td><input type="text" required name="contacto_secundario" style="width:175px;" class="form-control"></td>
          <td><label>EMAIL:</label></td>
          <td><input type="email" required name="email" style="width:175px;" class="form-control"></td>
        </tr>
        <tr>
          <td><label>TELEFONO:</label></td>
          <td>
            {{ Form::number('telefono',null,['class'=>'form-control','required','style'=>'width:175px']) }}
          </td>

          <td><label>FACEBOOK:</label></td>
          <td><input type="text" required name="facebook" style="width:175px;" class="form-control"></td>

          <td><label>PASSWORD:</label></td>
          <td><input type="password" class="form-control" name="password" required  style="width:175px;"></td>
          </tr>

        <tr>
          <td><label>CONFIRMAR PASSWORD:</label></td>
          <td><input type="password" class="form-control" name="password_confirmation" required  style="width:175px;"></td>

          <td><label>Nº CUENTA:</label></td>
          <td>
            {{ Form::number('nro_cuenta',null,['class'=>'form-control','required','style'=>'width:175px']) }}
          </td>
        <td><label>BANCO:</label></td>
        <td>
          <select style="width:175px;" class="form-control" name="banco">
            <option>Seleccionar</option>
            @foreach($bancos as $banco)
              <option value="{{ $banco->BCO_ID }}">{{ $banco->BCO_DESC }}</option>
            @endforeach
          </select>
        </td>
        </tr>
        </table>
        <br>

        <center><button type="submit" class="btn btn-primary btn-lg">REGISTRAR</button></center>

        </form>
        <!-- FORM FINAL -->

      </div><!--/porlets-content-->
    </div><!--/block-web-->
  </div><!--/col-md-12-->
</div><!--/row-->
        <br>
        <div class="container">  <a href="{{route('PROV')}}"><button class="btn btn-primary btn-lg">Volver</button></a></div>
        <br>
        <br>




<script type="text/javascript" src="{{ asset('js/rubros.js') }}" charset="utf-8"></script>
<script type="text/javascript" src="{{ asset('js/subrubros.js') }}" charset="utf-8"></script>
<br>
<br>

@endsection
