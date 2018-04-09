@extends('layouts.app')
@section('content')
<div class="container" >

<div class="col-sm-6">
<h3 class="text-center text-uppercase">Centros de COSTOS</h3>
<table class="table-condensed table-bordered" align="center" >

<!--aqui debe llamar a base de datos-->
<tr>

<th>ID</th>
<th>CENTRO DE COSTO</th>
<th>ACCION</th>

<!--aqui debe llamar a php-->
</tr>

<tr>
<td></td>
<td></td>

<td><button class="btn btn-primary btn-sm">Eliminar</button></td>
</tr>

<tr>
<td><input type="text" /></td>
<td><input type="text" /></td>

<td><button class="btn btn-primary btn-sm" style="width:67px">Nuevo</button></td>
</tr>

</table>
</div>

<div class="col-sm-6" >
<h3 class="text-center text-uppercase">proceso	</h3>
<table class="table-condensed table-bordered" align="center">
<tr>
<th>COD. JERARQUICO</th>

<th>PROCESO</th>
<th>ACCION</th>
</tr>

<tr>

<td>#######</td>
<td>#######</td>
<td>
<button class="btn btn-primary btn-sm">Eliminar</button>

</td>
<!--aqui debe llamar a base de datos Y hacer un delete-->
</tr>

<tr>
<td><input type="text" /></td>
<td><input type="text" /></td>
<td><button class="btn btn-primary btn-sm" style="width:67px">Nuevo</button></td>
</tr>

</table>


</div>

</div>

<br>
<br>

<div align="center"><button class="btn btn-primary btn-lg" >Aplicar y Guardar</button></div>

<br>
<br>

<div class="container"><a href="{{route('ModuloOt')}}"><button class="btn btn-primary btn-lg">Volver</button></a></div>

<br>
<br>
@endsection
