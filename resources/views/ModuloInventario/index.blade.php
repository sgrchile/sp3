@extends('layouts.app')
@section('content')




<div class="container" align="center">

  <div class="row">
    <div class="col-xs-12 col-md-12 col-sm-12">
      <div class="block-web">
        <div class="header">
          <div class="actions"></div>
          <h1 class="content-header text-center text-uppercase"><b> MODULO INVENTARIO</b></h1>
        </div>
        <div class="porlets-content">
          <!-- FORM INICIO -->

          <table  align="center">
            <tr>
              <td align="center">

                <a href="{{route('Catalogo')}}"><button class="btn btn-primary btn-lg" style="width:220px; margin-bottom: 15px;"> CATALOGO</button></a>
                <a href="{{route('Adquisiciones')}}"><button class="btn btn-primary btn-lg" style="width:220px; margin-bottom: 15px;">ADQUISICIONES</button></a>
                <a href="{{route('Bodega')}}"><button class="btn btn-primary btn-lg" style="width:220px; margin-bottom: 15px;"> BODEGA</button></a>
                <a href="{{route('GuiasDeDespacho')}}"><button class="btn btn-primary btn-lg" style="width:220px; margin-bottom: 15px;"> GUIAS DE DESPACHO</button></a>
              </td>
            </tr>
          </table>

          <!-- FORM FINAL -->

        </div><!--/porlets-content-->
      </div><!--/block-web-->
    </div><!--/col-md-12-->
  </div><!--/row-->


</div>
<div class="container">
<br>
<br>
<a href="{{route('home')}}"><button class="btn btn-primary btn-lg">Volver</button></a>

</div>
</a>
<br>

@endsection
