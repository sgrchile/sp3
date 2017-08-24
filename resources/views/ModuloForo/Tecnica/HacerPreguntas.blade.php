@extends('layouts.app')
@section('content')
<div class="container" align="center">

<div class="row">
  <div class="col-xs-12 col-md-12 col-sm-12">
    <div class="block-web">
      <div class="header">
        <div class="actions"></div>
        <h1 class="text-center text-uppercase">FORO TECNICO</h1>
      </div>
      <div class="porlets-content">
        <!-- FORM INICIO -->
        <div class="table-responsive">
          <table>
            <tr>
              <td class="text-center"> <h4>PREGUNTA</h4></td>
            </tr>
            <tr>

              <td>
                <textarea class="form-control" style="width:500px;  max-width:500px;"></textarea>
              </td>
            </tr>
          </table>
          <br />
          <button class="btn btn-primary btn-lg">REALIZAR PREGUNTA</button>

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
