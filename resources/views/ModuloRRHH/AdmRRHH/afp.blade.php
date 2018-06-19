@extends('layouts.app')
@section('content')
<div class="row">
  <div class="col-xs-12 col-md-12 col-sm-12">
    <div class="block-web">
      <div class="header">
        <div class="actions"></div>
        <h1 class="text-center text-uppercase">AFP</h1>
      </div>
      <div class="porlets-content">
        <!-- FORM INICIO -->
        <div class="container" align="center">



          <table class="table-condensed table-bordered">

            <tr>
              <td ROWSPAN="2">AFP</td>
              <td colspan="2">DEPENDIENTES</td>
              <td>INDEPENDIENTES</td>
              <td ROWSPAN="2">ACCION</td>
            </tr>
            <tr>
              <td>TASA %</td>
              <td>SIS %</td>
              <td>TASA AFP</td>
            </tr>

            @foreach(App\Afp::all() as $afp)
            <tr>
              <td><input value="{{ $afp->AFP_NOMBRE }}" type="text" class="form-control" readOnly  style="width:175px;"></td>
              <td><input value="{{ $afp->AFP_TASA }}" type="text" class="form-control" readOnly  style="width:175px;"></td>
              <td><input value="{{ $afp->AFP_SIS }}" type="text" class="form-control" readOnly  style="width:175px;"></td>
              <td><input value="{{ $afp->AFP_TASA_INDEPENDIENTE }}" type="text" class="form-control" readOnly  style="width:175px;"></td>
              <td><a href="{{ route('afp.destroy',$afp->AFP_ID) }}" onclick="return confirm('¿Desea eliminar ésta afp?')" >
                <button class="btn btn-primary btn-xs" style="width:90px;">ELIMINAR</button></a></td>
            </tr>
            @endforeach

            <!--<tr>
              <td><input type="text" class="form-control"   style="width:175px;"></td>
              <td><input type="number" min="0" max="100" class="form-control"   style="width:175px;"></td>
              <td><input type="number" min="0" max="100" class="form-control"   style="width:175px;"></td>
              <td><input type="number" min="0" max="100" class="form-control"   style="width:175px;"></td>
              <td><button class="btn btn-primary btn-xs">AGREGAR</button></td>
            </tr>-->


          </table>

        </div>
        <td><button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#agregar" data-backdrop="static">Nuevo</button>
        <!-- Modal Modificar-->
        <div class="modal fade" id="agregar" role="dialog">
          <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">×</button>
              </div>
              <div class="  modal-body">
                <form id="form1" name="form1" method="post" action="{{ route('post.afp') }}">
                  {{ csrf_field() }}
                <table class="table-condensed text-right" align="center" >
                  <tr>
                    <td>NOMBRE AFP:</td>
                    <td><input type="text" name="nombre" required style="width:175px;"></td>
                  </tr>
                  <tr>
                    <td>DEPENDIENTES</td>
                  </tr>
                  <tr>
                    <td>TASA %:</td>
                    <td><input type="number" min="0" max="100" placeholder="0.0" required class="form-control" name="tasadep"  style="width:175px;"></td>
                  </tr>
                  <tr>
                    <td>SIS % :</td>
                    <td><input type="number" min="0" max="100" placeholder="0.0" required class="form-control" name="sis"  style="width:175px;"></td>
                  </tr>
                  <tr>
                    <td>INDEPENDIENTE</td>
                  </tr>
                  <tr>
                    <td>TASA %:</td>
                    <td><input type="number" min="0" max="100" placeholder="0.0" required class="form-control" name="tasaind"  style="width:175px;"></td>
                  </tr>
                </table>
                  <button class="btn btn-primary btn-sm">GUARDAR</button>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
              </div>
            </div>

          </div>
        </div>
        </td>

        <!-- FORM FINAL -->

      </div><!--/porlets-content-->
    </div><!--/block-web-->
  </div><!--/col-md-12-->
</div><!--/row-->

<br>
<br>
<div class="container">  <a href="{{route('configuracion')}}"><button class="btn btn-primary btn-lg">Volver</button></a></div>
<br>
<br>


@endsection
