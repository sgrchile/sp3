@extends('layouts.app')
@section('content')

<div class="row">
  <div class="col-xs-12 col-md-12 col-sm-12">
    <div class="block-web">
      <div class="header">
        <div class="actions"></div>
        <h1 class=" text-center text-uppercase" >DETALLE DE: {{ $personal->PRO_NOMBRE or '' }} {{ $personal->PRO_APE_PAT or '' }}</h1>
      </div>
      <div class="porlets-content">
        <!-- FORM INICIO -->
        <form id="validacion-live" class="form-group" method="post" action="{{ route('patchEditarRh', $personal->PRO_RUN) }}" id="patchEditarRh">
          {{ csrf_field() }}
          {{ method_field('PATCH') }}

        <div class="container" align="left">
          <div class="col-sm-6 col-md-4">
            <h4>NOMBRE:</h4>
            <input type="text" class="form-control" name="nombre" value="{{ $personal->PRO_NOMBRE  or '' }}" required>
          </div>

            <div class="col-sm-6 col-md-4">
            <h4>APELLIDO PATERNO:</h4>
            <input type="text" class="form-control" name="apellido_paterno" value="{{ $personal->PRO_APE_PAT  or '' }}" required>
            </div>

            <div class="col-sm-6 col-md-4">
            <h4>APELLIDO MATERNO:</h4>
            <input type="text" class="form-control"name="apellido_materno" value="{{ $personal->PRO_APE_MAT  or '' }}" required>
            </div>

            <div class="col-sm-6 col-md-4">
            <h4>RUT:</h4>
            <input type="text" class="form-control" name="rut" value="{{ $personal->PRO_RUN  or '' }}" required>
            </div>

            <div class="col-sm-6 col-md-4">
            <h4>FECHA DE NAC.:</h4>
            <input type="date" name="fecha_nacimiento" class="form-control form-control-inline input-medium default-date-picker" value="{{ $personal->PRO_FECHA_NAC  or '' }}" required>
            </div>

            <div class="col-sm-6 col-md-4">
            <h4>CELULAR:</h4>
            <input type="text" class="form-control" name="celular"value="{{ $personal->PRO_CELULAR  or '' }}" required>
            </div>

            <div class="col-sm-6 col-md-4">
            <h4>CONTACTO SECUNDARIO:</h4>
            <input type="text " class="form-control"name="celular_dos" value="{{ $personal->PRO_CONTACTO_SECUNDARIO  or '' }}" required>
            </div>

            <div class="col-sm-6 col-md-4">
            <h4>REFERENCIA:</h4>
            <input type="text" class="form-control" name="referencia" value="{{ $personal->PRO_REFERENCIA  or '' }}" required>
            </div>

            <div class="col-sm-6 col-md-4">
            <h4>EMAIL:</h4>
            <input type="EMAIL" class="form-control" name="email" value="{{ $personal->PRO_EMAIL  or '' }}" required>
            </div>

            <div class="col-sm-6 col-md-4">
            <h4>SEXO:</h4>
              <select class="form-control" name="sexo">
                <option>Seleccionar</option>
                <option value="HOMBRE">HOMBRE</option>
                <option value="MUJER">MUJER</option>
                <option value="INDEFINIDO">INDEFINIDO</option>
              </select>
              </div>

            <div class="col-sm-6 col-md-4">
            <h4>NACIONALIDAD:</h4>
              <select class="form-control" name="nacionalidad">
                <option>Seleccionar</option>
                <option value="Chilena">Chilena</option>
                <option value="Extranjera">Extranjera</option>
              </select>
              </div>

              <div class="col-sm-6 col-md-4">
              <h4>PAIS:</h4>
              <select class="form-control" name="pais">
                <option>Seleccionar</option>
                @foreach($paises as $pais)
                <option value="{{ $pais->PAI_COD}}"
                {{ $personal->PRO_PAI_COD == $pais->PAI_COD ? 'selected' : '' }}>
                {{ $pais->PAI_DESC }}</option>
                @endforeach
              </select>
                </div>

                <div class="col-sm-6 col-md-4">
                <h4>REGION:</h4>
                <select class="form-control" name="region" id="region">
                  <option>Seleccionar</option>
                  @foreach ($regiones as $region)
                    <option value="{{ $region->REG_COD }}">{{ $region->REG_DESC }}</option>
                  @endforeach
                </select>
                </div>

                <div class="col-sm-6 col-md-4">
                  <h4>PROVINCIA:</h4>
                <select class="form-control" name="provincia" id="provincia">
                  <option>Seleccionar</option>
                  </select>
                  </div>

                  <div class="col-sm-6 col-md-4">
                    <h4>CIUDAD:</h4>
                <select class="form-control" name="ciudad" id="ciudad">
                  <option>Seleccionar</option>
                </select>
                </div>

              <div class="col-sm-6 col-md-4">
              <h4>DIRECCION:</h4>
              <input type="text" class="form-control" name="direccion" value="{{ $personal->PRO_DIRECCION  or '' }}" required>
              </div>

              <div class="col-sm-6 col-md-4">
              <h4>AFP:</h4>
                <select class="form-control" name="afp">
                  <option>Seleccionar</option>
                  <option value="Bansander S.A.">Bansander S.A.</option>
                  <option value="Cuprum S.A.">Cuprum S.A.</option>
                  <option value="Habitat S.A.">Habitat S.A.</option>
                  <option value="Planvital S.A.">Planvital S.A.</option>
                  <option value="Provida S.A.">Provida S.A.</option>
                  <option value="Santa María S.A.">Santa María S.A.</option>
                </select>
                </div>

                <div class="col-sm-6 col-md-4">
                <h4>SEGURO MEDICO:</h4>
                  <select class="form-control" name="seguro_medico">
                    <option value=0>Seleccionar</option>
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
                  </div>

                <div class="col-sm-6 col-md-4">
                  <h4>EMPRESA:</h4>
                  <select class="form-control" name="empresa">
                    <option>Seleccionar</option>
                    @foreach($empresas as $empresa)
                    <option value="{{ $empresa->EMP_ID}}"
                    {{ $personal->PRO_EMP == $empresa->EMP_ID ? 'selected' : '' }}>
                    {{ $empresa->EMP_DESC }}</option>
                    @endforeach
                  </select>
                </div>

                <div class="col-sm-6 col-md-4">
                  <h4>FECHA DE PAGO:</h4>
                <select class="form-control" name="fecha_pago">
                <option>Seleccionar</option>
                <option value="Quincena">Quincena</option>
                <option value="Fin de mes">Fin de mes</option>
                </select>
                </div>

              <div class="col-sm-6 col-md-4">
                <h4>CARGO:</h4>
                <select name="cargo" class="form-control">
                  @foreach($cargos as $cargo)
                  <option value="{{ $cargo->CAR_ID}}"
                  {{ $personal->PRO_CAR_ID == $cargo->CAR_ID ? 'selected' : '' }}>
                  {{ $cargo->CAR_DESC }}</option>
                  @endforeach
                </select>
                  </div>

              <div class="col-sm-6 col-md-4">
                  <h4>TIPO DE PERSONAL:</h4>
                    <select class="form-control" name="personal">
                      <option value="0">Seleccionar</option>
                      <option value="1"selected>RRHH</option>
                    </select>
                  </div>


        <div class="col-sm-6 col-md-4">
            <h4>Nº CUENTA:</h4>
            <input type="text" class="form-control" name="nro_cuenta" value="{{ $personal->PRO_N_CUENTA  or '' }}" required>
        </div>

        <div class="col-sm-6 col-md-4">
          <h4>BANCO:</h4>
              <select name="banco" class="form-control">
                @foreach($bancos as $banco)
                <option value="{{ $banco->BCO_ID}}"
                {{ $personal->PRO_BCO_ID == $banco->BCO_ID ? 'selected' : '' }}>
                {{ $banco->BCO_DESC }}</option>
                @endforeach
              </select>
            </div>

            <div class="col-sm-6 col-md-4">
            <h4>TIPO DE CUENTA:</h4>
            <select name="tipo_cuenta" class="form-control">
              @foreach($tipo_cuentas as $tipo_cuenta)
              <option value="{{ $tipo_cuenta->TCTA_BCO }}"
              {{ $personal->PRO_TCTA_BCO == $tipo_cuenta->TCTA_BCO ? 'selected' : '' }}>
              {{ $tipo_cuenta->TCTA_DESC }}</option>
              @endforeach
            </select>
            </div>

            <div class="col-sm-6 col-md-4">
            <h4>TELÉFONO:</h4>
            <input type="text" class="form-control" name="telefono" value="{{ $personal->PRO_TEL  or '' }}" required>
          </div>

            <div class="col-sm-12">
            <h4>CONTRATO</h4>
            <textarea rows="25" name="contrato" class="form-control">{{ $personal->PRO_CONTRATO or '' }}</textarea>
            </div>

            <div class="col-sm-12">
              <br>
              <center><button type="submit" class="btn btn-primary btn-lg">ACTUALIZAR</button></center>
            </div>
          </form>

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
