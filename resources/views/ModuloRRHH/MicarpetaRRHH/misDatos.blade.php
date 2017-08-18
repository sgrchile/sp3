@extends('layouts.app')
@section('content')


<br>
<div class="container" align="center">

  <div class="row">
    <div class="col-xs-12 col-md-12 col-sm-12">
      <div class="block-web">
        <div class="header">
          <div class="actions"></div>
          <h1 class=" text-center text-uppercase" >MIS DATOS PERSONALES</h1>
        </div>
        <div class="porlets-content">
          <!-- FORM INICIO -->

          <table class="table-condensed text-right" align="center" >


            <tr>
              <td>NOMBRE:</td>
              <td><input type="text" class="form-control" readonly  style="width:175px;"></td>

              <td>APELLIDOS:</td>
              <td><input type="text" readonly  class="form-control" style="width:175px;"></td>

              <td>RUT:</td>
              <td><input type="text" readonly class="form-control" style="width:175px;"></td>


            </tr>

            <tr>

              <td>EMPRESA:</td>

              <td>
                <input type="text" readonly   class="form-control" style="width:175px;">
              </td>

              <td>CARGO:</td>

              <td>
                <input type="text" readonly class="form-control"  style="width:175px;">
              </td>

              <td>TIPO DE PERSONAL:</td>
              <td>
                <input type="text" readonly class="form-control"  style="width:175px;">
              </td>

            </tr>

            <tr>

              <td>AFP:</td>

              <td>
                <input type="text" readonly class="form-control"  style="width:175px;">
              </td>

              <td>SEGURO MEDICO:</td>

              <td>
                <input type="text" readonly class="form-control" style="width:175px;">
              </td>

            </tr>


          </table>

          <h3 class="text-uppercase text-center ">LICENCIAS EMITIDAS</h3>
          <table class="table table-bordered">

            <tr>
              <td>FECHA</td>
              <td>MOTIVO</td>
              <td>INICIO</td>
              <td>FIN</td>
              <td>ESTADO</td>
            </tr>

            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>

          </table>

          <h3 class="text-uppercase text-center ">PERMISOS SOLICITADOS</h3>
          <table class="table table-bordered">

            <tr>
              <td>FECHA</td>
              <td>MOTIVO</td>
              <td>INICIO</td>
              <td>FIN</td>
              <td>ESTADO</td>
            </tr>

            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>

          </table>

          <h3 class="text-uppercase text-center ">VACACIONES SOLICITADAS</h3>
          <table class="table table-bordered">

            <tr>
              <td>FECHA</td>
              <td>INICIO</td>
              <td>FIN</td>
              <td>ESTADO</td>
            </tr>

            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>

            </tr>

          </table>

          <h3 class="text-uppercase text-center ">ACTIVOS ASIGNADOS</h3>
          <table class="table table-bordered">

            <tr>
              <td>ID</td>
              <td>DESCRIPCION</td>

            </tr>

            <tr>
              <td></td>
              <td></td>
            </tr>

          </table>

          <!-- FORM FINAL -->

        </div><!--/porlets-content-->
      </div><!--/block-web-->
    </div><!--/col-md-12-->
  </div><!--/row-->


<br>
<br>


</div>
<br>
<div class="container">  <a href="{{route('CarpetaPersonal')}}"><button class="btn btn-primary btn-lg">Volver</button></a></div>



<br>
<br>

@endsection
