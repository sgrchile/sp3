@extends('layouts.app')
@section('content')

<div class="row">
  <div class="col-xs-12 col-md-12 col-sm-12">
    <div class="block-web">
      <div class="header">
        <div class="actions"></div>
        <h1 class=" text-center text-uppercase" >MÓDULO RECURSOS HUMANOS</h1>
      </div>
      <div class="porlets-content">
        <!-- FORM INICIO -->
        <br>
        <div class="container" align="center">


          <br>



          <h3>GESTION DE RRHH</h3>
          <table align="center">
            <tr>
              <td align="center">
                <a href="{{route('buscarRRHH')}}"><button class="btn btn-primary " style="width:200px;margin-bottom: 15px;">CONSULTAR  RRRHH</button></a>
                <a href="{{route('regPersonal')}}"><button class="btn btn-primary" style="width:200px;margin-bottom: 15px;">REGISTRAR RRHH</button></a>
                <a href="{{route('modPers')}}"><button class="btn btn-primary" style="width:200px;margin-bottom: 15px;">MODIFICAR RRHH</button></a>
                <a href="{{route('resetContrasenaPersonal')}}"><button class="btn btn-primary" style="width:200px;margin-bottom: 15px; ">RESETEAR CONTRASEÑA</button></a>
                <a href="{{route('asigACT')}}"><button class="btn btn-primary" style="width:200px; margin-bottom: 15px;">ASIGNACION DE ACTIVOS</button></a>
              </td>
            </tr>
          </table>
          <br>

          <h3>GESTIONES ADMINISTRATIVAS</h3>

          <table align="center">
            <tr>
              <td align="center">

                <a href="{{route('Liquidaciones')}}"><button class="btn btn-primary  btn-md" style="width:200px;margin-bottom: 15px;">EMITIR REMUNERACION</button></a>
                <a href="{{route('Solicitudes')}}"><button class="btn btn-primary  btn-md" style="width:200px; margin-bottom: 15px;">SOLICITUDES</button></a>
                <a href="{{route('bonos')}}" ><button class="btn btn-primary  btn-md" style="width:200px;margin-bottom: 15px;">BONOS</button> </a>
                <a href="{{route('consLiquidacion')}}"><button class="btn btn-primary  btn-md" style="width:200px;margin-bottom: 15px;">CONS. REMUNERACION</button></a>
                <a href="{{route('configuracion')}}"><button class="btn btn-primary  btn-md" style="width:200px;margin-bottom: 15px;" >CONFIGURACION</button></a>
              </td>
            </tr>
          </table>

          <br>

          <h3>GESTION DE OFERTAS DE TRABAJO</h3>

          <table align="center">
            <tr>
              <td align="center">

                <a href="{{route('visualizarPostulantes')}}"><button class="btn btn-primary" style="width:250px;margin-bottom: 15px;">CONSULTAR POSTULANTES</button></a>
                <a href="{{route('EstPost')}}"><button class="btn btn-primary " style="width:250px;margin-bottom: 15px;">ESTADO DE OFERTA</button></a>
                <a href="{{route('regOferta')}}"><button class="btn btn-primary  " style="width:250px;margin-bottom: 15px;">REGISTRO DE OFERTA </button></a>
                <a href="{{route('modOf')}}"><button class="btn btn-primary  " style="width:250px;margin-bottom: 15px;">MODIFICAR OFERTA </button></a>

              </td>
            </tr>
          </table>

        </div>


        <!-- FORM FINAL -->

      </div><!--/porlets-content-->
    </div><!--/block-web-->
  </div><!--/col-md-12-->
</div><!--/row-->


<br>
<br>

<div class="container">  <a href="{{route('RRHH')}}"><button class="btn btn-primary btn-lg">Volver</button></a></div>

<br>
<br>

@endsection
