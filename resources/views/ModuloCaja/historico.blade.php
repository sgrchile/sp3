@extends('layouts.app')
@section('content')
<div class="container-fluid">
<h1 class="text-center">Historico</h1>
<div class="row">
  <div class="col-xs-12 col-md-12 col-sm-12">
    <div class="block-web">
      <div class="header">
        <div class="actions"></div>
        <h1 class="content-header text-center text-uppercase"><b>TÍTULO</b></h1>
      </div>
      <div class="porlets-content">
      <!-- FORM INICIO -->
        <table class="table table-bordered"  align="center" style=" border-collapse: separate;
          border-spacing:  5px 15px; text-align:center; ">
          <tbody>
            <tr>
              <td><p>BIOGEST</p></td>
              <td><p>TRENER</p></td>
              <td><p>LOICA</p></td>
              <td><p>KUTRALCO</p></td>
              <td><p>IMPROTOUR</p></td>
            </tr>
          </tbody>
        </table>

      <!-- FORM FINAL -->

      </div><!--/porlets-content-->
    </div><!--/block-web-->
  </div><!--/col-md-12-->
</div><!--/row-->

</div>

<a href="{{route('SolFon')}}"><button type="button" class="btn btn-primary btn-lg">  volver </button></a>
@endsection
