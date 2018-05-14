@extends('layouts.app')
@section('content')

<div class="row">
  <div class="col-xs-12 col-md-12 col-sm-12">
    <div class="block-web">
      <div class="header">
        <div class="actions"></div>
        <h1 class="content-header text-center text-uppercase"><b>Histórico solicitudes de fondo</b></h1>
      </div>
      <div class="porlets-content">
        <div class="table-responsive">
                <table class="display table-hover table-condensed table-bordered table-striped text-uppercase" id="dynamic-table">
                <!-- TABLA INICIO -->
                <form action="{{ isset($solicitud) ? route('verDocs', $solicitud->SF_SOLICITUD_ID) : '' }}" method="post">
                {{ csrf_field() }}
                <table class="display table-hover table-condensed table-bordered table-striped text-uppercase" id="dynamic-table">
                  <tr>
                  <td class="text-right">Período: </td>

                  <td ><input type="date"  name="fecha1" id="fecha1" style="width:175px;" class="form-control form-control-inline input-medium default-datepicker"></td>
                  <td> <input type="date"  name="fecha2" id="fecha2" style="width:175px;"  class="form-control"></td>

                  </tr>

                  <tr>
                  <td colspan="5" align="center">
                  <button type="submit" class="btn btn-primary btn-lg" value="Submit">Buscar</button>
                  </td>
                  </tr>
                </table>
                </form>

                <br>
                <table class="display table-hover table-condensed table-bordered table-striped text-uppercase" id="dynamic-table">
                  <tr>
                  <th>ID</th>
                  <th>Asociado</th>
                  <th>Receptor</th>
                  <th>Solicitante</th>
                  <th>Monto</th>
                  <th>Fecha</th>
                  <th>Descripción</th>
                  <th>Empresa</th>
                  <th>Estado</th>
                  <th>Cuenta</th>
                  <th>DOCS</th>
                  </tr>

                  @foreach($consultas as $consulta)
                  <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{ $consulta->SF_ASOCIADO_A }}</td>
                  <td>{{ $consulta->SF_RECEPTOR }}</td>
                  <td>{{ $consulta->SF_SOLICITANTE_RUT }}</td>
                  <td>{{ $consulta->SF_MONTO }}</td>
                  <td>{{ $consulta->SF_FECHA }}</td>
                  <td>{{ $consulta->SF_DESC }}</td>
                  <td>{{ App\Empresa::find($consulta->SF_EMP_ID)->EMP_DESC }}</td>
                  <td>{{ App\Estado::find($consulta->SF_EST)->EST_DESC }}</td>
                  <td>{{ App\CuentaEmpresa::find($consulta->SF_CTAC)->CTAE_NUMERO_CUENTA }}</td>
                  <td><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-solicitud-id="{{ $consulta->SF_SOLICITUD_ID }}" data-target="#documentos">Detalles</button></td>
                  </tr>
                  @endforeach
                </table>
                {!! $consultas->render() !!}

                </br>
                <b>Se han encontrado {{ $consultas->count() }} registros</b>
                <br>
                @include('modals.docsHistoricosSf')

                <!-- TABLA FINAL -->
                </table>
            </div><!--/table-responsive-->
          </div><!--/porlets-content-->
        </div><!--/block-web-->
      </div><!--/col-md-12-->
    </div><!--/row-->


    <a href="{{route('SolFon')}}"><button class="btn btn-primary btn-lg">Volver</button></a>



@endsection
