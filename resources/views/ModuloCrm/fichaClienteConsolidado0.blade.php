@extends('layouts.app')
@section('content')

<br>


<h1 class=" text-center text-uppercase" >FICHA CLIENTE CONSOLIDADO</h1>

<table class="table-condensed text-right" align="center">
  <tr>
    <td>NOMBRE:</td>
    <td>
        <input name="nombre" type="text"  style="width:175px;" class="form-control" id="nombre" pattern="[A-Za-z]{4-16}" readOnly/>
    </td>

    <td>NOMBRE DE FANTASIA:</td>
    <td>
        <input name="nombre" type="text"  style="width:175px;" class="form-control" id="nombre" pattern="[A-Za-z]{4-16}" readOnly/>
    </td>

    <td>RUT:</td>
    <td>

      <input type="text" id="rut" name="rut"  style="width:175px;" class="form-control" maxlength="10" readOnly oninput="checkRut(this)" />
      <script src="{{asset('js/validarRUT.js')}}"></script>

    </td>

    <td>CONTACTO:</td>
    <td>
        <input type="text"  style="width:175px;" class="form-control" readOnly/>
    </td>



  </tr>
  <tr>

    <td>EMAIL:</td>
    <td>
      <input type="text"  style="width:175px;" class="form-control" readOnly/>
    </td>

    <td>TELEFONO:</td>
    <td>
      <input type="text"  style="width:175px;" class="form-control" readOnly/>
    </td>


    <td>ACTIVIDAD COMERCIAL: </td>
    <td >
        <input name="actividad" type="text"   style="width:175px;" id="actividad" class="form-control" readOnly/>
    </td>

    <td>SITIO WEB: </td>
    <td >
        <input  type="text"   style="width:175px;" class="form-control" readOnly/>
    </td>

  </tr>
  <tr>
    <td>GLOSA: </td>
    <td >
      <input  type="text"   style="width:175px;" class="form-control" readOnly/>
    </td>

    <td>RUBRO:</td>
    <td>
      <input  type="text"   style="width:175px;" class="form-control" readOnly/>
    </td>

    <td>SUB RUBRO:</td>
    <td>
      <input  type="text"   style="width:175px;" class="form-control" readOnly/>
    </td>

    <td>ACTIVIDAD:</td>
    <td>
      <input  type="text"   style="width:175px;" class="form-control" readOnly/>
    </td>

  </tr>
  <tr>

    <td>BANCO:</td>
    <td>
      <input  type="text"   style="width:175px;" class="form-control" readOnly/>
    </td>

    <td>TIPO DE CUENTA:</td>
    <td>
      <input  type="text"   style="width:175px;" class="form-control" readOnly/>
    </td>

    <td>Nº DE CUENTA: </td>
    <td >
        <input  type="text"   style="width:175px;" class="form-control" readOnly/>
    </td>

    <td>ORIGEN: </td>
    <td >
        <input  type="text"   style="width:175px;" class="form-control" readOnly/>
    </td>
  </tr>
  <tr>

    <td>PAIS:</td>
    <td>
      <input  type="text"   style="width:175px;" class="form-control" readOnly/>
    </td>
    <td>REGION:</td>
    <td>
      <input  type="text"   style="width:175px;" class="form-control" readOnly/>
    </td>

    <td>COMUNA:</td>
    <td>
      <input  type="text"   style="width:175px;" class="form-control" readOnly/>
    </td>

    <td>CIUDAD:</td>
    <td>
      <input  type="text"   style="width:175px;" class="form-control" readOnly/>
    </td>


  </tr>
  <tr>

    <td>DIRECCION:</td>
    <td>
      <input  type="text"   style="width:175px;" class="form-control" readOnly/>
    </td>
  </tr>

</table>
<br>

<h3 class="text-center text-uppercase">CONTACTOS DE CLIENTE</h3>
<table class="table table-bordered table-hover">


  <tr>
    <td>ID</td>
    <td>NOMBRE</td>
    <td>CELULAR</td>
    <td>EMAIL EMPRESARIAL</td>
    <td>EMAIL PERSONAL</td>
    <td>SUCURSAL</td>
    <td colspan="1">ACCION</td>
  </tr>

  <tr>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td><button class="btn btn-primary btn-xs" style="width:65px;" >ELIMINAR</button></td>

  </tr>

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
@include('modals.RegContactoCliente')


<h3 class="text-center text-uppercase">OPORTUNIDADES</h3>
<table class="table table-bordered table-hover">

  <tr>
    <td>ID</td>
    <td>NOMBRE</td>
    <td>CONTACTO</td>
    <td>PROCESO DE NEGOCIO</td>
    <td>ETAPA</td>
    <td>PROPIETARIO</td>
    <td>FECHA DE INGRESO</td>
    <td>FECHA DE CIERRE</td>
    <td>CENTRO DE NEGOCIO</td>
    <td>MONEDA</td>
    <td>TASA</td>
    <td>TOTAL</td>
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
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td>
      <button class="btn btn-primary btn-xs" style="width:90px; margin-bottom:5px;" data-toggle="modal" data-target="#Oportunidades" data-backdrop="false">AGREGAR</button>
      <button class="btn btn-primary btn-xs" style="width:90px; margin-bottom:5px;" data-toggle="modal" data-target="#regOportunidad" data-backdrop="false">REGISTRAR</button>
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
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td ></td>
    <td colspan="2"><button class="btn btn-primary btn-xs" style="width:90px;">ELIMINAR</button></td>

  </tr>
</table>

  @include('modals.ListaOportunidad')
  @include('modals.regOportunidades')



<h3 class="text-center text-uppercase">ACTIVIDADES</h3>
<table class="table table-bordered table-hover">
    <!--  EN EL INDEX AGREGAR DESPUES DE CLIENTE, CONTACTO-->
  <tr>
    <td>ID</td>
    <td>FECHA</td>
    <td>HORA</td>
    <td>CONTACTO</td>
    <td>OPORTUNIDAD</td>
    <td colspan="1">ACCION</td>
  </tr>

  <tr>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>

    <td>
      <button class="btn btn-primary btn-xs" style="width:90px; margin-bottom:5px;">ELIMINAR</button>
      <button class="btn btn-primary btn-xs" style="width:90px; margin-bottom:5px;"  data-toggle="modal" data-target="#ModActividad">MODIFICAR</button>

    </td>
  </tr>

  <tr>
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
@include('modals.RegActividad')
@include('modals.modActividad')

<h3 class="text-center text-uppercase">COTIZACIONES</h3>
<table class="table table-bordered table-hover">
  <!--  EN EL INDEX AGREGAR DESPUES DE CLIENTE, CONTACTO-->
  <tr>
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

</div>
</form>
<br>
<div class="container">  <a href="{{route('clientes')}}"><button class="btn btn-primary btn-lg">Volver</button></a></div>



<br>
<br>

@endsection
