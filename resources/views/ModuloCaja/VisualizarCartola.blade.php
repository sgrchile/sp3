@extends('layouts.app')
@section('content')

<div ng-app="">

<div class=" container">

<br>
<div class="row">
  <div class="col-xs-12 col-md-12 col-sm-12">
    <div class="block-web">
      <div class="header">
        <div class="actions"></div>
          <h1 class="text-center text-uppercase">Visualizar Cartola</h1>
      </div>
      <div class="porlets-content">
        <!-- FORM INICIO -->

        <table class="table-condensed form-group text-right text-uppercase" border="0" align="center" cellspacing="15px" style=" border-collapse: separate;
          border-spacing: 5px; ">
            <tr>
            <td class="text-right">Periodo: </td>
            <td>
            <input   type="date"  name="fecha" id="fecha" style="width:175px;">
            </td>
            <td>
            <input type="submit" class="btn btn-primary btn-lg"  >
            </td>
            </tr>
        <table>

        <table class="table table-bordered"  align="center" style=" border-collapse: separate;  text-align:center; ">
          <tr>
            <td>Fecha</td>
            <td>Tipo de Movimiento</td>
            <td>Descripción</td>
            <td>Monto</td>
            <td>Causa</td>
          </tr>
          @foreach($cartolas as $cartola)
          <tr>
            <td>{{ $cartola->CB_FECHA }}</td>
            <td>{{ App\TipoMovimiento::find($cartola->CB_TMOV_ID)->TMOV_DESC }}</td>
            <td>{{ $cartola->CB_DESC }}</td>
            <td>{{ $cartola->CB_MONTO }}</td>
            <td>{{ App\Causa::find($cartola->CB_CAUSA_ID)->CAU_DESC }}</td>
          </tr>
          @endforeach
        </table>

        <!-- FORM FINAL -->

      </div><!--/porlets-content-->
    </div><!--/block-web-->
  </div><!--/col-md-12-->
</div><!--/row-->





</div>
 <div class="container">  <a href="{{route('moduloCaja')}}"><button class="btn btn-primary btn-lg">Volver</button></a></div>
 <br>
  <br>
   <br>
 </div>
@endsection
