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
                            {{ csrf_field() }}
                            @if (session('status_reserva'))
                                <div class="alert alert-success">
                                    {{ session('status_reserva') }}
                                </div>
                            @endif
                            <table class="table-condensed text-right" align="center">
                                <tr>
                                    <td>Fecha</td>
                                    <td>Hora Inicio</td>
                                    <td>Hora Fin</td>
                                    <td>Modulo</td>
                                    <td>Acción</td>
                                </tr>
                                @foreach($horarios as $horario)
                                <tr>
                                    <td>{{ $horario->RS_FECHA }}</td>
                                    <td>{{ $horario->RS_HORA }}</td>
                                    <td>{{ $horario->RS_HORA2 }}</td>
                                    <td>{{ App\Sala::find($horario->RS_MODULO)->SALA_DESC }}</td>
                                    <td>
                                        <a href="{{ route('reg.reserva',$horario->ID_RS_HORARIO) }}" onclick="return confirm('¿Está seguro?')" >
                                            <button class="btn btn-primary btn-xs" style="width:90px;">Reservar</button></a>
                                    </td>
                                </tr>
                                @endforeach
                            </table>

                        </div>
                        <div class="container-fluid" align="left">
                            <a href="{{route('Reservar')}}"><button class="btn btn-primary btn-lg">Volver</button></a>

                        </div>
                    </div><!--/porlets-content-->
                </div><!--/block-web-->
            </div><!--/col-md-12-->
        </div><!--/row-->

    </div>
@endsection