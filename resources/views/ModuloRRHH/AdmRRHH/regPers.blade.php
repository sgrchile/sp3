@extends('layouts.app')
@section('content')

  {!! Html::script('js/jquery-2.1.1.min.js') !!}

  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="block-web">
        <div class="header">
          <h1 class=" text-center text-uppercase" >REGISTRAR PERSONAL</h1>
        </div>
        <div class="porlets-content">
          <div class="container" align="left">
          <!-- FORM INICIO -->
          <form id="validacion-live" class="form-group" method="post" action="{{ route('post.registrar.rrhh') }}">
            {{ csrf_field() }}

            <div class="col-sm-6 col-md-4">
              <h4>NOMBRE:</h4>
                <input type="text" class="form-control" name="nombre" required>
            </div>

              <div class="col-sm-6 col-md-4">
              <h4>APELLIDO PATERNO:</h4>
              <input type="text" class="form-control" name="apellido_paterno"  required>
              </div>

              <div class="col-sm-6 col-md-4">
              <h4>APELLIDO MATERNO:</h4>
              <input type="text" class="form-control" name="apellido_materno" required>
              </div>

              <div class="col-sm-6 col-md-4">
              <h4>RUT:</h4>
              <input type="text" class="form-control rut-container" name="rut" id="rut" placeholder="12.345.678-5" required>
                <script src="{{asset('js/validarRUT.js')}}"></script>
              </div>

              <div class="col-sm-6 col-md-4">
              <h4>FECHA DE NAC.:</h4>
                {{ Form::date('fecha_nacimiento',Carbon\Carbon::now()->toDateString(),
                ['class'=>'form-control form-control-inline input-medium default-date-picker','required'] ) }}
              <!--<input type="date"  class="form-control form-control-inline input-medium default-date-picker" name="fecha_nacimiento" placeholder="dd-mm-aaaa" required>-->
              </div>

              <div class="col-sm-6 col-md-4">
              <h4>CELULAR:</h4>
              <input type="number" class="form-control" name="celular" required>
              </div>

              <div class="col-sm-6 col-md-4">
              <h4>CONTACTO EMERGENCIA:</h4>
              <input type="number " class="form-control" name="celular_dos" required>
              </div>

              <div class="col-sm-6 col-md-4">
              <h4>REFERENCIA:</h4>
              <input type="text" class="form-control" name="referencia" required>
              </div>

              <div class="col-sm-6 col-md-4">
              <h4>EMAIL:</h4>
              <input type="EMAIL" class="form-control" name="email" required>
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
                      <option value="{{ $pais->PAI_COD }}">{{ $pais->PAI_DESC }}</option>
                    @endforeach
                  </select>
                  </div>

              <div class="col-sm-6 col-md-4">
              <h4>GENERO:</h4>
                <select class="form-control" name="sexo">
                  <option>Seleccionar</option>
                  <option value="HOMBRE">MASCULINO</option>
                  <option value="MUJER">FEMENINO</option>
                </select>
                </div>

              <div class="col-sm-6 col-md-4">
              <h4>DIRECCION:</h4>
              <input type="text" class="form-control" name="direccion" required>
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
                  @foreach($provincias as $provincia)
                    <option value="{{ $provincia->PV_COD }}">{{ $provincia->PV_DESC }}</option>
                    @endforeach
                  </select>
                  </div>

                  <div class="col-sm-6 col-md-4">
                    <h4>CIUDAD:</h4>
                <select class="form-control" name="ciudad" id="ciudad">
                  <option>Seleccionar</option>
                  @foreach($ciudades as $ciudad)
                    <option value="{{ $ciudad->CIU_COD }}">{{ $ciudad->CIU_DESC }}</option>
                  @endforeach
                </select>
                </div>

                <div class="col-sm-6 col-md-4">
                <h4>AFP:</h4>
                  {{Form::select('afp',$afps,null,['class'=>'form-control','placeholder'=>'Seleccione'])}}
                  </div>

                <div class="col-sm-6 col-md-4">
                <h4>SEGURO MEDICO:</h4>
                  {{Form::select('seguro_medico',$salud,null,['class'=>'form-control','placeholder'=>'Seleccione'])}}
                  </div>

          <div class="col-sm-6 col-md-4">
              <h4>EMPRESA:</h4>
                <select class="form-control" name="empresa">
                  <option>Seleccionar</option>
                  @foreach($empresas as $empresa)
                    <option value="{{ $empresa->EMP_ID }}">{{ $empresa->EMP_DESC }}</option>
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
                <select class="form-control" name="cargo">
                  <option>Seleccionar</option>
                  @foreach($cargos as $cargo)
                    <option value="{{ $cargo->CAR_ID }}">{{ $cargo->CAR_DESC }}</option>
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
              <input type="number" class="form-control" name="nro_cuenta" required>
          </div>

          <div class="col-sm-6 col-md-4">
            <h4>BANCO:</h4>
                <select class="form-control" name="banco">
                  <option>Seleccionar</option>
                  @foreach($bancos as $banco)
                    <option value="{{ $banco->BCO_ID }}">{{ $banco->BCO_DESC }}</option>
                  @endforeach
                </select>
              </div>

              <div class="col-sm-6 col-md-4">
              <h4>TIPO DE CUENTA:</h4>
                <select class="form-control" name="tipo_cuenta">
                  <option>Seleccionar</option>
                  @foreach($tipo_cuentas as $tipo_cuenta)
                    <option value="{{ $tipo_cuenta->TCTA_BCO }}">{{ $tipo_cuenta->TCTA_DESC }}</option>
                  @endforeach
                </select>
              </div>

              <div class="col-sm-6 col-md-4">
              <h4>TELÉFONO:</h4>
              <input type="text" class="form-control" name="telefono" required>
              </div>

              <div class="col-sm-6 col-md-4">
              <h4>SUELDO BASE:</h4>
              <input type="number" min="0" class="form-control" name="sueldo" required>
              </div>

              <div class="col-sm-6 col-md-4">
              <h4>DURACION DE CONTRATO(meses):</h4>
              <input type="number" min="0" class="form-control" name="duracion" required>
              </div>

              <div class="col-sm-6 col-md-4">
              <h4>FECHA DE INGRESO:</h4>
              <input type="date" class="form-control" name="fechaing" >
              </div>

              <div class="col-sm-12">
              <h4>CONTRATO</h4>
                <textarea rows="25" name="contrato" class="form-control"></textarea>
              </div>



              <div class="col-sm-12">
                <br>
                <center><button type="submit" class="btn btn-primary btn-lg">REGISTRAR</button></center>
              </div>
          </form>

          <!-- FORM FINAL -->
          </div>
        </div><!--/porlets-content-->
      </div><!--/block-web-->
    </div><!--/col-md-12-->
  </div><!--/row-->

<br>

<div class="container">  <a href="javascript:history.back(1)"><button class="btn btn-primary btn-lg" id="btn">Volver</button></a></div>




@endsection
