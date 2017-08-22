@extends('layouts.app')
@section('content')

<div class="container-fluid " align="center">

  <br>

  <div class="row">
    <div class="col-xs-12 col-md-12 col-sm-12">
      <div class="block-web">
        <div class="header">
          <div class="actions"></div>
          <h1 class="text-center text-uppercase">RESERVA DE SALA</h1>
        </div>
        <div class="porlets-content">
          <div class="table-responsive">

            <table class="table-condensed text-right">
              <tr>
                <td>SALA:</td>
                <td>
                  <select  class="form-control"style="width:175px;">
                    <option></option>
                  </select>
                </td>

              </tr>
              <tr>
                <td>DESCRIPCION:</td>
                <td>
                  <textarea rows="10" style="max-width:175px;"  class="form-control"></textarea>
                </td>
              </tr>
              <tr>
                <td>FECHA</td>
                <td><input type="date" style="max-width:175px;"  class="form-control"  /> </td>
              </tr>

              <tr>
                <td>HORA INICIO </td>
                <td><input type="time" style="max-width:175px;"  class="form-control"  /> </td>
              </tr>
              <tr>
                <td>HORA TERMINO</td>
                <td><input type="time" style="max-width:175px;"  class="form-control"  /> </td>
              </tr>
            </table>
            <button class="btn btn-primary btn-lg">RESERVAR</button>


          </div>
          <div class="container-fluid" align="left">
            <a href="javascript:history.back(1)"><button class="btn btn-primary btn-lg">Volver</button></a>

          </div>
        </div><!--/porlets-content-->
      </div><!--/block-web-->
    </div><!--/col-md-12-->
  </div><!--/row-->

</div>
@endsection
