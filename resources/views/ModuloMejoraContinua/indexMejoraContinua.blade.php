
@extends('layouts.app')
@section('content')

<div class="container-fluid " align="center">

  <br>

  <div class="row">
    <div class="col-xs-12 col-md-12 col-sm-12">
      <div class="block-web">
        <div class="header">
          <div class="actions"></div>
          <h1 class="text-center text-uppercase">MODULO MEJORAMIENTO CONTINUO</h1>
        </div>
        <div class="porlets-content">

          <a href="{{Route('mejoramientoContinuo')}}"><button class="btn btn-primary btn-lg">DASHBOARD</button></a>
          <a href="{{Route('evaluaciones')}}"><button class="btn btn-primary btn-lg">EVALUACIONES</button></a>
          <!-- <a href="{{route('FichaDeEvaluacion')}}"><button class="btn btn-primary btn-lg">FICHA DE EVALUACIONES</button></a> -->





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
