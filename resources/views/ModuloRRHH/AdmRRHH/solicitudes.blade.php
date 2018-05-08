@extends('layouts.app')
@section('content')
<div class="container" align="center">

  <div class="row">
    <div class="col-xs-12 col-md-12 col-sm-12">
      <div class="block-web">
        <div class="header">
          <div class="actions"></div>
          <h3 class="text-uppercase text-center ">SOLICITUDES DEL PERSONAL</h3>
        </div>
        <div class="porlets-content">
          <!-- FORM INICIO -->

          <table class="table-condensed">
            <tr>

              <td><a href="{{route('Vacaciones')}}"><button class="btn btn-primary btn-lg" style="width:275px;">VACACIONES</button></a></td>
              <td><a href="{{route('LicenciaMedica')}}"><button class="btn btn-primary btn-lg" style="width:275px;">LICENCIA</button></a></td>

            </tr>
            <tr>

              <td><a href="{{route('PermisoEspecial')}}"><button class="btn btn-primary btn-lg" style="width:275px;">PERMISO ESPECIAL</button></a></td>
              <td><a href="{{route('Adelanto')}}"><button class="btn btn-primary btn-lg" style="width:275px;">ICADELANTO</button></a></td>

            </tr>

          </table>

          <!-- FORM FINAL -->

        </div><!--/porlets-content-->
      </div><!--/block-web-->
    </div><!--/col-md-12-->
  </div><!--/row-->




</div>

<div class="container">  <a href="{{route('admRRHH')}}"><button class="btn btn-primary btn-lg">Volver</button></a></div>

@endsection
