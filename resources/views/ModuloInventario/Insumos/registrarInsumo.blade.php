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
          {!! Form::open(['route' => 'post.registrarInsumo']) !!}

          <table class=" table-condensed text-right">
            <tr>
              <td>NOMBRE DEL INSUMO:</td>
              <td><input type="text" name="nombre" required  style="width:175px;" class="form-control"></td>
            </tr>

            <tr>
              <td>INFORMACION:</td>
              <td><textarea type="text" name="informacion" required  style="width:175px; max-width:175px;" class="form-control"></textarea></td>
            </tr>

            <tr>
              <td>MARCA:</td>
              <td><input type="text" name="marca" required  style="width:175px;" class="form-control"></td>
            </tr>

            <tr>
              <td>TIPO:</td>
              <td>
                <select required style="width:175px;" name="tipo" class="form-control">>
                  <option value="REFACCION">REFACCION</option>
                  <option value="CONSUMIBLE">CONSUMIBLE</option>
                  <option value="PRIMEROS AUXILIOS">PRIMEROS AUXILIOS</option>
                  <option value="ART. OFICINA">ART. OFICINA</option>
                  <option value="ART. ASEO">ART. ASEO</option>
                </select>
              </td>
            </tr>

            <tr>
              <td>CANTIDAD:</td>
              <td><input type="number" name="cantidad" min="1" required  style="width:175px;" class="form-control"></td>
            </tr>

            <tr>
              <td>COSTO:</td>
              <td><input type="number" name="costo" min="1" required  style="width:175px;" class="form-control"></td>
            </tr>

          </table>

          <button class="btn btn-primary btn-lg">REGISTRAR</button>

        {!! Form::close() !!}
          <!-- FORM FINAL -->

        </div><!--/porlets-content-->
      </div><!--/block-web-->
    </div><!--/col-md-12-->
  </div><!--/row-->


</div>
<div class="container">
<a href="{{route('insumos')}}"><button class="btn btn-primary btn-lg">Volver</button></a>

</div>
</a>
<br>

@endsection
