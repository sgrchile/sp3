@extends('layouts.app')
@section('content')

<div align="center">

  <div class="row">
    <div class="col-xs-12 col-md-12 col-sm-12">
      <div class="block-web">
        <div class="header">
          <div class="actions"></div>
            <H1 class="text-center"><strong>ACTIVIDADES </strong></H1>
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
                <td>
                  <a href="{{ route('RegActividad') }}"><button class="btn btn-primary btn-lg">NUEVO</button></a>
                </td>
              </tr>
            </table>

          <div class="table-responsive">
            <table class="table table-bordered" align="center">
              <THEAD>
              <tr>
                <td>CLIENTE </td>
                <td>ACTIVIDAD</td>
                <td>FECHA </td>
                <td>ESTADO</td>
              </tr>
              </THEAD>
              <tbody>
              @foreach($actividades as $actividad)
                <tr>
                  <td>{{ $actividad->ID_CLIENTE_ACT }}</td>
                  <td>{{ $actividad->DESC_ACT }}</td>
                  <td>{{ $actividad->FECHA_ACT }}</td>
                  <td>{{ $actividad->EST_ACTIVIDAD }}</td>
                  <td><a href="{{ route('actividad.destroy',$actividad->ID_ACT) }}" onclick="return confirm('¿Desea eliminar ésta Actividad?')" >
                      <button class="btn btn-primary btn-xs" style="width:90px; margin-bottom:5px;">ELIMINAR</button></a></td>
                </tr>
              @endforeach
              </tbody>
            </table>
        {{ $actividades->links() }}
            </div>


          <!-- FORM FINAL -->

        </div><!--/porlets-content-->
      </div><!--/block-web-->
    </div><!--/col-md-12-->
  </div><!--/row-->



  </div>
  <br>
  <div class="container">  <a href="{{ route('CRM') }}"><button class="btn btn-primary btn-lg">Volver</button></a></div>
@endsection
