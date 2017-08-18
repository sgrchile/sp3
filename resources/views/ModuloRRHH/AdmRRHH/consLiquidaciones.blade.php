@extends('layouts.app')
@section('content')
<div class="row">
  <div class="col-xs-12 col-md-12 col-sm-12">
    <div class="block-web">
      <div class="header">
        <div class="actions"></div>
        <h1 class="text-uppercase text-center ">LIQUIDACIONES EMITIDAS</h1>
      </div>
      <div class="porlets-content">
        <!-- FORM INICIO -->

        <div class="container" align="center">


          <table class="table table-bordered">

            <tr>
              <td>FECHA</td>
              <td>RUT</td>
              <td>NOMBRE</td>
              <td>APELLIDO PATERNO</td>
              <td>APELLIDO MATERNO</td>
              <td> VALOR</td>
              <td>ESTADO</td>
            </tr>


          </table>
        </div>

        <!-- FORM FINAL -->

      </div><!--/porlets-content-->
    </div><!--/block-web-->
  </div><!--/col-md-12-->
</div><!--/row-->

<div class="container">  <a href="{{route('admRRHH')}}"><button class="btn btn-primary btn-lg">Volver</button></a></div>

@endsection
