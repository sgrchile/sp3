@extends('layouts.app')
@section('content')



<div class="container" align="center">

  <div class="row">
    <div class="col-xs-12 col-md-12 col-sm-12">
      <div class="block-web">
        <div class="header">
          <div class="actions"></div>
          <h1 class="text-center text-uppercase">REGISTRAR ACTIVO</h1>
        </div>
        <div class="porlets-content">
          <!-- FORM INICIO -->
          <form action="{{ route('registrarActivo') }}" method="POST">
            {{csrf_field()}}

            <table class=" table-condensed text-right">
              <tr>
                <td>NOMBRE DEL ACTIVO:</td>
                <td><input type="text" name="desc" required  style="width:175px;" class="form-control"></td>
              </tr>
              <tr>
                <td>MARCA:</td>
                <td><input type="text" name="marca" required  style="width:175px;" class="form-control"></td>
              </tr>
              <tr>
                <td>VALOR DE COMPRA:</td>
                <td><input type="text" name="valorCompra" required  style="width:175px;" class="form-control"></td>
              </tr>

              <tr>
                <td>VIGENCIA:</td>
                <td><input type="text"name="vigencia" required  style="width:175px;" class="form-control"></td>
              </tr>

              <tr>
                <td>INFORMACION DEL ACTIVO:</td>
                <td><textarea type="text" name="info" required  style="width:175px; max-width:175px;" class="form-control"></textarea></td>
              </tr>

              <tr>
                <td>SEGUROS:</td>
                <td><textarea type="text" name="seguros" required  style="width:175px; max-width:175px;" class="form-control"></textarea></td>
              </tr>

            </table>

            <button class="btn btn-primary btn-lg" type="submit">REGISTRAR</button>
          </form>
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
