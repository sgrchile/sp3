@extends('layouts.app')
@section('content')

<div class="row">
  <div class="col-xs-12 col-md-12 col-sm-12">
    <div class="block-web">
      <div class="header">
        <div class="actions"></div>
        <h1 class=" text-center text-uppercase" >CONSULTAR PERSONAL</h1>
      </div>
      <div class="porlets-content">
        <!-- FORM INICIO -->

        <div class="container" align="center">
        <br>
        <br>
        <form class="form-horizontal" method="post" action="{{ route('buscarRRHH') }}">
          {{ csrf_field() }}
        <label>BUSCAR PERSONAL:</label><input type="text" placeholder="Ingrese nombre o RUN" name="buscarRh" style="width:275px;">
        <button type="submit" class="btn btn-primary btn-xs">  <i class="fa fa-search" style="font-size:36px"></i></button>
      </form>

      <table class="display table-hover table-condensed table-bordered table-striped text-uppercase" id="dynamic-table">
        <tr>
          <th>ID</th>
          <th>rut</th>
          <th>nombre</th>
          <th>paterno</th>
          <th>email</th>
          <th>nacionalidad</th>
          <th>dirección</th>
          <th>celular</th>
          <th>Cargo</th>
          <th>ACCIÓN</th>
        </tr>
        @if(!$personal->isEmpty())
          @foreach($personal as $consulta)
        <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{ $consulta->PRO_RUN }}</td>
        <td>{{ $consulta->PRO_NOMBRE }}</td>
        <td>{{ $consulta->PRO_APE_PAT }}</td>
        <td>{{ $consulta->PRO_APE_MAT }}</td>
        <td>{{ $consulta->PRO_EMAIL }}</td>
        <td>{{ $consulta->PRO_NACIONALIDAD }}</td>
        <td>{{ $consulta->PRO_DIRECCION }}</td>
        <td>{{ $consulta->PRO_CELULAR }}</td>
        <td>{{ App\Cargo::find($consulta->PRO_CAR_ID)->CAR_DESC }}</td>
        <td><a href={{route('mostrarRh', $consulta->PRO_RUN)}}><button class="btn btn-success btn-sm">Detalles</button></a></td>
        </tr>
          @endforeach
        @endif
      </table>


      </br>
      <b>Se han encontrado {{ $personal->count() }} registros</b>
      <br>



        </div>
        <!-- FORM FINAL -->

      </div><!--/porlets-content-->
    </div><!--/block-web-->
  </div><!--/col-md-12-->
</div><!--/row-->
<br>
<div class="container">  <a href="{{route('admRRHH')}}"><button class="btn btn-primary btn-lg">Volver</button></a></div>



<br>
<br>

@endsection
