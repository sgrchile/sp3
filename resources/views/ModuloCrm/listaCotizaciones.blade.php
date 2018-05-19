@extends('layouts.app')
@section('content')



  <div class="row">
    <div class="col-xs-12 col-md-12 col-sm-12">
      <div class="block-web">
        <div class="header">
          <div class="actions"></div>
          <h1 class=" text-center text-uppercase" >LISTA GENERAL DE COTIZACIONES</h1>
        </div>
        <div class="porlets-content">
          <div class="container-fluid" align="center">
          <!-- FORM INICIO -->
          <table align="center">
            <tr>
             <!-- <td><label style="font-size:30px;">BUSCAR COTIZACION:</label> </td>
              <td>
                <input type="text"  style="width:175px;" class="form-control" required/>
              </td>
              <td><button type="button" class="btn btn-primary btn-xs">  <i class="fa fa-search" style="font-size:30px;"></i></button></td>-->
            </tr>
            <tr>
              <td>
                <a href="{{route('regCotizacion')}}"><button class="btn btn-primary btn-lg" style="width:120px;">NUEVO</button></a>
              </td>
            </tr>
          </table>
          <table class="table table-bordered table-hover">

              <tr>
                <td>FOLIO</td>
                <td>RUT CLIENTE</td>
                <td>NOMBRE CLIENTE</td>
                <td>VENDEDOR</td>
                <td>VALOR NETO</td>
                <td>FECHA DE CREACION</td>
                <td>FECHA DE CIERRE</td>
                <td>ESTADO</td>
                  <td colspan="2">ACCION</td>
              </tr>
            @foreach($cotizaciones as $cotiza)
              <tr>
                <td>{{ $cotiza->ID_COTIZ }}</td>
                <td>{{ $cotiza->CLI_COTIZ }}</td>
                <td>{{ (App\Cliente::find($cotiza->CLI_COTIZ))->CLI_NOMBRE }}</td>
                <td>{{ $cotiza->ID_VENDEDOR }}</td>
                <td>{{ $cotiza->VAL_NETO_COTIZ }}</td>
                <td>{{ $cotiza->CREATED_AT }}</td>
                <td>{{ $cotiza->FEC_COTIZ }}</td>
                <td>{{ (App\EstadoCotizacion::find($cotiza->EST_COTIZ))->DESC_EST_COTIZ }}</td>
                <td>
                  <a href="{{route('cotiz.destroy',$cotiza->ID_COTIZ)}}" onclick="return confirm('¿Desea eliminar éste contacto?')">
                  <button class="btn btn-primary btn-xs" style="width:70px; margin-bottom:5px;"> BORRAR</button></a>
                  <a href="{{route('cotiz.edit',$cotiza->ID_COTIZ)}}">
                  <button class="btn btn-primary btn-xs" style="width:70px; margin-bottom:5px;">EDITAR</button></a>
                  <a href="{{route('get.cotizacion',$cotiza->ID_COTIZ)}}">
                  <button class="btn btn-primary btn-xs" style="width:70px; margin-bottom:5px;">VER FICHA</button></a>
                </td>
              </tr>
            @endforeach
            </table>
            {{ $cotizaciones->links() }}
          <!-- FORM FINAL -->
          </div><!--/container-->
        </div><!--/porlets-content-->
      </div><!--/block-web-->
    </div><!--/col-md-12-->
  </div><!--/row-->

<br>
<br>
<br>


</form>
<br>
<div class="container">  <a href="{{route('CRM')}}"><button class="btn btn-primary btn-lg">Volver</button></a></div>

<br>
<br>

@endsection
