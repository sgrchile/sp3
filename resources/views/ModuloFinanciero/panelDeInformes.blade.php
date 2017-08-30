@extends('layouts.app')
@section('content')
<div class="container" align="center">

<div class="row">
  <div class="col-xs-12 col-md-12 col-sm-12">
    <div class="block-web">
      <div class="header">
        <div class="actions"></div>
        <h1 class="text-center text-uppercase">FINANZAS</h1>
      </div>
      <div class="porlets-content">
        <!-- FORM INICIO -->

        <h3 class="text-center">BOLETIN FINANCIERO</h3>
        <div class="row">

            <div class="col-sm-4 col-sm-6">
              <div class="information green_info">
                <div class="information_inner">
                  <div class="info green_symbols"><i class="fa fa-money icon"></i></div>
                  <span>CUENTA CORRIENTE EMPRESA</span>

                  <h1 class="bolded">###</h1>
                  <button class="btn btn-primary btn-lg">REPORTE</button>
                </div>
              </div>
            </div>
            <div class="col-sm-4 col-sm-6">
              <div class="information green_info">
                <div class="information_inner">
                  <div class="info green_symbols"><i class="fa fa-money icon"></i></div>
                  <span>CUENTA CAJA CHICA</span>

                  <h1 class="bolded">###</h1>
                  <a href="{{route('ReporteDeCaja')}}"><button class="btn btn-primary btn-lg">REPORTE</button></a>

                </div>
              </div>
            </div>

            <div class="col-sm-4 col-sm-6">
              <div class="information green_info">
                <div class="information_inner">
                  <div class="info green_symbols"><i class="fa fa-money icon"></i></div>
                  <span>CUENTAS POR COBRAR </span>

                  <h1 class="bolded">###</h1>
                  <a href="{{route('cuentasPorCobrar')}}"><button class="btn btn-primary btn-lg">REPORTE</button></a>
                </div>
              </div>
            </div>

          </div>
          <div class="row" align="center">

            <div class=" col-sm-6">
              <div class="information green_info">
                <div class="information_inner">
                  <div class="info green_symbols"><i class="fa fa-money icon"></i></div>
                  <span>CUENTAS POR PAGAR </span>

                  <h1 class="bolded">###</h1>
                  <a href="{{route('cuentasPorPagar')}}"><button class="btn btn-primary btn-lg">REPORTE</button></a>
                </div>
              </div>
            </div>

            <div class=" col-sm-6">
              <div class="information green_info">
                <div class="information_inner">
                  <div class="info green_symbols"><i class="fa fa-money icon"></i></div>
                  <span>VALOR EMPRESA </span>

                  <h1 class="bolded">###</h1>
                  <a href="{{route('valorEmpresa')}}"><button class="btn btn-primary btn-lg">REPORTE</button></a>
                </div>
              </div>

          </div>

          <div class="row">
            <div class="col-sm-12">

            <h1 class="text-center">DATOS ECONOMICOS</h1>
            <div class="row">

                <div class=" col-sm-4">
                  <div class="information green_info">
                    <div class="information_inner">

                      <h1 class="bolded">DOLAR </h1>
                      <h1 class="bolded">###</h1>
                    </div>
                  </div>
                </div>

                <div class=" col-sm-4">
                  <div class="information green_info">
                    <div class="information_inner">

                      <h1 class="bolded">UF </h1>
                      <h1 class="bolded">###</h1>
                    </div>
                  </div>
                </div>
                  <div class=" col-sm-4">
                    <div class="information green_info">
                      <div class="information_inner">

                        <h1 class="bolded">UTM </h1>
                        <h1 class="bolded">###</h1>
                      </div>
                    </div>
                  </div>
                  <div class=" col-sm-4">
                    <div class="information green_info">
                      <div class="information_inner">

                        <h1 class="bolded">PIB </h1>
                        <h1 class="bolded">###</h1>
                      </div>
                    </div>
                  </div>
                  <div class=" col-sm-4">
                    <div class="information green_info">
                      <div class="information_inner">

                        <h1 class="bolded">IPC </h1>
                        <h1 class="bolded">###</h1>
                      </div>
                    </div>
                  </div>
                  <div class=" col-sm-4">
                    <div class="information green_info">
                      <div class="information_inner">

                        <h1 class="bolded">TASA CREDITICIA </h1>
                        <h1 class="bolded">###</h1>
                      </div>
                    </div>
                  </div>
                </div>


            </div>
          </div>

          <div class="row">
              <div class="col-md-6">
                <div class="block-web">
                  <h3 class="content-header"> MONTO VS CAPITAL, SOCIOS,  COSTOS FIJOS, BONOS</h3>
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
                      <div class="value tooltips" data-original-title="30%" data-toggle="tooltip" data-placement="top">30%</div>
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
              <div class="col-md-6">
                <h3 class="content-header">INGRESOS, EGRESOS VS MESES</h3>

                <div class="panel panel-primary">

                  <div class="panel-body">
                    <div id="hero-graph" class="graph"></div>
                  </div>
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
