@extends('layouts.app')
@section('content')


<div class="row">
  <div class="col-xs-12 col-md-12 col-sm-12">
    <div class="block-web">
      <div class="header">
        <div class="actions"></div>
        <h1 class="text-center text-uppercase">LISTADO DE OT</h1>
      </div>
      <div class="porlets-content">
        <!-- FORM INICIO -->

        <div class="table-responsive">

            <table class="table table-bordered">

              <tr>
              <td>ID </td>
              <td>OC/CONTRATO</td>
              <td>CENTRO DE NEGOCIO</td>
              <td>CLIENTE</td>
              <td>FECHA INICIO</td>
              <td>FECHA FIN</td>
              <td>MONTO</td>
              <td>ENCARGADO</td>
              <td>MARGEN %</td>
              <td>MARGEN $</td>
              <td>ACCIÓN</td>
              </tr>
              @foreach($ots as $ot)
              <tr>
              <td>{{ $ot->OT_ID }}</td>
              <td>{{ $ot->OT_OC }}</td>
              <td>{{ $ot->centro_negocio->CT_PROCESO }}</td>
              <td>{{ $ot->OT_CLI_RUT }}</td>
              <td>{{ $ot->OT_FECHA_INI }}</td>
              <td>{{ $ot->OT_FECHA_FIN }}</td>
              <td>{{ $ot->OT_MONTO_NETO }}</td>
              <td>{{ $ot->OT_PER_RUT_ENCARGADO }}</td>
              <td>{{ $ot->OT_MARGEN_PORCENTUAL }}</td>
              <td>{{ $ot->	OT_MARGEN_CASH }}</td>

              <td width='200px'>

              <a href={{route('modificaOt', $ot->OT_ID)}}><button class='btn btn-primary btn-sm'> Procesar </button></a>
              <a href={{route('verOT', $ot->OT_ID)}}> <button class='btn btn-primary btn-sm'> Ficha </button></a>
              <!--<a href=""> <button class='btn btn-primary btn-sm'> Proveedor </button></a>-->
              </td>
              </tr>

            @endforeach
            </table>
          {!! $ots->render() !!}
          </div>
          <div class="panel-body">

            <br>
            <b>Se han encontrado {{ $ots->count() }} registros</b>
            <br>
            <br>

          </div>
        </div>
        <!-- FORM FINAL -->

      </div><!--/porlets-content-->
    </div><!--/block-web-->
  </div><!--/col-md-12-->
</div><!--/row-->


<br>


<a href={{route('ModuloOt')}}><button class="btn btn-primary btn-lg">Volver</button></a>
@endsection
