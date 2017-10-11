@extends('layouts.app')
@section('content')

  <div class="row">
    <div class="col-xs-12 col-md-12 col-sm-12">
      <div class="block-web">
        <div class="header">
          <div class="actions"></div>
          <h1 class="text-center text-uppercase">MODULO DE CAJA</h1>
        </div>
        <div class="porlets-content">
          <!-- FORM INICIO -->
            <div class="container" align="center">

                      <table class="table-condensed">

                      <tr>

                      <td><a href="{{route('LibrosContables')}}"><button class="btn btn-primary btn-lg" style="width:220px;">LIBROS CONTABLES</button></a></td>
                      <td><a href="{{route('PlanDeCuentas')}}"><button class="btn btn-primary btn-lg" style="width:220px;"> PLAN DE CUENTAS</button></a></td>
                      <td><a href="{{route('AsientosContables')}}"><button class="btn btn-primary btn-lg" style="width:220px;"> ASIENTOS CONTABLES</button></a></td>
                      </tr>
                      <tr>

                      <!-- <td><button class="btn btn-primary btn-lg" style="width:220px;"> Movimientos contables</button></td> -->
                      <!--
                    -->

                      </tr>
                      </table>
            </div>

          <!-- FORM FINAL -->

        </div><!--/porlets-content-->
      </div><!--/block-web-->
    </div><!--/col-md-12-->
  </div><!--/row-->
</div>
<br>


<div class="container">
<a href="javascript:history.back(1)"><button class="btn btn-primary btn-lg">Volver</button></a>

</div>
</a>
<br>

@endsection
