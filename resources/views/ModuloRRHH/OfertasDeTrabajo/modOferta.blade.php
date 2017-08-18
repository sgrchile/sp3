@extends('layouts.app')
@section('content')


<div class="container" align="center">

  <div class="row">
    <div class="col-xs-12 col-md-12 col-sm-12">
      <div class="block-web">
        <div class="header">
          <div class="actions"></div>
          <h1>MODIFICAR OFERTA DE TRABAJO</h1>
        </div>
        <div class="porlets-content">
          <!-- FORM INICIO -->

            <table class="table-condensed">

            <tr>
              <td>BUSCAR OFERTA:</td>
              <td>
                <select style="width:175px;" class="form-control">
                  <option>1</option>
                  <option>2</option>
                </select>
              </td>
              <td>
                <button type="button" class="btn btn-primary btn-xs">  <i class="fa fa-search" style="font-size:30px"></i></button></td>

              </tr>

            </table>
            <br>

            <table class="table-condensed text-right">

              <tr>
                <td >DESCRIPCION:</td>

                <td ><textarea type="text" rows="5" required class="form-control"  style="width:175px; max-width:175px;"></textarea></td>
              </tr>

              <tr>
                <td>DURACION:</td>
                <td><input type="text" required  class="form-control" style="width:175px;"></td>
              </tr>

              <tr>
                <td>TIPO DE OFERTA:</td>
                <td><input type="text" required class="form-control"  style="width:175px;"></td>
              </tr>

              <tr>
                <td>SUELDO:</td>
                <td><input type="text" required class="form-control" style="width:175px;"></td>
              </tr>

              <tr>

                <td>ESTADO:</td>
                <td>
                  <select style="width:175px;" class="form-control">
                    <option>1</option>
                    <option>2</option>
                  </select>
                </td>

              </tr>

            </table>
            <button class="btn btn-primary btn-lg">MODIFICAR</button>

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
