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
        <a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i> <span>Logout</span></a>
                    <table class="table-condensed" align="center" style="text-align:center; color:#000000; " cellpadding="0">

                        <tr>
                            <td id="contable" class="menu">
                                <a  href="{{route('Contable')}}"><img src="{{ asset('images/contabilidad.png') }}"   class="img-responsive menu" width="113" height="128 " border="0"/>
                                    <p>CONTABILIDAD</p>
                                </a>
                            </td>
                              <td id="finanzas" class="menu"><a  href="{{route('Finanzas')}}"><img src="{{ asset('images/Finanzas.png') }}" class="img-responsive menu"  width="113" height="128"/></a>
                                  <p style="text-align:center;">FINANZAS</p>
                              </td>
                              <td id="presupuesto" class="menu"><a  href="{{route('Finanzas')}}"><img src="{{ asset('images/presupuesto.png') }}" class="img-responsive menu"  width="113" height="128"/></a>
                                  <p style="text-align:center;">PRESUPUESTO</p>
                              </td>
                          </tr>
                          <tr>
                              <td id="rrhh" class="menu">
                                  <a  href="{{route('RRHH')}}"><img src="{{ asset('images/rrhh.png') }}" class="img-responsive menu" width="113" height="128"/></a>
                                  <p style="text-align:center;">RRHH</p>
                              </td>
                              <td id="solfon" class="menu">
                                  <a  href="{{route('SolFon')}}"><img src="{{ asset('images/solicitud-fondos.png') }}" class="img-responsive menu" width="113" height="128"/></a>
                                  <p>SOLICITUD DE FONDOS</p>
                              </td>
                              <td id="crm" class="menu">
                                  <a  href="{{route('CRM')}}"><img src="{{ asset('images/Marketing.png') }}" class="img-responsive menu" width="113" height="128"/></a>
                                  <p style="text-align:center;">CRM</p>
                              </td>
                        </tr>
                        <tr>
                            <td id="ot" class="menu">
                                <a  href="{{route('ModuloOt')}}"><img src="{{ asset('images/orden-trabajo.png') }}"  class="img-responsive menu" width="113" height="128"  border="0"/>
                                    <p>ORDEN DE TRABAJO</p>
                                </a>
                            </td>
                            <td id="prov" class="menu">
                                <a  href="{{route('PROV')}}"><img src="{{ asset('images/proveedores.png') }}" class="img-responsive menu" width="113" height="128"/></a>
                                <p>PROVEEDORES</p>
                            </td>
                            <td id="ventas" class="menu">
                                <a  href="{{route('Ventas')}}"><img src="{{ asset('images/pto-venta.png') }}" class="img-responsive menu" width="113" height="128"/></a>
                                <p style="text-align:center;">PUNTO DE VENTAS</p>
                            </td>
                        </tr>
                        <tr>
                            <td id="inv" class="menu">
                                <a  href="{{Route('inventario')}}">  <img src="{{ asset('images/inventario.png') }}" class="img-responsive menu" width="113" height="128"/>
                                    <p>INVENTARIO</p></a>
                            </td>
                            <td id="licit" class="menu">
                                <a  href="{{route('inicioLicitacion')}}"><img src="{{ asset('images/Licitaciones.png') }}" class="img-responsive menu" width="113" height="128"/></a>
                                <p style="text-align:center;">LICITACIONES</p>
                            </td>
                            <td id="eventos" class="menu"><a  href="{{route('eventos')}}"><img src="{{ asset('images/eventos.png') }}" class="img-responsive menu"  width="113" height="128"/></a>
                                <p style="text-align:center;">EVENTOS</p>
                            </td>
                        </tr>
                        <tr>
                            <td id="reserv" class="menu"><a  href="{{route('ReservaDeSala')}}"><img src="{{ asset('images/reserva-sala.png') }}" class="img-responsive menu" width="113" height="128"/></a>
                                <p style="text-align:center;">RESERVA DE SALA</p>
                            </td>
                            <td id="marketing" class="menu">
                                <a  href="{{route('IndexMarketing')}}"><img src="{{ asset('images/Marketing.png') }}" class="img-responsive menu" width="113" height="128"/></a>
                                <p style="text-align:center;">MARKETING</p>
                            </td>
                            <td id="mejora" class="menu">
                                <a id="mejora" href="{{route('IndexMejoraContinua')}}"><img src="{{ asset('images/mejora-continua.png') }}" class="img-responsive menu" width="113" height="128"/></a>
                                <p style="text-align:center;">MEJORA CONTINUA</p>
                            </td>
                        </tr>
                        <tr>
                            <td id="infgestion" class="menu"><a  href="{{route('InformesDeGestion')}}"><img src="{{ asset('images/informes de gestion.png') }}" class="img-responsive menu"  width="113" height="128"/></a>
                                <p style="text-align:center;">INFORMES DE GESTION</p>
                            </td>
                            <td id="cap" class="menu">
                                <a  href="{{ url('/chamilo-lms-1.11.2') }}"><img src="{{ asset('images/capacitacion.png') }}" class="img-responsive menu" width="113" height="128"/></a>
                                <p style="text-align:center;">CAPACITACION</p>
                            </td>
                            <td id="doc" class="menu"><a  href="{{route('Documental')}}"><img src="{{ asset('images/documental.png') }}" class="img-responsive menu" width="113" height="128"/></a>
                                <p style="text-align:center;">DOCUMENTAL</p>
                            </td>
                        </tr>
                        <tr>
                            <td id="foro" class="menu"><a  href="{{route('foro')}}"><img src="{{ asset('images/foro.png') }}" class="img-responsive menu"  width="113" height="128"/></a>
                                <p style="text-align:center;">FORO</p>
                            </td>
                            <td id="clubs" class="menu">
                                <a  href="http://www.kutralco.com/clubrecepcionista/login.php"><img  src="{{ asset('images/clubs (ex recepcion).png') }}" class="img-responsive menu" width="113"  height="128" border="0"></a>
                                <p>CLUBS</p>
                            </td>
                            <td id="soporte" class="menu">
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
        $('.menu').hide();

        var user = "<?php echo Auth::user()->PRO_NIVEL; ?>" ;
        switch(user){
            case 1:
                $('#reserv').show();
                $('#foro').show();
                $('#soporte').show();
                $('#inv').show();
                $('#infgestion').show();
                $('#prov').show();
                $('#marketing').show();
                $('#rrhh').show();
                $('#presupuesto').show();
                $('#mejora').show();
                $('#cap').show();
                break;
            case 2:
                $('#reserv').show();
                $('#foro').show();
                $('#soporte').show();
                $('#inv').show();
                $('#infgestion').show();
                $('#prov').show();
                $('#solfon').show();
                $('#rrhh').show();
                $('#presupuesto').show();
                $('#mejora').show();
                $('#cap').show();
                break;
            case 3:
                $('#reserv').show();
                $('#foro').show();
                $('#soporte').show();
                $('#inv').show();
                $('#ventas').show();
                $('#prov').show();
                $('#ot').show();
                $('#crm').show();
                $('#solfon').show();
                $('#rrhh').show();
                $('#cap').show();
                break;
            case 4:
                $('#reserv').show();
                $('#foro').show();
                $('#soporte').show();
                $('#prov').show();
                $('#ot').show();
                $('#solfon').show();
                $('#rrhh').show();
                $('#cap').show();
                break;
            case 5:
                $('#reserv').show();
                $('#foro').show();
                $('#soporte').show();
                $('#inv').show();
                $('#prov').show();
                $('#solfon').show();
                $('#rrhh').show();
                $('#cap').show();
                break;
            case 6:
                $('#reserv').show();
                $('#foro').show();
                $('#soporte').show();
                $('#solfon').show();
                $('#rrhh').show();
                $('#cap').show();
                break;
            case 7:
                $('#ventas').show();
                $('#crm').show();
                $('#soporte').show();
                $('#foro').show();
                $('#reserv').show();
                $('#doc').show();
                $('#prov').show();
                $('#solfon').show();
                $('#rrhh').show();
                $('#cap').show();
                break;
            case 8:
                $('#ventas').show();
                $('#soporte').show();
                $('#prov').show();
                $('#foro').show();
                $('#cap').show();
                $('#clubs').show();
                break;
            case 9:
                $('#finanzas').show();
                $('#contable').show();
                $('#rrhh').show();
                $('#foro').show();
                $('#cap').show();
                $('#soporte').show();
                $('#cap').show();
                break;
            case 10:
                $('#marketing').show();
                $('#foro').show();
                $('#cap').show();
                $('#soporte').show();
                $('#cap').show();
                break;
            case 11:
                $('#eventos').show();
                $('#foro').show();
                $('#cap').show();
                $('#soporte').show();
                $('#prov').show();
                break;
            case 12:
                $('#licit').show();
                $('#foro').show();
                $('#cap').show();
                $('#soporte').show();
                $('#prov').show();
                break;
            case 13:
                $('#prov').show();
                $('#rrhh').show();
                $('#reserv').show();
                $('#soporte').show();
                $('#licit').show();
                $('#ventas').show();
                $('#foro').show();
                break;

        }
    });
</script>

@endsection
