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
          <h1 class="text-center text-uppercase">ACTIVOS</h1>
        </div>
        <div class="porlets-content">
          <!-- FORM INICIO -->
          <table  align="center">
            <tr>
              <td align="center">

                <a href="{{route('RegistarActivo')}}"><button class="btn btn-primary btn-lg" style="width:160px;">REGISTRAR</button></a>
                <a href="{{route('actualizarActivo')}}"><button class="btn btn-primary btn-lg" style="width:160px;">ACTUALIZAR</button></a>
                <a href="{{route('ModuloInventario.Activos.Listado')}}"><button class="btn btn-primary btn-lg" style="width:160px;">LISTAR</button></a>
                <a href="{{route('AsignarActivo')}}"><button class="btn btn-primary btn-lg" style="width:160px;">ASIGNAR</button></a>
              </td>
            </tr>
          </table>
          <!-- FORM FINAL -->
        </div><!--/porlets-content-->
      </div><!--/block-web-->
    </div><!--/col-md-12-->
  </div><!--/row-->

</div>

<br >
<div class="container">
<a href="{{route('Bodega')}}"><button class="btn btn-primary btn-lg">Volver</button></a>

</div>
</a>
<br>

@endsection
