
<div class="modal fade " id="Desempeno" role="dialog">
    <div class="modal-dialog modal-lg" align="center">

        <!-- Modal content-->
        <div class="modal-content ">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">×</button>
                <h4 class="modal-title">DESEMPEÑO  </h4>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-xs-2">
                  <h1>LOGO</h1>
                </div>
                <div class="col-xs-4">

                  <h5 class="text-center">MEJORA</h5>
                  <table class="table-condensed text-right">

                    <tr>
                      <td>
                        ID:
                      </td>
                      <td>
                        <input type="text" style="width:175px;"  class="form-control"/>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        FECHA:
                      </td>
                      <td>
                        <input type="date" style="width:175px;"  class="form-control"/>
                      </td>
                    </tr>

                    <tr>
                      <td>
                        NOMBRE:
                      </td>
                      <td>
                        <input type="text" style="width:175px;"  class="form-control"/>
                      </td>
                    </tr>

                  </table>
                </div>
                <div class="col-xs-4">
                  <h5 class="text-center">INDICADOR</h5>
                  <table class="table-condensed text-right">

                    <tr>
                      <td>
                        ID:
                      </td>
                      <td>
                        <input type="text" style="width:175px;" class="form-control" />
                      </td>
                    </tr>
                    <tr>
                      <td>
                        DESCRIPCION:
                      </td>
                      <td>
                        <input type="text" style="width:175px;" class="form-control" />
                      </td>
                    </tr>

                    <tr>
                      <td>
                        ESCALA:
                      </td>
                      <td>
                        <input type="text" style="width:175px;" class="form-control" />
                      </td>
                    </tr>

                  </table>

                </div>

              </div>
              <div id="piechart2"></div>

              <p class="text-center text-uppercase">PUNTUACION SIN MEJORA VS/PUNTACION CON MEJORA:</p>

              <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

              <script type="text/javascript">
              // Load google charts
              google.charts.load('current', {'packages':['corechart']});
              google.charts.setOnLoadCallback(drawChart);

              // Draw the chart and set the chart values
              function drawChart() {
                var data = google.visualization.arrayToDataTable([
                  ['Task', 'INDICADORES'],
                  ['ORIGINAL', 8],
                  ['MEJORA', 2],
                  ['OBSERVADO', 4]

                ]);

                // Optional; add a title and set the width and height of the chart
                var options = {'title':'RESULTADOS ', 'width':320, 'height':160};

                // Display the chart inside the <div> element with id="piechart"
                var chart = new google.visualization.PieChart(document.getElementById('piechart2'));
                chart.draw(data, options);
              }
              </script>

                <button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#validacionDeMejora" data-backdrop="static">VALIDACION</button>




            </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          </div>
      </div>
  </div>
</div>
