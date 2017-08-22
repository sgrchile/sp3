@extends('layouts.app')
@section('content')

<div class="container-fluid " align="center">

  <br>

  <div class="row">
    <div class="col-xs-12 col-md-12 col-sm-12">
      <div class="block-web">
        <div class="header">
          <div class="actions"></div>
          <h1 class="text-center text-uppercase">RESERVA DE SALA</h1>
        </div>
        <div class="porlets-content">

          <table class="table-responsive">
            <tr>
              <td><a href="{{route('horario')}}"><button class="btn btn-primary btn-lg" style="margin-right:15px;">HORARIO</button></a></td>


              <td><a href="{{route('Reservar')}}"><button class="btn btn-primary btn-lg" style="margin-right:15px;">RESERVAR</button></a></td>
              <td><a href="{{route('sala')}}"><button class="btn btn-primary btn-lg" style="margin-right:15px;">SALAS</button></a></td>
            </tr>

          </table>

          
        </div><!--/porlets-content-->
      </div><!--/block-web-->
    </div><!--/col-md-12-->
  </div><!--/row-->

  <br>

  </div>
  <br>
  <div class="container">

  <a href="javascript:history.back(1)"><button class="btn btn-primary btn-lg">Volver</button></a>

  </div>
  </a>
  <br>

@endsection
