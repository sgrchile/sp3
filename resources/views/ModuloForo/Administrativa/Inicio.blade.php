@extends('layouts.app')
@section('content')
<div class="container" align="center">

<div class="row">
  <div class="col-xs-12 col-md-12 col-sm-12">
    <div class="block-web">
      <div class="alert alert-info" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong><i><i>La sección a la que usted acaba de ingresar, se encuentra en etapa de programación. Disculpe las molestias</i></i></strong>
      </div>
      <div class="header">
        <div class="actions"></div>
        <h1 class="text-center text-uppercase">FORO ADMINISTRATIVA  </h1>
      </div>
      <div class="porlets-content">
        <!-- FORM INICIO -->
        <div class="table-responsive">
          <table class="table table-bordered">
            <tr>
              <td>PREGUNTA</td>
              <td>RESPUESTA</td>
              <td style="width:172px;">ACCION</td>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td>
                <a href="{{route('respuestasAdministrativa')}}"<button class="btn btn-primary btn-md" style="width:172px;">RESPONDER</button>
              </td>
            </tr>

          </table>
          <a href="{{route('HacerPreguntasAdministrativa')}}"><button class="btn btn-primary btn-md" style="width:172px;">REALIZAR PREGUNTA</button></a>

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
