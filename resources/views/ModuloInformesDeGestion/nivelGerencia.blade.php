@extends('layouts.app')
@section('content')


<div class="row">
  <div class="col-xs-12 col-md-12 col-sm-12">
    <div class="block-web">
      <div class="header">
        <div class="actions"></div>
        <h1 class="text-center text-uppercase">NIVEL GERENCIA</h1>
      </div>
      <div class="porlets-content">
        <!-- FORM INICIO -->

        <table class="table-condensed" align="center">
          <tr>
            <td>PERIODO</td>
            <td><input type="month" class="form-control" /></td>
          </tr>

        </table>

        <h3 class="text-center">RESUMEN GERENTE</h3>

        <div class="table-responsive">
          <table class="table-condensed text-right" >
            <tr>
              <td>BONO GERENTE</td>
              <td><input type="number" min="0" class="form-control" readonly /></td>
            </tr>
          </table>

          <table class="table table-bordered">
            <tr>
              <td>Nº </td>
              <td>EMPRESA</td>
              <td>CUENTA CORRIENTE</td>
              <td>POR COBRAR</td>
              <td>POR PAGAR</td>
            </tr>

            <tr>
              <td> </td>
              <td></td>
              <td> </td>
              <td> </td>
              <td> </td>
            </tr>
          </table>


        </div>

        <br />

        <h3 class="text-center">RESUMEN GENERAL SGR</h3>
        <div class="table-responsive text-right">

          <table class="table-condensed table-bordered">
            <tr>
              <td>DINERO EN CUENTA</td>
              <td><input type="text"/></td>

              <td>CUENTAS POR PAGAR</td>
              <td><input type="text"/></td>

              <td>META COMERCIAL</td>
              <td><input type="text"/></td>


            </tr>
            <tr>
              <td>COTIZACIONES</td>
              <td><input type="text"/></td>

              <td>EFECTIVIDAD DE COTIZACIONES</td>
              <td><input type="text" /></td>

              <td>PROVEEDORES</td>
              <td><input type="text"/></td>
            </tr>

            <tr>

              <td>CUENTAS POR COBRAR</td>
              <td><input type="text"/></td>

              <td>DINERO EN PRENDA</td>
              <td><input type="text"/></td>

              <td>RETIROS</td>
              <td><input type="text"/></td>

            </tr>

            <tr>

              <td>USO DE PRESUPUESTO </td>
              <td><input type="text"/></td>

              <td>EVALUACIONES CLIENTES</td>
              <td><input type="text"/></td>

              <td>CALIDAD DE PROVEEDORES</td>
              <td><input type="text"/></td>

            </tr>

          </table>
        </div>

        <h3 class="text-center">RESUMEN GENERAL TRENER</h3>
        <div class="table-responsive text-right">

          <table class="table-condensed table-bordered">
            <tr>
              <td>DINERO EN CUENTA</td>
              <td><input type="text"/></td>

              <td>CUENTAS POR PAGAR</td>
              <td><input type="text"/></td>

              <td>META COMERCIAL</td>
              <td><input type="text"/></td>


            </tr>
            <tr>
              <td>COTIZACIONES</td>
              <td><input type="text"/></td>

              <td>EFECTIVIDAD DE COTIZACIONES</td>
              <td><input type="text" /></td>

              <td>PROVEEDORES</td>
              <td><input type="text"/></td>
            </tr>

            <tr>

              <td>CUENTAS POR COBRAR</td>
              <td><input type="text"/></td>

              <td>DINERO EN PRENDA</td>
              <td><input type="text"/></td>

              <td>RETIROS</td>
              <td><input type="text"/></td>

            </tr>

            <tr>

              <td>USO DE PRESUPUESTO </td>
              <td><input type="text"/></td>

              <td>EVALUACIONES CLIENTES</td>
              <td><input type="text"/></td>

              <td>CALIDAD DE PROVEEDORES</td>
              <td><input type="text"/></td>

            </tr>

          </table>
        </div>

        <h3 class="text-center">RESUMEN GENERAL BIOGEST</h3>
        <div class="table-responsive text-right">

          <table class="table-condensed table-bordered">
            <tr>
              <td>DINERO EN CUENTA</td>
              <td><input type="text"/></td>

              <td>CUENTAS POR PAGAR</td>
              <td><input type="text"/></td>

              <td>META COMERCIAL</td>
              <td><input type="text"/></td>


            </tr>
            <tr>
              <td>COTIZACIONES</td>
              <td><input type="text"/></td>

              <td>EFECTIVIDAD DE COTIZACIONES</td>
              <td><input type="text" /></td>

              <td>PROVEEDORES</td>
              <td><input type="text"/></td>
            </tr>

            <tr>

              <td>CUENTAS POR COBRAR</td>
              <td><input type="text"/></td>

              <td>DINERO EN PRENDA</td>
              <td><input type="text"/></td>

              <td>RETIROS</td>
              <td><input type="text"/></td>

            </tr>

            <tr>

              <td>USO DE PRESUPUESTO </td>
              <td><input type="text"/></td>

              <td>EVALUACIONES CLIENTES</td>
              <td><input type="text"/></td>

              <td>CALIDAD DE PROVEEDORES</td>
              <td><input type="text"/></td>

            </tr>

          </table>
        </div>

        <h3 class="text-center">RESUMEN GENERAL KUTRALCO</h3>
        <div class="table-responsive text-right">

          <table class="table-condensed table-bordered">
            <tr>
              <td>DINERO EN CUENTA</td>
              <td><input type="text"/></td>

              <td>CUENTAS POR PAGAR</td>
              <td><input type="text"/></td>

              <td>META COMERCIAL</td>
              <td><input type="text"/></td>


            </tr>
            <tr>
              <td>COTIZACIONES</td>
              <td><input type="text"/></td>

              <td>EFECTIVIDAD DE COTIZACIONES</td>
              <td><input type="text" /></td>

              <td>PROVEEDORES</td>
              <td><input type="text"/></td>
            </tr>

            <tr>

              <td>CUENTAS POR COBRAR</td>
              <td><input type="text"/></td>

              <td>DINERO EN PRENDA</td>
              <td><input type="text"/></td>

              <td>RETIROS</td>
              <td><input type="text"/></td>

            </tr>

            <tr>

              <td>USO DE PRESUPUESTO </td>
              <td><input type="text"/></td>

              <td>EVALUACIONES CLIENTES</td>
              <td><input type="text"/></td>

              <td>CALIDAD DE PROVEEDORES</td>
              <td><input type="text"/></td>

            </tr>

          </table>
        </div>

        <h3 class="text-center">RESUMEN GENERAL LOICA</h3>
        <div class="table-responsive text-right">

          <table class="table-condensed table-bordered">
            <tr>
              <td>DINERO EN CUENTA</td>
              <td><input type="text"/></td>

              <td>CUENTAS POR PAGAR</td>
              <td><input type="text"/></td>

              <td>META COMERCIAL</td>
              <td><input type="text"/></td>


            </tr>
            <tr>
              <td>COTIZACIONES</td>
              <td><input type="text"/></td>

              <td>EFECTIVIDAD DE COTIZACIONES</td>
              <td><input type="text" /></td>

              <td>PROVEEDORES</td>
              <td><input type="text"/></td>
            </tr>

            <tr>

              <td>CUENTAS POR COBRAR</td>
              <td><input type="text"/></td>

              <td>DINERO EN PRENDA</td>
              <td><input type="text"/></td>

              <td>RETIROS</td>
              <td><input type="text"/></td>

            </tr>

            <tr>

              <td>USO DE PRESUPUESTO </td>
              <td><input type="text"/></td>

              <td>EVALUACIONES CLIENTES</td>
              <td><input type="text"/></td>

              <td>CALIDAD DE PROVEEDORES</td>
              <td><input type="text"/></td>

            </tr>

          </table>
        </div>

        <h3 class="text-center">RESUMEN COMERCIAL</h3>
        <div class="table-responsive">
          <table class=" table table-bordered">
            <tr>
              <td>Nº</td>
              <td>EMPRESA</td>
              <td>CTZ</td>
              <td>OT</td>
              <td>MONTO</td>
              <td>VENTAS</td>
              <td>OPORTUNIDAD $</td>
              <td>OPORTUNIDADES</td>
              <td>EFECTIVIDAD COMERCIAL OPORTUNIDADES</td>
              <td>CUMPLIMENTO DE METAS</td>
            </tr>

            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td> </td>
              <td></td>
              <td>  </td>
              <td>  </td>
            </tr>
          </table>

        </div>

        <div class="row" align="Center">
          <div class="col-sm-12">
            <h3 class="text-center text-uppercase">ctz Vs Ot</h3>
            <div id="piechart1"></div>
          </div>

          <div class="col-sm-12">
            <h3 class="text-center text-uppercase"> vtas Vs Meta</h3>
            <div id="piechart2"></div>
          </div>

          <div class="col-sm-12">
            <h3 class="text-center text-uppercase"> </h3>
            <div id="piechart3"></div>
          </div>
        </div>


        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

        <script type="text/javascript">
        // Load google charts
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        // Draw the chart and set the chart values
        function drawChart() {
          var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Work', 8],
          ['Eat', 2],
          ['TV', 4],
          ['Gym', 2],
          ['Sleep', 8]
        ]);

          // Optional; add a title and set the width and height of the chart
          var options = {'title':'My Average Day', 'width':550, 'height':400};

          // Display the chart inside the <div> element with id="piechart"
          var chart = new google.visualization.PieChart(document.getElementById('piechart1'));
          chart.draw(data);
        }
        </script>

        <script type="text/javascript">
        // Load google charts
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        // Draw the chart and set the chart values
        function drawChart() {
          var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Work', 8],
          ['Eat', 2],
          ['TV', 4],
          ['Gym', 2],
          ['Sleep', 8]
        ]);

          // Optional; add a title and set the width and height of the chart
          var options = {'title':'My Average Day', 'width':550, 'height':400};

          // Display the chart inside the <div> element with id="piechart"
          var chart = new google.visualization.PieChart(document.getElementById('piechart2'));
          chart.draw(data);
        }
        </script>

        <script type="text/javascript">
        // Load google charts
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        // Draw the chart and set the chart values
        function drawChart() {
          var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Work', 8],
          ['Eat', 2],
          ['TV', 4],
          ['Gym', 2],
          ['Sleep', 8]
        ]);

          // Optional; add a title and set the width and height of the chart
          var options = {'title':'My Average Day', 'width':550, 'height':400};

          // Display the chart inside the <div> element with id="piechart"
          var chart = new google.visualization.PieChart(document.getElementById('piechart3'));
          chart.draw(data);
        }
        </script>

        <!-- FORM FINAL -->

      </div><!--/porlets-content-->
    </div><!--/block-web-->
  </div><!--/col-md-12-->
</div><!--/row-->



<br>

<br>
<div class="container">

<a href="javascript:history.back(1)"><button class="btn btn-primary btn-lg">Volver</button></a>

</div>
</a>
<br>

@endsection
