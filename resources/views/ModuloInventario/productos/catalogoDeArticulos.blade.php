@extends('layouts.app')
@section('content')




<div class="container"  align="center">

  <div class="row">
    <div class="col-xs-12 col-md-12 col-sm-12">
      <div class="block-web">
        <div class="header">
          <div class="actions"></div>
          <h1 class="text-center text-uppercase">CATALOGO DE ARTICULOS</h1>
        </div>
        <div class="porlets-content">
          <!-- FORM INICIO -->

          <table class="table-condensed text-right" align="center">
            <tr>
              <td>BUSCAR ARTICULO:</td>
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
              <td>FECHA DE CREACION</td>
              <!--<td>ESTADO</td>
              <td>ESTADO DE EJECUCION</td>
              <td colspan="2">ACCION</td>-->
            </tr>
            @foreach( $invart as $art)
            <tr>
              <td>{{ $art->ART_OC_COD }}</td>
              <td>{{ $art->ART_ID }}</td>
              <td>{{ $art->ART_DESC }}</td>
              <td>{{ $art->ART_CANTIDAD }}</td>
              <td>{{ $art->ART_COSTO }}</td>
              <td>{{ $art->CREATED_AT }}</td>
              <!--<td>{{ $art->ART_OC_COD }}</td>
              <td>{{ $art->ART_OC_COD }}</td>
              <td></td>-->
            </tr>
              @endforeach
          </table>
          {!! $invart->links() !!}

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
