@extends('layouts.app')
@section('content')

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
                          <!--
                            <td>
                                <a href="#"><img src="{{ asset('images/asist-tec.png') }}" class="img-responsive" width="113"
                                                 height="128"></a>
                                <p>ASISTENCIA TECNICA</p>
                            </td>

                            <td>
                                <a href="../cap/chamilo-lms-1.11.2/index.php"><img
                                            src="{{ asset('images/capacitaciones.png') }}" class="img-responsive" width="113"
                                            height="128"/>
                                    <p>CAPACITACIONES</p>
                                </a>
                            </td>

                          -->
                            <td>
                                <a href="{{route('moduloCaja')}}"><img src="{{ asset('images/caja.png') }}"   class="img-responsive" width="113" height="128 " border="0"/>
                                    <p>CAJA</p>
                                </a>
                            </td>

                            <td>
                              <a href="{{Route('inventario')}}">  <img src="{{ asset('images/inventario.png') }}" class="img-responsive" width="113" height="128"/>
                                <p>INVENTARIO</p></a>
                            </td>


                            <td>
                                <a href="{{route('ModuloOt')}}"><img src="{{ asset('images/orden-trabajo.png') }}"  class="img-responsive" width="113" height="128"  border="0"/>
                                    <p>ORDEN DE TRABAJO</p>
                                </a>
                            </td>

                          </tr>
                          <tr>

                            <td>
                                <a href="{{route('PROV')}}"><img src="{{ asset('images/proveedores.png') }}" class="img-responsive" width="113" height="128"/></a>
                                <p>PROVEEDORES</p>
                            </td>



                            <td>
                                <a href="http://www.kutralco.com/clubrecepcionista/login.php"><img  src="{{ asset('images/recepcion.png') }}" class="img-responsive" width="113"  height="128" border="0"></a>
                                <p>RECEPCION</p>

                            </td>

                            <td>
                              <a href="{{route('Ventas')}}"><img src="{{ asset('images/pto-venta.png') }}" class="img-responsive" width="113" height="128"/></a>
                              <p style="text-align:center;">PUNTO DE VENTAS</p>
                            </td>

                        </tr>
                        <tr>
                            <td>

                                <a href="{{route('RRHH')}}"><img src="{{ asset('images/rrhh.png') }}" class="img-responsive" width="113" height="128"/></a>
                                <p style="text-align:center;">RRHH</p>

                            </td>
                            <!-- <td>
                              <a href="#"> <img src="{{ asset('images/reserva-hora.png') }}" class="img-responsive" width="113" height="128"/> AGENDA</a>
                            </td>

                          -->
                            <td>
                              <a href="{{route('OFTRAB')}}"><img src="{{ asset('images/rrhh.png') }}" class="img-responsive" width="113" height="128"/></a>
                              <p style="text-align:center;">OFERTAS DE TRABAJO</p>
                            </td>

                            <td>
                              <a href="{{route('CRM')}}"><img src="{{ asset('images/marketing.png') }}" class="img-responsive" width="113" height="128"/></a>
                              <p style="text-align:center;">CRM</p>
                            </td>
                        </tr>
                        <tr>

                          <td><a href="{{route('Documental')}}"><img src="{{ asset('images/rrhh.png') }}" class="img-responsive" width="113" height="128"/></a>
                              <p style="text-align:center;">DOCUMENTAL</p>

                          </td>


                          <td><a href="{{route('ReservaDeSala')}}"><img src="{{ asset('images/rrhh.png') }}" class="img-responsive" width="113" height="128"/></a>
                              <p style="text-align:center;">RESERVA DE SALA</p>

                          </td>

                          <td><a href="{{route('eventos')}}"><img src="{{ asset('images/rrhh.png') }}" class="img-responsive"  width="113" height="128"/></a>
                            <p style="text-align:center;">EVENTOS</p>

                          </td>
                        </tr>
                        <tr>
                          <td><a href="{{route('foro')}}"><img src="{{ asset('images/rrhh.png') }}" class="img-responsive"  width="113" height="128"/></a>
                            <p style="text-align:center;">FORO</p>

                          </td>
                          <td><a href="{{route('InformesDeGestion')}}"><img src="{{ asset('images/rrhh.png') }}" class="img-responsive"  width="113" height="128"/></a>
                            <p style="text-align:center;">INFORMES DE GESTION</p>
                          </td>

                          <td><a href="{{route('panelDeInformes')}}"><img src="{{ asset('images/rrhh.png') }}" class="img-responsive"  width="113" height="128"/></a>
                            <p style="text-align:center;">FINANCIERO</p>

                          </td>
                        </tr>


                        <tr>

                          <td>

                            <a href="{{route('inicioLicitacion')}}"><img src="{{ asset('images/rrhh.png') }}" class="img-responsive" width="113" height="128"/></a>
                            <p style="text-align:center;">LICITACION</p>

                          </td>
                          <td>

                            <a href="{{route('IndexMejoraContinua')}}"><img src="{{ asset('images/rrhh.png') }}" class="img-responsive" width="113" height="128"/></a>
                            <p style="text-align:center;">MEJORAMIENTO CONTINUO</p>

                          </td>

                          <td>

                            <a href="http://localhost/chamilo-lms-1.11.2"><img src="{{ asset('images/rrhh.png') }}" class="img-responsive" width="113" height="128"/></a>
                            <p style="text-align:center;">CAPACITACION</p>

                          </td>
                        </tr>
                        <tr>
                          <td>
                            <a href="{{route('IndexMarketing')}}"><img src="{{ asset('images/rrhh.png') }}" class="img-responsive" width="113" height="128"/></a>
                            <p style="text-align:center;">MARKETING</p>

                          </td>
                        </tr>
                    </table>


        <!-- FORM FINAL -->

      </div><!--/porlets-content-->
    </div><!--/block-web-->
  </div><!--/col-md-12-->
</div><!--/row-->


@endsection
