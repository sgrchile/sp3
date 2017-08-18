@extends('layouts.app')
@section('content')


<br>
<div class="container" align="center">

<h1 class=" text-center text-uppercase" >CONSULTA DE OFERTAS</h1>

<label>BUSCAR OFERTA:</label><input type="text" required  style="width:175px;">
<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#selOF" data-backdrop="static">  <i class="fa fa-search" style="font-size:36px"></i></button>

<!-- Modal -->
<div class="modal fade" id="selOF" role="dialog">
<div class="modal-dialog">

<!-- Modal content-->
<div class="modal-content">
<div class="modal-header">
  <button type="button" class="close" data-dismiss="modal">×</button>
  <h4 class="modal-title">SELECCIONAR OFERTA</h4>
</div>
<div class="modal-body">
  <table class="table-condensed table-bordered text-right"  >
  <tr>
    <th>ID</th>
    <th>DESCRIPCION</th>
    <th>VALOR</th>
    <th>ESTADO</th>
    <th>ESTADO ADMIN</th>
    <th>ACCION</th>
  </tr>
  </table>
</div>
<div class="modal-footer">
  <button type="button" class="btn btn-default" data-dismiss="modal">CERRAR</button>
</div>
</div>

</div>
</div>
<!-- Modal -->
<table class=" table-condensed text-right" align="center" >


<tr>
<td  colspan="2" align=center >DESCRIPCION:</td>
</tr>

<tr>
<td colspan="2">
<textarea rows="25"  readonly  style="width:1000px; max-width:1000px;"></textarea>
</td>


</tr>
</table>

</table>
  <table class="table-condensed text-right"  >
<tr>
  <td>TIPO DE OFERTA:</td>
    <td><input type="text" readonly  style="width:175px;"></td>


</tr>



<tr>
  <td>VALOR:</td>
  <td><input type="text" readonly  style="width:175px;"></td>
</tr>

<tr>
  <td>ESTADO:</td>
    <td><input type="text" readonly  style="width:175px;"></td>
</tr>

</table>

<button class="btn btn-primary btn-lg">CONSULTAR</button>
</div>
<br>
<div class="container">  <a href="{{route('misOfertas')}}"><button class="btn btn-primary btn-lg">Volver</button></a></div>



<br>
<br>

@endsection
