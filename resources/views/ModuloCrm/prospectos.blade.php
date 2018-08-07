@extends('layouts.app')
@section('content')

    <div class="container" align="center"ng-app="">

        <div class="row">
            <div class="col-xs-12 col-md-12 col-sm-12">
                <div class="block-web">
                    <div class="alert alert-info" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <strong><i>La sección a la que usted acaba de ingresar, se encuentra en etapa de programación. Disculpe las molestias</i></strong>
                    </div>
                    <div class="header">
                        <div class="actions"></div>
                        <h1 class="text-center text-uppercase">PROSPECTOS</h1>
                        @if (session('status_contacto'))
                            <div class="alert alert-warning">
                                {{ session('status_contacto') }}
                            </div>
                        @endif
                        <tr>
                            <td><a href="{{route('regProspecto')}}"><button class='btn btn-primary btn-lg' style="width:250px; margin-bottom: 15px;">NUEVO</button></a></td>
                        </tr>
                    </div>
                    <div class="porlets-content">
                        <!-- FORM INICIO -->

                        <table class="table table-bordered table-hover">

                            <tr>
                                <td>{{ __('IDENTIFICADOR') }}</td>
                                <td>{{ __('NOMBRE') }}</td>
                                <td>{{ __('EMAIL') }}</td>
                                <td>{{ __('TELEFONO') }}</td>
                                <td>{{ __('COMENTARIO') }}</td>
                                <td style="width:210px;">ACCION</td>
                            </tr>

                            <tbody>
                            @foreach($clientes as $cliente)
                                <tr>
                                        <td>{{ $cliente->CLI_IDENT }}</td>
                                        <td>{{ $cliente->CLI_NOMBRE }}</td>
                                        <td>{{ $cliente->CLI_EMAIL }}</td>
                                        <td>{{ $cliente->CLI_FONO }}</td>
                                        <td>{{ $cliente->CLI_COMENTARIO }}</td>
                                        <td>
                                            <a href="{{route('editarprosp', $cliente->CLI_PROSP_ID)}}"><button class="btn btn-primary btn-xs" style="width:130px; margin-bottom:10px;"> CONVERTIR</button></a>
                                            <a href="{{route('fichaClienteProspecto', $cliente->CLI_PROSP_ID)}}"><button class="btn btn-primary btn-xs" style="width:130px;"> VER FICHA</button></a>
                                            <a href="{{ route('prospecto.destroy',$cliente->CLI_PROSP_ID) }}" onclick="return confirm('¿Desea eliminar éste cliente?')" ><button class="btn btn-primary btn-xs"
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
