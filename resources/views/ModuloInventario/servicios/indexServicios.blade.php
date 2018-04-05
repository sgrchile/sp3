@extends('layouts.app')
@section('content')

<div class="container" align="center">

  <div class="row">
    <div class="col-xs-12 col-md-12 col-sm-12">
      <div class="block-web">
        <div class="alert alert-info" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <strong><i>La sección a la que usted acaba de ingresar, se encuentra en etapa de programación. Disculpe las molestias</i></strong>
        </div>
        <div class="header">
          <div class="actions"></div>
          <h1 class="text-center text-uppercase">PRODUCTOS</h1>
        </div>
        <div class="porlets-content">
          <!-- FORM INICIO -->

          <a href="{{route('catalogoServicios')}}"><button class="btn btn-primary btn-lg"> CATALOGO DE SERVICIOS</button></a>

          <!-- FORM FINAL -->

        </div><!--/porlets-content-->
      </div><!--/block-web-->
    </div><!--/col-md-12-->
  </div><!--/row-->

</div>
<div class="container">

<a href="{{route('Bodega')}}"><button class="btn btn-primary btn-lg">Volver</button></a>

</div>
</a>
<br>

@endsection
