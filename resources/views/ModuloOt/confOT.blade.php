@extends('layouts.app')
@section('content')
<div class="container" >

<div class="col-sm-6">
<h3 class="text-center text-uppercase">Centros de COSTOS</h3>
<table class="table-condensed table-bordered" id="mytable" align="center" >

<!--aqui debe llamar a base de datos-->
<tr>
<th>ID</th>
<th>CENTRO DE NEGOCIO</th>
<th>ACCION</th>
</tr>
    @foreach($centro_negocios as $centron)
<tr id="fila0">
    <td>{{ $centron->CT_ID }}</td>
    <td>{{ $centron->CT_PROCESO }}</td>
    <td><input type="button" class="borrar" value="Eliminar" /></td>
</tr>
    @endforeach

<tr>
<td><input name="id_cn" id="id_cn" type="text" readonly/></td>
<td><input name="desc_cn" id="desc_cn" type="text" /></td>

<td>
    <a href="#" class="btn btn-primary btn-sm" onclick='masfilas("mytable")'>Nuevo</a>
            </td>
</tr>

</table>
</div>

<div class="col-sm-6" >
<h3 class="text-center text-uppercase">Estado</h3>
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
