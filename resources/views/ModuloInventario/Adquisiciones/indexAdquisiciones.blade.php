@extends('layouts.app')
@section('content')




<div class="container" align="center">
  <div class="row">
    <div class="col-xs-12 col-md-12 col-sm-12">
      <div class="block-web">
        <div class="header">
          <div class="actions"></div>
          <h1 class="text-center text-uppercase">ADQUISICIONES</h1>
        </div>
        <div class="porlets-content">
          <!-- FORM INICIO -->

          <table  align="center">
            <tr>
              <td align="center">
                <a href="{{route('Compras')}}"><button class="btn btn-primary btn-lg"  style="width:260px; margin-bottom: 15px;"> COMPRAS</button></a>
                <a href="{{route('indexOC')}}"><button class="btn btn-primary btn-lg"  style="width:260px; margin-bottom: 15px;">ORDENES DE COMPRA</button></a>
                <a href="{{route('ListaGuiasDeDespacho')}}"><button class="btn btn-primary btn-lg" style="width:260px; margin-bottom: 15px;">LISTA GUIAS DE DESPACHO</button></a>
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

<a href="{{route('inventario')}}"><button class="btn btn-primary btn-lg">Volver</button></a>

</div>
</a>
<br>

@endsection
