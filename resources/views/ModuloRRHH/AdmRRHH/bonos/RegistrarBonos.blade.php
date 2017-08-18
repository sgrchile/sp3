@extends('layouts.app')
@section('content')

<div class="row">
  <div class="col-xs-12 col-md-12 col-sm-12">
    <div class="block-web">
      <div class="header">
        <div class="actions"></div>
        <h1 class="content-header text-center text-uppercase"><b>TÍTULO</b></h1>
      </div>
      <div class="porlets-content">
        <!-- FORM INICIO -->


        <!-- FORM FINAL -->

      </div><!--/porlets-content-->
    </div><!--/block-web-->
  </div><!--/col-md-12-->
</div><!--/row-->

<div class="container" align="center">

<h1>REGISTRAR DE BONOS </h1>
<br>

<table class="table-condensed text-right" align="center" >

<tr>
  <td>DESCRIPCION:</td>
<td><textarea rows="10" class="form-control"   required style="width:175px; max-width:175px;"></textarea></td>
</tr>

<tr>
  <td>VALOR:</td>
  <td><input type="text" class="form-control"  required  style="width:175px;"></td>
</tr>

<tr>

  <td>PORCENTAJE:</td>
  <td><input type="text" class="form-control"  required  style="width:175px;"></td>
</tr>

</table>
<button class="btn btn-primary btn-lg">REGISTRAR</button>
</div>
<br>
<br>
<div class="container">  <a href="{{route('bonos')}}"><button class="btn btn-primary btn-lg">Volver</button></a></div>
<br>
<br>


@endsection
