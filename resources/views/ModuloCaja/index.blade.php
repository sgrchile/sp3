@extends('layouts.app')
@section('content')

<div class="row">
  <div class="col-md-12 ">
    <div class="block-web">
      <div class="header">
        <div class="actions"></div>
        <h1 class="content-header text-center text-uppercase"><b>MóDULO DE CAJA</b></h1>
      </div>
      <div class="porlets-content">
        <!-- FORM INICIO -->
        <table class="table-condensed text-center " align="center">

          <tr>
          <td><a href="{{route('SolFon')}}"><img src="{{ asset('images/solicitud-fondos.png') }}"> <p>SOLICITUD DE FONDO</p></a></td>


          <td><a href="{{route('Finanzas')}}"><img src="{{ asset('images/financiero.png') }}"> <p>FINANZAS</p></a></td>

          <td><a href="{{route('Contable')}}"><img src="{{ asset('images/contabilidad.png') }}"> <p>CONTABILIDAD</p></a></td>

          <!-- <td><img src="{{ asset('images/presupuesto.png') }}"> <p>PRESUPUESTO</p></td> -->
          </tr>


        </table>

        <br>


        <div class="container">
        <a href="{{route('home')}}"><button class="btn btn-primary btn-lg"> Volver</button></a>

        </div>

        <br>


        <!-- FORM FINAL -->

      </div><!--/porlets-content-->
    </div><!--/block-web-->
  </div><!--/col-md-12-->
</div><!--/row-->



@endsection
