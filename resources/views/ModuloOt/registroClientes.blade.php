@extends('layouts.app')
@section('content')
  <div class="container">
    @if (session('success'))
      <div class="alert alert-success" data-dismiss="alert" aria-label="Close">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>

        El cliente ha sido registrado exitosamente.
      </div>
        @else
            <div class="alert alert-warning" data-dismiss="alert" aria-label="Close">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>

                El cliente ya existe.
            </div>
        @endif
    <H1 class="text-center"><strong>Registro Clientes </strong></H1>
    <form id="form1" name="form1" method="post" action="{{ route('post.clientes') }}">
      {{ csrf_field() }}
      <table class="table-condensed text-right" align="center">
        <tr>
          <td>Nombre: </td>
          <td><label>
              <input name="nombre" type="text"  style="width:200px;" class="form-control" id="nombre" pattern="[A-Za-z]{4-16}" required="required"/>
            </label></td>
          <td>Tipo cuenta : </td>
          <td colspan="3"><label>
              <select style="width:200px;" class="form-control" name="tipo_cuenta" required>

              </select>
            </label></td>
        </tr>
        <tr>
          <td>Rut:</td>
          <td><label>
              <input type="text" id="rut" name="rut"  style="width:200px;" class="form-control" maxlength="10" required oninput="checkRut(this)" />
              <script src="{{asset('js/validarRUT.js')}}"></script>

            </label></td>
          <td>Actividad Comercial : </td>
          <td colspan="3"><label>
              <input name="actividad" type="text"   style="width:200px;" id="actividad" class="form-control" required/>
            </label></td>
        </tr>
        <tr>
          <td>Contacto: </td>
          <td><label>
              <input name="contacto" type="text"  style="width:200px;" id="contacto" class="form-control"  required/>
            </label></td>
          <td>Email  : </td>
          <td colspan="3"><label>
              <input name="email" type="email"   style="width:200px;" id="email" class="form-control" required/>
            </label></td>
        </tr>
        <tr>
          <td>Fono : </td>
          <td><label>
              <input name="fono"   style="width:200px;" type="tel" id="fono" class="form-control" pattern="[0-9]{9}" required/>
            </label></td>

          <td>Dirección : </td>
          <td colspan="3"><label>
              <input name="direccion"   style="width:200px;" type="text" id="fono" class="form-control" required/>
            </label></td>
        </tr>
        <tr>

          <td colspan="6" align="center"><input class="btn btn-primary btn-lg" name="adot_boton" type="submit" id="adot_boton" value="Agregar" /></td>

        </tr>
      </table>
    </form>
  </div>
  <br>
  <div class="container">  <a href="{{ route('ModuloOt') }}"><button class="btn btn-primary btn-lg">Volver</button></a></div>
@endsection
