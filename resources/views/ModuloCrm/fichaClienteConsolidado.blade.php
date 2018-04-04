@extends('layouts.app')
@section('content')

  <div class="row">
    <div class="col-xs-12 col-md-12 col-sm-12">
      <div class="block-web">
        <div class="header">
          <div class="actions"></div>
          <h1 class=" text-center text-uppercase" >FICHA CLIENTE CONSOLIDADO</h1>
        </div>
        <div class="porlets-content">
          <!-- FORM INICIO -->

          <table class="table-condensed text-right">

            <tr>
              <td>NOMBRE:</td>
              <td>
                <input name="nombre" type="text"  style="width:175px;" class="form-control" id="nombre" value="{{ $cliente->CLI_NOMBRE }}" pattern="[A-Za-z]{4-16}" readOnly/>
              </td>

              <td>NOMBRE DE FANTASIA:</td>
              <td>
                <input name="nombref" type="text"  style="width:175px;" class="form-control" id="nombref" pattern="[A-Za-z]{4-16}" readOnly/>
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
                <input type="text" ID="contacto" value="{{ $cliente->CLI_CONTACTO }}" style="width:175px;" class="form-control" readOnly/>
              </td>

              <td>EMAIL:</td>
              <td>
                <input type="text" ID="EMAIL" value="{{ $cliente->CLI_EMAIL }}" style="width:175px;" class="form-control" readOnly/>
              </td>

              <td>TELEFONO:</td>
              <td>
                <input type="text" ID="TELEFONO" value="{{ $cliente->CLI_FONO }}" style="width:175px;" class="form-control" readOnly/>
              </td>

            </tr>
            <tr>

              <td>ACTIVIDAD COMERCIAL: </td>
              <td >
                <input name="actividad" type="text" value="{{ $cliente->CLI_ACT_COMERCIAL }}"  style="width:175px;" id="actividad" class="form-control" readOnly/>
              </td>


              <td>SITIO WEB: </td>
              <td >
                <input  type="text" ID="SITIOWEB" value="{{ $cliente->CLI_SITIO_WEB }}"  style="width:175px;" class="form-control" readOnly/>
              </td>

              <td>GLOSA: </td>
              <td >
                <input  type="text"  ID="GLOSA" value="{{ $cliente->CLI_GLOSA }}" style="width:175px;" class="form-control" readOnly/>
              </td>

            </tr>
            <tr>

              <td>RUBRO:</td>
              <td>
                <input  type="text" ID="RUBRO" value="{{ $cliente->CLI_RUBRO }}" style="width:175px;" class="form-control" readOnly/>
              </td>

              <td>SUB RUBRO:</td>
              <td>
                <input  type="text"  ID="SUBRUBRO" value="{{ $cliente->CLI_SUB_RUBRO }}" style="width:175px;" class="form-control" readOnly/>
              </td>

              <td>ACTIVIDAD:</td>
              <td>
                <input  type="text" ID="ACTIVIDAD" value="{{ $cliente->CLI_ACTIVIDAD }}" style="width:175px;" class="form-control" readOnly/>
              </td>

            </tr>
            <tr>

              <td>BANCO:</td>
              <td>
                <input  type="text" ID="BANCO" value="{{ $cliente->CLI_BANCO }}" style="width:175px;" class="form-control" readOnly/>
              </td>

              <td>TIPO DE CUENTA:</td>
              <td>
                <input  type="text" ID="TIPOCUENTA" value="{{ $cliente->CLI_TCTA_BCO }}" style="width:175px;" class="form-control" readOnly/>
              </td>

              <td>Nº DE CUENTA: </td>
              <td >
                <input  type="text" ID="NROCUENTA" value="{{ $cliente->CLI_NRO_CTA }}" style="width:175px;" class="form-control" readOnly/>
              </td>

            </tr>
            <tr>

              <td>ORIGEN: </td>
              <td >
                <input  type="text" ID="ORIGEN" value="{{ $cliente->CLI_ORIGEN }}" style="width:175px;" class="form-control" readOnly/>
              </td>

              <td>PAIS:</td>
              <td>
                <input  type="text" ID="PAIS" value="{{ $cliente->CLI_PAIS }}" style="width:175px;" class="form-control" readOnly/>
              </td>
              <td>REGION:</td>
              <td>
                <input  type="text" ID="REGION" value="{{ $cliente->CLI_REGION }}" style="width:175px;" class="form-control" readOnly/>
              </td>
            </tr>
            <tr>

              <td>PROVINCIA:</td>
              <td>
                <input  type="text" ID="COMUNA" value="{{ $cliente->CLI_PROVINCIA }}" style="width:175px;" class="form-control" readOnly/>
              </td>


              <td>CIUDAD:</td>
              <td>
                <input  type="text" ID="CIUDAD" value="{{ $cliente->CLI_CIUDAD }}" style="width:175px;" class="form-control" readOnly/>
              </td>



              <td>DIRECCION:</td>
              <td>
                <input  type="text" ID="DIRECCION" value="{{ $cliente->CLI_DIRECCION }}" style="width:175px;" class="form-control" readOnly/>
              </td>
            </tr>


          </table>

          <br>
          <br>

          <h3 class="text-center text-uppercase">CONTACTOS DE CLIENTE</h3>
          <div class="table-responsive">
          <table class="display  table-bordered text-uppercase" id="dynamic-table">

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
                <td><a href="{{ route('contacto.destroy',$contac->ID_CONT) }}" onclick="return confirm('¿Desea eliminar éste contacto?')" ><button class="btn btn-primary btn-xs"
                                                                                       style="width:65px;" >ELIMINAR</button></a></td>

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
          </div>

          <h3 class="text-center text-uppercase">OPORTUNIDADES</h3>
          <div class="table-responsive">

            @if (session('status_oportunidad'))
              <div class="alert alert-warning">
                {{ session('status_oportunidad') }}
              </div>
            @endif
            <table class="display table table-bordered  text-uppercase" id="dynamic-table">

              <tr>
                <td>ID</td>
                <td>NOMBRE</td>
                <td>PROCESO DE NEGOCIO</td>
                <td>ETAPA</td>
                <td>PROPIETARIO</td>
                <td>FECHA DE INGRESO</td>
                <td>FECHA DE CIERRE</td>
                <td>CENTRO DE NEGOCIO</td>
                <td>MONEDA</td>
                <td>TASA</td>
                <td>TOTAL</td>
                <td colspan="1">ACCION</td>
              </tr>

              @foreach($oportunidades as $oportunidad)
              <tr>

                <td>{{ $oportunidad->ID_OPORTUNIDAD }}</td>
                <td>{{ $oportunidad->NOMBRE }}</td>
                <td>{{ $oportunidad->PROC_NEGOCIO }}</td>
                <td>{{ $oportunidad->ETAPA }}</td>
                <td>{{ $oportunidad->ID_CLIENTE }}</td>
                <td>{{ $oportunidad->FEC_INGRESO }}</td>
                <td>{{ $oportunidad->FEC_CIERRE }}</td>
                <td>{{ $oportunidad->CENT_NEGOCIO }}</td>
                <td>{{ $oportunidad->MONEDA }}</td>
                <td>{{ $oportunidad->TASA }}</td>
                <td>{{ $oportunidad->TOTAL }}</td>
                <td>
                  <a href="{{ route('oportunidad.destroy',$oportunidad->ID_OPORTUNIDAD) }}" onclick="return confirm('¿Desea eliminar ésta oportunidad?')" >
                    <button class="btn btn-primary btn-xs" style="width:90px;">ELIMINAR</button></a>
                  <a href="{{ route('oportunidad.ver',$oportunidad->ID_OPORTUNIDAD) }}">
                    <button class="btn btn-primary btn-xs" style="width:90px;">VER</button></a>
                  <a href="{{ route('oportunidad.edit',$oportunidad->ID_OPORTUNIDAD) }}">
                  <button class="btn btn-primary btn-xs" style="width:90px;">EDITAR</button></a>
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
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td colspan="1">
                  <!--<button class="btn btn-primary btn-xs" style="width:90px; margin-bottom:5px;" data-toggle="modal" data-target="#Oportunidades" data-backdrop="false">AGREGAR</button>-->
                  <button class="btn btn-primary btn-xs" style="width:90px; margin-bottom:5px;" data-toggle="modal" data-target="#regOportunidad" data-backdrop="false">AGREGAR</button></td>
              </tr>
            </table>
            {{ $oportunidades->links() }}
          </div>
          @include('modals.regOportunidades', $cliente)



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
                <button class="btn btn-primary btn-xs" style="width:90px; margin-bottom:5px;"  data-toggle="modal" data-target="#ModActividad">MODIFICAR</button>
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
                <button class="btn btn-primary btn-xs" style="width:90px;" data-toggle="modal" data-target="#regActividad" >AGREGAR</button>
              </td>
            </tr>
          </table>
            {{ $actividades->links() }}
          @include('modals.RegActividad',$cliente)
            @include('modals.modActividad',$cliente))
          </div>

          <!--<h3 class="text-center text-uppercase">COTIZACIONES</h3>
          <div class="table-responsive">
            <table class="display  table-bordered  text-uppercase" id="dynamic-table">
              <!--  EN EL INDEX AGREGAR DESPUES DE CLIENTE, CONTACTO-->
             <!-- <tr>
                <td>FOLIO</td>
                <td>CONTACTO</td>
                <td>OPORTUNIDAD</td>
                <td>CREADOR</td>
                <td>VALOR NETO</td>
                <td>FECHA DE CIERRE</td>
                <td>ESTADO</td>
                <td colspan="2">ACCION</td>
              </tr>

              <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>
                  <button class="btn btn-primary btn-xs" style="width:90px; margin-bottom:5px;">ELIMINAR</button>
                  <button class="btn btn-primary btn-xs" style="width:90px; margin-bottom:5px;">MODIFICAR</button>
                  <button class="btn btn-primary btn-xs" style="width:90px; margin-bottom:5px;">VENDER</button>

                </td>
              </tr>

              <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>

                  <button class="btn btn-primary btn-xs" style="width:90px;">AGREGAR</button>

                </td>
              </tr>
            </table>

          </div>-->


        </div><!--/porlets-content-->
      </div><!--/block-web-->
    </div><!--/col-md-12-->
  </div><!--/row-->






<br>
<div class="container">  <a href="{{route('clientes')}}"><button class="btn btn-primary btn-lg">Volver</button></a></div>



<br>
<br>

@endsection
