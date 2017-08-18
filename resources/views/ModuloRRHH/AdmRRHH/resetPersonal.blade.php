@extends('layouts.app')
@section('content')


<br>
<div class="container" align="center">

  <div class="row">
    <div class="col-xs-12 col-md-12 col-sm-12">
      <div class="block-web">
        <div class="header">
          <div class="actions"></div>
            <h1 class=" text-center text-uppercase" >RESETEAR CONTRASEÑA DE PERSONAL</h1>
        </div>
        <div class="porlets-content">
          <!-- FORM INICIO -->

          <label>BUSCAR PERSONAL:</label><input type="text"   style="width:175px;">
          <button type="button" class="btn btn-primary btn-xs">  <i class="fa fa-search" style="font-size:36px"></i></button>

          <table class="table-condensed text-right" align="center" >

            <tr>
              <td>NOMBRE:</td>
              <td><input type="text" class="form-control" readOnly  style="width:175px;"></td>

              <td>APELLIDO PATERNO:</td>
              <td><input type="text" class="form-control"  readOnly  style="width:175px;"></td>


              <td>APELLIDO MATERNO:</td>
              <td><input type="text" class="form-control"  readOnly  style="width:175px;"></td>

              <td>RUT:</td>
              <td><input type="text" class="form-control"  readOnly  style="width:175px;"></td>

            </tr>
          </table>

          <table class="table-condensed text-right" align="center">

            <tr>

              <td>NUEVA CONTRASEÑA:</td>
              <td><input type="text"  style="width:175px;"></td>

            </tr>

            <tr>

              <td>CONFIRMAR:</td>
              <td><input type="text"   style="width:175px;"></td>

            </tr>

          </table>

          <br>
          <button class="btn btn-primary btn-md">RESETEAR </button>

          <!-- FORM FINAL -->

        </div><!--/porlets-content-->
      </div><!--/block-web-->
    </div><!--/col-md-12-->
  </div><!--/row-->





</div>
<br>
<div class="container">

<a href="{{route('CarpetaPersonal')}}"><button class="btn btn-primary btn-lg">Volver</button></a>

</div>


@endsection
