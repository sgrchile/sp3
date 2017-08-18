
@extends('layouts.app')
@section('content')

<div class="container-fluid " align="center">

  <br>

  <div class="row">
    <div class="col-xs-12 col-md-12 col-sm-12">
      <div class="block-web">
        <div class="header">
          <div class="actions"></div>
          <h1 class="text-center text-uppercase">PARTICIPANTES</h1>
        </div>
        <div class="porlets-content">
          <div class="table-responsive">

          <table class="table table-bordered">
            <tr>
              <td>SALA</td>
              <td>FECHA</td>
              <td>HORA</td>
              <td style="width:200px;">ACCION</td>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td><button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#addParticipantes" data-backdrop="static">AGREGAR PARTICIPANTES</button></td>
            </tr>
          </table>

          <!-- Modal -->
         <div class="modal fade" id="addParticipantes" role="dialog">
           <div class="modal-dialog">

             <!-- Modal content-->
             <div class="modal-content">
               <div class="modal-header">
                 <button type="button" class="close" data-dismiss="modal">×</button>
                 <h4 class="modal-title">AGREGAR PARTICIPANTES</h4>
               </div>
               <div class="modal-body">

                 <table class="table table-bordered">

                 <tr>
                   <td>NOMBRE</td>
                   <td>APELLIDO</td>
                   <td>RUT</td>
                   <td>ACCION</td>
                 </tr>

                 <tr>
                   <td></td>
                   <td></td>
                   <td></td>
                   <td> <button class="btn btn-primary btn-xs">ELIMINAR</button></td>
                 </tr>

                 <tr>
                   <td></td>
                   <td></td>
                   <td></td>
                   <td> <button class="btn btn-primary btn-xs">AGREGAR</button></td>
                 </tr>
               </table>
               </div>
               <div class="modal-footer">
                 <button type="button" class="btn btn-default" data-dismiss="modal">CERRAR</button>
               </div>
             </div>

           </div>
         </div>


  </div>
  <div class="container-fluid" align="left">
    <a href="javascript:history.back(1)"><button class="btn btn-primary btn-lg">Volver</button></a>

  </div>
</div><!--/porlets-content-->
</div><!--/block-web-->
</div><!--/col-md-12-->
</div><!--/row-->

</div>
@endsection
