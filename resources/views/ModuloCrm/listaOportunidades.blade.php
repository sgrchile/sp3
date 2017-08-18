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
        <div class="container-fluid" align="center">
        <!-- FORM INICIO -->
          <table align="center">
            <tr>
              <td><label style="font-size:30px;">BUSCAR OPORTUNIDAD:</label> </td>
              <td>
                <input type="text"  style="width:175px;" class="form-control" required/>
              </td>
              <td><button type="button" class="btn btn-primary btn-xs">  <i class="fa fa-search" style="font-size:30px;"></i></button></td>
            </tr>
          </table>

          <br >
          <br>

          <h3 class="text-center text-uppercase">OPORTUNIDADES</h3>
          <table class="table table-bordered table-hover">

            <tr>
              <td>ID</td>
              <td>NOMBRE</td>
              <td>CONTACTO</td>
              <td>PROCESO DE NEGOCIO</td>
              <td>ETAPA</td>
              <td>PROPIETARIO</td>
              <td>FECHA DE INGRESO</td>
              <td>FECHA DE CIERRE</td>
              <td>CENTRO DE NEGOCIO</td>
              <td>MONEDA</td>
              <td>TASA</td>
              <td>TOTAL</td>
              <td colspan="2">ACCION</td>
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
              <td>
                <button class="btn btn-primary btn-xs" style="width:90px; margin-bottom:5px;">BORRAR</button>
                <button class="btn btn-primary btn-xs" style="width:90px; margin-bottom:5px;">MODIFICAR</button>
                <button class="btn btn-primary btn-xs" style="width:90px; margin-bottom:5px;">VER FICHA</button>
              </td>

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
              <td colspan="3"><a href="{{route('Oportunidades')}}"<button class="btn btn-primary btn-xs" style="width:90px;">AGREGAR</button></td>
              </tr>
            </table>

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
