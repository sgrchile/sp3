@extends('layouts.app')
@section('content')


<div class="row">
  <div class="col-xs-12 col-md-12 col-sm-12">
    <div class="block-web">
      <div class="header">
        <div class="actions"></div>
        <h1 class="text-center text-uppercase">LICITACIONES</h1>
      </div>
      <div class="porlets-content">
        <!-- FORM INICIO -->



          <div class="table-responsive">
            <table class="table table-bordered">
              <tr>
                <td>ID</td>
                <td>FOLIO</td>
                <td>NOMBRE</td>
                <td>LICITADOR</td>
                <td style="width:120px;">ACCION</td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td><button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#propietariosLicitacion" data-backdrop="static">ASIGNAR</button></td>
              </tr>

            </table>
          </div>
          @include('modals/propietariosLicitacion')


        <!-- FORM FINAL -->

      </div><!--/porlets-content-->
    </div><!--/block-web-->
  </div><!--/col-md-12-->
</div><!--/row-->



<br>

<br>
<div class="container">

<a href="javascript:history.back(1)"><button class="btn btn-primary btn-lg">Volver</button></a>

</div>
</a>
<br>

@endsection
