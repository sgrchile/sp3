@extends('layouts.app')
@section('content')

<div class="container-fluid " align="center">
  <br>
  <div class="row">
    <div class="col-xs-12 col-md-12 col-sm-12">
      <div class="block-web">
        <div class="alert alert-info" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <strong>MODULO EN DESARROLLO!</strong>
        </div>
        <div class="header">
          <div class="actions"></div>
          <h1 class="text-center text-uppercase">RESERVA DE SALA</h1>
          <br>
          <h2 class="text-center text-uppercase">{{ $horario->RS_FECHA }}</h1>
        </div>
        <div class="porlets-content">
          <div class="table-responsive">
            {!! Form::open(['method' => 'post','route' => 'post.reserva']) !!}
            {{ csrf_field() }}
            <table class="table-condensed text-right">
              <tr>
                <input name="sala" type="text" id="sala" value="{{ $horario->ID_RS_HORARIO }}" readonly  style="visibility:hidden" class="form-control">
                <td><label>Reservación para :</label></td>
                <input name="sala" type="text" id="sala" value="{{ $horario->RS_MODULO }}" readonly  style="visibility:hidden" class="form-control">
                <td><input name="sala2" type="text" id="sala2" readonly value="{{ App\Sala::find($horario->RS_MODULO)->SALA_DESC }}" class="form-control" required></td>
              </tr>
              <tr>
                <td><label>Desde</label></td>
                <td><input name="desde" type="time" id="desde" value="{{ $horario->RS_HORA }}" readonly class="form-control"></td>
              </tr>
              <tr>
              <td><label>Hasta</label></td>
                <td><input name="hasta" type="time" id="hasta" value="{{ $horario->RS_HORA2 }}" readonly class="form-control"></td>
              </tr>
              <tr>
                <td><label>Motivo</label></td>
                <td>
                  <select style="width:175px;" class="form-control" name="motivo" required>
                    @foreach($motivos as $motivo)
                      <option value="{{ $motivo->ID_RES_MOTIVO }}">{{ $motivo->RES_MOT_DESC }}</option>
                    @endforeach
                  </select>
                </td>
              </tr>
              <tr>
                <td><label>Nombre</label></td>
                <td><input name="nombre" type="text" id="nombre" class="form-control"></td>
              </tr>
              <tr>
                <td><label>Apellido</label></td>
                <td><input name="apellido" type="text" id="apellido"  class="form-control"></td>
              </tr>
              <tr>
                <td><label>Telefono</label></td>
                <td><input name="telefono" type="tel" id="telefono" class="form-control"></td>
              </tr>
              <tr>
                <td><label>Email</label></td>
                <td><input name="email" type="email" id="email" class="form-control"></td>
              </tr>
              <tr>
                <td><label>Descripcion</label></td>
                <td><input name="descripcion" type="text" id="descripcion" class="form-control"></td>
              </tr>
            </table>

            <button class="btn btn-primary btn-lg">Guardar</button>


            {!! Form::close() !!}

          </div>
          <div class="container-fluid" align="left">
            <a href="{{route('ReservaDeSala')}}"><button class="btn btn-primary btn-lg">Volver</button></a>

          </div>
        </div><!--/porlets-content-->
      </div><!--/block-web-->
    </div><!--/col-md-12-->
  </div><!--/row-->

</div>
@endsection
