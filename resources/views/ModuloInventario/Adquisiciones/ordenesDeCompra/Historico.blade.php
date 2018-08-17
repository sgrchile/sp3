@extends('layouts.app')
@section('content')



<div class="container-fluid"  align="center">

  <div class="row">
    <div class="col-xs-12 col-md-12 col-sm-12">
      <div class="block-web">
        <div class="header">
          <div class="actions"></div>
        <h1 class="text-center text-uppercase">HISTORICO DE ORDENES DE COMPRA </h1>
        </div>
        <div class="porlets-content">
          <!-- FORM INICIO -->

          <!--<table class="table-condensed text-right" align="center">
            <tr>
              <td>BUSCAR OC POR ESTADO:</td>
              <td>
                <select class="form-control" style="width:175px;">
                  <option>VERIFICADO</option>
                  <option>APROBADO</option>
                  <option>RECHAZADO</option>
                  <option>LIQUIDADO</option>
                </select>

              </td>
              <td align="left"><button type="button" class="btn btn-primary btn-xs">  <i class="fa fa-search" style="font-size:29px"></i></button></td>
            </tr>
          </table>-->

          <table class="table-condensed table-bordered">

            <tr>
              <td>EMPRESA</td>
              <td>FOLIO</td>
              <td>COD OC.</td>
              <td>COD. ART.</td>
              <td>DESC. ART.</td>
              <td>CANTIDAD</td>
              <td>VALOR</td>
              <td>TOTAL</td>
              <td>FECHA DE CREACION</td>
              <td>ESTADO</td>

            </tr>

            @foreach($ordcompra as $oc)
            <tr>

              <td>{{ $oc->OC_EMP }}</td>
              <td>{{ $oc->OC_FOLIO }}</td>
              <td>{{ $oc->OC_COD }}</td>
              <td>{{ $oc->OC_ARTICULO_ID }}</td>
              <td>{{  App\OfertaArticulo::find($oc->OC_ARTICULO_ID)->OFAR_DESC }}</td>
              <td>{{ $oc->OC_CANTIDAD }}</td>
              <td>{{ $oc->OC_VALOR }}</td>
              <td>{{ $oc->OC_TOTAL }}</td>
              <td>{{ $oc->CREATED_AT }}</td>
              <td>{{ $oc->OC_ESTADO }}</td>

            </tr>
              @endforeach

          </table>
          {!! $ordcompra->links() !!}

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
