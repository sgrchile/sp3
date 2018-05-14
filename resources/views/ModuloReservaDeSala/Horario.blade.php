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
              @foreach($reservas as $reserva)
              <tr>
                <td>{{ (App\Sala::find($reserva->RES_SALA))['SALA_DESC'] }}</td>
                <td></td>
                <td>{{ $reserva->RES_DESC }}</td>
                <td>{{ $reserva->RES_FECHA }}</td>
                <td>{{ $reserva->RES_HR_INICIO }}</td>
                <td>{{ $reserva->RES_HR_FIN }}</td>
                <td><button class="btn btn-primary btn-xs" style="margin-left:10px;">ELIMNAR</button>
                  <a href="{{route('AgregarParticipantes')}}"></a><button class="btn btn-primary btn-xs" style="margin-left:10px;">AGREGAR PARTICIPANTES</button></td>
              </tr>
              @endforeach

            </table>
            {!! $reservas->links() !!}
          </div>
        

        </div><!--/porlets-content-->
      </div><!--/block-web-->
    </div><!--/col-md-12-->
  </div><!--/row-->

</div>
<br>
<div class="container">

<a href="{{route('ReservaDeSala')}}"><button class="btn btn-primary btn-lg">Volver</button></a>

</div>
</a>
<br>
@endsection
