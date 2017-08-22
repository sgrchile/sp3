@extends('layouts.app')
@section('content')

<div class="container-fluid " align="center">

  <br>

  <div class="row">
    <div class="col-xs-12 col-md-12 col-sm-12">
      <div class="block-web">
        <div class="header">
          <div class="actions"></div>
          <h1 class="text-center text-uppercase">HORARIO</h1>
        </div>
        <div class="porlets-content">
          <div class="table-responsive">

            <table class= " table table-bordered table-condensed" >
              <tr>
                <td>SALA</td>
                <td>PARTICIPANTES</td>
                <td>DESCRIPCION</td>
                <td>FECHA</td>
                <td>HORA INICIO</td>
                <td>HORA TERMINO</td>
                <td style="width:300px;">ACCION</td>
              </tr>

              <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td><button class="btn btn-primary btn-xs" style="margin-left:10px;">ELIMNAR</button>
                  <a href="{{route('AgregarParticipantes')}}"<button class="btn btn-primary btn-xs" style="margin-left:10px;">AGREGAR PARTICIPANTES</button></td>
              </tr>

            </table>
          </div>
        

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
