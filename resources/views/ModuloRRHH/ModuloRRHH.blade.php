@extends('layouts.app')
@section('content')


<div class="container" align="center">

<div class="row">
  <div class="col-xs-12 col-md-12 col-sm-12">
    <div class="block-web">
      <div class="header">
        <div class="actions"></div>

        <h1 class=" text-center text-uppercase" >MÓDULO RECURSOS HUMANOS</h1>
      </div>
      <div class="porlets-content">
        <!-- FORM INICIO -->

        <table class="table-responsive">
          <tr>
            <td><a href="{{route('CarpetaPersonal')}}"><button class="btn btn-primary btn-lg" style="margin-right:15px;">Mi carpeta RRHH</button></a></td>

            <!--PARA LOS USUARIOS DE NIVEL 3 HACIA ARRIBA SE MOSTRARAN ESTOS BOTONES-->
            <td><a href="{{route('admRRHH')}}"><button class="btn btn-primary btn-lg" style="margin-right:15px;">Administrador RRHH</button></a></td>
          </tr>

        </table>


        <!-- FORM FINAL -->

      </div><!--/porlets-content-->
    </div><!--/block-web-->
  </div><!--/col-md-12-->
</div><!--/row-->



<!--PARA LOS NIVELES 4 HACIA ABAJO SOLO SERA EL BOTON "MI CARPETARRHH"-->


</div>

<div class="container">  <a href="{{route('home')}}"><button class="btn btn-primary btn-lg">Volver</button></a></div>





@endsection