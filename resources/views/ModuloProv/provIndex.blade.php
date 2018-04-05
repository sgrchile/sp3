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
          <h1>PROVEEDORES</h1>
        </div>
        <div class="porlets-content">
          <!-- FORM INICIO -->

          <a href="{{route('Lista')}}"><button type="button" class="btn btn-primary btn-lg" style="width:230px;margin-bottom:15px;">EV. DE PROVEEDORES</button></a>
          <a href="{{route('perfil')}}" ><button type="button" class="btn btn-primary btn-lg" style="width:230px;margin-bottom:15px;">MI PERFIL</button></a>
          <button type="button" class="btn btn-primary btn-lg" style="width:230px;margin-bottom:15px;" data-toggle="modal" data-target="#selReg" data-backdrop="static">REGISTRO</button>


          <!-- Modal -->
          <div class="modal fade" id="selReg" role="dialog">
            <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">×</button>
            </div>
            <div class="modal-body">
            <h4 class="modal-title">REGISTRO DE PROVEEDORES</h4>

            <a href="{{ route('registroProv')}}" >
            <button type="button" class="btn btn-primary btn-lg">REGISTRO EMPRESA</button>
            </a>


            <a href="{{ route('regPerAct')}}" >
            <button type="button" class="btn btn-primary btn-lg">REGISTRO PERSONA PROVEEDOR</button>
            </a>

            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            </div>
            </div>

            </div>
          </div>
          <!-- Modal -->
          <!-- FORM FINAL -->

        </div><!--/porlets-content-->
      </div><!--/block-web-->
    </div><!--/col-md-12-->
  </div><!--/row-->





</div>



 <div class="container">  <a href="{{route('home')}}"><button class="btn btn-primary btn-lg">Volver</button></a></div>
<br>

<br>

@endsection
