@extends('layouts.app')
@section('content')

<div ng-app="">
<br>




<div class="row">
  <div class="col-md-12 col-sm-9" >
    <div class="block-web">
      <div class="header">
        <div class="actions"></div>
        <h1 class="text-center text-uppercase">Agregar cartola</h1>
      </div>
      <div class="porlets-content">

        <form id="formCartola" name="formCartola" method="post" action="{{ route('AgregarCartola.registro.post') }}">
          {{ csrf_field() }}

          <table class="table-condensed form-group text-right text-uppercase" align="center">
              <tr>
                <td>Número Cuenta</td>
                <td>
                <select name="nrocta" id="nrocta" style="width:255px;">
                  <option value="0" selected> Seleccione</option>
                  @foreach($cuentas as $cuenta)
                  <option value="{{ $cuenta->CTAE_ID }}">{{ $cuenta->CTAE_NUMERO_CUENTA }}</option>
                  @endforeach
                    </select>
              </td>
            </tr>
            <tr>
              <td>Tipo Movimiento</td>
              <td>
                <select name="tipomov" id="tipomov" style="width:255px;">
                  <option value="0" selected> Seleccione</option>
                  @foreach($tipomovs as $tipomov)
                  <option value="{{ $tipomov->TMOV_ID }}">{{ $tipomov->TMOV_DESC }}</option>
                  @endforeach
                </select>
              </td>
            </tr>
              <td>Fecha</td>
              <td><input name="fecha" id="fecha" type="date"  style="width:255px;" required="required" /></td>
            </tr>
            <tr>
              <td>Causa</td>
              <td>
              <select name="causa" id="causa" style="width:255px;">
                <option value="0" selected> Seleccione</option>
                @foreach($causas as $causa)
                <option value="{{ $causa->CAU_ID }}">{{ $causa->CAU_DESC }}</option>
                @endforeach
                  </select>
              </td>
            </tr>
            <tr>
              <td>Descripción</td>
              <td><textarea name="descrip" rows="5" id="descrip" style="width:255px; max-width:255px" type="text" required=""></textarea></td>
            </tr>
            <tr>
              <td>Monto</td>
              <td><input name="monto" type="number" id="monto" style="width:255px;" min="0" required="required" /></td>
            </tr>
            <tr>
              <td colspan="2"  align="center">  <input type="submit" name="Submit" class="btn btn-primary btn-lg" value="Agregar Cartola" /></button></td>
            </tr>
          </table>
        </form>


      </div><!--/porlets-content-->
    </div><!--/block-web-->
  </div><!--/col-md-12-->
</div><!--/row-->



<div class="container"><a href="javascript:history.back(1)"><button class="btn btn-primary btn-lg">Volver</button></a></div>

<BR>

</div>


@endsection
