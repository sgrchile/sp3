@extends('layouts.app')
@section('content')
    {!! Html::script('js/jquery-2.1.1.min.js') !!}
<div class="row">
  <div class="col-xs-12 col-md-12 col-sm-12">
    <div class="block-web">
      <div class="header">
        <div class="actions"></div>
        <h1 class="content-header text-center text-uppercase"><b>menú principal</b></h1>
      </div>
      <div class="porlets-content">
        <!-- FORM INICIO -->
        <!--<a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i> <span>Logout</span></a>-->
                    <table class="table-condensed" align="center" style="text-align:center; color:#000000; " cellpadding="0">
                        <?php
                            $niv = Auth::user()->PRO_NIVEL;
                            $mnmvs = App\MenuNivel::where('NIVEL_ID','=',$niv)->get();
                            $mn = App\MenuModel::whereIn('MENU_ID',$mnmvs)->get();
                        ?>

                        <tr>
                            <td id="3" hidden class="menu">
                                <a  href="{{route('Contable')}}"><img src="{{ asset('images/contabilidad.png') }}" class="img-responsive menu" width="113" height="128 " border="0"/>
                                    <p>CONTABILIDAD</p>
                                </a>
                            </td>
                              <td id="4" hidden class="menu"><a  href="{{route('Finanzas')}}"><img src="{{ asset('images/Finanzas.png') }}" class="img-responsive menu"  width="113" height="128"/>
                                  <p style="text-align:center;">FINANZAS</p></a>
                              </td>
                              <td id="5" hidden class="menu"><a  href="{{route('Finanzas')}}"><img src="{{ asset('images/presupuesto.png') }}" class="img-responsive menu"  width="113" height="128"/>
                                  <p style="text-align:center;">PRESUPUESTO</p></a>
                              </td>
                        </tr>
                        <tr>
                              <td id="6" hidden class="menu">
                                  <a  href="{{route('RRHH')}}"><img src="{{ asset('images/rrhh.png') }}" class="img-responsive menu" width="113" height="128"/>
                                  <p style="text-align:center;">RRHH</p></a>
                              </td>
                              <td id="9" hidden class="menu">
                                  <a  href="{{route('SolFon')}}"><img src="{{ asset('images/solicitud-fondos.png') }}" class="img-responsive menu" width="113" height="128"/>
                                  <p>SOLICITUD DE FONDOS</p></a>
                              </td>
                              <td id="11" hidden class="menu">
                                  <a  href="{{route('CRM')}}"><img src="{{ asset('images/Marketing.png') }}" class="img-responsive menu" width="113" height="128"/>
                                  <p style="text-align:center;">CRM</p></a>
                              </td>
                        </tr>
                        <tr>
                            <td id="20" hidden class="menu">
                                <a  href="{{route('ModuloOt')}}"><img src="{{ asset('images/orden-trabajo.png') }}"  class="img-responsive menu" width="113" height="128"  border="0"/>
                                    <p>ORDEN DE TRABAJO</p></a>
                                </a>
                            </td>
                            <td id="58" hidden class="menu">
                                <a  href="{{route('PROV')}}"><img src="{{ asset('images/proveedores.png') }}" class="img-responsive menu" width="113" height="128"/>
                                <p>PROVEEDORES</p></a>
                            </td>
                            <td id="27" hidden class="menu">
                                <a  href="{{route('Ventas')}}"><img src="{{ asset('images/pto-venta.png') }}" class="img-responsive menu" width="113" height="128"/>
                                <p style="text-align:center;">PUNTO DE VENTAS</p></a>
                            </td>
                        </tr>
                        <tr>
                            <td id="32" hidden class="menu">
                                <a  href="{{Route('inventario')}}">  <img src="{{ asset('images/inventario.png') }}" class="img-responsive menu" width="113" height="128"/>
                                    <p>INVENTARIO</p></a>
                            </td>
                            <td id="36" hidden class="menu">
                                <a  href="{{route('inicioLicitacion')}}"><img src="{{ asset('images/Licitaciones.png') }}" class="img-responsive menu" width="113" height="128"/>
                                <p style="text-align:center;">LICITACIONES</p></a>
                            </td>
                            <td id="37" hidden class="menu"><a  href="{{route('eventos')}}"><img src="{{ asset('images/eventos.png') }}" class="img-responsive menu"  width="113" height="128"/>
                                <p style="text-align:center;">EVENTOS</p></a>
                            </td>
                        </tr>
                        <tr>
                            <td id="40" hidden class="menu"><a  href="{{route('ReservaDeSala')}}"><img src="{{ asset('images/reserva-sala.png') }}" class="img-responsive menu" width="113" height="128"/>
                                <p style="text-align:center;">RESERVA DE SALA</p></a>
                            </td>
                            <td id="44" hidden class="menu">
                                <a  href="{{route('IndexMarketing')}}"><img src="{{ asset('images/Marketing.png') }}" class="img-responsive menu" width="113" height="128"/>
                                <p style="text-align:center;">MARKETING</p></a>
                            </td>
                            <td id="45" hidden class="menu">
                                <a id="mejora" href="{{route('IndexMejoraContinua')}}"><img src="{{ asset('images/mejora-continua.png') }}" class="img-responsive menu" width="113" height="128"/>
                                <p style="text-align:center;">MEJORA CONTINUA</p></a>
                            </td>
                        </tr>
                        <tr>
                                <td id="46" hidden class="menu"><a  href="{{route('InformesDeGestion')}}"><img src="{{ asset('images/informes de gestion.png') }}" class="img-responsive menu"  width="113" height="128"/>
                                <p style="text-align:center;">INFORMES DE GESTION</p></a>
                            </td>
                            <td id="47" hidden class="menu">
                                <a  href="{{ url('/chamilo-lms-1.11.2') }}"><img src="{{ asset('images/capacitacion.png') }}" class="img-responsive menu" width="113" height="128"/>
                                <p style="text-align:center;">CAPACITACION</p></a>
                            </td>
                            <td id="48" hidden class="menu"><a  href="{{route('Documental')}}"><img src="{{ asset('images/documental.png') }}" class="img-responsive menu" width="113" height="128"/>
                                <p style="text-align:center;">DOCUMENTAL</p></a>
                            </td>
                        </tr>
                        <tr>
                            <td id="51" hidden class="menu"><a  href="{{route('foro')}}"><img src="{{ asset('images/foro.png') }}" class="img-responsive menu"  width="113" height="128"/>
                                <p style="text-align:center;">FORO</p></a>
                            </td>
                            <td id="54" hidden class="menu">
                                <a  href="http://www.kutralco.com/clubrecepcionista/login.php"><img  src="{{ asset('images/clubs (ex recepcion).png') }}" class="img-responsive menu" width="113"  height="128" border="0">
                                <p>CLUBS</p></a>
                            </td>
                            <td id="55" hidden class="menu">
                                <a  href="{{route('soporte')}}"><img src="{{ asset('images/asist-tec.png') }}" class="img-responsive menu" width="113"
                                                 height="128"></a>
                                <p>SOPORTE</p>
                            </td>
                        <!--
                            <td>
                                <a href="{{route('OFTRAB')}}"><img src="{{ asset('images/rrhh.png') }}" class="img-responsive" width="113" height="128"/></a>
                                <p style="text-align:center;">OFERTAS DE TRABAJO</p>
                            </td>
                            <td>
                                <a href="../cap/chamilo-lms-1.11.2/index.php"><img
                                            src="{{ asset('images/capacitaciones.png') }}" class="img-responsive" width="113"
                                            height="128"/>
                                    <p>CAPACITACIONES</p>
                                </a>
                            </td>
                          -->
                        <!-- <td>
                              <a href="#"> <img src="{{ asset('images/reserva-hora.png') }}" class="img-responsive" width="113" height="128"/> AGENDA</a>
                            </td>
                          -->
                        </tr>
                    </table>


        <!-- FORM FINAL -->

      </div><!--/porlets-content-->
    </div><!--/block-web-->
  </div><!--/col-md-12-->
</div><!--/row-->
<script  type='text/javascript'>

    $(document).ready(function(){
        $("[id*=nombre]").hide();
        $('#myTest').prop("required", true);
        $('#myTest').removeAttr("hidden");
        function mostrar() {

        }
        $.get("https://plataforma.sgrchile.com/api/menus/all/"+window.nivel).done(function(data){
            if (data !== null) {
                if (Object.keys(data).length > 0) {
                    $.each(data, function( index, value ){

                    });
                }
            }
        });

    });
</script>

@endsection
