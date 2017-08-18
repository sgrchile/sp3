@extends('layouts.app')
@section('content')


<br>
<div class="container" align="center">

<h1 class=" text-center text-uppercase" >MI PERFIL DE PERSONA PROVEEDOR</h1>

<br>
<a href="{{route('misEV')}}"><button class="btn btn-primary btn-lg" style="width:220px;margin-bottom:15px;">MIS EVALUACIONES</button></a>
<a href="{{route('misOfertas')}}"><button class="btn btn-primary btn-lg" style="width:220px;margin-bottom:15px;">OFERTAS</button></a>
<a href="{{route('MisDatos')}}"><button class="btn btn-primary btn-lg" style="width:220px;margin-bottom:15px;">MIS DATOS </button></a>
</div>
<br>
<div class="container">  <a href="{{route('PROV')}}"><button class="btn btn-primary btn-lg">Volver</button></a></div>



<br>
<br>

@endsection
