@extends('layouts.app')
@section('content')

<div class="container" align="center">

  <div class="row">
    <div class="col-xs-12 col-md-12 col-sm-12">
      <div class="block-web">
        <div class="header">
          <div class="actions"></div>
          <h1 class="text-center text-uppercase">REGISTRAR INSUMO</h1>
        </div>
        <div class="porlets-content">
          <!-- FORM INICIO -->

          <table class=" table-condensed text-right">
            <tr>
              <td>NOMBRE DEL INSUMO:</td>
              <td><input type="text" readonly  style="width:175px;" class="form-control"></td>
            </tr>

            <tr>
              <td>INFORMACION:</td>
              <td><textarea type="text" readonly  style="width:175px; max-width:175px;" class="form-control"></textarea></td>
            </tr>

            <tr>
              <td>MARCA:</td>
              <td><input type="text" readonly  style="width:175px;" class="form-control"></td>
            </tr>

            <tr>
              <td>TIPO:</td>
              <td><input type="text" readonly  style="width:175px;" class="form-control"></td>

              <tr>
                <td>CANTIDAD:</td>
                <td><input type="number" min="1" required  style="width:175px;" class="form-control"></td>
              </tr>

              <tr>
                <td>COSTO:</td>
                <td><input type="number" min="1" readonly  style="width:175px;" class="form-control"></td>
              </tr>

            </table>

            <button class="btn btn-primary btn-lg">ACTUALIZAR</button>

          <!-- FORM FINAL -->

        </div><!--/porlets-content-->
      </div><!--/block-web-->
    </div><!--/col-md-12-->
  </div><!--/row-->


</div>

<div class="container">
<a href="javascript:history.back(1)"><button class="btn btn-primary btn-lg">Volver</button></a>

</div>
</a>
<br>

@endsection
