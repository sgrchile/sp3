@extends('layouts.app')
@section('content')
<div class="container">



<br>

<div class="container-fluid" align="center">
  <div class="row">
    <div class="col-xs-12 col-md-12 col-sm-12">
      <div class="block-web">
        <div class="header">
          <div class="actions"></div>
          <h1 class="text-center text-uppercase">Módulo CRM</h1>
        </div>
        <div class="porlets-content">
          <!-- FORM INICIO -->


          <table class="table-condensed">

            <tr>
              <td><a href=""><button class='btn btn-primary btn-lg' style="width:185px; margin-bottom: 15px;"> RESUMEN</button></a></td>
              <td><a href="{{route('clientes')}}"><button class='btn btn-primary btn-lg'   style="width:185px; margin-bottom: 15px;"> CLIENTES</button></a></td>
              <td><a href="{{route('listaOportunidades')}}"><button class='btn btn-primary btn-lg'  style="width:185px; margin-bottom: 15px;">OPORTUNIDADES</button></a></td>
            </tr>
            <tr>

              <td><a href="{{route('listaActividades')}}"><button class='btn btn-primary btn-lg' style="width:185px; margin-bottom: 15px;"> ACTIVIDADES</button></a></td>
              <td><a href="{{route('regCliente')}}"><button class='btn btn-primary btn-lg' style="width:185px; margin-bottom: 15px;"> REGISTRO</button></a></td>
              <td><a href=""><button class='btn btn-primary btn-lg' style="width:185px; margin-bottom: 15px;"> AJUSTES</button></a></td>
              <td><a href="{{route('cotizaciones')}}"><button class='btn btn-primary btn-lg' style="width:185px; margin-bottom: 15px;"> COTIZACIONES</button></a></td>

            </tr>
          </table>

          <!-- FORM FINAL -->

        </div><!--/porlets-content-->
      </div><!--/block-web-->
    </div><!--/col-md-12-->
  </div><!--/row-->

</div>
<br>
<br>
</div>
<a href="javascript:history.back(1)"><button class="btn btn-primary btn-lg">Volver</button></a>
@endsection
