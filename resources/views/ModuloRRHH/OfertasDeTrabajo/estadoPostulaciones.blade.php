@extends('layouts.app')
@section('content')


<div class="container" align="center">

  <div class="row">
    <div class="col-xs-12 col-md-12 col-sm-12">
      <div class="block-web">
        <div class="header">
          <div class="actions"></div>
          <h1>ESTADO DE OFERTAS</h1>
        </div>
        <div class="porlets-content">
          <!-- FORM INICIO -->


          <table class="table table-bordered">

            <tr>
              <th>OFERTA</th>
              <th>DESCRIPCION</th>
              <th>DURACION</th>
              <th>POSTULANTE</th>
              <th>ACCION</th>
            </tr>

            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td>

                <a href="{{route('datosPostulante')}}"><button class="btn btn-primary btn-xs">VISUALIZAR</button>

                </td>
              </tr>

            </table>

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
