@extends('layouts.app')
@section('content')

<div class="row">
  <div class="col-xs-12 col-md-12 col-sm-12">
    <div class="block-web">
      <div class="header">
        <div class="actions"></div>
        <h1 class=" text-center text-uppercase" >CONFIGURACION</h1>
      </div>
      <div class="porlets-content">
        <!-- FORM INICIO -->

        <div class="container" align="center">

          <br>
          <br>
          <br>

          <table class="table-condensed">
          <tr>
            <td><a href="{{route('Cargos')}}"><button class="btn btn-primary btn-lg">CARGOS</button></a></td>
            <td><a href="{{route('AFP')}}"><button class="btn btn-primary btn-lg">AFP</button></a></td>
            <td><a href="{{route('prev')}}"><button class="btn btn-primary btn-lg">PREVISION SALUD</button></a></td>
          </tr>

          </table>

        </div>

        <!-- FORM FINAL -->

      </div><!--/porlets-content-->
    </div><!--/block-web-->
  </div><!--/col-md-12-->
</div><!--/row-->
<br>
<br>
<div class="container">  <a href="{{route('admRRHH')}}"><button class="btn btn-primary btn-lg">Volver</button></a></div>



<br>
<br>

@endsection
