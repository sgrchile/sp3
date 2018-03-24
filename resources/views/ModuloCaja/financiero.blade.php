@extends('layouts.app')
@section('content')

<div class="row">
  <div class="col-xs-12 col-md-12 col-sm-12">
    <div class="block-web">
      <div class="header">
        <div class="actions"></div>
        <br>
        <h1 class="content-header text-center text-uppercase"><b>FINANZAS</b></h1>
      </div>
      <div class="porlets-content">
          <div class="col-md-12 col-sm-9">

          </div>
        <!-- FORM INICIO -->
        <table class="table-condensed  " align="center">
          <tr>

          <td>Empresa:</td>
          <td>
            {{ Form::select('empresa',App\Empresa::pluck('EMP_DESC','EMP_ID'),null,['class'=>'form-control','style'=>'width:125px']) }}
          </td>

          <td>Saldo Caja Chica</td>
          <td><input type="text" class="form-control" style="width:100px;" readonly/></td>

          <td>Saldo Cuenta Corriente</td>
            <td>
              {{ Form::select('saldcuenta',App\CuentaEmpresa::where('CTAE_EMP_ID','=','1')->pluck('CTAE_NUMERO_CUENTA','CTAE_ID'),['class'=>'form-control',
              'style'=>'width:100px']) }}
            </td>
          <td><input type="text" class="form-control" style="width:100px;" readonly/></td>

          </tr>
        </table>
        <div>
          <br>

          <br>
        </div>


        <table class="table-condensed text-center" align="center">
          <tr>
            <td>
              <button class="btn btn-primary btn-lg"  style="width:240px;  margin-bottom: 15px;" data-toggle="modal" data-target="#regMov" > Registro de movimientos</button>
              <a href="{{route('Fluca')}}"><button class="btn btn-primary btn-lg"  style="width:240px; margin-bottom: 15px;"> Flujo de caja</button></a>
              <a href="{{route('panelDeInformes')}}"><button class="btn btn-primary btn-lg"  style="width:240px; margin-bottom: 15px;"> Financiero</button></a>

              <button type="button" class="btn btn-primary btn-lg"  style="width:240px; margin-bottom: 15px;" data-toggle="modal" data-target="#myModal">Cartola bancaria</button>
            </td>
          </tr>

          <!-- <tr>
            <td>
              <button type="button" class="btn btn-primary btn-lg"  style="width:240px; margin-bottom: 15px;">Datos Empresas</button>
              <button type="button" class="btn btn-primary btn-lg"  style="width:240px; margin-bottom: 15px;">Indicadores</button>
              <button type="button" class="btn btn-primary btn-lg"  style="width:240px; margin-bottom: 15px;">Configuracion</button>
            </td>
          </tr> -->

        </table>
        <br>

        <!-- Modal REGISTRO DE MOVIMIENTO -->
        <div class="modal fade " id="regMov" role="dialog" >
          <div class="modal-dialog modal-lg" align="center">
          <!-- Modal content-->
          <div class="modal-content " style="width: 900px;" >
          <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4 class="modal-title">REGISTRO DE MOVIMIENTO</h4>
          </div>
          <div class="modal-body ">
          <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#regIngreso" data-backdrop="static">REGISTRO DE INGRESO</button>
          <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#regEgreso" data-backdrop="static">REGISTRO DE EGRESO</button>
          <a href="{{route('historicoMov')}}"><button class="btn btn-primary btn-lg" >HISTORICO DE MOVIMIENTO</button></a>
          </div>
          <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          </div>
          </div>
          </div>
        </div>
        <!-- //Modal REGISTRO DE MOVIMIENTO -->

        @include('modals.ingreso')
        @include('modals.egreso')



        <!--ligthbox estado-->
        <div class="container">
          <!-- Modal -->
          <div class="modal fade" id="myModal" role="dialog">
          <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
          <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h2 class="modal-title text-center">Cartola Bancaria</h2>
          </div>
          <div class="modal-body">
          <table class="table-condensed ">
          <tr>
          <td>
          <a href="{{route('VisualizarCartola')}}"><button type="button" class="btn btn-primary btn-lg">Visualizar cartola</button></a>
          <a href="{{route('AgregarCartola')}}"><button type="button" class="btn btn-primary btn-lg">Agregar cartola</button></a>
          <a href="{{route('consolidarCartola')}}"><button type="button" class="btn btn-primary btn-lg">Consolidar</button></a>
          </td>
          </tr>
          </table>
          </div>
          <br>
          <div class="container">
            <button type="button" class="btn btn-primary btn-lg" data-dismiss="modal">Volver</button>
          </div>
          <br>
          </div>
          <!-- //Modal content-->
          </div>
          </div>
          <!--// Modal -->
        </div>
        <!--//ligthbox -->



        <div class="container">
        <a href="javascript:history.back(1)"><button class="btn btn-primary btn-lg">Volver</button></a>

        </div>
        </a>
        <br>


        <!-- FORM FINAL -->

      </div><!--/porlets-content-->
    </div><!--/block-web-->
  </div><!--/col-md-12-->
</div><!--/row-->

@endsection
