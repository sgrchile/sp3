@extends('layouts.app')
@section('content')

<div align="center">

  <div class="row">
    <div class="col-xs-12 col-md-12 col-sm-12">
      <div class="block-web">
        <div class="header">
          <div class="actions"></div>
            <H1 class="text-center"><strong>LISTA DE ACTIVIDADES </strong></H1>
        </div>
        <div class="porlets-content">
          <!-- FORM INICIO -->


            <table align="center">
              <tr>
                <td><label style="font-size:30px;">BUSCAR ACTIVIDAD:</label> </td>
                <td>
                  <input type="text"  style="width:175px;" class="form-control" required/>
                </td>
                <td><button type="button" class="btn btn-primary btn-xs">  <i class="fa fa-search" style="font-size:30px;"></i></button></td>
              </tr>
            </table>

            <table class="table table-bordered" align="center">
              <tr>
                <td>ID </td>
                <td>DESCRIPCION</td>
                <td>FECHA </td>
                <td>HORA</td>
                <td>CLIENTE</td>
                <td>CONTACTO</td>
              </tr>
            </table>


          <!-- FORM FINAL -->

        </div><!--/porlets-content-->
      </div><!--/block-web-->
    </div><!--/col-md-12-->
  </div><!--/row-->



  </div>
  <br>
  <div class="container">  <a href="{{ route('CRM') }}"><button class="btn btn-primary btn-lg">Volver</button></a></div>
@endsection
