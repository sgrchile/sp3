@extends('layouts.app')
@section('content')


<div class="row">
  <div class="col-xs-12 col-md-12 col-sm-12">
    <div class="block-web">
      <div class="header">
        <div class="actions"></div>
        <h1 class="content-header" align="center"><b>REGISTRO PERSONA PROVEEDOR</b></h1>
      </div>
      <div class="porlets-content">
        <!-- FORM INICIO -->
        <form class="form-horizontal" method="post" action="{{ route('post.registrar.prooveedor.persona') }}">
          {{ csrf_field() }}
        <div class="form-group">
        <table class="table-condensed text-right" align="center" style="text-align:right;" >
          <table class="table-condensed text-right" align="center" >

          <tr>
          <td>NOMBRE:</td>
              <td>
                  {{ Form::text('nombre',null,['class'=>'form-control','required','style'=>'width:175px']) }}
              </td>

          <td>APELLIDO PATERNO:</td>
              <td>
                  {{ Form::text('apellido_paterno',null,['class'=>'form-control','required','style'=>'width:175px']) }}
              </td>
          <td>APELLIDO MATERNO:</td>
              <td>
                  {{ Form::text('apellido_materno',null,['class'=>'form-control','required','style'=>'width:175px']) }}
              </td>

        </tr>
        <tr>
            <td>RUT:</td>
            <td>
                {{ Form::text('rut',null,['class'=>'form-control','required','style'=>'width:175px','oninput'=>'checkRut(this)']) }}
            </td>


            <td>FECHA DE NAC.:</td>
            <td>
                {{ Form::date('fecha_nacimiento', \Carbon\Carbon::now()->format('d-m-Y'),['class'=>'form-control form-control-inline input-medium default-date-picker',
                'required','style'=>'width:175px']) }}
            </td>

            <td>CELULAR:</td>
            <td>
                {{ Form::number('celular',null,['class'=>'form-control','required','style'=>'width:175px']) }}
            </td>
          </tr>
          <tr>

            <td>FONO EMERGENCIA:</td>
              <td>
                  {{ Form::number('celular_dos',null,['class'=>'form-control','style'=>'width:175px']) }}
              </td>

            <td>REFERENCIA:</td>
              <td>
                  {{ Form::text('referencia',null,['class'=>'form-control','style'=>'width:175px']) }}
              </td>
            <td>EMAIL:</td>
              <td>
                  {{ Form::email('email',null,['class'=>'form-control','required','style'=>'width:175px','placeholder'=>'example@gmail.com']) }}
              </td>

        </tr>
        <tr>
            <td>NACIONALIDAD:</td>
            <td>
              <select style="width:175px;" class="form-control" name="nacionalidad">
                <option>Seleccionar</option>
                <option value="1">Chilena</option>
                <option value="2">Extranjera</option>
              </select>
            </td>

            <td>SEXO:</td>
            <td>
              <select style="width:175px;" class="form-control" name="sexo">
                <option>Seleccionar</option>
                <option value="1">HOMBRE</option>
                <option value="2">MUJER</option>
                <option value="3">INDEFINIDO</option>
              </select>
            </td>

            <td>DIRECCION:</td>
            <td>
                {{ Form::text('direccion',null,['class'=>'form-control','required','style'=>'width:175px']) }}
            </td>
        </tr>
        <tr>
            <td>PAIS:</td>
            <td>
              <select style="width:175px;" class="form-control" name="pais">
                <option>Seleccionar</option>
                @foreach($paises as $pais)
                  <option value="{{ $pais->PAI_COD }}">{{ $pais->PAI_DESC }}</option>
                @endforeach
              </select>
            </td>
            <td>REGION:</td>
            <td>
              <select style="width:175px;" class="form-control" name="region" id="region">
                <option>Seleccionar</option>
                @foreach ($regiones as $region)
                  <option value="{{ $region->REG_COD }}">{{ $region->REG_DESC }}</option>
                @endforeach
              </select>
            </td>

            <td>PROVINCIA:</td>
            <td>
                {{ Form::select('provincia',App\Provincia::pluck('PV_DESC','PV_COD'),null,['class'=>'form-control','style'=>'width:175px;','placeholder'=>'Seleccione']) }}
            </td>
        </tr>
         <tr>
            <td>CIUDAD:</td>
            <td>
                {{ Form::select('ciudad',App\Ciudad::pluck('CIU_DESC','CIU_COD'),null,['class'=>'form-control','style'=>'width:175px','placeholder'=>'Seleccione']) }}
            </td>
          <td>PASSWORD:</td>
              <td>
                  {{ Form::password('password',['class'=>'form-control','required'=>'required','style'=>'width:175px','placeholder'=>'******']) }}
              </td>
          <td>CONFIRMAR PASSWORD:</td>
              <td>
                  {{ Form::password('password_confirmation',['class'=>'form-control','required'=>'required','style'=>'width:175px','placeholder'=>'******']) }}
              </td>

        </tr>
        <tr>
          <td>SEGURO MEDICO:</td>
          <td>
            <select style="width:175px;" class="form-control" name="seguro_medico">
              <option>Seleccionar</option>
              <option value="Banmédica S.A.">Banmédica S.A.</option>
              <option value="Chuquicamata Ltda.">Chuquicamata Ltda.</option>
              <option value="Colmena Golden Cross S.A.">Colmena Golden Cross S.A.</option>
              <option value="Consalud S.A.">Consalud S.A.</option>
              <option value="Cruz Blanca S.A.">Cruz Blanca S.A.</option>
              <option value="Cruz del Norte Ltda.">Cruz del Norte Ltda.</option>
              <option value="Optima S.A.">Optima S.A.</option>
              <option value="Fundación Ltda.">Fundación Ltda.</option>
              <option value="Fusat Ltda.">Fusat Ltda.</option>
              <option value="Masvida S.A.">Masvida S.A.</option>
              <option value="Río Blanco Ltda.">Río Blanco Ltda.</option>
              <option value="San Lorenzo Ltda.">San Lorenzo Ltda.</option>
              <option value="Vida Tres S.A.">Vida Tres S.A.</option>
            </select>
          </td>

          <td>AFP:</td>
          <td>
              <select style="width:175px;" class="form-control" name="afp">
                <option>Seleccionar</option>
                <option value="Bansander S.A.">Bansander S.A.</option>
                <option value="Cuprum S.A.">Cuprum S.A.</option>
                <option value="Habitat S.A.">Habitat S.A.</option>
                <option value="Planvital S.A.">Planvital S.A.</option>
                <option value="Provida S.A.">Provida S.A.</option>
                <option value="Santa María S.A.">Santa María S.A.</option>
              </select>
          </td>
          <td>FECHA DE PAGO:</td>
          <td>
            <select style="width:175px;" class="form-control" name="fecha_pago">
            <option>Seleccionar</option>
            <option value="Quincena">Quincena</option>
            <option value="Fin de mes">Fin de mes</option>
            </select>
          </td>
        </tr>
        <tr>

          <td>RUBRO</td>
            <td>
                <select style="width:175px;" class="form-control" name="rubro">
                    <option>Seleccionar</option>
                    @foreach( $rubros as $rubro)
                        <option value="{{ $rubro->RUB_COD }}">{{ $rubro->RUB_DESC }}</option>
                    @endforeach
                </select>
            </td>
          <td>SUB-RUBRO</td>
          <td>
            <select style="width:175px;" class="form-control" name="sub_rubro" id="subrubro">
              <option>Seleccionar</option>
            </select>
          </td>
          <td>Nº CUENTA:</td>
          <td><input type="text" class="form-control" name="nro_cuenta"  style="width:175px;"></td>
        </tr>
        <tr>
            <td>BANCO:</td>
            <td>
              <select style="width:175px;" class="form-control" name="banco">
                <option>Seleccionar</option>
                @foreach($bancos as $banco)
                  <option value="{{ $banco->BCO_ID }}">{{ $banco->BCO_DESC }}</option>
                @endforeach
              </select>
            </td>
            <td>TIPO DE CUENTA:</td>
            <td>
              <select style="width:175px;" class="form-control" name="tipo_cuenta">
                <option>Seleccionar</option>
                @foreach($tipo_cuentas as $tipo_cuenta)
                  <option value="{{ $tipo_cuenta->TCTA_BCO }}">{{ $tipo_cuenta->TCTA_DESC }}</option>
                @endforeach
              </select>
            </td>

            <td>SITIO WEB:</td>
            <td>
                <input type="url" name="sitio_web" class="form-control">
            </td>

        </tr>
        <tr>
            <td>FACEBOOK (URL):</td>
            <td>
                <input type="text" name="facebook" class="form-control">
            </td>
              <td>EMPRESA:</td>
              <td>
                  <select class="form-control" name="empresa">
                      <option>Seleccionar</option>
                      @foreach ($empresas as $empresa)
                          <option value="{{ $empresa->EMP_ID }}">{{ $empresa->EMP_DESC }}</option>
                      @endforeach
                  </select>
              </td>
          </tr>
        </table>
        </div>
        <center><button type="submit" class="btn btn-primary btn-lg">REGISTRAR</button></center>
        </form>

        <br>
        <div class="container">  <a href="{{route('PROV')}}"><button class="btn btn-primary btn-lg">Volver</button></a></div>


        <!-- FORM FINAL -->

      </div><!--/porlets-content-->
    </div><!--/block-web-->
  </div><!--/col-md-12-->
</div><!--/row-->


<script type="text/javascript" src="{{ asset('js/rubros.js') }}" charset="utf-8"></script>
<script type="text/javascript" src="{{ asset('js/subrubros.js') }}" charset="utf-8"></script>
<br>
<br>





@endsection
