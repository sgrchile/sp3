@extends('layouts.app')
@section('content')
<div class="container">
<H1 class="text-center"><strong>Registro Clientes </strong></H1>
<form id="form1" name="form1" method="post" action="{{ route('post.clientes') }}">
  {{ csrf_field() }}
  <table width="706" border="0" align="center" bgcolor="#CCCCCC">
    <tr>
      <td>Nombre: </td>
      <td><label>
        <input name="nombre" type="text" class="form-control" id="nombre" pattern="[A-Za-z]{4-16}" required="required"/>
      </label></td>
      <td>Tipo cuenta : </td>
      <td colspan="3"><label>
          <select style="width:175px;" class="form-control" name="tipo_cuenta" required>
            @foreach($tipo_cuentas as $tipo_cuenta)
              <option value="{{ $tipo_cuenta->TCTA_BCO }}">{{ $tipo_cuenta->TCTA_DESC }}</option>
            @endforeach
          </select>
      </label></td>
    </tr>
    <tr>
      <td>Rut:</td>
      <td><label>
      <input type="text" id="rut" name="rut" class="form-control" maxlength="10" required oninput="checkRut(this)" />
      	 <script src="../../../public/js/validarRUT.js"></script>

      </label></td>
      <td>Actividad Comercial : </td>
      <td colspan="3"><label>
        <input name="actividad" type="text" id="actividad" class="form-control" required/>
      </label></td>
    </tr>
    <tr>
      <td>Contacto: </td>
      <td><label>
        <input name="contacto" type="text" id="contacto" class="form-control"  required/>
      </label></td>
      <td>Email  : </td>
      <td colspan="3"><label>
        <input name="email" type="email" id="email" class="form-control" required/>
        </label></td>
    </tr>
    <tr>
      <td>Fono : </td>
      <td><label>
        <input name="fono" type="tel" id="fono" class="form-control" pattern="[0-9]{9}" required/>
      </label></td>

      <td>Dirección : </td>
      <td colspan="3"><label>
          <input name="direccion" type="text" id="fono" class="form-control" required/>
        </label></td>
    </tr>
    <tr>

      <td colspan="6" align="center"><input class="btn btn-primary btn-lg btn-block" name="adot_boton" type="submit" id="adot_boton" value="Agregar" /></td>

    </tr>
  </table>
</div>
 <br>
  <div class="container">  <a href="{{ route('index') }}"><button class="btn btn-primary btn-lg">Volver</button></a></div>
@endsection
