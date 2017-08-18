@extends('layouts.app')
@section('content')


<div class="container" align="center">

  <div class="row">
    <div class="col-xs-12 col-md-12 col-sm-12">
      <div class="block-web">
        <div class="header">
          <div class="actions"></div>
          <h1 class="text-center">POSTULANTE</h1>
        </div>
        <div class="porlets-content">
          <!-- FORM INICIO -->
          <label>BUSCAR POSTULANTE:</label><input type="text" required  style="width:175px;">
          <button type="button" class="btn btn-primary btn-xs"><span class="fa fa-search" style="font-size:19px"></span></button>
          <table class="table-condensed  ">
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

          <h1>POSTULACIONES INSCRITAS</h1>

          <table class="table-bordered table-condensed">

            <tr>
              <th>ID</th>
              <th>DESCRIPCION</th>
              <th>DURACION</th>
              <th>TIPO DE OFERTA</th>
              <th>SUELDO</th>

            </tr>
            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>

            </tr>

          </table>


          <!-- FORM FINAL -->

        </div><!--/porlets-content-->
      </div><!--/block-web-->
    </div><!--/col-md-12-->
  </div><!--/row-->




</div>



 <div class="container">  <a href="{{route('admRRHH')}}"><button class="btn btn-primary btn-lg">Volver</button></a></div>
<br>

<br>

@endsection
