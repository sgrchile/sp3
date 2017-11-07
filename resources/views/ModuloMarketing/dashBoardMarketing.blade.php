
@extends('layouts.app')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
<div class="container-fluid " align="center" ng-app="">

  <br>

  <div class="row">
    <div class="col-xs-12 col-md-12 col-sm-12">
      <div class="block-web">
        <div class="header">
          <div class="actions"></div>
          <h1 class="text-center text-uppercase">MODULO MARKETING</h1>
        </div>
        <div class="porlets-content">

          <h2 class="text-center">ANALISIS DE VENTAS</h2>

          <table class="table-condensed">
            <tr>
              <td>
                <h4>EMPRESA</h4>
              </td>
            </tr>
            <tr>
              <td>
                <h3>LOGO</h3>
              </td>
            </tr>
            <tr>
              <td>
                <select style="width:100px;">
                  <option value="">KUTRALCO</option>
                  <option value="">BIOGEST</option>
                  <option value="">TRENER</option>
                  <option value="">LOICA</option>
                  <option value="">SGR</option>
                </select>

              </td>
            </tr>

          </table>

          <div class="row">

            <div class="col-md-6">

              <!--TORTA-->
              <div ng-switch="grafico1">
                <div ng-switch-when="TORTA1">
                  <p>
                    torta
                  </p>
                  <div id="piechart1"></div>
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
                      var options = {'title':' ', 'width':500, 'height':400};

                      // Display the chart inside the <div> element with id="piechart"
                      var chart = new google.visualization.PieChart(document.getElementById('piechart1'));
                      chart.draw(data, options);
                    }
                  </script>
                </div>
                <!--barra-->
                <div ng-switch-when="BARRA1">

                  <div class="block-web">
                    <div class="custom-bar-chart">
                      <ul class="y-axis">
                        <li><span>100</span></li>
                        <li><span>80</span></li>
                        <li><span>60</span></li>
                        <li><span>40</span></li>
                        <li><span>20</span></li>
                        <li><span>0</span></li>
                      </ul>

                      <div class="bar">
                        <div class="value tooltips" data-original-title="30%" data-toggle="tooltip" data-placement="top">0%</div>
                        <div class="title"></div>
                      </div><!--/bar-->
                      <div class="bar">
                        <div class="value tooltips bar-bg-color" data-original-title="50%" data-toggle="tooltip" data-placement="top">50%</div>
                        <div class="title">Fab</div>
                      </div><!--/bar-->
                      <div class="bar ">
                        <div class="value tooltips" data-original-title="40%" data-toggle="tooltip" data-placement="top">40%</div>
                        <div class="title">Mar</div>
                      </div><!--/bar-->
                      <div class="bar ">
                        <div class="value tooltips" data-original-title="80%" data-toggle="tooltip" data-placement="top">80%</div>
                        <div class="title">Apr</div>
                      </div><!--/bar-->
                      <div class="bar">
                        <div class="value tooltips bar-bg-color" data-original-title="70%" data-toggle="tooltip" data-placement="top">70%</div>
                        <div class="title">May</div>
                      </div><!--/bar-->
                      <div class="bar ">
                        <div class="value tooltips" data-original-title="50%" data-toggle="tooltip" data-placement="top">50%</div>
                        <div class="title">Jun</div>
                      </div><!--/bar-->
                      <div class="bar">
                        <div class="value tooltips" data-original-title="40%" data-toggle="tooltip" data-placement="top">40%</div>
                        <div class="title">Jul</div>
                      </div><!--/bar-->
                      <div class="bar">
                        <div class="value tooltips" data-original-title="35%" data-toggle="tooltip" data-placement="top">35%</div>
                        <div class="title">Aug</div>
                      </div><!--/bar-->

                      <div class="bar ">
                        <div class="value tooltips" data-original-title="80%" data-toggle="tooltip" data-placement="top">80%</div>
                        <div class="title">Sep</div>
                      </div><!--/bar-->
                      <div class="bar">
                        <div class="value tooltips bar-bg-color" data-original-title="70%" data-toggle="tooltip" data-placement="top">70%</div>
                        <div class="title">Oct</div>
                      </div><!--/bar-->
                      <div class="bar ">
                        <div class="value tooltips" data-original-title="50%" data-toggle="tooltip" data-placement="top">50%</div>
                        <div class="title">Nov</div>
                      </div><!--/bar-->
                      <div class="bar">
                        <div class="value tooltips" data-original-title="40%" data-toggle="tooltip" data-placement="top">40%</div>
                        <div class="title">Dec</div>
                      </div><!--/bar-->


                    </div>
                    <!--/custom-bar-chart-->
                  </div><!--/block-web-->
                </div>
                <!--LINEA-->
                <div ng-switch-when="LINEA1">
                  <p>
                    LINEA
                  </p>
                </div>
              </div>

              <table align="right">
                <tr>
                  <td>TOTAL PROMEDIO</td>
                </tr>
              </table>

              <table class="table-condensed text-right" >
                <tr>
                  <td>
                    GRAFICO 1
                  </td>
                  <td>
                    <select class="form-control" name="">
                      <option value="">VENTA SALA</option>
                      <option value="">ONLINE</option>
                      <option value="">TERRENO</option>
                      <option value="">LICITACIONES</option>
                      <option value="">TODAS</option>

                    </select>
                  </td>
                  <td>
                    TIPO:
                  </td>
                  <td>
                    <select class="form-control" style="width:175px;"  ng-model="grafico1">
                      <option value="">SELECCIONAR</option>
                      <option value="TORTA1">TORTA</option>
                      <option value="BARRA1">BARRA</option>
                      <option value="LINEA1">LINEA</option>
                    </select>
                  </td>
                </tr>
                <tr>
                  <td>
                    UNIDAD:
                  </td>
                  <td>
                    <select class="form-control" style="width:175px;">
                      <option value="">%</option>
                      <option value="">$</option>
                    </select>
                  </td>
                  <td>
                    AÑO:
                  </td>
                  <td>
                    <input type="date" class="form-control"style="width:175px;" />
                  </td>

                </tr>

                <tr>
                  <td>
                    PERIODO:
                  </td>
                  <td>
                    <select class="form-control" style="width:175px;">
                      <option value="">SEMANAL</option>
                      <option value="">MENSUAL</option>
                      <option value="">ANUAL</option>
                    </select>
                  </td>
                </tr>



              </table>


            </div>
            <div class="col-md-6">
            
                <!--TORTA-->
                <div ng-switch="grafico2">
                  <div ng-switch-when="TORTA2">
                    <p>
                      torta
                    </p>
                    <div id="piechart1"></div>
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
                        var options = {'title':' ', 'width':500, 'height':400};

                        // Display the chart inside the <div> element with id="piechart"
                        var chart = new google.visualization.PieChart(document.getElementById('piechart1'));
                        chart.draw(data, options);
                      }
                    </script>
                  </div>
                  <!--barra-->
                  <div ng-switch-when="BARRA2">

                    <div class="block-web">
                      <div class="custom-bar-chart">
                        <ul class="y-axis">
                          <li><span>100</span></li>
                          <li><span>80</span></li>
                          <li><span>60</span></li>
                          <li><span>40</span></li>
                          <li><span>20</span></li>
                          <li><span>0</span></li>
                        </ul>

                        <div class="bar">
                          <div class="value tooltips" data-original-title="30%" data-toggle="tooltip" data-placement="top">0%</div>
                          <div class="title"></div>
                        </div><!--/bar-->
                        <div class="bar">
                          <div class="value tooltips bar-bg-color" data-original-title="50%" data-toggle="tooltip" data-placement="top">50%</div>
                          <div class="title">Fab</div>
                        </div><!--/bar-->
                        <div class="bar ">
                          <div class="value tooltips" data-original-title="40%" data-toggle="tooltip" data-placement="top">40%</div>
                          <div class="title">Mar</div>
                        </div><!--/bar-->
                        <div class="bar ">
                          <div class="value tooltips" data-original-title="80%" data-toggle="tooltip" data-placement="top">80%</div>
                          <div class="title">Apr</div>
                        </div><!--/bar-->
                        <div class="bar">
                          <div class="value tooltips bar-bg-color" data-original-title="70%" data-toggle="tooltip" data-placement="top">70%</div>
                          <div class="title">May</div>
                        </div><!--/bar-->
                        <div class="bar ">
                          <div class="value tooltips" data-original-title="50%" data-toggle="tooltip" data-placement="top">50%</div>
                          <div class="title">Jun</div>
                        </div><!--/bar-->
                        <div class="bar">
                          <div class="value tooltips" data-original-title="40%" data-toggle="tooltip" data-placement="top">40%</div>
                          <div class="title">Jul</div>
                        </div><!--/bar-->
                        <div class="bar">
                          <div class="value tooltips" data-original-title="35%" data-toggle="tooltip" data-placement="top">35%</div>
                          <div class="title">Aug</div>
                        </div><!--/bar-->

                        <div class="bar ">
                          <div class="value tooltips" data-original-title="80%" data-toggle="tooltip" data-placement="top">80%</div>
                          <div class="title">Sep</div>
                        </div><!--/bar-->
                        <div class="bar">
                          <div class="value tooltips bar-bg-color" data-original-title="70%" data-toggle="tooltip" data-placement="top">70%</div>
                          <div class="title">Oct</div>
                        </div><!--/bar-->
                        <div class="bar ">
                          <div class="value tooltips" data-original-title="50%" data-toggle="tooltip" data-placement="top">50%</div>
                          <div class="title">Nov</div>
                        </div><!--/bar-->
                        <div class="bar">
                          <div class="value tooltips" data-original-title="40%" data-toggle="tooltip" data-placement="top">40%</div>
                          <div class="title">Dec</div>
                        </div><!--/bar-->


                      </div>
                      <!--/custom-bar-chart-->
                    </div><!--/block-web-->
                  </div>
                  <!--LINEA-->
                  <div ng-switch-when="LINEA2">
                    <p>
                      LINEA
                    </p>
                  </div>
                </div>
              <table align="right">
                <tr>
                  <td>TOTAL PROMEDIO</td>
                </tr>
              </table>

              <table class="table-condensed text-right" >
                <tr>
                  <td>
                    GRAFICO 2
                  </td>
                  <td>
                    <select class="form-control" name="">
                      <option value="">VENTA SALA</option>
                      <option value="">ONLINE</option>
                      <option value="">TERRENO</option>
                      <option value="">LICITACIONES</option>
                      <option value="">TODAS</option>

                    </select>
                  </td>
                  <td>
                    TIPO:
                  </td>
                  <td>
                    <select class="form-control" style="width:175px;"  ng-model="grafico2">
                      <option value="">SELECCIONAR</option>
                      <option value="TORTA2">TORTA</option>
                      <option value="BARRA2">BARRA</option>
                      <option value="LINEA2">LINEA</option>
                    </select>
                  </td>
                </tr>
                <tr>
                  <td>
                    UNIDAD:
                  </td>
                  <td>
                    <select class="form-control" style="width:175px;">
                      <option value="">%</option>
                      <option value="">$</option>
                    </select>
                  </td>
                  <td>
                    AÑO:
                  </td>
                  <td>
                    <input type="date" class="form-control"style="width:175px;" />
                  </td>

                </tr>

                <tr>
                  <td>
                    PERIODO:
                  </td>
                  <td>
                    <select class="form-control" style="width:175px;">
                      <option value="">SEMANAL</option>
                      <option value="">MENSUAL</option>
                      <option value="">ANUAL</option>
                    </select>
                  </td>
                </tr>



              </table>

            </div>


          </div>
          <div class="row">


            <div class="col-md-12">

              <button class="btn btn-primary btn-lg">ENCUENTAS</button>
            </div>

          </div>

          <div class="row">
            <div class="col-md-12">
              <table class="table-condensed" align="left">
                <tr>
                  <td>
                    <button class="btn btn-primary btn-lg" style="width:172px;" >REDES SOCIALES</button>
                  </td>
                </tr>
                <!-- <tr>
                  <td>
                    <button class="btn btn-primary btn-lg" style="width:172px;" >DOCUMENTAL</button>
                  </td>
                </tr> -->
                <!-- <tr>
                  <td>
                    <button class="btn btn-primary btn-lg" style="width:172px;" >PROVEEDORES</button>
                  </td>
                </tr> -->
                <tr>
                  <td>
                    <button class="btn btn-primary btn-lg" style="width:172px;" >PRESUPUESTO </button>
                  </td>
                </tr>
              </table>
            </div>

          </div>


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
