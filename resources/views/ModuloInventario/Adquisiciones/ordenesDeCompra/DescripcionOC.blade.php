@extends('layouts.app')
@section('content')

<div class="container-fluid"  align="center">
<div class="row">
  <div class="col-xs-12 col-md-12 col-sm-12">
    <div class="block-web">
      <div class="header">
        <div class="actions"></div>
        <h1 class="text-center text-uppercase">ORDEN DE COMPRA</h1>
      </div>
      <div class="porlets-content">
        <form id="form1" name="form1" method="post" action="{{ route('patch.estadoOC', $oc->OC_COD) }}">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}
        <!-- FORM INICIO -->

        <div class="row">
          <div class="col-sm-6">
            <h4 class="text-left text-uppercase">FOLIO: {{ $oc->OC_FOLIO }}</h4>
          </div>
          @if(\Illuminate\Support\Facades\Auth::user()->PRO_EMP == 1)
            <div class="col-2 pl-0 pr-0 mr-2">
              <img src="images/empresas/Biogest Ing Ambiental-01.png" class="img-fluid" alt="Logo biogest">
            </div>
            @endif
          @if(\Illuminate\Support\Facades\Auth::user()->PRO_EMP == 2)
            <div class="col-2 pl-0 pr-0 mr-2">
              <img src="images/empresas/Trener Ing Civil-03.png" class="img-fluid" alt="Logo Trener">
            </div>
          @endif
          @if(\Illuminate\Support\Facades\Auth::user()->PRO_EMP == 3)
            <div class="col-2 pl-0 pr-0 mr-2">
              <img src="images/empresas/logo_loica.png" class="img-fluid" alt="Logo Loica">
            </div>
          @endif
          @if(\Illuminate\Support\Facades\Auth::user()->PRO_EMP == 4)
            <div class="col-2 pl-0 pr-0 mr-2">
              <img src="images/empresas/Kutralco Turismo-05.png" class="img-fluid" alt="Logo Kutralco">
            </div>
          @endif
          @if(\Illuminate\Support\Facades\Auth::user()->PRO_EMP == 5)
            <div class="col-2 pl-0 pr-0 mr-2">
              <img src="images/empresas/Logo-EcoHoste-Medianol.png" class="img-fluid" alt="Logo EcoHoste">
            </div>
          @endif
          @if(\Illuminate\Support\Facades\Auth::user()->PRO_EMP == 6)
            <div class="col-2 pl-0 pr-0 mr-2">
              <img src="images/empresas/logo_sgr.png" class="img-fluid" alt="Logo SGR">
            </div>
          @endif
        </div>

        <h3 class="text-center">DATOS PROVEEDOR</h3>
        <table class="table-condensed">
          <tr>
            <td>PROVEEDOR:</td>
            <td><input type="text" readOnly value="{{ App\Proveedor::find($oc->OC_PRO_RUN)->PRO_NOMBRE }}" style="width:175px;" class="form-control"></td>
            <td>RUT:</td>
            <td><input type="text" readOnly  style="width:175px;" value="{{ $oc->OC_PRO_RUN }}" class="form-control"></td>
          </tr>

        </table>

        <h3 class="text-center text-uppercase">ARTICULOS PEDIDOS</h3>

        <table class="table-condensed table-bordered">

          <tr>

            <td>COD. ART.</td>
            <td>DESC. ART.</td>
            <td>EN STOCK</td>
            <td>VALOR</td>
            <td>CANTIDAD</td>
            <td>TOTAL</td>

          </tr>
          <?php
            $sum=0;
          ?>
          @foreach($articulos as $art)
          <tr>
            <td>{{ $art->OFAR_ID }}</td>
            <td>{{ $art->OFAR_DESC }}</td>
            <td>{{ $art->OFAR_CAPACIDAD }}</td>
            <td>{{ $art->OFAR_VALOR }}</td>
            <td><input type="text" value="{{ $oc->OC_CANTIDAD }}" readOnly  style="width:175px;" class="form-control"></td>
            <td><input type="text" value="{{ $oc->OC_TOTAL }}" readOnly  style="width:175px;" class="form-control"></td>
            <?php
                  $sum = $sum + $oc->OC_TOTAL;
                  ?>
          </tr>
          @endforeach

          <tr>


            <td colspan="5" class="text-right">TOTAL:</td>
            <td><input type="text" readOnly value="{{ $sum }}" style="width:175px;" class="form-control"></td>

          </tr>


        </table>

        <br>

        <table class="table-condensed">

          <tr>
            <td>CAMBIAR ESTADO:</td>
            <td>
              <!--  AQUI DEBE EXISTIR UNA CONDICION SI LA OC ESTA CON ESTADO:

              REALIZADA POR DEFECTO EL CBX DEBE MOSTRAR: VERIFICADO Y RECHAZAR
              VERIFICADO POR DEFECTO EL CBX DEBE MOSTRAR: APROBAR Y RECHAZAR
              APROBAR POR DEFECTO EL CBX DEBE MOSTRAR: PEDIR
            -->
              {{ Form::select('estado',$estados,$oc->OC_ESTADO,['class'=>'form-contol','style'=>'width:175px']) }}

          </td>

          <td><button class="btn btn-primary btn-lg">APLICAR</button></td>

        </tr>

      </table>

        </form>
        <!-- FORM FINAL -->

      </div><!--/porlets-content-->
    </div><!--/block-web-->
  </div><!--/col-md-12-->
</div><!--/row-->

<br>

</div>
<div class="container">

<a href="javascript:history.back(1)"><button class="btn btn-primary btn-lg">Volver</button></a>

</div>

<br>

@endsection
