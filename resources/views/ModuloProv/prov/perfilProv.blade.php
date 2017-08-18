@extends('layouts.app')
@section('content')


<br>
<div class="container" align="center">

<h1 class=" text-center text-uppercase" >MI PERFIL DE PROVEEDOR</h1>

<br>

<table align="center">
  <tr>
  <td align="center">

    <a href="{{route('misEV')}}"><button class="btn btn-primary btn-lg" style="width:220px;margin-bottom:15px;">MIS EVALUACIONES</button></a>
    <a href="{{route('misOfertas')}}"><button class="btn btn-primary btn-lg" style="width:220px;margin-bottom:15px;">MIS OFERTAS</button></a>
    <a href="{{route('MisDatosPersona')}}"><button class="btn btn-primary btn-lg" style="width:220px;margin-bottom:15px;">MIS DATOS PERSONA</button></a>
    <a href="{{route('MisDatosEmpresa')}}"><button class="btn btn-primary btn-lg" style="width:220px;margin-bottom:15px;">MIS DATOS EMPRESA </button></a>

</td>
</tr>
</table>
</div>
<br>
<div class="container">  <a href="{{route('PROV')}}"><button class="btn btn-primary btn-lg">Volver</button></a></div>



<br>
<br>

@endsection
