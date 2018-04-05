
@extends('layouts.app')
@section('content')

<div class="container-fluid " align="center">

  <br>

  <div class="row">
    <div class="col-xs-12 col-md-12 col-sm-12">
      <div class="block-web">
        <div class="alert alert-info" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <strong>MODULO EN DESARROLLO!</strong>
        </div>
        <div class="header">
          <div class="actions"></div>
          <h1 class="text-center text-uppercase">MODULO DE MARKETING</h1>
        </div>
        <div class="porlets-content">

          <table class="table-condensed">

            <tr>
              <td>
                <a href="{{route('dashBoardMarketing')}}"><button class="btn btn-primary btn-lg" style="width:265px;"> ANALISIS DE VENTAS</button></a>
              </td>
              <td>
                <a href="{{route('encuesta')}}"><button class="btn btn-primary btn-lg" style="width:265px;"> ENCUESTA </button></a>
              </td>
              <td>

                <a href="{{route('comparativoDeVentas')}}"><button class="btn btn-primary btn-lg" style="width:265px;"> COMPARATIVO DE VENTAS </button></a>
              </td>

            </tr>

            <tr>
              <td>
                <a href="{{route('satisfaccionCliente')}}"><button class="btn btn-primary btn-lg" style="width:265px;"> SATISFACCION CLIENTE </button></a>

              </td>
              <td>
                <a href="{{route('satisfaccionAlProveedor')}}"><button class="btn btn-primary btn-lg" style="width:265px;"> SATISFACCION PROVEEDOR</button></a>
              </td>

            </tr>

          </table>

        </div><!--/porlets-content-->
      </div><!--/block-web-->
    </div><!--/col-md-12-->
  </div><!--/row-->

</div>
<br>
<div class="container">

<a href="javascript:history.back(1)"><button class="btn btn-primary btn-lg">Volver</button></a>

</div>
</a>
<br>
@endsection
