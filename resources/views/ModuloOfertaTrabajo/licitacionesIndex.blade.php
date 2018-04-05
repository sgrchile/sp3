@extends('layouts.app')
@section('content')


<div class="container" align="center">

  <div class="row">
    <div class="col-xs-12 col-md-12 col-sm-12">
      <div class="block-web">
        <div class="alert alert-info" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <strong><i>La sección a la que usted acaba de ingresar, se encuentra en etapa de programación. Disculpe las molestias</i></strong>
        </div>
        <div class="header">
          <div class="actions"></div>
          <h1>TRABAJA CON NOSOTROS</h1>
        </div>
        <div class="porlets-content">
          <!-- FORM INICIO -->

          <br>
          <a href="{{route('Ofertas')}}"><button class="btn btn-primary btn-lg"  style="width:300px;margin-bottom:15px;">OFERTAS DE TRABAJO</button></a>
          <a href="{{route('registroPostulante')}}"><button class="btn btn-primary btn-lg"  style="width:300px;margin-bottom:15px;">REGISTRO DE POSTULANTES</button></a>
          <button class="btn btn-primary btn-lg"  style="width:300px;margin-bottom:15px;" data-toggle="modal" data-target="#Login" data-backdrop="static">LOGIN</button>

          <!-- Modal -->
          <div class="modal fade" id="Login" role="dialog">
            <div class="modal-dialog">

              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">×</button>
                  <h4 class="modal-title">LOGIN POSTULANTE</h4>
                </div>
                <div class="modal-body">
                  <table class="table table-condensedÇ">
                    <tr>
                      <td>RUT:</td>
                      <td><input type="text" class="form-control" required  style="width:175px;"></td>
                    </tr>

                    <tr>
                      <td>PASSWORD:</td>
                      <td><input type="password" class="form-control" required  style="width:175px;"></td>
                    </tr>

                  </table>
                  <a href="{{route('perPostulante')}}"><button class="btn btn-primary btn-lg">LOGIN</button></a>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>

            </div>
          </div>

          <!-- FORM FINAL -->

        </div><!--/porlets-content-->
      </div><!--/block-web-->
    </div><!--/col-md-12-->
  </div><!--/row-->


</div>


<br>
<div class="container">
  <a href="{{route('home')}}"><button class="btn btn-primary btn-lg">Volver</button></a>
</div>
<br>

@endsection
