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

                <td>CONTACTO:</td>
                <td>
                  <input type="text" value="{{ $cliente->CLI_CONTACTO }}"  style="width:175px;" class="form-control" readOnly/>
                </td>



                <td>EMAIL:</td>
                <td>
                  <input type="text" value="{{ $cliente->CLI_EMAIL }}"  style="width:175px;" class="form-control" readOnly/>
                </td>

                <td>TELEFONO:</td>
                <td>
                  <input type="text" value="{{ $cliente->CLI_FONO }}" style="width:175px;" class="form-control" readOnly/>
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

            <h3 class="text-center text-uppercase">CONTACTOS DE CLIENTE</h3>
            <table class="table table-bordered table-hover">

              @if (session('status_contacto'))
                <div class="alert alert-warning">
                  {{ session('status_contacto') }}
                </div>
              @endif

              <tr>
                <td>ID</td>
                <td>NOMBRE</td>
                <td>CELULAR</td>
                <td>EMAIL EMPRESARIAL</td>
                <td>EMAIL PERSONAL</td>
                <td>SUCURSAL</td>
                <td colspan="1">ACCION</td>
              </tr>


              @foreach($contacto as $contac)
                <tr>
                  <td>{{ $contac->ID_CONT }}</td>
                  <td>{{ $contac->CONT_NOM }}</td>
                  <td>{{ $contac->CONT_CEL }}</td>
                  <td>{{ $contac->CONT_EMAIL_EMP }}</td>
                  <td>{{ $contac->CONT_EMAIL }}</td>
                  <td>{{ $contac->CONT_SUCURSAL }}</td>
                  <td><a href="{{ route('contacto.destroy',$contac->ID_CONT) }}" onclick="return confirm('¿Desea eliminar éste contacto?')">
                      <button class="btn btn-primary btn-xs" style="width:65px;" >ELIMINAR</button></a></td>

                </tr>
              @endforeach

              <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td><button class="btn btn-primary btn-xs" style="width:65px;" data-toggle="modal" data-target="#regContactoCliente" data-backdrop="false">AGREGAR</button></td>

                </tr>

              </table>
        {{ $contacto->links() }}
        @include('modals.RegContactoCliente', $cliente)

          <!-- FORM FINAL -->

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
