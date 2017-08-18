@extends('layouts.app')
@section('content')


  <div class="row">
    <div class="col-xs-12 col-md-12 col-sm-12">
      <div class="block-web">
        <div class="header">
          <div class="actions"></div>
          <h1 class=" text-center text-uppercase" >LISTA GENERAL DE OPORTUNIDADES</h1>
        </div>
        <div class="porlets-content">
          <!-- FORM INICIO -->


          <h3 class="text-center text-uppercase">OPORTUNIDADES</h3>
          <div class="table-responsive">

          <table class="table table-bordered table-hover">


            <tr>
              <td>ID</td>
              <td>NOMBRE</td>
              <td>CONTACTO</td>
              <td>PROCESO DE NEGOCIO</td>
              <td>ETAPA</td>
              <td>PROIETARIO</td>
              <td>FECHA DE INGRESO</td>
              <td>FECHA DE CIERRE</td>
              <td>CENTRO DE NEGOCIO</td>
              <td>MONEDA</td>
              <td>TASA</td>
              <td>TOTAL</td>
              <td colspan="2">ACCION</td>
            </tr>
            <tr>


            </tr>

            <tr>

              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td colspan="2"><a href="{{route('Oportunidades')}}"<button class="btn btn-primary btn-xs">AGREGAR</button></td>
            </tr>
          </table>
          </div>

          <!-- FORM FINAL -->

        </div><!--/porlets-content-->
      </div><!--/block-web-->
    </div><!--/col-md-12-->
  </div><!--/row-->



</form>
<br>
<div class="container">  <a href="{{route('CRM')}}"><button class="btn btn-primary btn-lg">Volver</button></a></div>



<br>
<br>

@endsection
