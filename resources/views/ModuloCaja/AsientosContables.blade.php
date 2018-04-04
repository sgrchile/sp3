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

          <h3 class="text-center">REGISTRO DE ASIENTOS CONTABLES</h3>

          <table class="table-condensed text-right" align="center">
            <tr>
              <td>USUARIO:</td>
              <td>
                <select class="form-control" style="width:175px;" name="">
                  <option value=""></option>
                  <option value=""></option>
                  <option value=""></option>
                  <option value=""></option>
                  <option value=""></option>
                </select>
              </td>

            </tr>

            <tr>
              <td>TIPO DE MOVIMIENTO:</td>
              <td>
                {{ Form::select('tp_movimiento',App\TipoMovimiento::pluck('TMOV_DESC','TMOV_ID'),null,['class'=>'form-control']) }}
              </td>
            </tr>
            <tr>
              <td>
                DESDE
              </td>
              <td>
                <input type="date" class="form-control" style="width:175px;" />
              </td>
            </tr>

            <tr>
              <td>
                HASTA
              </td>
              <td>
                <input type="date" class="form-control" style="width:175px;" />
              </td>
            </tr>

            <tr  >
              <td  align="center" colspan="2" ><button type="button" class="btn btn-primary btn-xs">  <i class="fa fa-search" style="font-size:29px"></i> FILTRAR</button></td>
            </tr>

          </table>

          <div class="table-responsive">
            <table class="table table-bordered">
              <tr>
                <td>FECHA CONTABLE</td>
                <td>ID</td>
                <td>USUARIO</td>
                <td>TIPO DE MOVIMIENTO</td>
                <td>FECHA DE REGISTRO</td>
                <td>ACCION</td>
              </tr>

              @foreach($asientos as $asiento)
                <tr>
                  <td>{{ $asiento->FECHA_CONT }}</td>
                  <td>{{ $asiento->ID_ASIENTO_CONT }}</td>
                  <td>{{ $asiento->ID_USUARIO_ASIENTO }}  </td>
                  <td>{{ App\TipoMovimiento::find($asiento->TP_MOVIMIENTO)->TMOV_DESC }}</td>
                  <td>{{ $asiento->CREATED_AT }}</td>
                  <td>
                    <a href="{{action('AsientoContableController@show',$asiento->ID_ASIENTO_CONT)}}"><button class="btn btn-primary btn-md" style="margin-right:15px;" data-toggle="modal" data-target="#asientoContable" data-backdrop="static">VER</button></a>
                    <a href="{{route('asiento.edit',$asiento->ID_ASIENTO_CONT)}}"><button class="btn btn-primary btn-md" style="margin-right:15px;">EDITAR</button></a>
                    <a href="{{ route('asiento.destroy',$asiento->ID_ASIENTO_CONT) }}" onclick="return confirm('¿Desea eliminar éste Asiento Contable?')" >
                      <button class="btn btn-primary btn-md" style="margin-right:15px;">ELIMINAR</button></a>
                  </td>
                </tr>
              @endforeach

              <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>
                  <a href="{{route('NuevoAsientoContable')}}">  <button class="btn btn-primary btn-md" style="margin-right:15px;">NUEVO</button></a>
                </td>
              </tr>
            </table>
            {!! $asientos->links() !!}

          </div>

        @include('modals.asientoContable')

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
