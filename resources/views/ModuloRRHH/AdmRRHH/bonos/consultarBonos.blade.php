@extends('layouts.app')
@section('content')

<div class="row">
  <div class="col-xs-12 col-md-12 col-sm-12">
    <div class="block-web">
      <div class="header">
        <div class="actions"></div>
        <h1 class="text-center">CONSULTAR BONOS </h1>
      </div>
      <div class="porlets-content">
        <!-- FORM INICIO -->
        <div class="container" align="center">


          <br>
          <table>
            <tr>
              <td>
                <label>BUSCAR BONO:</label>
              </td>
              <td>
                <select style="width:175px;" class="form-control"   >
                  <option></option>
                  <option></option>
                </select>
              </td>
              <td><button type="button" class="btn btn-primary btn-xs">  <i class="fa fa-search" style="font-size:30px"></i></button></td>
            </tr>
          </table>

          <table class="table-condensed text-right" align="center" >

            <tr>
              <td>DESCRIPCION:</td>
              <td><textarea rows="10" class="form-control"   required style="width:175px; max-width:175px;"></textarea></td>
            </tr>

            <tr>
              <td>VALOR:</td>
              <td><input type="text" class="form-control"  required  style="width:175px;"></td>
            </tr>

            <tr>

              <td>PORCENTAJE:</td>
              <td><input type="text" class="form-control"  required  style="width:175px;"></td>
            </tr>

          </table>

        </div>
        <!-- FORM FINAL -->

      </div><!--/porlets-content-->
    </div><!--/block-web-->
  </div><!--/col-md-12-->
</div><!--/row-->
<br>
<br>
<div class="container">  <a href="{{route('bonos')}}"><button class="btn btn-primary btn-lg">Volver</button></a></div>
<br>
<br>


@endsection
