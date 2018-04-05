@extends('layouts.app')
@section('content')

<div class="row">
  <div class="col-xs-12 col-md-12 col-sm-12">
    <div class="block-web">
      <div class="alert alert-info" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong>MODULO EN DESARROLLO!</strong>
      </div>
      <div class="header">
        <div class="actions"></div>
        <h1 class="content-header text-center text-uppercase"><b>Orden De Trabajo</b></h1>
      </div>
      <div class="porlets-content">
        <!-- FORM INICIO -->

        <div class="container-fluid text-center" align="center">



              <a href="{{ route('ModuloOt.IngresoOt') }}" ><button type="button" class="btn btn-primary btn-lg" style="width:250px; margin-bottom:15px;">AGREGAR OT</button></a> </td>
             <a href="{{ route('ModuloOt.listaOt')}}"><button type="button" class="btn btn-primary btn-lg" style="width:250px; margin-bottom:15px;">PROCESAR OT</button></a>
             <a href="{{ route('Graficos')}}"><button type="button" class="btn btn-primary btn-lg" style="width:250px; margin-bottom:15px;">ESTADO OT</button></a>
             <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal" style="width:250px; margin-bottom:15px;">CLIENTES</button>
             <button type="button" class="btn btn-primary btn-lg" style="width:250px; margin-bottom:15px;">REDACCION DE INFORMES</button>



        <div class="container" align="right" > <a  href="{{ route('confOT')}}"><i  style="font-size:30px; color:#000000;" class="fa">&#xf013;</i></a></div>

        </div>

        <!-- Modal -->
          <div class="modal fade" id="myModal" role="dialog" >
            <div class="modal-dialog modal-lg">

              <!-- Modal content-->
              <div class="modal-content" >
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title text-center">CLIENTES</h4>
                </div>
                <div class="modal-body">
                  <center>
                    <a href="{{ route('regCliente')}}"><button type="button" class="btn btn-primary btn-lg">Registro clientes</button></a>
                    <a href="{{ route('listaCli')}}"><button type="button" class="btn btn-primary btn-lg">Listado Clientes</button></a>
                  </center>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                </div>
              </div>

            </div>
          </div>
        <!-- //Modal -->

        <br>
        <br>
        <div class="container">  <a href="{{route('home')}}"><button class="btn btn-primary btn-lg">Volver</button></a></div>
        <br>
        <br>
        <br>


        <!-- FORM FINAL -->

      </div><!--/porlets-content-->
    </div><!--/block-web-->
  </div><!--/col-md-12-->
</div><!--/row-->

@endsection
