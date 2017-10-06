
@extends('layouts.app')
@section('content')

<div class="container-fluid " align="center">

  <br>

  <div class="row">
    <div class="col-xs-12 col-md-12 col-sm-12">
      <div class="block-web">
        <div class="header">
          <div class="actions"></div>
          <h1 class="text-center text-uppercase">EVALUACION DE SATISFACCION DE CLIENTES</h1>
        </div>
        <div class="porlets-content">

          <table class="table-condensed text-right" align="center">
            <tr>
              <td>BUSCAR SERVICIOS A EVALUAR:</td>
              <td ><input type="text" required class="form-control" style="width:175px;"/></td>
              <td align="left"><button type="button" class="btn btn-primary btn-xs">  <i class="fa fa-search" style="font-size:29px"></i></button></td>
            </tr>
          </table>

          <br />

          <div class="table-responsive">

            <table class="table table-bordered">
              <tr>
                <td >RESPECTO AL SERVICIO </td>

                <td colspan="6">EVALUACION</td>
              </tr>

              <tr>
                <td>El servicio realizado cumple con las características entregadas por su ejecutivo de ventas.</td>
                <td colspan="5">
                  <select class="form-control">
                    <option value="">1</option>
                    <option value="">2</option>
                    <option value="">3</option>
                    <option value="">4</option>
                    <option value="">5</option>
                  </select>
                </td>
              </tr>

              <tr>
                <td>El tiempo de ejecución del servicio fue el acordado por su ejecutivo de ventas</td>
                <td colspan="5">
                  <select class="form-control">
                    <option value="">1</option>
                    <option value="">2</option>
                    <option value="">3</option>
                    <option value="">4</option>
                    <option value="">5</option>
                  </select>
                </td>
              </tr>
              <tr>
                <td>En su criterio el conjunto de actividades realizadas durante la ejecución del servicio fueron prolijas y bien coordinaras</td>
                <td colspan="5">
                  <select class="form-control">
                    <option value="">1</option>
                    <option value="">2</option>
                    <option value="">3</option>
                    <option value="">4</option>
                    <option value="">5</option>
                  </select>
                </td>
              </tr>

              <tr>
                <td>en su criterio el conjunto de actividades realizadas durante la ejecución del servicio obedecen al valor cancelado por usted.</td>
                <td colspan="5">
                  <select class="form-control">
                    <option value="">1</option>
                    <option value="">2</option>
                    <option value="">3</option>
                    <option value="">4</option>
                    <option value="">5</option>
                  </select>
                </td>
              </tr>
              <tr>
                <td>el servicio entregado soluciono o satisfacción la necesidad por la cual usted contrato el servicio.</td>
                <td colspan="5">
                  <select class="form-control">
                    <option value="">1</option>
                    <option value="">2</option>
                    <option value="">3</option>
                    <option value="">4</option>
                    <option value="">5</option>
                  </select>
                </td>
              </tr>
              <tr>
                <td>el servicio entregado en su criterio conto con técnicas o tecnologías innovadoras.</td>
                <td colspan="5">
                  <select class="form-control">
                    <option value="">1</option>
                    <option value="">2</option>
                    <option value="">3</option>
                    <option value="">4</option>
                    <option value="">5</option>
                  </select>
                </td>
              </tr>

            </table>

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
