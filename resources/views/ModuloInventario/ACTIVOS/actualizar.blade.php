@extends('layouts.app')
@section('content')
<div class="container" align="center">

<div class="row">
  <div class="col-xs-12 col-md-12 col-sm-12">
    <div class="block-web">
      <div class="header">
        <div class="actions"></div>
        <h1 class="text-center text-uppercase">ACTUALIZAR ACTIVO</h1>
      </div>
      <div class="porlets-content">
        <!-- FORM INICIO -->
        <form action="{{ isset($activo) ? route('patch.modificar.activo', $activo->ACT_ID) : '' }}" method="post" id="patch.modificar.activo">
          {{ csrf_field() }}
          {{ method_field('PATCH') }}
          <table class=" table-condensed text-right">
            <tr>
              <td><label>BUSCAR ACTIVOS:</label></td>
              <td><input type="text" readOnly value="{{ isset($activo) ? $activo->ACT_ID : '' }}" class="form-control"  style="width:175px;"></td>
              <td><button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#selActivo" data-backdrop="static"><i class="fa fa-search" style="font-size:30px"></i></button></td>
            </tr>
            <tr>
              <td>NOMBRE DEL ACTIVO:</td>
              <td><input type="text" name="desc" readOnly value="{{ isset($activo) ? $activo->ACT_DESC : '' }}" style="width:175px;" class="form-control"></td>
            </tr>
            <tr>
              <td>FECHA DE INGRESO:</td>
              <td><input type="date" name="fechaIngreso"  readOnly  value="{{ isset($activo) ? $activo->ACT_FECHA_INGRESO : '' }}"  style="width:175px;" class="form-control"></td>
            </tr>
            <tr>
              <td>MARCA:</td>
              <td><input type="text" name="marca" readOnly value="{{ isset($activo) ? $activo->ACT_MARCA : '' }}" style="width:175px;" class="form-control"></td>
            </tr>
            <tr>
              <td>VALOR DE COMPRA:</td>
              <td><input type="text" name="valorCompra" readOnly value="{{ isset($activo) ? $activo->ACT_VALOR_COMPRA : '' }}"  style="width:175px;" class="form-control"></td>
            </tr>

            <tr>
              <td>TASA DE DEPRECIACION:</td>
              <td><input type="text" name="tasaDepreciacion" readOnly  value="{{ isset($activo) ? $activo->ACT_TASA_DESPRECIACION : '' }}"  style="width:175px;" class="form-control"></td>
            </tr>

            <tr>
              <td>VALOR ACTUAL:</td>
              <td><input type="text" name="valorActual" readOnly value="{{ isset($activo) ? $activo->ACT_VALOR_ACTUAL : '' }}" style="width:175px;" class="form-control"></td>
            </tr>

            <tr>
              <td>VALOR SALVAMENTO:</td>
              <td><input type="text" name="valorSalvamento" readOnly  value="{{ isset($activo) ? $activo->ACT_VALOR_DE_SALVAMENTO : '' }}"  style="width:175px;" class="form-control"></td>
            </tr>

            <tr>
              <td>INFORMACION DEL ACTIVO:</td>
              <td><textarea type="text" name="info" readOnly  style="width:175px; max-width:175px;" class="form-control">{{ isset($activo) ? $activo->ACT_INFO : '' }}</textarea></td>
            </tr>

            <tr>
              <td>SEGUROS:</td>
              <td><textarea type="text" name="seguros" readOnly  style="width:175px; max-width:175px;" class="form-control">{{ isset($activo) ? $activo->ACT_SEGUROS : '' }}</textarea></td>
            </tr>

            <tr>
              <td>ESTADO:</td>
              <td>
                <select style="width:175px;" name="estadoActivo" class="form-control">
                  <option value="EN USO">EN USO</option>
                  <option value="DISPONIBLE">DISPONIBLE</option>
                  <option value="REPARACION">EN REPARACION</option>
                  <option value="DESCARTADO">DESCARTADO</option>
                </select>

              </td>
            </tr>
          </table>
          <input type="submit" class="btn btn-primary btn-lg" value="ACTUALIZAR" />
        </form>

        <!-- Modal -->
        <div class="modal fade" id="selActivo" role="dialog">
          <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">×</button>
                <h4 class="modal-title">SELECCIONE UN ACTIVO</h4>
              </div>
              <div class="modal-body">                
                  <table align="center" class="table table-bordered">
                  <tr>
                    <td>ID</td>
                    <td>DESC.</td>
                    <td>MARCA</td>
                    <td>INFO.</td>
                    <td>ESTADO</td>
                    <td>ACCION</td>
                  </tr>
                  @if(!$actint->isEmpty())
                    @foreach($actint as $listaGeneral)
                    <tr>
                      <td>{{$listaGeneral->ACT_ID}}</td>
                      <td>{{$listaGeneral->ACT_MARCA}}</td>
                      <td>{{$listaGeneral->ACT_DESC}}</td>
                      <td>{{$listaGeneral->ACT_INFO}}</td>
                      <td>{{$listaGeneral->ACT_ESTADO}}</td>
                      <td>
                          <a href="{{route('get.modificar.activo', $listaGeneral->ACT_ID)}}">
                          <button type="button" class="btn btn-primary btn-xs"> &#10004;</button>
                          </a>
                      </td>
                    </tr>
                    @endforeach
                  @endif
                </table>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
              </div>
            </div>

          </div>
        </div>

        <!-- FORM FINAL -->

      </div><!--/porlets-content-->
    </div><!--/block-web-->
  </div><!--/col-md-12-->
</div><!--/row-->

</div>

<div class="container">
<a href="{{route('indexActivos')}}"><button class="btn btn-primary btn-lg"> Volver</button></a>

</div>
</a>
<br>

@endsection
