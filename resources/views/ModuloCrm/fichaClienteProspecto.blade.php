@extends('layouts.app')
@section('content')

<br>
<div class="container" align="center">

  <div class="row">
    <div class="col-xs-12 col-md-12 col-sm-12">
      <div class="block-web">
        <div class="header">
          <div class="actions"></div>
          <h1 class=" text-center text-uppercase" >FICHA CLIENTE PROSPECTO</h1>
        </div>
        <div>
          @if (session('status_cliente'))
            <div class="alert alert-success">
              {{ session('status_cliente') }}
            </div>
          @endif
        </div>
        <div class="porlets-content">
          <!-- FORM INICIO -->



            <table class="table-condensed text-right" align="center">
              <tr>
                <td>NOMBRE:</td>
                <td>
                  <input name="nombre" type="text" value="{{ $cliente->CLI_NOMBRE }}" style="width:175px;" class="form-control" id="nombre" pattern="[A-Za-z]{4-16}" readOnly/>
                </td>
                <td>IDENTIFICADOR:</td>
                <td>
                  <input type="text" id="rut" name="rut" value="{{ $cliente->CLI_IDENT }}" style="width:175px;" class="form-control" maxlength="10" readOnly  />
                </td>
                <td>APELLIDO PATERNO:</td>
                <td>
                  <input type="text" id="rut" name="rut" value="{{ $cliente->CLI_APE_PATERNO }}" style="width:175px;" class="form-control" maxlength="10" readOnly  />
                </td>
              </tr>
              <tr>
                <td>TELEFONO:</td>
                <td>
                  <input type="text" value="{{ $cliente->CLI_FONO }}"  style="width:175px;" class="form-control" readOnly/>
                </td>
                <td>EMAIL:</td>
                <td>
                  <input type="text" value="{{ $cliente->CLI_EMAIL }}"  style="width:175px;" class="form-control" readOnly/>
                </td>
                <td>TELEFONO 2:</td>
                <td>
                  <input type="text" value="{{ $cliente->CLI_FONO2 }}" style="width:175px;" class="form-control" readOnly/>
                </td>
              </tr>
              <tr>
                <td>ACTIVIDAD COMERCIAL: </td>
                <td >
                  <input name="actividad" type="text" value="{{ $cliente->CLI_ACT_COMERCIAL }}"  style="width:175px;" id="actividad" class="form-control" readOnly/>
                </td>
                <td>SITIO WEB: </td>
                <td >
                  <input  type="text" value="{{ $cliente->CLI_SITIO_WEB }}"  style="width:175px;" class="form-control" readOnly/>
                </td>
                <td>GLOSA: </td>
                <td >
                  <input  type="text" value="{{ $cliente->CLI_GLOSA }}"  style="width:175px;" class="form-control" readOnly/>
                </td>
              </tr>
              <tr>
                <td>RUBRO:</td>
                <td>
                  @if($cliente->CLI_RUBRO)
                  <input  type="text"  value="{{ App\Rubro::find($cliente->CLI_RUBRO)->RUB_DESC }}" style="width:175px;" class="form-control" readOnly/>
                    @else
                    <input  type="text"  value="{{ $cliente->CLI_RUBRO }}" style="width:175px;" class="form-control" readOnly/>
                    @endif
                </td>
                <td>SUB RUBRO:</td>
                <td>
                  <input  type="text" value="{{ $cliente->CLI_SUB_RUBRO }}"  style="width:175px;" class="form-control" readOnly/>
                </td>
                <td>ACTIVIDAD:</td>
                <td>
                  <input  type="text"  value="{{ $cliente->CLI_ACTIVIDAD }}" style="width:175px;" class="form-control" readOnly/>
                </td>
              </tr>
              <tr>
                <td>BANCO:</td>
                <td>
                  <input  type="text" value="{{ $cliente->CLI_BANCO }}"  style="width:175px;" class="form-control" readOnly/>
                </td>
                <td>TIPO DE CUENTA:</td>
                <td>
                  <input  type="text" value="{{ $cliente->CLI_TCTA_BCO }}"  style="width:175px;" class="form-control" readOnly/>
                </td>
                <td>Nº DE CUENTA: </td>
                <td >
                  <input  type="text"  value="{{ $cliente->CLI_NRO_CTA }}" style="width:175px;" class="form-control" readOnly/>
                </td>
              </tr>
              <tr>
                <td>ORIGEN: </td>
                <td >
                  <input  type="text" value="{{ $cliente->CLI_ORIGEN }}"  style="width:175px;" class="form-control" readOnly/>
                </td>
                <td>PAIS:</td>
                <td>
                  <input  type="text" value="{{ $cliente->CLI_PAIS }}"  style="width:175px;" class="form-control" readOnly/>
                </td>
                <td>REGION:</td>
                <td>
                  <input  type="text" value="{{ $cliente->CLI_REGION }}"  style="width:175px;" class="form-control" readOnly/>
                </td>
              </tr>
              <tr>
                <td>PROVINCIA:</td>
                <td>
                  <input  type="text" value="{{ $cliente->CLI_PROVINCIA }}"  style="width:175px;" class="form-control" readOnly/>
                </td>
                <td>CIUDAD:</td>
                <td>
                  <input  type="text" value="{{ $cliente->CLI_CIUDAD }}"  style="width:175px;" class="form-control" readOnly/>
                </td>
                <td>DIRECCION:</td>
                <td>
                  <input  type="text" value="{{ $cliente->CLI_DIRECCION }}"  style="width:175px;" class="form-control" readOnly/>
                </td>
              </tr>
              <tr>
                <td>TEMPERATURA:</td>
                <td>
                  @if($cliente->CLI_TEMP != null)
                  <input  type="text" value="{{ App\Temperatura::find($cliente->CLI_TEMP)->desc_temp }}"  style="width:175px;" class="form-control" readOnly/>
                    @else
                    <input  type="text" value="{{ $cliente->CLI_TEMP }}"  style="width:175px;" class="form-control" readOnly/>
                    @endif
                </td>
                <td>COMENTARIO:</td>
                <td>
                  <textarea style="width:175px;" class="form-control" readOnly>{{ $cliente->CLI_COMENTARIO }}</textarea>
                </td>
                <td>SERVICIO REQUERIDO:</td>
                <td>
                  <textarea style="width:175px;" class="form-control" readOnly>{{ $cliente->CLI_SERV_REQUERIDO }}</textarea>
                </td>
              </tr>
            </table>
            <br>
          <h3 class="text-center text-uppercase">ACTIVIDADES</h3>
          @if (session('status_actividad'))
            <div class="alert alert-warning">
              {{ session('status_actividad') }}
            </div>
          @endif
          <div class="table-responsive">
            <table class="display  table-bordered  text-uppercase" id="dynamic-table">
              <!--  EN EL INDEX AGREGAR DESPUES DE CLIENTE, CONTACTO-->
              <tr>
                <td>ID</td>
                <td>DESCRIPCIÓN</td>
                <td>FECHA</td>
                <td>HORA</td>
                <td>NOMBRE CONTACTO</td>
                <td>TELEFONO CONTACTO</td>
                <td colspan="2">ACCION</td>
              </tr>

              @foreach($actividades as $actividad)
                <tr>
                  <td>{{ $actividad->ID_ACT }}</td>
                  <td>{{ $actividad->DESC_ACT }}</td>
                  <td>{{ $actividad->FECHA_ACT }}</td>
                  <td>{{ $actividad->HORA }}</td>
                  <td>{{ $actividad->NOM_CONT_ACT }}</td>
                  <td>{{ $actividad->CONTACT_ACT }}</td>
                  <td>
                    <a href="{{ route('actividad.destroy',$actividad->ID_ACT) }}" onclick="return confirm('¿Desea eliminar ésta Actividad?')" >
                      <button class="btn btn-primary btn-xs" style="width:90px; margin-bottom:5px;">ELIMINAR</button></a>
                  <!--<a href="{{ action('ActividadesController@edit',$actividad->ID_ACT) }} ">
                  <button class="btn btn-primary btn-xs" style="width:90px; margin-bottom:5px;">MODIFICAR</button></a>-->
                    <button class="btn btn-primary btn-xs" style="width:90px; margin-bottom:5px;"  data-toggle="modal" data-target="#ModActividad">EDITAR</button>
                  </td>
                </tr>
              @endforeach
              <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>
                  <button class="btn btn-primary btn-xs" style="width:90px;" data-toggle="modal" data-target="#regActividad"  data-backdrop="static">NUEVO</button>

                  <!-- Modal REGISTRO DE ACTIVIDAD-->
                  <div class="modal fade " id="regActividad" role="dialog" >
                    <div class="modal-dialog modal-lg" align="center">

                      <!-- Modal content-->
                      <div class="modal-content " >
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">×</button>
                          <h4 class="modal-title">REGISTRAR ACTIVIDAD</h4>
                        </div>
                        <div class="modal-body">

                          <form id="form1" name="form1" method="post" action="{{ route('post.actividad') }}">

                            <table  class="table-condensed" style="text-align:right; border:none" >

                              <tr>

                                <td>CLIENTE:</td>
                                <td>
                                  <input type="text" value="{{ $cliente->CLI_NOMBRE }}" name="nom" style="width:175px;" class="form-control" id="nom" readOnly/>
                                </td>
                                <td hidden>
                                  <input type="text" value="{{ $cliente->CLI_PROSP_ID }}" name="cliente" style="width:175px;" class="form-control" id="cliente" readOnly/>
                                </td>
                                <td>ACTIVIDAD</td>
                                <td>
                                  {{ Form::select('tp_act',App\TpActividad::pluck('DESC_TP_ACTIVIDAD','ID_TP_ACTIVIDAD'),null,
                                  ['class'=>'form-control','style'=>'width:175px','placeholder'=>'Seleccione']) }}
                                </td>

                              </tr>
                              <tr>
                                <td>FECHA:</td>
                                <td>
                                {{ Form::date('fecha', \Carbon\Carbon::now()->format('d-m-Y'),['class'=>'form-control','style'=>'width:175px']) }}
                                <!--<input type="date"  style="width:175px;" class="form-control" required="required"/>-->
                                </td>

                                <td>HORA:</td>
                                <td>
                                {{ Form::time('hora', \Carbon\Carbon::now(),['class'=>'form-control','style'=>'width:175px']) }}
                                <!-- <input type="text"  style="width:175px;" class="form-control"required="required"/>-->
                                </td>
                              </tr>
                              <tr>
                                <td>DESCRIPCION:</td>
                                <td>
                                  <textarea id="descripcion" name="descripcion" class="form-control" style=" width:175px; max-width:175px; max-height:175px;" required></textarea>
                                </td>
                              </tr>
                            </table>
                            <button class="btn btn-primary btn-lg">REGISTRAR</button>
                          </form>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!--// Modal REGISTRO ACTIVIDAD-->

                </td>
              </tr>
            </table>
            {{ $actividades->links() }}

          </div>

        <!--FORM FINAL -->

        </div><!--/porlets-content-->
      </div><!--/block-web-->
    </div><!--/col-md-12-->
  </div><!--/row-->


<br>
<div class="container">  <a href="{{route('clientes')}}"><button class="btn btn-primary btn-lg">Volver</button></a></div>

</div>
</form>

<br>
<br>

@endsection
