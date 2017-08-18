@extends('layouts.app')
@section('content')


<div class="container" align="center">

  <div class="row">
    <div class="col-xs-12 col-md-12 col-sm-12">
      <div class="block-web">
        <div class="header">
          <div class="actions"></div>
          <h1>EDITAR MIS DATOS</h1>
        </div>
        <div class="porlets-content">
          <!-- FORM INICIO -->

          <table class=" table-condensed">
            <tr>
              <td>RUT:</td>
              <td><input type="text"   style="width:175px;"></td>
            </tr>
            <tr>
              <td>NOMBRE:</td>
              <td><input type="text"   style="width:175px;"></td>
            </tr>
            <tr>
              <td>DISPONIBILIDAD:</td>
              <td><input type="text"   style="width:175px;"></td>
            </tr>
            <tr>
              <td>REFERENCIA:</td>
              <td><textarea type="text"   style="width:175px; max-width:175;"></textarea></td>
            </tr>

            <tr>
              <td>HIZO AYUDANTIA:</td>
              <td><input type="text"   style="width:175px;"></td>
            </tr>

            <tr>
              <td>FECHA NACIMIENTO:</td>
              <td><input type="text"   style="width:175px;"></td>
            </tr>

            <tr>
              <td>NOMBRE CONYUGE:</td>
              <td><input type="text"   style="width:175px;"></td>
            </tr>

            <tr>
              <td>NUMERO DE HIJOS:</td>
              <td><input type="text"   style="width:175px;"></td>
            </tr>

            <tr>
              <td>EMAIL:</td>
              <td><input type="email"   style="width:175px;"></td>
            </tr>

          </table>
          <button class="btn btn-primary btn-lg">EDITAR DATOS</button>

          <!-- FORM FINAL -->

        </div><!--/porlets-content-->
      </div><!--/block-web-->
    </div><!--/col-md-12-->
  </div><!--/row-->

</div>



 <div class="container">  <a href="{{route('Ofertas')}}"><button class="btn btn-primary btn-lg">VOLVER</button></a></div>
<br>

<br>

@endsection
