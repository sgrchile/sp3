@extends('layouts.app')
@section('content')

<br>
<div class="container" align="center">

  <h4 class="text-center text-uppercase">Servicio Profesional o Tecnico</h4>
  <h4 class="text-center">Servicio Profesional o Tecnico</h4>
  <form action="{{route('patch.modificar.profesional', $profesionales->STP_COD)}}" method="post">
  {{ csrf_field() }}
  {{ method_field('PATCH') }}
  <table class="table-condensed" style="text-align:right" align="center">
    <table class="table-condensed text-right" align="center" >
    <tr>
      <td style="text-align:right"><label>ORIENTADO A:</label></td>
      <td style="text-align:right">
          <select class="form-control" style="width:175px;" name="orientado" >
              <option value="0">Seleccione</option>
              @foreach($orientados as $orientado)
              <option value="{{ $orientado->OR_COD }}"
                      {{$profesionales->STP_OR_COD == $orientado->OR_COD
                        ? 'selected'
                        : ''
                      }}
              >{{ $orientado->OR_DESC }}</option>
              @endforeach
          </select>
      </td>
    </tr>
    </table>
    <tr>
    <td  colspan="2" align=center ><label>DESCRIPCION:</label></td>
    </tr>

    <tr>
    <td colspan="2">
    <textarea rows="10" name="descripcion" required style="width:500px; max-width:500px;" class="form-control">{{$profesionales->STP_DESCRIPCION}}</textarea>
    </td>
    </tr>
  </table>
  <table class="table-condensed" style="text-align:right;" align="center">
    <tr>
    <td><label>Formación:</label></td>
    <td style="text-align:left">
    <input type="radio" name="formacion" value="Profesional" checked > Profesional<br>
    <input type="radio" name="formacion" value="Técnica">Tecnica<br>
    </td>
    </tr>

    <tr>
    <td><label>Centro de educacion:</label></td>
    <td><input type="text" name="educacion" required value="{{$profesionales->STP_FORMACION_ESTABLECIMIENTO}}" class="form-control"></td>
    </tr>

    <tr>
    <td><label>Carrera:</label></td>
    <td><input type="text" required id="carrera" name="carrera" value="{{$profesionales->STP_CARRERA}}" class="form-control"></td>
    </tr>

    <tr>
    <td><label>Años de experiencia:</label></td>
    <td><input type="number" name="experiencia" required min="0" value="{{$profesionales->STP_ANHOS_EXPERIENCIA}}" class="form-control"></td>
    </tr>
  <table class="table-condensed" style="text-align:right;" align="center">
    <tr>
    <td colspan="2" style="text-align:center"><label>Fortalezas:</label></td>
    </tr>
    <tr>
    <td colspan="2" style="text-align:center"><textarea class="form-control" name="fortaleza" style="width:500px; max-width:500px;" required rows="4" cols="50" id="fortalezas">{{$profesionales->STP_FORTALEZAS}}</textarea></td>
    </tr>

    <tr>
    <td colspan="2" style="text-align:center"><label>Debilidades:</label></td>
    </tr>
    <tr>
    <td colspan="2" style="text-align:center"><textarea  class="form-control" name="debilidades" style="width:500px; max-width:500px;" required rows="4" cols="50" id="debilidades">{{$profesionales->STP_DEBILIDADES}}</textarea></td>
    </tr>

    <tr>
    <td colspan="2" style="text-align:center"><label>Experiencia Laboral:</label></td>
    </tr>
    <tr>
    <td colspan="2" style="text-align:center"><textarea class="form-control" name="exlaboral" style="width:500px; max-width:500px;" required rows="4" cols="50" id="explab">{{$profesionales->STP_DESC_EXP_LABORAL}}</textarea></td>
    </tr>

    <tr>
    <td colspan="2" style="text-align:center"><label>Busco:</label></td>
    </tr>
    <tr>
    <td colspan="2" style="text-align:center"><textarea class="form-control" name="busco" style="width:500px; max-width:500px;" required rows="4" cols="50" id="Busco">{{$profesionales->STP_BUSC_O_OF}}</textarea></td>
    </tr>

    <tr>
    <td colspan="2" style="text-align:center"><label>Ofrezco:</label></td>
    </tr>
    <tr>
    <td colspan="2" style="text-align:center"><textarea class="form-control" name="ofrezco" style="width:500px; max-width:500px;" required rows="4" cols="50" id="ofresco">{{$profesionales->STP_OFREZCO}}</textarea></td>
    </tr>


    <tr>
    <td colspan="2" style="text-align:center"><label>Cursos o posgrados:</label></td>
    </tr>
    <tr>
    <td colspan="2" style="text-align:center"><textarea class="form-control" name="cursos" style="width:500px; max-width:500px;" required rows="4" cols="50" id="crpsg">{{$profesionales->STP_CURSOS_PST_GRADOS}}</textarea></td>
    </tr>

    <tr>
    <td colspan="2" style="text-align:center"><label>Cobertura del servicio (Lugar de desempeño laboral):</label></td>
    </tr>
    <tr>
    <td colspan="2" style="text-align:center"><textarea class="form-control" name="cobertura" style="width:500px; max-width:500px;" rows="4" cols="50" id="cobser" required>{{$profesionales->STP_COB_SERV}}</textarea></td>
    </tr>

    <tr>
        <td ><label>VALOR:</label></td>
        <td align="left"><input type="number" class="form-control" value="{{$profesionales->STP_VALOR}}" name="valor" required min="0" ></td>
    </tr>

    </table>
    <br>
    <button type="submit" class="btn btn-primary btn-lg" >Registrar Servicio Profesional</button>

    </form>

</div>
<br>
<div class="container">  <a href="{{route('perfil')}}"><button class="btn btn-primary btn-lg">Volver</button></a></div>



<br>
<br>

@endsection
