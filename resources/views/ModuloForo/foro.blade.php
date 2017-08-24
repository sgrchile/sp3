@extends('layouts.app')
@section('content')
<div class="container" align="center">

<div class="row">
  <div class="col-xs-12 col-md-12 col-sm-12">
    <div class="block-web">
      <div class="header">
        <div class="actions"></div>
        <h1 class="text-center text-uppercase">FORO</h1>
      </div>
      <div class="porlets-content">
        <!-- FORM INICIO -->


          <a href="{{route('inicioAComercial')}}"><button class="btn btn-primary btn-lg" style="width:150px;">COMERCIAL</button></a>
          <a href="{{route('inicioAdministrativa')}}"><button class="btn btn-primary btn-lg" style="width:150px;">ADMINISTRATIVA</button></a>
          <a href="{{route('inicioTecnica')}}"><button class="btn btn-primary btn-lg" style="width:150px;">TECNICA</button></a>



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
