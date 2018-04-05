@extends('layouts.app')
@section('content')

    {!! Html::script('js/jquery-2.1.1.min.js') !!}
    {!! Html::script('js/dropdown.js') !!}

    <div align="center">
        <div class="row">
            <div class="col-xs-12 col-md-12 col-sm-12">
                <div class="block-web">
                    <div class="header">
                        <div class="actions"></div>
                        <H1 class="text-center"><strong>MODIFICAR CLIENTES {!! $cliente->CLI_NOMBRE !!} </strong></H1>
                    </div>
                    <div class="porlets-content">
                        <!-- FORM INICIO -->

                        <form id="form1" name="form1" method="post" action="{{ route('post.clientes') }}">
                            {{ csrf_field() }}
                            <table class="table-condensed text-right" align="center">
                                <tr>
                                    <td><a style="color: #9A0000">* </a> NOMBRE:</td>
                                    <td>
                                        {{ Form::text('nombre',$cliente->CLI_NOMBRE,['class'=>'form-control','style'=>'width:175px', 'required', 'pattern'=>'[A-Za-z]{4-16}']) }}
                                    </td>

                                    <td>NOMBRE DE FANTASIA:</td>
                                    <td>
                                        {{ Form::text('nombref',$cliente->CLI_NOMBRE,['class'=>'form-control', 'required', 'pattern'=>'[A-Za-z]{4-16}','style'=>'width:175px']) }}
                                    </td>
                                </tr>
                                <tr>

                                    <td><a style="color: #9A0000">* </a> RUT:</td>
                                    <td>
                                    {{ Form::text('rut',$cliente->CLI_RUT,['class'=>'form-control', 'required', 'pattern'=>'[A-Za-z]{4-16}','maxlength'=>'11','style'=>'width:175px']) }}
                                    <!--<input type="text" id="rut" name="rut"  style="width:175px;" class="form-control" maxlength="10" required /><!--oninput="checkRut(this)"-->
                                    <script src="{{asset('js/validarRUT.js')}}"></script>
                                    </td>
                                    <td><a style="color: #9A0000">* </a> CONTACTO:</td>
                                    <td>
                                        {{ Form::text('contacto',$cliente->CLI_CONTACTO,['class'=>'form-control','style'=>'width:175px']) }}
                                    </td>
                                </tr>
                                <tr>
                                    <td><a style="color: #9A0000">* </a> EMAIL:</td>
                                    <td>
                                        {{ Form::email('email', $cliente->CLI_EMAIL,['class'=>'form-control','required','style'=>'width:175px']) }}
                                    </td>

                                    <td><a style="color: #9A0000">* </a> TELEFONO:</td>
                                    <td>
                                        {{ Form::number('telefono',$cliente->CLI_FONO,['class'=>'form-control','required','style'=>'width:175px']) }}
                                    </td>

                                </tr>

                                <tr>

                                    <td><a style="color: #9A0000">* </a> ACTIVIDAD COMERCIAL: </td>
                                    <td >
                                        {{ Form::text('actcomercial',$cliente->CLI_ACT_COMERCIAL,['class'=>'form-control', 'required','style'=>'width:175px']) }}
                                    </td>

                                    <td>SITIO WEB: </td>
                                    <td >
                                        {{ Form::text('sitioweb',$cliente->CLI_SITIO_WEB,['class'=>'form-control', 'required','style'=>'width:175px']) }}
                                    </td>

                                </tr>

                                <tr>
                                    <td>GLOSA: </td>
                                    <td >
                                        {{ Form::text('glosa',$cliente->CLI_GLOSA,['class'=>'form-control','class'=>'form-control', 'required','style'=>'width:175px']) }}
                                    </td>

                                    <td>RUBRO:</td>
                                    <td>
                                        {!! Form::select('rubro',App\Rubro::find($cliente->CLI_RUBRO)->RUB_DESC,['class'=>'form-control','style'=>'width:175px']) !!}
                                    </td>

                                </tr>

                                <tr>

                                    <td>SUB RUBRO:</td>
                                    <td>
                                        {!! Form::select('subrubro',App\SubRubro::find($cliente->CLI_SUB_RUBRO)->SUB_RUB_DESC,['class'=>'form-control','style'=>'width:175px']) !!}
                                    </td>
                                    <td>ACTIVIDAD:</td>
                                    <td>
                                        {!! Form::select('actividad',App\Actividad::find($cliente->CLI_CLI_ACTIVIDAD)->ACT_DESC,['class'=>'form-control','id'=>'actividad','style'=>'width:175px']) !!}
                                    </td>

                                </tr>
                                <tr>

                                    <td>BANCO:</td>
                                    <td>
                                        {!! Form::select('banco',App\Banco::find($cliente->CLI_BANCO)->BCO_DESC,['class'=>'form-control','id'=>'banco','style'=>'width:175px']) !!}
                                    </td>

                                    <td>TIPO DE CUENTA:</td>
                                    <td>
                                        {!! Form::select('tipocuenta',App\TipoCuenta::find($cliente->CLI_TCTA_BCO)->TCTA_DESC,['class'=>'form-control','id'=>'tipocuenta','style'=>'width:175px']) !!}
                                    </td>

                                </tr>

                                <tr>

                                    <td>Nº DE CUENTA: </td>
                                    <td >
                                        {{ Form::number('nrocuenta',$cliente->CLI_NRO_CTA,['class'=>'form-control','required','style'=>'width:175px']) }}
                                    </td>

                                    <td>ORIGEN: </td>
                                    <td >
                                        {{ Form::text('origen',$cliente->CLI_ORIGEN,['class'=>'form-control', 'required','style'=>'width:175px']) }}
                                    </td>
                                </tr>


                                <tr>

                                    <td>PAIS:</td>
                                    <td>
                                        {!! Form::select('pais',App\Pais::find($cliente->CLI_PAIS)->PAI_DESC,['class'=>'form-control','id'=>'pais','style'=>'width:175px']) !!}
                                    </td>
                                    <td>REGION:</td>
                                    <td>
                                        {!! Form::select('region',App\Region::find($cliente->CLI_REGION)->REG_DESC,['class'=>'form-control','id'=>'region','style'=>'width:175px']) !!}
                                    </td>

                                </tr>

                                <tr>

                                    <td>PROVINCIA:</td>
                                    <td>
                                        {!! Form::select('provincia',App\Provincia::find($cliente->CLI_PROVINCIA)->PV_DESC,['class'=>'form-control','id'=>'provincia','style'=>'width:175px']) !!}
                                    </td>

                                    <td>CIUDAD:</td>
                                    <td>
                                        {!! Form::select('ciudad',App\Ciudad::find($cliente->CLI_CIUDAD)->CIU_DESC,['class'=>'form-control','id'=>'ciudad','style'=>'width:175px']) !!}
                                    </td>
                                </tr>
                                <tr>
                                    <td><a style="color: #9A0000">* </a> DIRECCION:</td>
                                    <td>
                                        {{ Form::text('direccion',$cliente->CLI_DIRECCION,['class'=>'form-control', 'required','style'=>'width:175px']) }}
                                    </td>
                                    <td><a style="color: #9A0000">* </a> TEMPERATURA:</td>
                                    <td>
                                        {{ Form::select('temperatura',App\Temperatura::pluck('desc_temp','id_temp'),['class'=>'form-control','style'=>'width:175px']) }}
                                    </td>
                                </tr>

                            <!-- <script>
                  $(document).ready(function(){
                      $('#rubro').change(function(){
                          $.get("{{ url('dropdown')}}",
                              { option: $(this).val() },
                              function(data) {
                                  $('#proceso_id').empty();
                                  $.each(data, function(key, element) {
                                      $('#proceso_id').append("<option value='" + key + "'>" + element + "</option>");
                                  });
                              });
                      });
                  });
              </script> -->

                            </table>
                            <button class="btn btn-primary btn-lg">REGISTRAR</button>
                        </form>


                        <!-- FORM FINAL -->

                    </div><!--/porlets-content-->
                </div><!--/block-web-->
            </div><!--/col-md-12-->
        </div><!--/row-->



    </div>
    <br>
    <div class="container">  <a href="{{ route('CRM') }}"><button class="btn btn-primary btn-lg">Volver</button></a></div>
@endsection
