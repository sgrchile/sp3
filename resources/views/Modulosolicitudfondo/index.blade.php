@extends('layouts.app')
@section('content')

<div class="row">
  <div class="col-xs-12 col-md-12 col-sm-12">
    <div class="block-web">
      <div class="alert alert-info" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong><i>La sección a la que usted acaba de ingresar, se encuentra en etapa de programación. Disculpe las molestias</i></strong>
      </div>
      <div class="header">
        <div class="actions"></div>
        <h1 class="content-header text-center text-uppercase"><b>Solicitud de fondos</b></h1>
      </div>
      <div class="porlets-content">
        <!-- FORM INICIO -->
        <div class="container-fluid" align="center">

        <table class="table-condensed">

          <tr>
            <td><a href={{route('createSolFon')}}><button class='btn btn-primary btn-lg' style="width:160px;margin-bottom: 15px;"> Solicitar fondo</button></a></td>
            @if(\Illuminate\Support\Facades\Auth::user()->PRO_NIVEL == 14 || \Illuminate\Support\Facades\Auth::user()->PRO_NIVEL == 5
            || \Illuminate\Support\Facades\Auth::user()->PRO_NIVEL == 2)
             <td><a href={{route('verEvaluar')}}><button class='btn btn-primary btn-lg'   style="width:160px;margin-bottom: 15px;"> Evaluar</button></a></td>
            @endif
            @if(\Illuminate\Support\Facades\Auth::user()->PRO_NIVEL == 14 || \Illuminate\Support\Facades\Auth::user()->PRO_NIVEL == 5)
              <td><a href={{route('verTransferir')}}><button class='btn btn-primary btn-lg'  style="width:160px;margin-bottom: 15px;">Transferir</button></a></td>
            @endif

          </tr>
          <tr>

            <td><a href={{route('verRendir')}}><button class='btn btn-primary btn-lg' style="width:160px;margin-bottom: 15px;"> Rendir</button></a></td>
            <td><a href={{route('verEstadoSf')}}><button class='btn btn-primary btn-lg' style="width:160px;margin-bottom: 15px;"> Estado</button></a></td>
            <td><a href="{{route('verHistoricoSf')}}"><button type="button" class="btn btn-primary btn-primary btn-lg"  style="width:160px;margin-bottom: 15px;">Historico</button></a></td>

          </tr>
        </table>
        </div>
        <br>
        <br>
        <a href="{{route('menu')}}"><button class="btn btn-primary btn-lg">Volver</button></a>

        <!-- FORM FINAL -->

      </div><!--/porlets-content-->
    </div><!--/block-web-->
  </div><!--/col-md-12-->
</div><!--/row-->



@endsection
