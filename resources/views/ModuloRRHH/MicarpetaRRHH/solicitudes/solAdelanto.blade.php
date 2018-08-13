@extends('layouts.app')
@section('content')

  <div class="row">
    <div class="col-xs-12 col-md-12 col-sm-12">
      <div class="block-web">
        <div class="header">
          <div class="actions"></div>
          <h1 class="content-header text-center text-uppercase"><b>SOLICITUD DE ADELANTO</b></h1>
        </div>
        <div class="porlets-content">
          <div class="container-fluid" align="center">
          <!-- FORM INICIO -->
            {!! Form::open(['route' => 'post.adelanto']) !!}

          <table class="table-condensed">
            <tr>
              <td>VALOR:</td>
              <td><input type="number" min="0" name="valor"  class="form-control" style="width:175px;"></td>
            </tr>

            <tr>
              <td>MOTIVO:</td>
              <td><textarea  class="form-control" name="motivo" style ="width:175px; height:200px;  max-width:175px;  max-height:200px;"></textarea></td>
            </tr>


          </table>
          <button class="btn btn-primary btn-lg">SOLICITAR</button>

            {!! Form::close() !!}

          <!-- FORM FINAL -->
        </div><!--/container-->
        </div><!--/porlets-content-->
        <a href="{{route('CarpetaPersonal')}}"><button class="btn btn-primary btn-lg">Volver</button></a>
      </div><!--/block-web-->
    </div><!--/col-md-12-->

  </div><!--/row-->






@endsection
