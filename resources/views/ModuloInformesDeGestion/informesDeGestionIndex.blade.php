@extends('layouts.app')
@section('content')


<div class="row">
  <div class="col-xs-12 col-md-12 col-sm-12">
    <div class="block-web">
      <div class="header">
        <div class="actions"></div>
        <h1 class="text-center text-uppercase">INFORMES DE GESTION</h1>
      </div>
      <div class="porlets-content">
        <!-- FORM INICIO -->
        <div class="container" align="center">

          <a href="{{route('nivelGerencia')}}"><button class="btn btn-primary btn-lg">NIVEL DE GERENCIA</button></a>
          <a href="{{route('nivelAdministracion')}}"><button class="btn btn-primary btn-lg">NIVEL DE ADMINISTRACION</button></a>
        </div>



        <!-- FORM FINAL -->

      </div><!--/porlets-content-->
    </div><!--/block-web-->
  </div><!--/col-md-12-->
</div><!--/row-->



<br>

<br>
<div class="container">

<a href="javascript:history.back(1)"><button class="btn btn-primary btn-lg">Volver</button></a>

</div>
</a>
<br>

@endsection
