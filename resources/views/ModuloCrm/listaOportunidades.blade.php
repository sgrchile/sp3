@extends('layouts.app')
@section('content')
<div class="row">
  <div class="col-xs-12 col-md-12 col-sm-12">
    <div class="block-web">
      <div class="header">
        <div class="actions"></div>
        <h1 class=" text-center text-uppercase" >LISTA GENERAL DE OPORTUNIDADES</h1>
        @if (session('status_oportunidad'))
          <div class="alert alert-warning">
            {{ session('status_oportunidad') }}
          </div>
        @endif
      </div>
      <div class="porlets-content">
        <div class="container-fluid" align="center">
        <!-- FORM INICIO -->
          <table align="center">
            <tr>
              <td><label style="font-size:30px;">BUSCAR OPORTUNIDAD:</label> </td>
              <td>
                <input type="text"  style="width:175px;" class="form-control" required/>
              </td>
              <td><button type="button" class="btn btn-primary btn-xs">  <i class="fa fa-search" style="font-size:30px;"></i></button></td>
            </tr>
            <tr>
              <td>
                <div class="container" align="center">  <a href="{{ route('Oportunidades') }}"><button class="btn btn-primary btn-lg">AGREGAR</button></a></div>
              </td>
            </tr>
          </table>

          <br >
          <br>

          <h3 class="text-center text-uppercase">OPORTUNIDADES</h3>

          <table class="table table-bordered table-hover">
            <THEAD>
            <tr>
              <td>ID</td>
              <td>NOMBRE</td>
              <td>PROPIETARIO</td>
              <td>PROCESO DE NEGOCIO</td>
              <td>ETAPA</td>
              <td>PROBABILIDAD</td>
              <td>FECHA DE INGRESO</td>
              <td>FECHA DE CIERRE</td>
              <td>CENTRO DE NEGOCIO</td>
              <td>MONEDA</td>
              <td>TASA</td>
              <td>TOTAL</td>
              <td colspan="2">ACCION</td>
            </tr>
            <tr>
            </THEAD>
            <tbody>
            @foreach($oportunidades as $oportunidad)
              @if($oportunidad->OPORT_EMP == Auth::user()->PRO_EMP)
                <tr>
                  <td>{{ $oportunidad->ID_OPORTUNIDAD }}</td>
                  <td>{{ $oportunidad->NOMBRE }}</td>
                  <td>{{ $oportunidad->ID_CLIENTE }}</td>
                  <td>{{ $oportunidad->PROC_NEGOCIO }}</td>
                  <td>{{ $oportunidad->ETAPA }}</td>
                  <td>{{ $oportunidad->PROBABILIDAD	 }}</td>
                  <td>{{ $oportunidad->FEC_INGRESO }}</td>
                  <td>{{ $oportunidad->FEC_CIERRE }}</td>
                  <td>{{ $oportunidad->CENT_NEGOCIO }}</td>
                  <td>{{ $oportunidad->MONEDA }}</td>
                  <td>{{ $oportunidad->TASA  }}</td>
                  <td>{{ $oportunidad->TOTAL }}</td>
                  <td>
                    <a href="{{ route('oportunidad.destroy',$oportunidad->ID_OPORTUNIDAD) }}" onclick="return confirm('¿Desea eliminar ésta oportunidad?')" >
                      <button class="btn btn-primary btn-xs" style="width:90px; margin-bottom:5px;">BORRAR</button></a>
                    <a href="{{ route('oportunidad.edit',$oportunidad->ID_OPORTUNIDAD) }}">
                      <button class="btn btn-primary btn-xs" style="width:90px; margin-bottom:5px;">MODIFICAR</button></a>
                    <a href="{{ route('oportunidad.ver',$oportunidad->ID_OPORTUNIDAD) }}">
                      <button class="btn btn-primary btn-xs" style="width:90px; margin-bottom:5px;">VER FICHA</button></a>
                  </td>
                </tr>
                @endif
            @endforeach
            </tbody>
          </table>
        {{ $oportunidades->links() }}

          <!-- FORM FINAL -->

        </div><!--/porlets-content-->
      </div><!--/block-web-->
    </div><!--/col-md-12-->
  </div><!--/row-->
</div>


</form>
<br>
<div class="container">  <a href="{{ redirect()->back() }}"><button class="btn btn-primary btn-lg">Volver</button></a></div>

<br>
<br>

@endsection
