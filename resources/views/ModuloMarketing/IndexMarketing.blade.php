
@extends('layouts.app')
@section('content')

<div class="container-fluid " align="center">

  <br>

  <div class="row">
    <div class="col-xs-12 col-md-12 col-sm-12">
      <div class="block-web">
        <div class="header">
          <div class="actions"></div>
          <h1 class="text-center text-uppercase">MODULO DE MARKETING</h1>
        </div>
        <div class="porlets-content">

          <a href="{{route('satisfaccionCliente')}}"><button class="btn btn-primary btn-lg"> SATISFACCION CLIENTE </button></a>

          <a href="{{route('satisfaccionAlProveedor')}}"><button class="btn btn-primary btn-lg"> SATISFACCION PROVEEDOR</button></a>



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
