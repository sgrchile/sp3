@extends('layouts.app')
@section('content')

<div class="container" align="center"ng-app="">

  <div class="row">
    <div class="col-xs-12 col-md-12 col-sm-12">
      <div class="block-web">
        <div class="header">
          <div class="actions"></div>
          <h1 class="text-center text-uppercase">CLIENTES</h1>

        </div>
        <div class="porlets-content">
          <!-- FORM INICIO -->
          @if (session('status_cliente'))
            <div class="alert alert-success">
              {{ session('status_cliente') }}
            </div>
          @endif
          <tr>
            <td><a href="{{route('regCliente')}}"><button class='btn btn-primary btn-lg'   style="width:250px; margin-bottom: 15px;">NUEVO</button></a></td>
          </tr>
          <table class="table table-bordered table-hover" id="clients-table">
            <thead>
            <tr>
              <td>{{ __('RUT') }}</td>
              <td>{{ __('NOMBRE') }}</td>
              <td>{{ __('EMAIL') }}</td>
              <td>{{ __('TELEFONO') }}</td>
              <td>{{ __('CONTACTO') }}</td>
              <td>{{ __('PROPIETARIO') }}</td>
              <td style="width:210px;">ACCION</td>
            </tr>
            </thead>
            <tbody>
            @foreach($clientes as $cliente)
              <tr>
                <td>{{ $cliente->CLI_RUT }}</td>
                <td>{{ $cliente->CLI_NOMBRE }}</td>
                <td>{{ $cliente->CLI_EMAIL }}</td>
                <td>{{ $cliente->CLI_FONO }}</td>
                <td>{{ $cliente->CLI_CONTACTO }}</td>
                <td>{{ $cliente->CLI_PROPIETARIO }}</td>
                <td>
                  <a href="{{route('fichaClienteConsolidado',$cliente->CLI_ID)}}"><button class="btn btn-primary btn-xs" onclick="" style="width:130px;"> VER FICHA</button></a>
                  <a href="{{route('cliente.destroy',$cliente->CLI_ID) }}" onclick="return confirm('¿Desea eliminar éste cliente?')" ><button class="btn btn-primary btn-xs"
                                                                                                                                                 style="width:65px;" >ELIMINAR</button></a>
                </td>
              </tr>
            @endforeach
            </tbody>
          </table>
          {{ $clientes->links() }}


          <!-- FORM FINAL -->

            <?php
            function validaRut($rut){
                if(strpos($rut,"-")==false){
                    $RUT[0] = substr($rut, 0, -1);
                    $RUT[1] = substr($rut, -1);
                }else{
                    $RUT = explode("-", trim($rut));
                }
                $elRut = str_replace(".", "", trim($RUT[0]));
                $factor = 2;
                for($i = strlen($elRut)-1; $i >= 0; $i--):
                    $factor = $factor > 7 ? 2 : $factor;
                    $suma = $elRut{$i}*$factor++;
                endfor;
                $resto = $suma % 11;
                $dv = 11 - $resto;
                if($dv == 11){
                    $dv=0;
                }else if($dv == 10){
                    $dv="k";
                }else{
                    $dv=$dv;
                }
                if($dv == trim(strtolower($RUT[1]))){
                    return true;
                }else{
                    return false;
                }
            }

            /**
             * Comprueba si el rut ingresado es valido
             *
             * @param $rut string
             * @return true o false
             */
            function valida_rut($rut)
            {
                $rut = preg_replace('/[^k0-9]/i', '', $rut);
                $dv  = substr($rut, -1);
                $numero = substr($rut, 0, strlen($rut)-1);
                $i = 2;
                $suma = 0;
                foreach(array_reverse(str_split($numero)) as $v)
                {
                    if($i==8)
                        $i = 2;
                    $suma += $v * $i;
                    ++$i;
                }
                $dvr = 11 - ($suma % 11);

                if($dvr == 11)
                    $dvr = 0;
                if($dvr == 10)
                    $dvr = 'K';
                if($dvr == strtoupper($dv))
                    return true;
                else
                    return false;
            }

            ?>

        </div><!--/porlets-content-->
      </div><!--/block-web-->
    </div><!--/col-md-12-->
  </div><!--/row-->

</div>

<div class="container">
<a href="{{route('CRM')}}"><button class="btn btn-primary btn-lg"> Volver</button></a>

</div>
</a>
<br>

@endsection
