@extends('layouts.app')
@section('content')

  <div class="row">
    <div class="col-xs-12 col-md-12 col-sm-12">
      <div class="block-web">
        <div class="header">
          <div class="actions"></div>
          <h1 class="text-center text-uppercase">CONTABILIDAD</h1>
        </div>
        <div class="porlets-content">
          <!-- FORM INICIO -->
            <div class="container" align="center">

                      <table class="table-condensed">

                      <tr>

                      <td><button class="btn btn-primary btn-lg" style="width:220px;" data-toggle="modal" data-target="#SelecEmpLbs" data-backdrop="false">LIBROS CONTABLES</button></td>
                      <td><button class="btn btn-primary btn-lg" style="width:220px;" data-toggle="modal" data-target="#SelecEmpCta" data-backdrop="false"> PLAN DE CUENTAS</button></td>
                      <td><button class="btn btn-primary btn-lg" style="width:220px;" data-toggle="modal" data-target="#SelecEmpAsients" data-backdrop="false"> ASIENTOS CONTABLES</button></td>
                      <td><button class="btn btn-primary btn-lg" style="width:220px;" data-toggle="modal" data-target="#filtroBalance" data-backdrop="false">BALANCE</button></td>
                      </tr>
                      <tr>

                      <!-- <td><button class="btn btn-primary btn-lg" style="width:220px;"> Movimientos contables</button></td> -->
                      <!--
                    -->

                      </tr>
                      </table>
                @include('modals.filtroBalance')
                @include('modals.SelecEmpCta')
                @include('modals.SelecEmpLbs')
                @include('modals.SelecEmpAsients')
            </div>

          <!-- FORM FINAL -->

        </div><!--/porlets-content-->
      </div><!--/block-web-->
    </div><!--/col-md-12-->
  </div><!--/row-->
</div>
<br>


<div class="container">
<a href="{{route('menu')}}"><button class="btn btn-primary btn-lg">Volver</button></a>

</div>
</a>
<br>

@endsection
