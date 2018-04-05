@extends('layouts.app')
@section('content')

<br>
<div class="container" align="center">

  <div class="row">
    <div class="col-xs-12 col-md-12 col-sm-12">
      <div class="block-web">
        <div class="header">
          <div class="actions"></div>
          <h1 class=" text-center text-uppercase" >FICHA CLIENTE PROSPECTO</h1>
        </div>
        <div>
          @if (session('status_cliente'))
            <div class="alert alert-success">
              {{ session('status_cliente') }}
            </div>
          @endif
        </div>
        <div class="porlets-content">
          <!-- FORM INICIO -->



            <table class="table-condensed text-right" align="center">
              <tr>
                <td>NOMBRE:</td>
                <td>
                  <input name="nombre" type="text" value="{{ $cliente->CLI_NOMBRE }}" style="width:175px;" class="form-control" id="nombre" pattern="[A-Za-z]{4-16}" readOnly/>
                </td>

                <td>RUT:</td>
                <td>

                  <input type="text" id="rut" name="rut" value="{{ $cliente->CLI_RUT }}" style="width:175px;" class="form-control" maxlength="10" readOnly oninput="checkRut(this)" />
                  <script src="{{asset('js/validarRUT.js')}}"></script>

                </td>

              </tr>
              <tr>

                <td>TELEFONO:</td>
                <td>
                  <input type="text" value="{{ $cliente->CLI_FONO }}"  style="width:175px;" class="form-control" readOnly/>
                </td>



                <td>EMAIL:</td>
                <td>
                  <input type="text" value="{{ $cliente->CLI_EMAIL }}"  style="width:175px;" class="form-control" readOnly/>
                </td>

                <td>TELEFONO 2:</td>
                <td>
                  <input type="text" value="{{ $cliente->CLI_FONO2 }}" style="width:175px;" class="form-control" readOnly/>
                </td>

              </tr>
              <tr>

                <td>ACTIVIDAD COMERCIAL: </td>
                <td >
                  <input name="actividad" type="text" value="{{ $cliente->CLI_ACT_COMERCIAL }}"  style="width:175px;" id="actividad" class="form-control" readOnly/>
                </td>

                <td>SITIO WEB: </td>
                <td >
                  <input  type="text" value="{{ $cliente->CLI_SITIO_WEB }}"  style="width:175px;" class="form-control" readOnly/>
                </td>

                <td>GLOSA: </td>
                <td >
                  <input  type="text" value="{{ $cliente->CLI_GLOSA }}"  style="width:175px;" class="form-control" readOnly/>
                </td>

              </tr>
              <tr>
                <td>RUBRO:</td>
                <td>
                  <input  type="text"  value="{{ $cliente->CLI_RUBRO }}" style="width:175px;" class="form-control" readOnly/>
                </td>

                <td>SUB RUBRO:</td>
                <td>
                  <input  type="text" value="{{ $cliente->CLI_SUB_RUBRO }}"  style="width:175px;" class="form-control" readOnly/>
                </td>

                <td>ACTIVIDAD:</td>
                <td>
                  <input  type="text"  value="{{ $cliente->CLI_ACTIVIDAD }}" style="width:175px;" class="form-control" readOnly/>
                </td>

              </tr>
              <tr>

                <td>BANCO:</td>
                <td>
                  <input  type="text" value="{{ $cliente->CLI_BANCO }}"  style="width:175px;" class="form-control" readOnly/>
                </td>

                <td>TIPO DE CUENTA:</td>
                <td>
                  <input  type="text" value="{{ $cliente->CLI_TCTA_BCO }}"  style="width:175px;" class="form-control" readOnly/>
                </td>

                <td>Nº DE CUENTA: </td>
                <td >
                  <input  type="text"  value="{{ $cliente->CLI_NRO_CTA }}" style="width:175px;" class="form-control" readOnly/>
                </td>

              </tr>
              <tr>

                <td>ORIGEN: </td>
                <td >
                  <input  type="text" value="{{ $cliente->CLI_ORIGEN }}"  style="width:175px;" class="form-control" readOnly/>
                </td>

                <td>PAIS:</td>
                <td>
                  <input  type="text" value="{{ $cliente->CLI_PAIS }}"  style="width:175px;" class="form-control" readOnly/>
                </td>
                <td>REGION:</td>
                <td>
                  <input  type="text" value="{{ $cliente->CLI_REGION }}"  style="width:175px;" class="form-control" readOnly/>
                </td>

              </tr>
              <tr>

                <td>PROVINCIA:</td>
                <td>
                  <input  type="text" value="{{ $cliente->CLI_PROVINCIA }}"  style="width:175px;" class="form-control" readOnly/>
                </td>

                <td>CIUDAD:</td>
                <td>
                  <input  type="text" value="{{ $cliente->CLI_CIUDAD }}"  style="width:175px;" class="form-control" readOnly/>
                </td>

                <td>DIRECCION:</td>
                <td>
                  <input  type="text" value="{{ $cliente->CLI_DIRECCION }}"  style="width:175px;" class="form-control" readOnly/>
                </td>

              </tr>
            </table>
            <br>
          <h3 class="text-center text-uppercase">ACTIVIDADES</h3>
          @if (session('status_actividad'))
            <div class="alert alert-warning">
              {{ session('status_actividad') }}
            </div>
          @endif
          <div class="table-responsive">
            <table class="display  table-bordered  text-uppercase" id="dynamic-table">
              <!--  EN EL INDEX AGREGAR DESPUES DE CLIENTE, CONTACTO-->
              <tr>
                <td>ID</td>
                <td>DESCRIPCIÓN</td>
                <td>FECHA</td>
                <td>HORA</td>
                <td>NOMBRE CONTACTO</td>
                <td>TELEFONO CONTACTO</td>
                <td colspan="2">ACCION</td>
              </tr>

              @foreach($actividades as $actividad)
                <tr>
                  <td>{{ $actividad->ID_ACT }}</td>
                  <td>{{ $actividad->DESC_ACT }}</td>
                  <td>{{ $actividad->FECHA_ACT }}</td>
                  <td>{{ $actividad->HORA }}</td>
                  <td>{{ $actividad->NOM_CONT_ACT }}</td>
                  <td>{{ $actividad->CONTACT_ACT }}</td>

                  <td>
                    <a href="{{ route('actividad.destroy',$actividad->ID_ACT) }}" onclick="return confirm('¿Desea eliminar ésta Actividad?')" >
                      <button class="btn btn-primary btn-xs" style="width:90px; margin-bottom:5px;">ELIMINAR</button></a>
                  <!--<a href="{{ action('ActividadesController@edit',$actividad->ID_ACT) }} ">
                  <button class="btn btn-primary btn-xs" style="width:90px; margin-bottom:5px;">MODIFICAR</button></a>-->
                    <button class="btn btn-primary btn-xs" style="width:90px; margin-bottom:5px;"  data-toggle="modal" data-target="#ModActividad">EDITAR</button>
                  </td>
                </tr>
              @endforeach
              <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>
                  <button class="btn btn-primary btn-xs" style="width:90px;" data-toggle="modal" data-target="#regActividad" >NUEVO</button>
                </td>
              </tr>
            </table>
            {{ $actividades->links() }}
            @include('modals.RegActividad',$cliente)
            @include('modals.modActividad',$cliente)
          </div>

        <!--FORM FINAL -->

        </div><!--/porlets-content-->
      </div><!--/block-web-->
    </div><!--/col-md-12-->
  </div><!--/row-->


<br>
<div class="container">  <a href="{{route('clientes')}}"><button class="btn btn-primary btn-lg">Volver</button></a></div>

</div>
</form>

<br>
<br>

@endsection
