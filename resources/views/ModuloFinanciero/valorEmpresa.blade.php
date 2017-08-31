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
          <div class="col-md-12" align="center">
            <div id="piechart"></div>
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
        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
        chart.draw(data, options);
      }
      </script>



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
