@extends('layouts.app')
@section('content')

<div class="container" align="center"ng-app="">

  <div class="row">
    <div class="col-xs-12 col-md-12 col-sm-12">
      <div class="block-web">
        <div class="header">
          <div class="actions"></div>
          <h1 class="text-center text-uppercase">LISTADO DE CLIENTES</h1>
        </div>
        <div class="porlets-content">
          <!-- FORM INICIO -->
          <h1>CLIENTES CONSOLIDADOS</h1>
          <table class="table table-bordered table-hover">

            <tr>
              <td>ID</td>
              <td>RUT</td>
              <td>NOMBRE</td>
              <td>EMAIL</td>
              <td>TELEFONO</td>
              <td>CONTACTO</td>
              <td style="width:210px;">ACCION</td>
            </tr>

            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td>
               <a href="{{route('fichaClienteConsolidado')}}"><button class="btn btn-primary btn-xs" style="width:130px;"> VER FICHA</button></a>
              </td>


            </tr>

          </table>

          <h1>CLIENTES PROSPECTO</h1>
          <table class="table table-bordered table-hover">

            <tr>
              <td>ID</td>
              <td>RUT</td>
              <td>NOMBRE</td>
              <td>EMAIL</td>
              <td>TELEFONO</td>
              <td>CONTACTO</td>
              <td style="width:210px;">ACCION</td>
            </tr>

            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td>
                <button class="btn btn-primary btn-xs" style="width:130px; margin-bottom:10px;"> CONVERTIR</button>
                <a href="{{route('fichaClienteProspecto')}}"><button class="btn btn-primary btn-xs" style="width:130px;"> VER FICHA</button></a>
              </td>

            </tr>

          </table>

          <!-- FORM FINAL -->

        </div><!--/porlets-content-->
      </div><!--/block-web-->
    </div><!--/col-md-12-->
  </div><!--/row-->

</div>

<div class="container">
<a href="{{route('CRM')}}"><button class="btn btn-primary btn-lg"> Volver</button></a>

</div>
</a>
<br>

@endsection
