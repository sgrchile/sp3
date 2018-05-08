@extends('layouts.app')
@section('content')


<br>
<div class="container" align="center">
  <div class="row">
    <div class="col-xs-12 col-md-12 col-sm-12">
      <div class="block-web">
        <div class="header">
          <div class="actions"></div>
        <h1 class=" text-center text-uppercase" >MI CARPETA RRHH</h1>
        </div>
        <div class="porlets-content">
          <!-- FORM INICIO -->
            <br>
            <br>

            <table class="table-condensed" align="center">
              <tr>
                <td align="center">

                  <a href="{{route('misdatos')}}"><button class="btn btn-primary" style="width:210px; margin-bottom: 15px;">MIS DATOS PERSONALES</button></a>
                  <a href="{{route('datosAdicionales')}}"><button class="btn btn-primary " style="width:210px; margin-bottom: 15px;">MIS DATOS ADICIONALES</button></a>
                  <a href="{{route('docLaborales')}}"><button class="btn btn-primary btn" style="width:210px; margin-bottom: 15px;">DOCUMENTOS LABORALES</button></a>
                  <button class="btn btn-primary " style="width:210px; margin-bottom: 15px;"  data-toggle="modal" data-target="#Solicitudes" data-backdrop="static">SOLICITUDES</button>
                  <a href="{{route('resetpass')}}"><button class="btn btn-primary" style="width:210px; margin-bottom: 15px;" >CAMBIO DE CONTRASEÑA</button></a>

                </td>
              </tr>

            </table>

            <!-- Modal content-->
            <div class="modal fade" id="Solicitudes" role="dialog">
              <div class="modal-dialog">
              <div class="modal-content">
              <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">×</button>
              <h4 class="modal-title">SOLICITUDES</h4>
              </div>
              <div class="modal-body">

              <table class="table-condensed">
              <tr>
              <td><a href="{{route('solAdelanto')}}"><button class="btn btn-primary" style="width:250px;">ADELANTO</button></a></td>
              <td><a href="{{route('solLM')}}"><button class="btn btn-primary" style="width:250px;">LICENCIA MEDICA</button></a></td>
              <tr>
              <td><a href="{{route('solPerEsp')}}"><button class="btn btn-primary " style="width:250px;">PERMISO ESPECIAL</button></a></td>
              <td><a href="{{route('solVac')}}"><button class="btn btn-primary " style="width:250px;">VACACIONES</button></a>
              </tr>
              </table>
              </div>
              <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
              </div>
              </div>
              </div>
            </div>
            <!-- Modal content-->

              <!-- FORM FINAL -->

        </div><!--/porlets-content-->
      </div><!--/block-web-->
    </div><!--/col-md-12-->
  </div><!--/row-->
</div>
<br>
<div class="container">

<a href="{{route('RRHH')}}"><button class="btn btn-primary btn-lg">Volver</button></a>

</div>



<br>
<br>

@endsection
