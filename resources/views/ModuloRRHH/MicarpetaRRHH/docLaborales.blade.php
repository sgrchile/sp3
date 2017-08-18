@extends('layouts.app')
@section('content')


<br>
<div class="container" align="center">
  <div class="row">
    <div class="col-xs-12 col-md-12 col-sm-12">
      <div class="block-web">
        <div class="header">
          <div class="actions"></div>
          <h1 class=" text-center text-uppercase" >MI CARPETA RRHH</h1>
        </div>
        <div class="porlets-content">
          <!-- FORM INICIO -->

          <table class="table-condensed text-right" align="center">
            <tr>
              <td>NOMBRE:</td>
              <td><input type="text" readonly class="form-control"  style="width:175px;"></td>

              <td>APELLIDO PATERNO:</td>
              <td><input type="text" readonly class="form-control"  style="width:175px;"></td>

              <td>APELLIDO PATERNO:</td>
              <td><input type="text" readonly class="form-control"  style="width:175px;"></td>
            </tr>
            <tr>
              <td>CARGO:</td>
              <td><input type="text" readonly class="form-control" style="width:175px;"></td>

              <td>TIPO PERSONAL:</td>
              <td><input type="text" readonly class="form-control" style="width:175px;"></td>
              <td>ESTADO:</td>
              <td><input type="text" readonly class="form-control" style="width:175px;"></td>
            </tr>
          </table>

          <h3 class="text-uppercase text-center">DOCUMENTOS </h3>
          <table class="table table-bordered ">

            <tr>
              <td>DOCUMENTO </td>

              <td>FECHA</td>

              <td>ACCION</td>
            </tr>


            <tr>
              <td> </td>

              <td></td>

              <td><button class="btn btn-primary btn-md"><i class="fa fa-cloud-download"></i></button></td>
            </tr>
          </table>


          <h3 class="text-uppercase text-center">LIQUIDACIONES</h3>

          <table class="table table-bordered ">

            <tr>
              <td>TIPO REMUNERACION </td>

              <td>FECHA</td>

              <td>VALOR</td>

              <td>ACCION</td>
            </tr>

            <tr>
              <td></td>

              <td></td>

              <td></td>

              <td><button class="btn btn-primary btn-xs">VER</button></td>
            </tr>
          </table>

          <!-- FORM FINAL -->

        </div><!--/porlets-content-->
      </div><!--/block-web-->
    </div><!--/col-md-12-->
  </div><!--/row-->


<br>

<br>
<br>




</div>
<br>
<div class="container">

<a href="{{route('CarpetaPersonal')}}"><button class="btn btn-primary btn-lg">Volver</button></a>

</div>



<br>
<br>

@endsection
