@extends('layouts.app')
@section('content')




<div class="container" align="center">

  <div class="row">
    <div class="col-xs-12 col-md-12 col-sm-12">
      <div class="block-web">
        <div class="header">
          <div class="actions"></div>
          <h1 class="text-center text-uppercase">LISTADO DE ACTIVOS</h1>
        </div>
        <div class="porlets-content">

          <form action="{{ route('buscadorActivos')}}" method="post">
          <!-- FORM INICIO -->
          {{csrf_field()}}
          <table class="table-condensed">
              <tr>
                  <td>BUSCAR POR ESTADO:</td>
                  <td>
                    <select required name="estadoActivos" class="form-control" style="width:175px;">
                      <option value="EN USO">EN USO</option>
                      <option VALUE="DISPONIBLE">DISPONIBLE</option>
                      <option VALUE="EN REPARACION">EN REPARACION</option>
                      <option VALUE="DESCARTADO">DESCARTADO</option>
                    </select>
                  </td>
                  <td><button type="submit" class="btn btn-primary btn-xs">  <i class="fa fa-search" style="font-size:29px"></i></button></td>
                </tr>
          </table>
        </form>

          <table class="table table-bordered table-hover">

            <tr>
              <td>ID</td>
              <td>DESCRIPCION</td>
              <td>INFO</td>
              <td>ESTADO</td>
              <td colspan="3">ACCION</td>
            </tr>

            <tr>
                @foreach($actint as $listaGeneral)
              <td>{{$listaGeneral->ACT_ID}}</td>
              <td>{{$listaGeneral->ACT_DESC}}</td>
              <td>{{$listaGeneral->ACT_INFO}}</td>
              <td>{{$listaGeneral->ACT_ESTADO}}</td>


              <td>
                 <a href="{{route('get.modificar.activo', $listaGeneral->ACT_ID)}}"><button class="btn btn-primary">ACTUALIZAR</button></a>
               </td>
            </tr>
            @endforeach
          </table>

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
