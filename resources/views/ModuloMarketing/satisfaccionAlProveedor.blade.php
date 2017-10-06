
@extends('layouts.app')
@section('content')

<div class="container-fluid " align="center">

  <br>

  <div class="row">
    <div class="col-xs-12 col-md-12 col-sm-12">
      <div class="block-web">
        <div class="header">
          <div class="actions"></div>
          <h1 class="text-center text-uppercase">EVALUACION A PROVEEDORES</h1>
        </div>
        <div class="porlets-content">


          <!-- <table class="table-condensed text-right" align="center">
            <tr>
              <td>BUSCAR PRODUCTO A EVALUAR:</td>
              <td ><input type="text" required class="form-control" style="width:175px;"/></td>
              <td align="left"><button type="button" class="btn btn-primary btn-xs">  <i class="fa fa-search" style="font-size:29px"></i></button></td>
            </tr>
          </table> -->


          <div class="table-responsive">
            <h3 class="text-center">RESPECTO A LA OPERACION </h3>

              <table class="table table-bordered">
                  <tr>
                    <td>PREGUNTA</td>

                    <td colspan="5">EVALUACION</td>
                    <td >COMENTARIO</td>
                  </tr>

                  <tr>
                    <td>En su opinion, la persona que solicito sus servicios, fue claro respecto al requerimiento.</td>
                    <td colspan="5">
                      <select class="form-control">
                        <option value="">1</option>
                        <option value="">2</option>
                        <option value="">3</option>
                        <option value="">4</option>
                        <option value="">5</option>
                        <option value="">NO APLICA</option>
                      </select>
                    </td>
                    <td>
                      <textarea class="form-control" style="width:200px; max-width:200px; min-width:200px;  height:200px; min-height:200px;"></textarea>
                    </td>
                  </tr>

                  <tr>
                    <td>En su opinión, la persona que solicito sus servicios, Respeto los acuerdos de trabajo pactados previa ejecución del servicio.</td>
                    <td colspan="5">
                      <select class="form-control">
                        <option value="">1</option>
                        <option value="">2</option>
                        <option value="">3</option>
                        <option value="">4</option>
                        <option value="">5</option>
                        <option value="">NO APLICA</option>
                      </select>
                    </td>
                    <td>
                      <textarea class="form-control" style="width:200px; max-width:200px; min-width:200px;  height:200px; min-height:200px;"></textarea>
                    </td>
                  </tr>

                  <tr>
                    <td>En su opinion, la persona en terreno, le entrego indicasiones claras al momento de ejecutar su servicio.</td>
                    <td colspan="5">
                      <select class="form-control">
                        <option value="">1</option>
                        <option value="">2</option>
                        <option value="">3</option>
                        <option value="">4</option>
                        <option value="">5</option>
                        <option value="">NO APLICA</option>
                      </select>
                    </td>
                    <td>
                      <textarea class="form-control" style="width:200px; max-width:200px; min-width:200px;  height:200px; min-height:200px;"></textarea>
                    </td>
                  </tr>
              </table>
          </div>

          <div class="table-responsive">
            <h3 class="text-center">RESPECTO A LA ADMINISTRACION </h3>

              <table class="table table-bordered">
                  <tr>
                    <td>PREGUNTA</td>

                    <td colspan="5">EVALUACION</td>
                    <td >COMENTARIO</td>
                  </tr>

                  <tr>
                    <td>Se respetaron los tiempos de entregados de pago de sus servicios.</td>
                    <td colspan="5">
                      <select class="form-control">
                        <option value="">1</option>
                        <option value="">2</option>
                        <option value="">3</option>
                        <option value="">4</option>
                        <option value="">5</option>
                        <option value="">NO APLICA</option>
                      </select>
                    </td>
                    <td>
                      <textarea class="form-control" style="width:200px; max-width:200px; min-width:200px;  height:200px; min-height:200px;"></textarea>
                    </td>
                  </tr>

                  <tr>
                    <td>Se le entrego informacion adecuada respecto a como cobrar sus servicios.</td>
                    <td colspan="5">
                      <select class="form-control">
                        <option value="">1</option>
                        <option value="">2</option>
                        <option value="">3</option>
                        <option value="">4</option>
                        <option value="">5</option>
                        <option value="">NO APLICA</option>
                      </select>
                    </td>
                    <td>
                      <textarea class="form-control" style="width:200px; max-width:200px; min-width:200px;  height:200px; min-height:200px;"></textarea>
                    </td>
                  </tr>

                  <tr>
                    <td>Los pagos realizados correspondian a los montos acordados previa ejecuasion del servicio.</td>
                    <td colspan="5">
                      <select class="form-control">
                        <option value="">1</option>
                        <option value="">2</option>
                        <option value="">3</option>
                        <option value="">4</option>
                        <option value="">5</option>
                        <option value="">NO APLICA</option>
                      </select>
                    </td>
                    <td>
                      <textarea class="form-control" style="width:200px; max-width:200px; min-width:200px;  height:200px; min-height:200px;"></textarea>
                    </td>
                  </tr>
                  <tr>
                    <td>El personal administrativo atendio sus solicitudes, sean estas telefonicas, electroncias o presenciales.</td>
                    <td colspan="5">
                      <select class="form-control">
                        <option value="">1</option>
                        <option value="">2</option>
                        <option value="">3</option>
                        <option value="">4</option>
                        <option value="">5</option>
                        <option value="">NO APLICA</option>
                      </select>
                    </td>
                    <td>
                      <textarea class="form-control" style="width:200px; max-width:200px; min-width:200px;  height:200px; min-height:200px;"></textarea>
                    </td>
                  </tr>
              </table>
          </div>

          <br />




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
