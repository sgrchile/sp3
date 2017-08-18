@extends('layouts.app')
@section('content')


<h1 class="text-center text-uppercase">PEDIR OC</h1>

<div class="container"  align="center">

<table class="table-condensed text-right" align="center">
  <tr>
    <td>BUSCAR OC:</td>
    <td ><input type="text" required class="form-control" style="width:175px;"/></td>
    <td align="left"><button type="button" class="btn btn-primary btn-xs">  <i class="fa fa-search" style="font-size:29px"></i></button></td>
  </tr>


</table>



<table class="table-condensed table-bordered">

<tr>
    <td>COD OC.</td>
    <td>COD. ARTICULO</td>
    <td>DESC. ART.</td>
    <td>CANTIDAD</td>
    <td>VALOR</td>
    <td>TOTAL</td>
    <td>FECHA DE CREACION</td>
    <td>ESTADO</td>
    <td colspan="2">ACCION</td>


</tr>

<tr>

    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td style="text-align:right">
      <select class="form-control" style="width:175px;">
          <option>APROBAR</option>
          <option>RECHAZAR</option>
      </select>
    </td>

    <td><button class="btn btn-primary btn-xs">></button> </td>
</tr>

</table>
</div>


</div>
<br>

<div class="container">

<a href="javascript:history.back(1)"><button class="btn btn-primary btn-lg">Volver</button></a>

</div>
</a>
<br>

@endsection
