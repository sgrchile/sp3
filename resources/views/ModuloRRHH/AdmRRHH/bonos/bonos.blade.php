@extends('layouts.app')
@section('content')

<div class="row">
  <div class="col-xs-12 col-md-12 col-sm-12">
    <div class="block-web">
      <div class="header">
        <div class="actions"></div>
        <h1>BONOS</h1>
      </div>
      <div class="porlets-content">
        <!-- FORM INICIO -->

        <div class="container" align="center">

          <a href="{{route('AsignarBonos')}}"><button class="btn btn-primary btn-lg">ASIGNAR BONOS</button></a>
          <a href="{{route('consultarBonos')}}"><button class="btn btn-primary btn-lg">CONSULTAR BONOS</button></a>
          <a href="{{route('listaBonos')}}"><button class="btn btn-primary btn-lg">LISTA BONOS</button></a>
          <a href="{{route('RegistrarBonos')}}"><button class="btn btn-primary btn-lg">REGISTRAR BONOS</button></a>

        </div>

        <!-- FORM FINAL -->

      </div><!--/porlets-content-->
    </div><!--/block-web-->
  </div><!--/col-md-12-->
</div><!--/row-->
<br>
<br>
<div class="container">  <a href="{{route('admRRHH')}}"><button class="btn btn-primary btn-lg">Volver</button></a></div>
<br>
<br>

@endsection
