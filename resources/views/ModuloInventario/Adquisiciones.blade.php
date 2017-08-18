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

          <a href="{{route('Compras')}}"><button class="btn btn-primary btn-lg"> COMPRAS</button></a>
          <a href="{{route('indexOC')}}"><button class="btn btn-primary btn-lg">ORDENES DE COMPRA</button></a>
          <a href="{{route('GuiasDeDespacho')}}"><button class="btn btn-primary btn-lg"> GUIAS DE DESPACHO</button></a>


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
