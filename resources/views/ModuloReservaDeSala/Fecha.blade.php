@extends('layouts.app')
@section('content')

    <div class="container-fluid " align="center">
        <br>
        <div class="row">
            <div class="col-xs-12 col-md-12 col-sm-12">
                <div class="block-web">
                    <div class="header">
                        <div class="actions"></div>
                        <h1 class="text-center text-uppercase">Seleccione fecha de Reserva</h1>
                    </div>
                    <div class="porlets-content">
                        <div class="table-responsive">
                            {!! Form::open(['method' => 'post','route' => 'post.fecha']) !!}
                            {{ csrf_field() }}
                            <table class="table-condensed text-right" align="center">
                                <tr>
                                    <td style="text-align:right"><label>Fecha:</label></td>
                                    <td style="text-align:right">
                                        {{ Form::date('fecha',Carbon\Carbon::now(),['id'=>'fecha','class'=>'form-control','style'=>'width:175px']) }}
                                    </td>
                                    <td style="text-align:right"><lavel>Sala</lavel></td>
                                    <td>
                                        {{ Form::select('sala',App\Sala::pluck('SALA_DESC','SALA_ID'),['class'=>'form-control','id'=>'sala','style'=>'width:175px']) }}
                                    </td>
                                </tr>
                            </table>
                            <button class="btn btn-primary btn-lg">enviar</button>

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