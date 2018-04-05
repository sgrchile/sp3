@extends('layouts.app')
@section('content')


<div class="row">
  <div class="col-xs-12 col-md-12 col-sm-12">
    <div class="block-web">
      <div class="alert alert-info" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong>MODULO EN DESARROLLO!</strong>
      </div>
      <div class="header">
        <div class="actions"></div>
        <h1 class="text-center text-uppercase">LICITACIONES</h1>
      </div>
      <div class="porlets-content">
        <!-- FORM INICIO -->
          <div align="right">
            <table class="table-condensed text-center" style="border-style:solid;">
              <tr>
                <td>NOTIFICACIONES</td>
              </tr>
              <tr>
                <td>
                  <label>##</label>
                </td>
              </tr>
              <tr>
                <td>
                  <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#NotificacionDeLicitacion" data-backdrop="static">VER</button>
                </td>
              </tr>

            </table>
          </div>
          @include('modals/NotificacionLicitacion')
          <div class="responsive">
            <table class="table-condensed" align="left">
              <tr>
                <td>
                  <a href="{{route('NuevaLicitacion')}}"><button class="btn btn-primary btn-lg"  style="width:190px; margin-right:5px; margin-bottom:5px;">NUEVA LICITACION</button></a>
                  <a href="{{route('Asignar')}}"><button class="btn btn-primary btn-lg"  style="width:190px; margin-right:5px; margin-bottom:5px;">ASIGNAR</button></a>
                  <a href="{{route('propietariosLicitacion')}}"><button class="btn btn-primary btn-lg"  style="width:190px; margin-right:5px; margin-bottom:5px;">PROPIETARIOS</button></a>
                  <button class="btn btn-primary btn-lg"  style="width:190px; margin-right:5px; margin-bottom:5px;">LICITADORES</button>
                </td>
              </tr>
            </table>
          </div>


          <div class="table-responsive">
            <table class="table table-bordered">
              <tr>
                <td>ID</td>
                <td>CLASE</td>
                <td>FOLIO</td>
                <td>OFERENTE</td>
                <td>NOMBRE</td>
                <td>PROPIETARIO</td>
                <td>LICITADOR</td>
                <td>MONTO</td>
                <td>FECHA DE CIERRE</td>
                <td>ESTADO</td>
                <td>FICHA</td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td><a href="{{route('fichaLicitacion')}}"><button class="btn btn-primary btn-lg">VER FICHA</button></a></td>
              </tr>

            </table>
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
