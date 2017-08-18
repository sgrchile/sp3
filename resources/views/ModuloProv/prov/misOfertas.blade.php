@extends('layouts.app')
@section('content')


<div class="container" align="center">

<h1>OFERTAS</h1>
<table align="center">
  <tr>
    <td align="center">
        <a href="{{route('registroOferta')}}" ><button type="button" class="btn btn-primary btn-lg" style="width:220px;margin-bottom:15px;">REGISTRAR OFERTA</button></a>
        <a href="{{route('consultarOferta')}}" ><button type="button" class="btn btn-primary btn-lg" style="width:220px;margin-bottom:15px;">CONSULTAR OFERTA</button></a>
        <a href="{{route('actualizarOferta')}}" ><button type="button" class="btn btn-primary btn-lg" style="width:220px;margin-bottom:15px;">ACTUALIZAR OFERTA</button></a>
    </td>
  </tr>
</table>

<br>

</div>



 <div class="container">  <a href="{{route('perfil')}}"><button class="btn btn-primary btn-lg">Volver</button></a></div>
<br>

<br>

@endsection
