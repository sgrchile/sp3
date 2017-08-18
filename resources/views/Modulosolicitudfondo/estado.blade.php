@extends('layouts.app')
@section('content')

<div class="container-fluid " align="center">
<h1 class="text-center">Estados Solicitud de fondos</h1>
<br>

  <div class="container" align="center">
    <div class="row">
      <div class="col-xs-12 col-md-12 col-sm-12">
        <div class="block-web">
          <div class="header">
            <div class="actions"></div>
            <h1 class="content-header text-center text-uppercase"><b>TÍTULO</b></h1>
          </div>
          <div class="porlets-content">
            <!-- FORM INICIO -->
            <form id="form1" name="form1" method="post" action="{{ route('verEstadoSf') }}">
            {{ csrf_field() }}
            <table class="table-condensed ">
              <td><p>Nº de solicitud:</p></td>
              <td><select  style="width:200px;" class="form-control" name="idsol">
              <option value="0">Seleccione</option>
              @foreach($sfondos as $sfondo)
              <option value="{{ $sfondo->SF_SOLICITUD_ID }}" {{ request('idsol') == $sfondo->SF_SOLICITUD_ID ? 'selected' : '' }}>{{ $sfondo->SF_SOLICITUD_ID }}</option>
              @endforeach
              </select>
              </td>
              <td><button type="submit" class="btn btn-primary btn-primary" >Consultar</button></td>
              </tr>
              </form>
              <tr>
              <td><p>Estado actual:</p></td>
              <td>  <input type="text" style="width:200px;" class="form-control" value="{{ isset($sfondosearch) ? $sfondosearch : '' }}" disabled name="estado"></td>
              </tr>
            </table>
            <!-- FORM FINAL -->

          </div><!--/porlets-content-->
        </div><!--/block-web-->
      </div><!--/col-md-12-->
    </div><!--/row-->
  </div>
  <br>
  <br>

</div>
<div class="container">
  <a href="javascript:history.back(1)"><button class="btn btn-primary btn-lg">Volver</button></a>
</div>
@endsection
