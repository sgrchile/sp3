
@extends('layouts.app')
@section('content')

<div class="container-fluid " align="center">

  <br>

  <div class="row">
    <div class="col-xs-12 col-md-12 col-sm-12">
      <div class="block-web">
        <div class="header">
          <div class="actions"></div>
          <h1 class="text-center text-uppercase">MODULO MEJORAMIENTO CONTINUO</h1>
        </div>
        <div class="porlets-content">

          <div class="row">

            <div class="col-md-2">

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




            </div>
            <div class="col-md-4">
              <h4 class="text-center">SERVICIO/ARTICULO</h4>
              <div class="table-responsive">
                 <table class="table table-bordered">
                   <tr>
                     <td>ID</td>
                     <td>DESCRIPCION</td>
                     <td>EVALUACION</td>

                   </tr>

                   <tr>
                     <td>1</td>
                     <td>1</td>
                     <td>1</td>

                       <!-- <a href="{{route('FichaDeEvaluacion')}}"><button class="btn btn-primary btn-xs" style="width:75px; bottom:5px;">VER</button></a> -->



                   </tr>
                 </table>
              </div>
            </div>

            <div class="col-md-6">
              <h4 class="text-center text-uppercase">total de servicios:</h4>
                <div id="piechart"></div>

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
                    var chart = new google.visualization.PieChart(document.getElementById('piechart'));
                    chart.draw(data, options);
                  }
                </script>

                <div class="table-responsive">
                    <table class="table-condensed">
                      <tr>
                        <td>
                          ID
                        </td>
                        <td>
                          ####
                        </td>
                        <td>
                          FECHA
                        </td>
                        <td>
                          ###
                        </td>
                        <td>
                          NOMBRE
                        </td>
                        <td>
                          ###
                        </td>
                    </tr>

                    </table>

                  <table class="table table-bordered">
                    <tr>
                      <td>RECOMENDACIONES</td>

                    </tr>

                    <tr>
                      <td>

                      </td>
                    </tr>

                    <tr>
                      <td align="right">
                        <button class="btn btn-primary btn-xs" >EXAMINAR</button>
                      </td>
                    </tr>

                  </table>


                </div>

            </div>



            <table class="table-condensed">
              <tr>
                <td>
                  TIPO:
                </td>
                <td>
                  <select class="form-control">
                    <option>SERVICIO</option>
                    <option>PRODUCTO</option>

                  </select>
                </td>

                <td>
                  ESTADO
                </td>
                <td>
                  <select class="form-control">
                    <option>ORIGINAL</option>
                    <option>MEJORADO</option>
                    <option>OBSERVADO</option>

                  </select>
                </td>

                <td>
                  TIPO DE MEJORA
                </td>
                <td>
                  <select class="form-control">
                    <option>CORRECTIVA</option>
                    <option>DE SISTEMA</option>
                    <option>DE PROGRESO</option>
                    <option>INOVACION</option>
                  </select>
                </td>

                <td>
                  <button class="btn btn-primary btn-md" data-toggle="modal" data-target="#Indicador" >INDICADOR</button>
                  @include('modals.indicador')
                </td>
              </tr>
            </table>

          </div>


          </div>
          <div class="row">
            <div class="col-sm-2">

            </div>
            <div class="col-sm-10">
              <table class="table-condensed" align="left">
                <tr>
                  <td>
                    <button class="btn btn-primary btn-lg" style="width:172px;"  data-toggle="modal" data-target="#Desempeno">DESEMPEÑO</button>
                    @include('modals.Desempeno')
                    @include('modals.validacionDeMejora')
                    @include('modals.recomendaciones')

                  </td>
                </tr>
                <tr>
                  <td>
                    <button class="btn btn-primary btn-lg" style="width:172px;" >REDES SOCIALES</button>
                  </td>
                </tr>
                <!-- <tr>
                  <td>
                    <button class="btn btn-primary btn-lg" style="width:172px;" >DOCUMENTAL</button>
                  </td>
                </tr>
                <tr>
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
