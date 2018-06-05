@extends('layouts.app')
@section('content')



<br>
<div class="container" align="center">
  <div class="row">
    <div class="col-xs-12 col-md-12 col-sm-12">
      <div class="block-web">
        <div class="header">
          <div class="actions"></div>
          <h1 class="text-center text-uppercase">ORDENES DE COMPRA</h1>
        </div>
        <div class="porlets-content">
          <!-- FORM INICIO -->

          <table align="center">

            <tr>

              <td align="center">

                <a href="{{route('validar')}}"><button class="btn btn-primary btn-lg"  style="width:160px;">VALIDAR</button></a>
                <a href="{{route('OCparaLiquidar')}}"><button class="btn btn-primary btn-lg"  style="width:160px;">LIQUIDAR</button></a>
                <a href="{{route('recibir')}}"><button class="btn btn-primary btn-lg" style="width:160px;">RECIBIR </button></a>
                <a href="{{route('Historico')}}"><button class="btn btn-primary btn-lg" style="width:160px;">HISTORICO </button></a>

              </td>

            </tr>

          </table>

          <!-- FORM FINAL -->

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
