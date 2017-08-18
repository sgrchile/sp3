@extends('layouts.app')
@section('content')

<div class="row">
  <div class="col-xs-12 col-md-12 col-sm-12">
    <div class="block-web">
      <div class="header">
        <div class="actions"></div>
        <h1>ASIGNACION DE BONOS </h1>
      </div>
      <div class="porlets-content">
        <!-- FORM INICIO -->
        <div class="container" align="center">


          <br>

          <table class="table-condensed table-bordered text-right" align="center" >
            <tr>
              <td>ID</td>
              <td>RUN</td>
              <td>NOMBRE</td>
              <td>APELLIDO PATERNO</td>
              <td>VALOR</td>
              <td>FECHA</td>
              <td>ESTADO</td>
              <td>ACCION</td>
            </tr>

            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td><a href=""><button class="btn btn-primary btn-xs">AGREGAR</button></a></td>


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
