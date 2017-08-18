@extends('layouts.app')
@section('content')

<br>
<div class="container" align="center">

<h1 class="text-center text-uppercase">Oferta de Servicios</h1>

<h4 class="text-center">Oferta de Servicios</h4>
<form action="{{route('patch.modificar.servicio', $servicios->OFSER_COD)}} " method="post">
{{ csrf_field() }}
{{ method_field('PATCH') }}
<table class="table-condensed text-right" style="text-align:right" align="center">
  <tr>
  <td style="text-align:right"><label>ORIENTADO A:</label></td>
  <td style="text-align:right">
      <select class="form-control" style="width:175px;" name="orientado" required>
          <option value="0">Seleccione</option>
          @foreach($orientados as $orientado)
          <option value="{{ $orientado->OR_COD }}"
                  {{$servicios->OFSER_OR_COD == $orientado->OR_COD
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
  <textarea rows="10" class="form-control" name="descripcion"  style="width:500px; max-width:500px;">{{$servicios->OFSER_DESCRIPCION}}</textarea>
  </td>
  </tr>
</table>
<table class="table-condensed" style="text-align:right" align="center">
<tr>
<td><label>Dias laborables:</label></td>
<td><input type="number" class="form-control" name="dlaborales" value="{{$servicios->OFSER_DIAS_LABORALES}}" min="1" max="31" required></td>
</tr>
<tr>
<td><label>Horas trabajo:</label></td>
<td >
  <input type="time" class="form-control" name="hora1" value="{{$servicios->OFSER_HORARIOS_TRABAJO_INI}}" required>A<input type="time" class="form-control" name="hora2" value="{{$servicios->OFSER_HORARIOS_TRABAJO_FIN}}" required></td>
</tr>
<tr>
<td><label>Cobertura del servicio:</label></td>
<td><input type="text" id="cs2" class="form-control" name="cobertura" value="{{$servicios->OFSER_COBERTURA_SERVICIO}}" required></td>
</tr>
<tr>
<td><label>Razón de cobro:</label></td>
<td><input type="text" id="rc" class="form-control" name="cobro" value="{{$servicios->OFSER_RAZ_COBRO}}" required></td>
</tr>
<tr>
  <td><label>VALOR:</label></td>
  <td><input type="number" class="form-control" name="valor" required min="0" value="{{$servicios->OFSER_VALOR}}"></td>
</tr>
</table>
 <br>
   <button class="btn btn-primary btn-lg" >Modificar Servicio</button>
</form>

</div>
<br>
<div class="container">  <a href="{{route('perfil')}}"><button class="btn btn-primary btn-lg">Volver</button></a></div>



<br>
<br>

@endsection
