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

          <table class="table-condensed text-right" align="center">
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

            <tr>
              <td>BUSCAR OC POR EMPRESA:</td>
              <td>
                <select class="form-control" style="width:175px;">
                  <option>BIOGEST</option>
                  <option>TRENER</option>
                  <option>LOICA</option>
                  <option>KUTRALCO</option>
                  <option>IMPROTOUR</option>
                </select>

              </td>
              <td align="left"><button type="button" class="btn btn-primary btn-xs">  <i class="fa fa-search" style="font-size:29px"></i></button></td>
            </tr>
          </table>

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
