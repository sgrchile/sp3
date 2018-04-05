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
          <h1 class="text-center text-uppercase">INSUMOS</h1>
        </div>
        <div class="porlets-content">
          <!-- FORM INICIO -->

            <table class="table-condensed"  align="center">
              <tr>

                <td><a href="{{route('RegistrarInsumo')}}"><button class="btn btn-primary btn-lg" style="width:145px;">REGISTRAR</button></a></td>
                <td><a href="{{route('ActualizarInsumo')}}"><button class="btn btn-primary btn-lg" style="width:145px;">ACTUALIZAR</button></a></td>

              </tr>

              <tr>

                <td><a href="{{Route('SolicitudDeInsumo')}}"><button class="btn btn-primary btn-lg" style="width:145px;">SOLICITAR</button></a></td>
                <td><a href="{{route('ConsultarInsumo')}}"><button class="btn btn-primary btn-lg" style="width:145px;">CONSULTAR</button></a></td>

              </tr>
            </table>

            <br>

            <h3 class="text-center text-uppercase">Entregas</h3>

            <a href="{{route('EntregarInsumo')}}"><button class="btn btn-primary btn-lg"  style="width:145px;" >APROBAR</button></a>
            <a href="{{route('ConsultaDeEntregas')}}"><button class="btn btn-primary btn-lg"  style="width:145px;">CONSULTAR </button></a>

          <!-- FORM FINAL -->

        </div><!--/porlets-content-->
      </div><!--/block-web-->
    </div><!--/col-md-12-->
  </div><!--/row-->




</div>

<br>
<br>
<br>
<div class="container">
  <a href="{{route('Bodega')}}"><button class="btn btn-primary btn-lg">Volver</button></a>
</div>

<br>

@endsection
