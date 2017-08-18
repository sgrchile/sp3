@extends('layouts.app')
@section('content')


<div class="container" align="center">

<div class="row">
  <div class="col-xs-12 col-md-12 col-sm-12">
    <div class="block-web">
      <div class="header">
        <div class="actions"></div>
        <h1>OFERTAS DE TRABAJO</h1>
      </div>
      <div class="porlets-content">
        <!-- FORM INICIO -->

        <table class="table-condensed">

  <tr>
    <td colspan="2">DESCRIPCION:</td>
  </tr>

  <tr>
    <td colspan="2"><textarea type="text" readOnly  style="width:342px; max-width:342px;"></textarea></td>
  </tr>

  <tr>
    <td>DURACION:</td>
    <td><input type="text" readOnly  style="width:175px;"></td>
  </tr>

  <tr>
    <td>TIPO DE OFERTA:</td>
    <td><input type="text" readOnly  style="width:175px;"></td>
  </tr>

  <tr>
    <td>SUELDO:</td>
    <td><input type="text" readOnly  style="width:175px;"></td>
  </tr>

  <tr>
    <td><button class="btn btn-primary btn-lg">INSCRIBIRME</button></td>

  </tr>

</table>

        <!-- FORM FINAL -->

      </div><!--/porlets-content-->
    </div><!--/block-web-->
  </div><!--/col-md-12-->
</div><!--/row-->



</div>


 <div class="container">  <a href="{{route('Ofertas')}}"><button class="btn btn-primary btn-lg">Volver</button></a></div>
<br>

@endsection
