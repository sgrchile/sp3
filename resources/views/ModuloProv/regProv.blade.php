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
          <td><label>TELEFONO:</label></td>
          <td>
            {{ Form::number('telefono',null,['class'=>'form-control','required','style'=>'width:175px']) }}
          </td>

          <td><label>EMAIL:</label></td>
          <td><input type="email" required name="email" style="width:175px;" class="form-control"></td>
        </tr>
        <tr>
          <td><label>TELEFONO SECUNDARIO:</label></td>
          <td><input type="text"  name="telefono_secundario" style="width:175px;" class="form-control"></td>


          <td><label>REDES SOCIALES:</label></td>
          <td><textarea name="redes"  class="form-control" style ="max-width:175px; max-height:175px;" placeholder="instagram,linkedin"></textarea></td>

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
        <tr>
          <td><label>PAGOS:</label></td>
          <td>
            <select style="width:175px;" class="form-control" name="pagos">
              <option>Seleccionar</option>
              @foreach($pagos as $pago)
                <option value="{{ $pago->ID_PAGOS }}">{{ $pago->DESC_PAGOS }}</option>
              @endforeach
            </select>
          </td>
          <td><label>SITIO WEB:</label></td>
          <td><input type="text" class="form-control" name="sitioweb" style="width:175px;"></td>
          <td><label>DICOM:</label></td>
          <td>
            <select style="width:175px;" class="form-control" name="dicom">
              <option>Seleccionar</option>
              @foreach($preguntas as $pregunta)
                <option value="{{ $pregunta->ID_PREG_CERRADA }}">{{ $pregunta->DESC_PREG }}</option>
              @endforeach
            </select>
          </td>
        </tr>
          <tr>
            <td><label>LOGO:</label></td>
            <td>
              {{ Form::file('logo',null,
              ['class' => 'form-control','style' => 'width:175px']) }}
            </td>
            <td><label>VIDEO:</label></td>
            <td>
              {{ Form::file('video',null,
              ['class' => 'form-control','style' => 'width:175px']) }}
            </td>
            <td><label>CERTIFICACIONES</label></td>
            <td>
              <textarea name="certificaciones"  class="form-control" style ="max-width:175px; max-height:175px;" placeholder="indique sus certificaciones"></textarea>
            </td>

          </tr>
          <tr>
            <td><label>VEHICULO(S)</label></td>
            <td>
              <textarea name="vehiculo"  class="form-control" style ="max-width:175px; max-height:175px;" placeholder="indique modelo,marca y año"></textarea>
            </td>
            <td><label>DIRECCION OFICINA:</label></td>
            <td><input type="text" class="form-control" name="oficina" style="width:175px;"></td>
            <td><label>MAQUINARIA(S)</label></td>
            <td>
              <textarea name="maquinaria"  class="form-control" style ="max-width:175px; max-height:175px;" placeholder="indique tipo,marca y año"></textarea>
            </td>
          </tr>
          <tr>
            <td><label>EQUIPO(S)</label></td>
            <td>
              <textarea name="maquinaria"  class="form-control" style ="max-width:175px; max-height:175px;" placeholder="indique marca,modelo y año"></textarea>
            </td>
            <td><label>PERSONA JURIDICA:</label></td>
            <td>
              <select style="width:175px;" class="form-control" name="pers_juridica">
                <option>Seleccionar</option>
                @foreach($pers_juridica as $pers_jurid)
                  <option value="{{ $pers_jurid->ID_PERS_JURIDICA }}">{{ $pers_jurid->DESC_PERS_JURIDICA }}</option>
                @endforeach
              </select>
            </td>
            <td><label>FECHA CONTITUCION</label></td>
            <td>{{ Form::date('fecha_contitucion',Carbon\Carbon::now()->toDateString(),['class'=>'form-control','style'=>'width:175px']) }}</td>
          </tr>
          <tr>
            <td><label>REPRECENTANTE LEGAL:</label></td>
            <td><input type="text" class="form-control" name="rep_legal" style="width:175px;"></td>
            <td><label>SISTEMA ERP</label></td>
            <td>
              <textarea name="sistemaerp"  class="form-control" style ="max-width:175px; max-height:175px;" placeholder="indique detalles de su sistema"></textarea>
            </td>
            <td><label>VENTAS ANUALES:</label></td>
            <td>
            <select style="width:175px;" class="form-control" name="ventas_anuales">
              <option>Seleccionar</option>
              @foreach($ventas as $vents)
                <option value="{{ $vents->ID_VTAS_ANUALES }}">{{ $vents->DESC_VTAS_ANUALES }}</option>
              @endforeach
            </select>
            </td>
          </tr>
          <tr>
            <td><label>NUMERO DE EMPLEADOS:</label></td>
            <td>
              <select style="width:175px;" class="form-control" name="nro_empleados">
                <option>Seleccionar</option>
                @foreach($nro_empleados as $nro_empleado)
                  <option value="{{ $nro_empleado->ID_NRO_EMPLE }}">{{ $nro_empleado->DESC_NRO_EMPLE }}</option>
                @endforeach
              </select>
            </td>
            <td><label>COBERTURA:</label></td>
            <td>
              <select style="width:175px;" class="form-control" name="cobertura">
                <option>Seleccionar</option>
                @foreach($cobertura as $cobert)
                  <option value="{{ $cobert->ID_COBERTURA }}">{{ $cobert->DESC_COBERTURA }}</option>
                @endforeach
              </select>
            </td>
            <td><label>CATEGORIA:</label></td>
            <td>
              <select style="width:175px;" class="form-control" name="categoria">
                <option>Seleccionar</option>
                @foreach($categoria as $categ)
                  <option value="{{ $categ->ID_CATEG_EMP }}">{{ $categ->DESC_CATEG }}</option>
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
