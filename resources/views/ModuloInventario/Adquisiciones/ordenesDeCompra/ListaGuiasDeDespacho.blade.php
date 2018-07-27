@extends('layouts.app')
@section('content')

<div class="container"  align="center">

  <div class="row">
    <div class="col-xs-12 col-md-12 col-sm-12">
      <div class="block-web">
        <div class="header">
          <div class="actions"></div>
          <h1 class="text-center text-uppercase">LISTA DE GUIAS DE DESPACHO</h1>
        </div>
        <div class="porlets-content">
          <!-- FORM INICIO -->

          <table class="table-condensed text-right" align="center">
            <tr>
              <td>BUSCAR OC:</td>
              <td ><input type="text" required class="form-control" style="width:175px;"/></td>
              <td align="left"><button type="button" class="btn btn-primary btn-xs">  <i class="fa fa-search" style="font-size:29px"></i></button></td>
            </tr>

          </table>

          <table class="table-condensed table-bordered">

            <tr>
              <td>COD OC.</td>
              <td>COD. ARTICULO</td>
              <td>DESC. ART.</td>
              <td>CANTIDAD</td>
              <td>VALOR</td>
              <td>TOTAL</td>
              <td>FECHA DE CREACION</td>
              <td>ESTADO</td>
              <td>ESTADO DE EJECUCION</td>



            </tr>
            @foreach($guiadesp as $gdesp)
            <tr>
              <td>{{ $gdesp->COD_GD }}</td>
              <td>{{ $gdesp->COD_GD }}</td>
              <td>{{ $gdesp->COD_GD }}</td>
              <td>{{ $gdesp->COD_GD }}</td>
              <td>{{ $gdesp->COD_GD }}</td>
              <td>{{ $gdesp->COD_GD }}</td>
              <td>{{ $gdesp->COD_GD }}</td>
              <td>{{ $gdesp->COD_GD }}</td>
              <td>{{ $gdesp->COD_GD }}</td>
            </tr>

          </table>

          <!-- FORM FINAL -->

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
