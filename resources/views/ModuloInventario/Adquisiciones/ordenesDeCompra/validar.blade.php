@extends('layouts.app')
@section('content')



<div class="container"  align="center" ng-app="">

  <div class="row">
    <div class="col-xs-12 col-md-12 col-sm-12">
      <div class="block-web">
        <div class="header">
          <div class="actions"></div>
          <h1 class="text-center text-uppercase">ORDENES DE COMPRA </h1>
        </div>
        <div class="porlets-content">
          <!-- FORM INICIO -->

          <table class="table-condensed text-right" align="center">
            <tr>
              <td>BUSCAR OC POR ESTADO:</td>
              <td>
                <select class="form-control" style="width:175px;" ng-model="myVar">
                  <option value="VERIFICADO">VERIFICADO</option>
                  <option value="APROBADO">APROBADO</option>
                  <option value="RECHAZADO">RECHAZADO</option>

                </select>

              </td>
              <td align="left"><button type="button" class="btn btn-primary btn-xs">  <i class="fa fa-search" style="font-size:29px"></i></button></td>
            </tr>
          </table>
          <div ng-switch="myVar">


            <div ng-switch-when="VERIFICADO">
              <h1>VERIFICADO</h1>
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
                  <td>ACCION</td>
                </tr>

                @foreach($ocv as $val)
                <tr>
                  <td>{{ $val->OC_EMP }}</td>
                  <td>{{ $val->OC_FOLIO }}</td>
                  <td>{{ $val->OC_COD }}</td>
                  <td>{{ $val->OC_ARTICULO_ID }}</td>
                  <td>{{ App\OfertaArticulo::find($val->OC_ARTICULO_ID)->OFAR_DESC }}</td>
                  <td>{{ $val->OC_CANTIDAD }}</td>
                  <td>{{ $val->OC_VALOR }}</td>
                  <td>{{ $val->OC_TOTAL }}</td>
                  <td>{{ $val->CREATED_AT }}</td>
                  <td><a href="{{route('DescripcionDeOC',$val->OC_COD)}}"><button class="btn btn-primary btn-xs">VER OC</button></a> </td>
                </tr>
                  @endforeach
              </table>
              {!! $ocv->links() !!}
            </div>

            <div ng-switch-when="APROBADO">
              <h1>APROBADO</h1>
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
                  <td></td>
                  <td></td>
                  <td></td>
                  <td><a href="{{route('DescripcionDeOC')}}"><button class="btn btn-primary btn-xs">VER OC</button></a> </td>
                </tr>

              </table>
            </div>

            <div ng-switch-when="RECHAZADO">
              <h1>RECHAZADO</h1>
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
                  <td></td>
                  <td></td>
                  <td></td>
                  <td><a href="{{route('DescripcionDeOC')}}"><button class="btn btn-primary btn-xs">VER OC</button></a> </td>
                </tr>

              </table>
            </div>



          </div>

          <!-- FORM FINAL -->

        </div><!--/porlets-content-->
      </div><!--/block-web-->
    </div><!--/col-md-12-->
  </div><!--/row-->

</div>


</div>
<br>

<div class="container">

<a href="javascript:history.back(1)"><button class="btn btn-primary btn-lg">Volver</button></a>

</div>
</a>
<br>

@endsection
