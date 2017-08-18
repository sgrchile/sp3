@extends('layouts.app')
@section('content')


<div class="container" align="center">
  <div class="row">
    <div class="col-xs-12 col-md-12 col-sm-12">
      <div class="block-web">
        <div class="header">
          <div class="actions"></div>
          <h1>REGISTRO DE POSTULANTE</h1>
        </div>
        <div class="porlets-content">
          <!-- FORM INICIO -->

          <table class=" table-condensed">
            <tr>
              <td>RUT:</td>
              <td><input type="text" required  style="width:175px;" class="form-control"></td>
            </tr>
            <tr>
              <td>NOMBRE:</td>
              <td><input type="text" required  style="width:175px;" class="form-control"></td>
            </tr>
            <tr>
              <td>DISPONIBILIDAD:</td>
              <td><input type="text" required  style="width:175px;" class="form-control"></td>
            </tr>
            <tr>
              <td>REFERENCIA:</td>
              <td><textarea type="text" required  style="width:175px; max-width:175;" class="form-control"></textarea></td>
            </tr>

            <tr>
              <td>HIZO AYUDANTIA:</td>
              <td>
                <select style="width:175px;" class="form-control">
                  <option value="1">SI</option>
                  <option value="0">NO</option>
                </select>
              </td>
            </tr>

            <tr>
              <td>FECHA NACIMIENTO:</td>
              <td><input type="text" required  style="width:175px;" class="form-control"></td>
            </tr>

            <tr>
              <td>NOMBRE CONYUGE:</td>
              <td><input type="text" required  style="width:175px;" class="form-control"></td>
            </tr>

            <tr>
              <td>NUMERO DE HIJOS:</td>
              <td><input type="text" required  style="width:175px;" class="form-control"></td>
            </tr>

            <tr>
              <td>EMAIL:</td>
              <td><input type="email" required  style="width:175px;" class="form-control"></td>
            </tr>

            <tr>
              <td>PASSWORD:</td>
              <td><input type="password" required  style="width:175px;" class="form-control"></td>
            </tr>

          </table>
          <button class="btn btn-primary btn-lg">REGISTRAR</button>

          <!-- FORM FINAL -->

        </div><!--/porlets-content-->
      </div><!--/block-web-->
    </div><!--/col-md-12-->
  </div><!--/row-->

</div>


<br><br>
 <div class="container">  <a href="{{route('OFTRAB')}}"><button class="btn btn-primary btn-lg">Volver</button></a></div>
<br>

<br>

@endsection
