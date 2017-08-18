@extends('layouts.app')
@section('content')


<div class="container" align="center">

  <div class="row">
    <div class="col-xs-12 col-md-12 col-sm-12">
      <div class="block-web">
        <div class="header">
          <div class="actions"></div>
          <h1>PERFIL DE POSTULANTE</h1>
        </div>
        <div class="porlets-content">
          <!-- FORM INICIO -->

          <table class=" table-condensed">
            <tr>
              <td>RUT:</td>
              <td><input type="text" readOnly  style="width:175px;"></td>
            </tr>
            <tr>
              <td>NOMBRE:</td>
              <td><input type="text" readOnly  style="width:175px;"></td>
            </tr>
            <tr>
              <td>DISPONIBILIDAD:</td>
              <td><input type="text" readOnly  style="width:175px;"></td>
            </tr>
            <tr>
              <td>REFERENCIA:</td>
              <td><textarea type="text" readOnly  style="width:175px; max-width:175;"></textarea></td>
            </tr>

            <tr>
              <td>HIZO AYUDANTIA:</td>
              <td><input type="text" readOnly  style="width:175px;"></td>
            </tr>

            <tr>
              <td>FECHA NACIMIENTO:</td>
              <td><input type="text" readOnly  style="width:175px;"></td>
            </tr>

            <tr>
              <td>NOMBRE CONYUGE:</td>
              <td><input type="text" readOnly  style="width:175px;"></td>
            </tr>

            <tr>
              <td>NUMERO DE HIJOS:</td>
              <td><input type="text" readOnly  style="width:175px;"></td>
            </tr>

            <tr>
              <td>EMAIL:</td>
              <td><input type="email" readOnly  style="width:175px;"></td>
            </tr>

          </table>
          <a href="{{route('editarDatos')}}"><button class="btn btn-primary btn-lg">EDITAR DATOS</button></a>

          <h1>POSTULACIONES INSCRITAS</h1>

          <table class="table-bordered table-condensed table-hover">

            <tr>
              <th>ID</th>
              <th>DESCRIPCION</th>
              <th>DURACION</th>
              <th>TIPO DE OFERTA</th>
              <th>SUELDO</th>
              <th>ACCION</th>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td>
                <a href="{{route('InformacionOferta')}}"><button class="btn btn-primary btn-xs">ver oferta</button></a>
                <button class="btn btn-primary btn-xs">desinscribir</button>
              </td>
            </tr>

          </table>

          <!-- FORM FINAL -->

        </div><!--/porlets-content-->
      </div><!--/block-web-->
    </div><!--/col-md-12-->
  </div><!--/row-->

</div>

 <div class="container">  <a href="{{route('home')}}"><button class="btn btn-primary btn-lg">logOut</button></a></div>
<br>

<br>

@endsection
