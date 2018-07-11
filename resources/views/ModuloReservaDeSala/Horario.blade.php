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
                <td>fecha</td>
                <td>hora inicio</td>
                <td>hora fin</td>
                <td>sala</td>
                <td>estado</td>
                <td style="width:300px;">ACCION</td>
              </tr>
              @foreach($reservas as $reserva)
              <tr>
                <td>{{ $reserva->RS_FECHA }}</td>
                <td>{{ $reserva->RS_HORA }}</td>
                <td>{{ $reserva->RS_HORA2 }}</td>
                <td>{{ App\Sala::find($reserva->RS_MODULO)->SALA_DESC }}</td>
                <td>{{ App\EstadoReserva::find($reserva->RS_DISPONIBLE)->DESC_EST_RES }}</td>
                <td><button class="btn btn-primary btn-xs" style="margin-left:10px;">ELIMNAR</button>
                </td>
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
