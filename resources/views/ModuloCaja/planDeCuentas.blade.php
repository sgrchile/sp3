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
          <h3 class="text-center">PLAN DE CUENTAS</h3>
          <div>

          </div>
          <div class="table-responsive"  >

            <table class="table table-bordered">
              <tr>
                <td>TIPO DE CUENTA</td>
                <td>CLASE</td>
                <td>CUENTA</td>
                <td>MONTO</td>
                <td>ACCION</td>
              </tr>

              @foreach($cuentas as $cuenta)
                <tr>
                  <td>{{App\Tp_Cuenta::find($cuenta->TP_CTA_CON)->DESC_TP_CUENTA}}</td>
                  <td>{{App\ClaseCuenta::find($cuenta->CL_CTA_CONT)->DESC_CL_CUENTA}}</td>
                  <td>{{$cuenta->NOM_CTA_CONT}}</td>
                  <td>{{$cuenta->MONTO_CTA_CONT}}</td>
                  <td><a href="#editarCuenta{{ $cuenta->ID_CTA_CONT }}" class="btn-floating btn-small waves-effect waves-light blue">
                      <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#editarCuenta" data-backdrop="static" >EDITAR</button></a></td>
                </tr>
              @endforeach

            </table>
            {{ $cuentas->links() }}

          </div>
          <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#nuevaCuenta" data-backdrop="static">NUEVA CUENTA</button>

        @include('modals.editarCuenta')
        @include('modals.NuevaCuenta')

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
