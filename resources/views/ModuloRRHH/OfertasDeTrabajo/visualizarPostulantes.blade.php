@extends('layouts.app')
@section('content')



<div class="row">
  <div class="col-xs-12 col-md-12 col-sm-12">
    <div class="block-web">
      <div class="header">
        <div class="actions"></div>
        <h1 class="content-header text-center text-uppercase"><b>VISUALIZACION DE POSTULANTES</b></h1>
      </div>
      <div class="porlets-content">
        <div class="container-fluid" align="center">
          <!-- FORM INICIO -->

          <table class="table table-bordered">
  <tr>
    <td>RUT</td>
    <td>NOMBRE</td>
    <td>DISPONIBILIDAD</td>
    <td style="max-width:200px;">REFERENCIAS</td>
    <td>FECHA NACIMIENTO</td>
    <td>Nº DE HIJOS</td>
    <td>EMAIL</td>

  </tr>

  <tr>
    <td></td>
    <td></td>
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

<br >







 <div class="container">  <a href="{{route('admRRHH')}}"><button class="btn btn-primary btn-lg">Volver</button></a></div>
<br>

<br>

@endsection
