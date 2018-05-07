@extends('layouts.app')
@section('content')


<div class="container-fluid " align="center">

  <div class="row">
    <div class="col-xs-12 col-md-12 col-sm-12">
      <div class="block-web">
        <div class="header">
          <div class="actions"></div>

          <h1 class="text-center">Rendir Solicitud de fondos</h1>
        </div>
        <div class="porlets-content">
          <!-- FORM INICIO -->
          <a href={{route('verPrepRendicion')}}><button class='btn btn-primary btn-lg'> Preparar </button></a>
          <a href={{route('verConsolidar')}}><button class='btn btn-primary btn-lg'> Consolidar</button></a>
          <!-- FORM FINAL -->

        </div><!--/porlets-content-->
      </div><!--/block-web-->
    </div><!--/col-md-12-->
  </div><!--/row-->



<br>
<br>
</div>
<a href="{{route('SolFon')}}"><button class="btn btn-primary btn-lg">Volver</button></a>

@endsection
