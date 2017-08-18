@extends('layouts.app')
@section('content')

<br>
<div class="container" align="center">

<h1 class=" text-center text-uppercase" >EVALUAR OFERTA DE SERVICIO</h1>
<form action="{{route('patch.evaluar.servicio', $servicios->OFSER_COD)}} " method="post">
{{ csrf_field() }}
{{ method_field('PATCH') }}
<table class=" table-condensed text-right">
<tr>
  <td class="text-center">CALIFICACIÓN
  <input type="radio" name="puntos" value="1">1
  <input type="radio" name="puntos" value="2">2
  <input type="radio" name="puntos" value="3">3
  <input type="radio" name="puntos" value="4">4
  <input type="radio" name="puntos" value="5">5
  <input type="radio" name="puntos" value="6">6
  <input type="radio" name="puntos" value="7">7
  <input type="radio" name="puntos" value="8">8
  <input type="radio" name="puntos" value="9">9
  <input type="radio" name="puntos" value="10">10
</td>
</tr>
<td  colspan="8" align="center">COMENTARIO</td>
</tr>
<tr>
<td colspan="8" align="center">
<textarea rows="6" class="form-control" name="comentario" style="width:600px; max-width:600px;"></textarea>
</td>
</tr>
<tr>
<td> <button type="submit" class="btn btn-primary btn-lg">Evaluar</button> </td>
</tr>
</table>
</form>
</div>
<br>
<div class="container">  <a href="{{route('misOfertas')}}"><button class="btn btn-primary btn-lg">Volver</button></a></div>
<br>
<br>

@endsection
