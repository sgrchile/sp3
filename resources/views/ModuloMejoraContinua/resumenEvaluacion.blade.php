
@extends('layouts.app')
@section('content')

<div class="container-fluid " align="center">

  <br>

  <div class="row">
    <div class="col-xs-12 col-md-12 col-sm-12">
      <div class="block-web">
        <div class="header">
          <div class="actions"></div>
          <h1 class="text-center text-uppercase">MODULO MEJORAMIENTO CONTINUO</h1>
        </div>
        <div class="porlets-content">

          <h3 class="text-center">RESUMEN DE EVALUACION</h3>
          <div class="table-responsive">
             <table class="table table-bordered">
               <tr>
                 <td>ID</td>
                 <td>FECHA DE SERVICIO</td>
                 <td>OT</td>
                 <td>MANDANTE</td>
                 <td>EVALUACION</td>

               </tr>

               <tr>
                 <td>1</td>
                 <td>1-11-1111</td>
                 <td>1234</td>
                 <td>lorem</td>
                 <td>5</td>
               </tr>
             </table>
          </div>

          <!-- <div class="table-responsive">
             <table class="table table-bordered">
               <tr>
                 <td>COMERCIAL</td>
                 <td>OPERACIONES</td>
                 <td>PROVEEDOR</td>
                 <td>PERSONAL</td>
                 <td>ACCION</td>

               </tr>

               <tr>
                 <td>1</td>
                 <td>1</td>
                 <td>5</td>
                 <td>5</td>
                 <td><a href="{{route('FichaDeEvaluacion')}}"<button class="btn btn-primary btn-md">VER</button></td>
               </tr>
             </table>



          </div> -->

          <div class="table-responsive">
             <table class="table table-bordered">
               <tr>
                 <td>EVALUACION</td>
                 <td>FECHA</td>
                 <td>ACCION</td>
               </tr>

               <tr>
                 <td>1</td>
                 <td>1</td>
                 <td><a href="{{route('FichaDeEvaluacion')}}"<button class="btn btn-primary btn-md">VER</button></td>
               </tr>
             </table>



          </div>

        </div><!--/porlets-content-->
      </div><!--/block-web-->
    </div><!--/col-md-12-->
  </div><!--/row-->

</div>
<br>
<div class="container">

<a href="javascript:history.back(1)"><button class="btn btn-primary btn-lg">Volver</button></a>

</div>
</a>
<br>
@endsection
