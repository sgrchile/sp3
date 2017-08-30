@extends('layouts.app')
@section('content')
<div class="container" align="center">

<div class="row">
  <div class="col-xs-12 col-md-12 col-sm-12">
    <div class="block-web">
      <div class="header">
        <div class="actions"></div>
        <h1 class="text-center text-uppercase">VALOR EMPRESA</h1>
      </div>
      <div class="porlets-content">
        <!-- FORM INICIO -->
        <div class="table-responsive">
          <table class="table-condensed">
            <tr>
              <td>
                CAPITAL EMPRESA
                  <input type="number" style="form-control" style="width:175px;" readonly />+
              </td>

              <td>
                CAPITAL CIRCULANTE
                  <input type="number" style="form-control" style="width:175px;" readonly />+

              </td>

              <td>
                ACTIVOS FIJOS
                <input type="number" style="form-control" style="width:175px;" readonly />+
              </td>
              <td>
                INSUMOS
                  <input type="number" style="form-control" style="width:175px;" readonly />
              </td>

              <td>
                =
              </td>

              <td>

                TOTAL
                 <input type="number" style="form-control" readonly />
              </td>

            </tr>
          </table>


        </div>
        <div class="row">
          <div class="col-md-12">

        <div class="panel panel-primary">
          <div class="panel-heading">
            <h4>Donut flavours</h4>
          </div>
          <div class="panel-body">
            <div id="hero-donut" class="graph"></div>
          </div>
        </div>
        </div>
      </div>


        <!-- FORM FINAL -->

      </div><!--/porlets-content-->
    </div><!--/block-web-->
  </div><!--/col-md-12-->
</div><!--/row-->



<br>

</div>
<br>
<div class="container">

<a href="javascript:history.back(1)"><button class="btn btn-primary btn-lg">Volver</button></a>

</div>
</a>
<br>

@endsection
