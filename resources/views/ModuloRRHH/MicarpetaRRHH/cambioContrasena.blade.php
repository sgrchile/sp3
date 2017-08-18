@extends('layouts.app')
@section('content')


<br>
<div class="container" align="center">

  <div class="row">
    <div class="col-xs-12 col-md-12 col-sm-12">
      <div class="block-web">
        <div class="header">
          <div class="actions"></div>
          <h1 class="content-header text-center text-uppercase"><b>RESETEAR CONTRASEÑA</b></h1>
        </div>
        <div class="porlets-content">
          <!-- FORM INICIO -->

          <table class="table-condensed text-right" align="center">

            <tr>

              <td>NUEVA CONTRASEÑA:</td>
              <td><input type="text"  style="width:175px;"></td>

            </tr>

            <tr>

              <td>CONFIRMAR:</td>
              <td><input type="text"   style="width:175px;"></td>

            </tr>

          </table>

          <br>
          <button class="btn btn-primary btn-md">RESETEAR </button>



          <!-- FORM FINAL -->

        </div><!--/porlets-content-->
      </div><!--/block-web-->
    </div><!--/col-md-12-->
  </div><!--/row-->


</div>
<br>
<div class="container">

<a href="{{route('CarpetaPersonal')}}"><button class="btn btn-primary btn-lg">Volver</button></a>

</div>


@endsection
