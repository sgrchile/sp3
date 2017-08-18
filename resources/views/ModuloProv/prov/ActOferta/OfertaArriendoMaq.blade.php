@extends('layouts.app')
@section('content')

<br>
<div class="container" align="center">


  <h4 class="text-center text-uppercase">Trasporte / Arriendo maquinaria</h4>
  <form action="{{route('patch.modificar.arriendo', $arriendos->ARM_ID)}}" method="post">
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
                    {{$arriendos->ARM_OR_COD == $orientado->OR_COD
                      ? 'selected'
                      : ''
                    }}
            >{{ $orientado->OR_DESC }}</option>
            @endforeach
        </select>
    </td>
    </tr>
    <tr>
    <td  colspan="2" align=center ><label>DESCRIPCIÓN:</label></td>
    </tr>
    <tr>
    <td colspan="2">
    <textarea rows="10" class="form-control" name="descripcion" required style="width:500px; max-width:500px;">{{$arriendos->ARM_DESCRIPCION}}"</textarea>
    </td>
    </tr>
 </table>
 <table class="table-condensed" style="text-align:right" align="center">
  <tr>
  <td><label>Tipo de vehículo o maquina:</label></td>
  <td><input type="text" name="vehiculo" class="form-control" value="{{$arriendos->ARM_TP_VEHICULO}}" required></td>
  </tr>
  <tr>
  <td><label>Marca Vehículo:</label></td>
  <td><input type="text" name="marca" class="form-control" required value="{{$arriendos->ARM_MARCA}}"></td>
  </tr>
  <tr>
  <td><label>Año:</label></td>
  <td><input type="number" min="1900" max="2038" name="anho" class="form-control" value="{{$arriendos->ARM_ANHO}}" required></td>
  </tr>
  <tr>
  <td><label>Seguros Asociados</label></td>
  <td><input type="TEXT" name="seguros" class="form-control" value="{{$arriendos->ARM_SEGUROS_ASOCIADOS}}" required></td>
  </tr>
  <tr>
  <td><label>Operario o chofer  incluido:</label></td>
  <td style="text-align:left">
    <input type="radio" name="chofer" value="Si" checked required> SI<br>
    <input type="radio" name="chofer" value="No" required>NO<br>
  </td>
  </tr>
  <tr>
  <td><label>Licencias de conducir</label></td>
  <td><input type="text" name="licencia" class="form-control" required value="{{$arriendos->ARM_LICENCIAS_CONDUCIR}}"></td>
  </tr>
  <tr>
  <td><label>Cursos:</label></td>
  <td><input type="text" name="cursos" class="form-control" required value="{{$arriendos->ARM_CURSOS}}"></td>
  </tr>
  <tr>
  <td><label>Dias laborables:</label></td>
  <td style="text-align:left;"><input type="TEXT" name="dlaborales" class="form-control" value="{{$arriendos->ARM_DIAS_LABORALES}}" required></td>
  </tr>
  <tr>
  <td><label>Horas laborales:</label></td>
  <td style="text-align:left">
    <input type="time" name="horainicio" class="form-control" value="{{$arriendos->ARM_HOR_INI}}" required >A
    <input type="time" name="horafinal" class="form-control" value="{{$arriendos->ARM_HOR_FIN}}" required >
 </td>
  </tr>
  <tr>
    <td><label>Cobertura del servicio:</label></td>
    <td><input type="text" name="cobertura" class="form-control" value="{{$arriendos->ARM_COB_SERVICIO}}" required></td>
  </tr>
  <tr>
  <td><label>Razon de cobro:</label></td>
  <td><input type="text" name="cobro" class="form-control" value="{{$arriendos->ARM_RAZON_COBRO}}" required></td><!--preguntar si es necesario hacerlo con un cbx o concaja de texto-->
  </tr>
  <tr>
    <td><label>VALOR:</label></td>
    <td><input type="number" name="valor" class="form-control" value="{{$arriendos->ARM_VALOR}}" required min="0" ></td>
  </tr>
</table>
  <br>
     <button type="submit" class="btn btn-primary btn-lg" >Actualizar Trasporte / Arriendo maquinaria</button>
  </form>
</div>
<br>
<div class="container">  <a href="{{route('perfil')}}"><button class="btn btn-primary btn-lg">Volver</button></a></div>



<br>
<br>

@endsection
