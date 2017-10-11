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

                <tr>
                  <td>05-10-2017 </td>
                  <td>152</td>
                  <td>wilfried  </td>
                  <td>06-10-2017</td>
                  <td>06-10-2017</td>
                  <td>
                    <button class="btn btn-primary btn-md" style="margin-right:15px;" data-toggle="modal" data-target="#asientoContable" data-backdrop="static">VER</button>
                    <a href="{{route('editarAsientoContable')}}"><button class="btn btn-primary btn-md" style="margin-right:15px;">EDITAR</button></a>
                    <button class="btn btn-primary btn-md" style="margin-right:15px;">ANULAR</button>
                    <button class="btn btn-primary btn-md" style="margin-right:15px;">ELIMINAR</button>
                  </td>
                </tr>

                <tr>
                  <td>05-10-2017 </td>
                  <td>152</td>
                  <td>wilfried  </td>
                  <td>06-10-2017</td>
                  <td>06-10-2017</td>
                  <td>
                  <a href="{{route('NuevoAsientoContable')}}"  <button class="btn btn-primary btn-md" style="margin-right:15px;">NUEVO</button>
                  </td>
                </tr>
              </table>

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
