@extends('layouts.app')
@section('content')
<div class="container" align="center">

<div class="row">
  <div class="col-xs-12 col-md-12 col-sm-12">
    <div class="block-web">
      <div class="header">
        <div class="actions"></div>
        <h1 class="text-center text-uppercase">LISTA DE EVENTOS</h1>
      </div>
      <div class="porlets-content">
        <!-- FORM INICIO -->
        <div class="table-responsive">
          <table class="table table-bordered">
            <tr>
              <td>SALA</td>
              <td>DESCRIPCION</td>
              <td>FECHA</td>
              <td>HORA</td>
              <td style="width:200px;">ACCION</td>
            </tr>

            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td>
                <button class="btn btn-primary btn-xs" style="margin-left:10px;">ELIMNAR</button>

                <a href="{{route('modificarEvento')}}"<button class="btn btn-primary btn-xs" style="margin-left:10px;">MODIFICAR</button>

              </td>
            </tr>

          </table>

        </div>


        <!-- FORM FINAL -->

      </div><!--/porlets-content-->
    </div><!--/block-web-->
  </div><!--/col-md-12-->
</div><!--/row-->



<br>

</div>
<br>
<div class="container">

<a href="javascript:history.back(1)"><button class="btn btn-primary btn-lg">Volver</button></a>

</div>
</a>
<br>

@endsection
