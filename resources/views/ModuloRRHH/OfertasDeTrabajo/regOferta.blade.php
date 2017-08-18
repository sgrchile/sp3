@extends('layouts.app')
@section('content')
<div class="row">
  <div class="col-xs-12 col-md-12 col-sm-12">
    <div class="block-web">
      <div class="header">
        <div class="actions"></div>
        <h1 class="content-header text-center text-uppercase"><b>REGISTRAR OFERTA DE TRABAJO</b></h1>
      </div>
      <div class="porlets-content">
        <div class="container-fluid" align="center">

          <!-- FORM INICIO -->
          <table class="table-condensed text-right" >

            <tr>
              <td >DESCRIPCION:</td>

              <td ><textarea rows="10" type="text" class="form-control" required  style="width:175px; max-width:175px;"></textarea></td>
            </tr>

            <tr>
              <td>DURACION:</td>
              <td><input type="text" required  class="form-control" style="width:175px;"></td>
            </tr>

            <tr>
              <td>TIPO DE OFERTA:</td>
              <td><input type="text" required  class="form-control"  style="width:175px;"></td>
            </tr>

            <tr>
              <td>SUELDO:</td>
              <td><input type="text" required  class="form-control" style="width:175px;"></td>
            </tr>


          </table>


          <button class="btn btn-primary btn-lg">REGISTRAR</button>

          <!-- FORM FINAL -->
          </div><!--/container-->
        </div><!--/porlets-content-->
      </div><!--/block-web-->
    </div><!--/col-md-12-->
  </div><!--/row-->



 <div class="container">  <a href="{{route('admRRHH')}}"><button class="btn btn-primary btn-lg">Volver</button></a></div>
<br>

<br>
@endsection
