@extends('layouts.app')
@section('content')

<div class="row">
  <div class="col-xs-12 col-md-12 col-sm-12">
    <div class="block-web">
      <div class="header">
        <div class="actions"></div>
        <h1 class="content-header text-center text-uppercase"><b>HISTÓRICO DE MOVIMIENTOS</b></h1>
      </div>
      <div class="porlets-content">
        <div class="table-responsive">
            <!-- TABLA INICIO -->
            <br>


               <form id="formBuscar" name="formBuscar" method="post" action="{{ route('searchMov') }}">
                 {{ csrf_field() }}
               <table  class="display table table-bordered table-striped text-center text-uppercase" id="dynamic-table">
                   <tr>
                   <td class="text-right">Período: </td>
                   <td>
                   <input type="date"  name="fecha1" id="fecha1" style="width:175px;">
                   <input type="date"  name="fecha2" id="fecha2" style="width:175px;">
                   <input type="radio" name="tipomov" value="1" checked> Ingresos
                   <input type="radio" name="tipomov" value="2"> Egresos
                   </td>
                   <td>
                   <button type="submit" class="btn btn-primary btn-lg" value="Submit">Buscar</button>
                   </td>
                   </tr>
            </form>
               </table>
               <table  class="display  table-bordered table-striped text-uppercase" id="dynamic-table">
                <tr>
                  <th>ID</th>
                  <th>Fecha</th>
                  <th>Monto</th>
                  <th>Cuenta</th>
                  <th>Folio</th>
                  <th>Documento</th>
                  <th>Descripción</th>
                  <th>Empresa</th>
                  <th>Tipo</th>
                  <th>Fuente</th>
                  <th>Causa</th>
                </tr>

              @foreach($movimientos as $movimiento)

                  <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{ $movimiento->RMOV_FECHA }}</td>
                  <td>{{ $movimiento->RMOV_MONTO }}</td>
                  <td>{{ App\TipoCuenta::find($movimiento->RMOV_CTAE)->TCTA_DESC }}</td>
                  <td>{{ $movimiento->RMOV_FOLIO }}</td>
                  <td>{{ $movimiento->RMOV_NUMERO_DOCUMENTO }}</td>
                  <td>{{ $movimiento->RMOV_DESC }}</td>
                  <td>{{ App\Empresa::find($movimiento->RMOV_EMP_ID)->EMP_DESC }}</td>
                  <td>{{ App\TipoMovimiento::find($movimiento->RMOV_TMOV_ID)->TMOV_DESC }}</td>
                  <td>{{ App\Fuente::find($movimiento->RMOV_FTE_ID)->FTE_DESC }}</td>
                  <td>{{ App\Causa::find($movimiento->RMOV_CAU_ID)->CAU_DESC }}</td>
                </tr>
            @endforeach
            </table>
            </br>
            <b>Se han encontrado {{ $movimientos->count() }} registros</b>
            <br>
             <div class="container">  <a href="{{route('moduloCaja')}}"><button class="btn btn-primary btn-lg">Volver</button></a></div>
             <br>
              <br>
               <br>


            <!-- TABLA FINAL -->
              </table>
            </div><!--/table-responsive-->
          </div><!--/porlets-content-->
        </div><!--/block-web-->
      </div><!--/col-md-12-->
    </div><!--/row-->



@endsection
