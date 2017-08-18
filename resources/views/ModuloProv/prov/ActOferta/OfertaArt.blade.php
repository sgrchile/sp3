@extends('layouts.app')
@section('content')

<br>
<div class="container" align="center">

<h1 class=" text-center text-uppercase" >OFERTA DE ARTICULOS</h1>
<form action="{{route('patch.modificar.articulo', $articulos->OFAR_ID)}}" method="post">
{{ csrf_field() }}
{{ method_field('PATCH') }}
<table class="table-condensed" style="text-align:right" align="center">
  <tr>
  <td style="text-align:right"><label>ORIENTADO A:</label></td>
  <td style="text-align:right">
      <select class="form-control" style="width:175px;" name="orientado" >
          <option value="0">Seleccione</option>
          @foreach($orientados as $orientado)
          <option value="{{ $orientado->OR_COD }}"
                  {{$articulos->OFAR_OR_COD == $orientado->OR_COD
                    ? 'selected'
                    : ''
                  }}
          >{{ $orientado->OR_DESC }}</option>
          @endforeach
      </select>
  </td>
  </tr>
  <tr>
  <td  colspan="2" align=center ><label>DESCRIPCION:</label></td>
  </tr>
  <tr>
  <td colspan="2">
  <textarea rows="10" class="form-control" name="descripcion" required style="width:500px; max-width:500px;">{{$articulos->OFAR_DESC}}</textarea>
  </td>
  </tr>
</table>
<table class="table-condensed" style="text-align:right" align="center">
<tr>
<td><label>Entrega:</label></td>
<td><input type="text" class="form-control" name="entrega" value="{{$articulos->OFAR_DIAS_ENTREGA}}" required></td>
</tr>
<tr>
<td><label>Capacidad:</label></td>
<td><input type="text" class="form-control" name="capacidad" value="{{$articulos->OFAR_CAPACIDAD}}" required></td>
</tr>
<tr>
<td colspan="2" style="text-align:center"><label> Dia de Entrega:</label></td>
</tr>
<tr>
<td colspan="2"><p  style="text-align:center">Presione ctrl para seleccionar varios dias</p>
<select multiple class="form-control" name="dias" >
<option value="Lunes">Lunes</option>
<option value="Martes">Martes</option>
<option value="Miércoles">Miércoles</option>
<option value="Jueves">Jueves</option>
<option value="Viernes">Viernes</option>
<option value="Sábado">Sábado</option>
<option value="Domingo">Domingo</option>
</select>
</td>
</tr>
<tr>
<td><label>Horas de entrega:</label></td>
<td style="text-align:center"><input type="time" class="form-control" name="hora1" value="{{$articulos->OFAR_HORARIO_ENT_INI}}" required>A<input type="time"  name="hora2" class="form-control" value="{{$articulos->OFAR_HORARIO_ENT_FIN}}" required></td>
</tr>
<tr>
<td><label>Razon de cobro:</label></td>
<td><input type="text" id="rc3" class="form-control"  name="cobro" value="{{$articulos->OFAR_RAZON_COBRO}}" required></td><!--preguntar si es necesario hacerlo con un cbx o concaja de texto-->
</tr>
<tr>
<td><label>VALOR:</label></td>
<td><input type="number" class="form-control" name="valor" value="{{$articulos->OFAR_VALOR}}"  required min="0" ></td>
</tr>
</table>
<br>
<button class="btn btn-primary btn-lg">ACTUALIZAR ARTÍCULO</button>
</form>

</div>
<br>
<div class="container">  <a href="{{route('perfil')}}"><button class="btn btn-primary btn-lg">Volver</button></a></div>
<br>
<br>

@endsection
