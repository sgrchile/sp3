@extends('layouts.app')
@section('content')
<div class="container" align="center">

  <div class="row">
    <div class="col-xs-12 col-md-12 col-sm-12">
      <div class="block-web">
        <div class="header">
          <div class="actions"></div>
          <h1 class="text-center text-uppercase">LISTA DE ENTREGAS</h1>
        </div>
        <div class="porlets-content">
          <!-- FORM INICIO -->

          <table class="table-condensed" align="center">
            <tr>
              <td>BUSCAR</td>
              <td><input type="text" required class="form-control" style="width:175px;"></td>
              <td><button type="button" class="btn btn-primary btn-xs">  <i class="fa fa-search" style="font-size:29px"></i></button></td>
            </tr>
          </table>

          <table class=" table-condensed table-bordered text-right">
            <tr>
              <td>ID</td>
              <td>FECHA DE SOLICITUD</td>
              <td>FECHA DE ENTREGA</td>
              <td>RUT SOLICITANTE</td>
              <td>DESCRIPCION</td>
              <td>MARCA</td>
              <td>TIPO</td>
              <td>MOTIVO</td>
              <td>COSTO</td>
              <td>CANTIDAD</td>
              <td>ESTADO</td>
            </tr>
          </table>

          <!-- FORM FINAL -->

        </div><!--/porlets-content-->
      </div><!--/block-web-->
    </div><!--/col-md-12-->
  </div><!--/row-->

</div>
<div class="container">
<a href="javascript:history.back(1)"><button class="btn btn-primary btn-lg">Volver</button></a>

</div>
</a>
<br>

@endsection
