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
              <iframe src="https://sagenda.net/Frontend/5b2932a91ae6cc65a8213cf2?retrieveFromCookies=False" width="1050" height="1200" frameborder="0" allowtransparency="true" sandbox="allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-top-navigation allow-scripts allow-forms"></iframe>
            </table>

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
