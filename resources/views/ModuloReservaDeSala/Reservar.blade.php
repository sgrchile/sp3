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
        </div>
        <div class="porlets-content">
          <div class="table-responsive">
            {!! Form::open(['method' => 'post','route' => 'post.reserva']) !!}
            {{ csrf_field() }}
            @if (session('status_reserva'))
              <div class="alert alert-success">
                {{ session('status_reserva') }}
              </div>
            @endif
            <table class="table-condensed text-right">
              <tr>
                <td>SALA:</td>
                <td>
                  {{ Form::select('sala',App\Sala::pluck('SALA_DESC','SALA_ID'),['class'=>'form-control','style'=>'max-width:175px']) }}

                </td>
              </tr>
              <tr>
                <td>MOTIVO :</td>
                  <td>
                    {{ Form::select('motivo',App\ReservaMotivo::pluck('RES_MOT_DESC','ID_RES_MOTIVO'),['class'=>'form-control','style'=>'max-width:175px']) }}
                  </td>

              </tr>
              <tr>
                <td>DESCRIPCION:</td>
                <td>
                  <textarea rows="10" name="descripcion" id="descripcion" style="max-width:175px;"  class="form-control"></textarea>
                </td>
              </tr>
              <tr>
                <td>FECHA</td>
                <td>
                  {{ Form::date('fecha',\Carbon\Carbon::now(),['class'=>'form-control','style'=>'max-width:175px']) }}
                </td>
              </tr>

              <tr>
                <td>HORA INICIO </td>
                <td><input type="time" style="max-width:175px;" name="hrinicio" class="form-control"  /> </td>
              </tr>
              <tr>
                <td>HORA TERMINO</td>
                <td><input type="time" style="max-width:175px;" name="hrtermino" class="form-control"  /> </td>
              </tr>
            </table>
            <button class="btn btn-primary btn-lg">RESERVAR</button>

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
