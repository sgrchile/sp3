@extends('layouts.app')
@section('content')

<div class="row">
  <div class="col-xs-12 col-md-12 col-sm-12">
    <div class="block-web">
      <div class="header">
        <h1 class="content-header text-center text-uppercase"><b>TÍTULO</b></h1>
      </div>
      <div class="porlets-content">
        <div class="container-fluid" align="left">
        <!-- FORM INICIO -->
        <form id="validacion-live" class="form-group" method="post" action="">
          {{ csrf_field() }}
           <div class="col-sm-6 col-md-4">
               <h4>Input</h4>
               <input type="text" class="form-control">
           </div>

           <div class="col-sm-6 col-md-4">
               <h4>Input</h4>
               <input type="text" class="form-control">
           </div>

           <div class="col-sm-6 col-md-4">
               <h4>Input</h4>
               <input type="text" class="form-control">
           </div>

           <div class="col-sm-12">
               <h4>Textarea</h4>
               <textarea class="form-control" id="textareaDefault" rows="7"></textarea>
             <br>
              <center><button type="submit" class="btn btn-primary btn-lg">REGISTRAR</button></center>
         </form>
     <!-- FORM FINAL -->
       </div><!--/container-->
     </div><!--/porlets-content-->
   </div><!--/block-web-->
</div><!--/col-md-12-->
</div><!--/row-->

@endsection
<!-- FINAL EJEMPLO DE FORMULARIO -->
