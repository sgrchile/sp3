@extends('layouts.app')
@section('content')

<div ng-app="">
<br>




<div class="row">
  <div class="col-md-12 col-sm-9" >
    <div class="block-web">
      <div class="header">
        <div class="actions"></div>
        <h1 class="text-center text-uppercase">MODULO DOCUMENTAL</h1>
      </div>
        <div class="porlets-content" align="center">

          <a href="{{route('documentosInternos')}}"><button class="btn btn-primary btn-lg"  style="width:250px;margin-bottom: 15px;">DOCUMENTOS</button></a>
          <button class="btn btn-primary btn-lg"  style="width:250px; margin-bottom: 15px;">REGISTRO FOTOGRAFICO</button>

        </div>

      </div><!--/porlets-content-->
    </div><!--/block-web-->
  </div><!--/col-md-12-->
</div><!--/row-->



<div class="container"><a href="javascript:history.back(1)"><button class="btn btn-primary btn-lg">Volver</button></a></div>

<BR>

</div>


@endsection
