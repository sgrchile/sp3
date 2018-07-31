@extends('layouts.app')
@section('content')

    {!! Html::script('js/jquery-2.1.1.min.js') !!}

    <div class="row">
        <div class="col-xs-12 col-md-12 col-sm-12">
            <div class="block-web" align="center">
                <div class="header">
                    <div class="actions"></div>
                    <h4 class="text-left text-uppercase">{!! Carbon\Carbon::now()->toFormattedDateString() !!} </h4>
                    <br>
                    <h4 class="text-left text-uppercase">{{$ultcot}}</h4>
                    <br>
                    <h1 class="text-center text-uppercase">COTIZACION</h1>
                </div>
                <div class="porlets-content">
                    <!-- FORM INICIO -->
                    {!! Form::open(['route' => 'post.cotizacion']) !!}

                    <table class="table table-condensed  text-right" align="center">

                        <tr>
                            <td>RUT:</td>
                            <td>
                            <input style="width:175px" name="rut" class="form-control" required type="text" id="nro_solicitud" value="{{ isset($lstcliente) ? $lstcliente->CLI_RUT : '' }}" readonly>
                            </td>
                            <td><a class="btn btn-primary" data-toggle="modal" data-target="#selCliente">traer</a></td>
                        </tr>
                        <tr>
                            <td>NOMBRE:</td>
                            <td><input type="text" name="nombre" value="{{ isset($lstcliente) ? $lstcliente->CLI_NOMBRE : '' }}" style="width:175px;" class="form-control"  readOnly/></td>

                            <td>TELEFONO:</td>
                            <td><input type="text" name="telefono"  value="{{ isset($lstcliente) ? $lstcliente->CLI_FONO : '' }}" style="width:175px;" class="form-control"  readOnly/></td>
                        </tr>
                        <tr>
                            <td>DIRECCION:</td>
                            <td><input type="text" name="direccion" value="{{ isset($lstcliente) ? $lstcliente->CLI_DIRECCION : '' }}" style="width:175px;" class="form-control"  readOnly/></td>
                            <td>ACT. COMERCIAL:</td>
                            <td><input type="text" name="act_comercial" value="{{ isset($lstcliente) ? $lstcliente->CLI_ACT_COMERCIAL : '' }}" style="width:175px;" class="form-control"  readOnly/></td>
                        </tr>
                        <tr>
                            <td>EMAIL:</td>
                            <td><input type="text" name="email"  value="{{ isset($lstcliente) ? $lstcliente->CLI_EMAIL : '' }}" style="width:175px;" class="form-control"  readOnly/></td>

                            <td>FECHA CADUCIDAD :</td>
                            <td>
                                {{ Form::date('fecha',Carbon\Carbon::now()->addDays(29),['class'=>'form-control','style'=>'width:175px;']) }}
                            </td>
                        </tr>
                        <tr>
                            <td>ALCANCE</td>
                            <td> <textarea id="comentario" name="comentario" class="form-control" style=" width:175px; max-width:175px; max-height:175px;" required></textarea></td>
                        </tr>

                    </table>
                    <div align="left"><a href="#" class="btn btn-primary btn-sm"  onclick='masfilas("mytable")'>Agregar</a></div>

                    <table class="table-condensed table-bordered" id="mytable" >
                        <tr>
                            <td>tipo</td>
                            <td>id</td>
                            <td>item</td>
                            <td>cantidad</td>
                            <td>precio lista</td>
                            <td>descuento</td>
                            <td>precio unitario</td>
                            <td>acción</td>
                        </tr>

                        <tr id="fila0">
                            <td>
                                <select name="tpventa0" required class="form-control" id="tpventa">
                                    <option value="">Seleccione</option>
                                    @foreach($tpventa as $tpv)
                                        <option value="{{ $tpv->ID_TP_VENTA }}">{{ $tpv->DESC_TP_VENTA }}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td>
                                <select name="idpro0" required class="form-control" id="idpro" >
                                    <option value="">Seleccione</option>
                                </select>
                            </td>
                            <td><input type="text" name="item0" id="item" style="width:175px;" class="form-control"  readOnly/></td>
                            <td><input type="number" min="0" name="cantidad0" class="form-control" id="cantidad0" style="width:85px;"  required/></td>
                            <td><input type="text" name="costouni0" id="costouni" style="width:85px;" class="form-control"  readOnly/></td>
                            <td><input type="number" name="dsctouni0" id="dsctouni" style="width:85px;" class="form-control"  readOnly/></td>
                            <td> <input type="text" name="costototal0" id="costototal" style="width:85px;" class="form-control numero"  readOnly/></td>
                            <td> <input type="button" class="borrar" value="Eliminar" /></td>

                        </tr>

                        <tr>

                            <td colspan="6" align="right">SUB TOTAL:</td>
                            <td><input type="text" id="subtotal" name="subtotal" style="width:100px;" class="form-control"  readOnly/></td>
                        </tr>
                        <tr>

                            <td colspan="6" align="right">DESCUENTO:</td>
                            <td><input type="text" min="0" id="desc" placeholder="0%" name="descuento" style="width:100px;" class="form-control" /></td>
                        </tr>
                        <tr>

                            <td colspan="6" align="right">TOTAL DESCUENTO:</td>
                            <td><input type="number" id="totaldesc" name="totaldesc" style="width:100px;" class="form-control"  readOnly/></td>
                        </tr>
                        <tr>

                            <td colspan="6" align="right">TOTAL NETO:</td>
                            <td><input type="number" name="totalneto" style="width:100px;" class="form-control"  readOnly/></td>
                        </tr>


                        <tr>

                            <td colspan="6" align="right">IVA:</td>
                            <td><input type="text" name="iva" style="width:100px;" class="form-control"  readOnly/></td>
                        </tr>
                        <tr>

                            <td colspan="6" align="right">BRUTO:</td>
                            <td><input type="text" name="totalbruto" style="width:100px;" class="form-control"  readOnly/></td>
                        </tr>
                    </table>

                    <div align="center">
                        @if(\Illuminate\Support\Facades\Auth::user()->PRO_EMP = 3)
                            <textarea id="glosa" name="glosa" href="CotizacionLoica.txt" class="form-control" style=" width:900px; height:500px; max-width:1000px; max-height:1000px;" required
                            >Loica  dispondrá  de  profesionales  especialistas  en  cada  una  de  las  áreas  abordadas  en  esta  cotización  y  aplicará  una  adecuada  estrategia  de  trabajo  para  asegurar  una  óptima  calidad  de  este  servicio.

Condiciones  Generales
1.  IVA
19%  sobre  el  total  neto

2.  Condiciones  de  pago  /  post  servicio
50%  de  apertura  y  50%  contra  cierre  del  servicio  /  pago  30  días  solo  en  caso  de  Licitaciones  Públicas

3.  Plazo  de  entrega
Ajustada  al  requerimiento

4.  Garantía
Servicio  de  excelencia,  ejecutado  por  profesionales  del  área,  que  incluye  una  asesoría  permanente  hasta  la  satisfacción  total  del  cliente

5.  Datos  para  la  Transferencia
Cuenta  Corriente,  6936151-0  Banco  Santander

6.  Vigencia  de  la  cotización
La  presente  cotización  tiene  una  vigencia  de  15  días  desde  la  fecha  de  su  elaboración


            PREPARÓ                                                 APROBÓ
            VENDEDOR                                           Waldemar  Cepeda
        Ejecutivo  de  Ventas                                  Gerente  General
_________________________________________________________________________________________________
Casa  Matriz:  Prat  815  Temuco  -  Fono:  45-2730069  - www.loicaproducciones.cl
</textarea>
                        @endif
                        @if(\Illuminate\Support\Facades\Auth::user()->PRO_EMP = 1)
                            <textarea id="glosa" name="glosa" class="form-control" style=" width:900px; height:500px; max-width:1000px; max-height:1000px;" required>Todas  las  actividades  serán  realizadas  de  acuerdo  a  procedimientos  y  protocolos  formales  contemplados  en  la  institucionalidad  ambiental  vigente.  Biogest  dispondrá  de  profesionales  expertos  en  cada  uno  de  los  componentes  ambientales  abordados  y  aplicará  una  adecuada  estrategia  de  trabajo  para  asegurar  una  óptima  calidad  de  este  servicio.  Condiciones  Generales  1.  IVA  Servicio  profesional  exento  de  iva  o  19%  sobre  el  neto  según  corresponda  2.  Condiciones  de  pago  40%  al  inicio,  40%  contra  entrega  y  20%  contra  cierre  del  servicio.  Se  emitirá  una  factura  para  cada  etapa.  3.  Plazo  de  entrega  15  días  hábiles  contados  desde  el  recibo  del  total  de  documentos  solicitados  al  cliente.  4.  Garantía  Servicio  de  excelencia,  ejecutado  por  profesionales  del  área  ambiental,  que  incluye  una  asesoría  permanente  hasta  la  obtención  del  objetivo  del  servicio.  5.  Referencias  Biogest  Ltda,  asesora  al  grupo  ISA  en  las  concesiones  viales  del  sur  de  Chile,  Universidad  Católica  y  MOP,  entre  otros  6.  Vigencia  de  la  cotización  La  presente  cotización  tiene  una  vigencia  de  20  días  contados  desde  la  fecha  de  emisión.PREPARÓ  APROBÓBeatriz  Osorio  Ejecutivo  de  Ventas  Agnes  Ugarte  Potter  Coordinador  General  _________________________________________________________________________________________________Biogest  Ltda.  Casa  Matriz:  Prat  815  Temuco  Fono:  45-2741910,  sucursal  Santiago:  El  director  6000  oficina  207  sucursal  La  Serena:  Avenida  Costanera  5425  Oficina  1110  - www.biogest.cl
</textarea>
                        @endif
                        @if(\Illuminate\Support\Facades\Auth::user()->PRO_EMP = 4)
                            <textarea id="glosa" name="glosa" class="form-control" style=" width:900px; height:500px; max-width:1000px; max-height:1000px;" required>Alcances  del  servicio  Kutralco  dispone  de  profesionales  especialistas  en  turismo,  quienes  brindar  án  a  Usted  una  asesoría  permanente  para  asegurar  una  óptima  calidad  de  este  servicio.  Condiciones  Generales  1.  IVA  19%  sobre  el  total  neto  (cuando  corresponda)  2.Condiciones  de  pago  Pago  contado  presencial,  transferencia  bancaria  o  webpay.  Se  emitir  á  una  factura  o  boleta  según  requerimiento  3.  Fecha  de  ejecución  del  servicio  Se  coordinará  directamente  con  el  cliente  o  agencia  según  corresponda  4.  Garantía  Servicio  de  excelencia,  ejecutado  por  profesionales  del  turismo,  con  amplia  trayectoria  nacional  e  internacional  5.  Datos  para  la  Transferencia  Titular:  KUTRALCO  S.P.A.  Rut:  76.171.597-6  CTA.  CTE:  6565720-1  Banco  Santander.  6.  Vigencia  de  la  cotización  La  presente  cotización  tiene  una  vigencia  de  24  horas  contadas  desde  su  elaboración  /  solicite  mayor  vigencia  con  el  vendedor  PREPARÓ  APROBÓ  Graciela  Fuentealba  Ejecutivo  de  Ventas  Yohanna  Barría  Jefe  de  Ventas  _________________________________________________________________________________________________Tour  Operador  y  Agencia  de  Viajes  -  Casa  Matriz:  Prat  815  -  Temuco  -  sucursal  La  Serena:  Av  del  Mar  5425  (+56)  45  2  405010  /  45  2  320034  - ventas@kutralco.com  - www.kutralco.com - ventas@andinotravel.cl -  www.andinotravel.cl
</textarea>
                        @endif
                        @if(\Illuminate\Support\Facades\Auth::user()->PRO_EMP != 3 &&
                        \Illuminate\Support\Facades\Auth::user()->PRO_EMP != 4 &&
                        \Illuminate\Support\Facades\Auth::user()->PRO_EMP != 1)
                            <textarea id="glosa" name="glosa" class="form-control" style=" width:900px; height:500px; max-width:1000px; max-height:1000px;" required>
                            </textarea>
                        @endif
                    </div>
                    <div class="container" align="center">
                        <button class="btn btn-primary btn-lg">REGISTAR</button>
                    </div>

                {!! Form::close() !!}

                    <!-- FORM FINAL -->

                </div><!--/porlets-content-->
            </div><!--/block-web-->
        </div><!--/col-md-12-->
    </div><!--/row-->

    <div class="modal fade" id="selCliente" role="dialog" >
        <div class="modal-dialog modal-lg">

            <!-- Modal content-->
            <div class="modal-content" >
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title text-center">Seleccion de Cliente</h4>
                </div>
                <div class="modal-body">
                    <table align="center" class="table table-bordered" id="table_sfondos">
                        <tr>
                            <td>Rut</td>
                            <td>Nombre</td>
                            <td>Email</td>
                            <td>SELECCIONAR</td>
                        </tr>
                        @foreach($clientes as $sfondo)
                            <tr>
                                <td>{{ $sfondo->CLI_RUT  }}</td>
                                <td>{{ $sfondo->CLI_NOMBRE }}</td>
                                <td>{{ $sfondo->CLI_EMAIL }}</td>
                                <td><a href={{route('get.modificar.cotizar', $sfondo->CLI_RUT)}}><button class="btn btn-primary btn-sm"> &#10004;</button></a></td>
                            </tr>
                        @endforeach
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>



    <div class="container">
        <a href="{{route('CRM')}}"><button class="btn btn-primary btn-lg"> Volver</button></a>

    </div>
    </a>
    <br>
    <script  type='text/javascript'>
        var count = 0;
        $(document).ready(function(){
            $("#tpventa").on("change", function(){
                let tpventa = $(this).val();
                $("#idpro").empty();
                if (tpventa == 1){
                    $.get("http://127.0.0.1:8000/api/servicio/").done(function(data){
                        if (data !== null){
                            if (Object.keys(data).length > 0 ){
                                $.each(data, function( index, value ){
                                    let option = "<option value='"+ value.SER_COD + "'>" + value.SER_DESC+ "</option>";
                                    $("#idpro").append(option);
                                });
                                $("#idpro").trigger("change");
                            }

                        }
                    });
                }if (tpventa == 2){
                    $.get("http://127.0.0.1:8000/api/producto/").done(function(data){
                        if (data !== null){
                            if (Object.keys(data).length > 0 ){
                                $.each(data, function( index, value ){
                                    let option = "<option value='"+ value.PROD_COD + "'>" + value.PROD_DESC+ "</option>";

                                    $("#idpro").append(option);
                                });
                                $("#idpro").trigger("change");
                            }
                        }
                    });
                }
            });
            $("#idpro").on("change", function(){
                let prod = $(this).val();
                $("#item").empty();
                let tpventa = $("#tpventa").val();
                //alert(prod);
                if (tpventa == 1){
                    $.get("http://127.0.0.1:8000/api/itemserv/" + prod).done(function(data){
                        if (data !== null){
                            $("#item").val(data('SER_DESC'));
                            $("#costouni").val(data('PROD_PRECIO_VENTA'));
                        }
                    });
                } if (tpventa == 2) {
                    $.get("http://127.0.0.1:8000/api/itemprod/" + prod).done(function(data){
                        if (data !== null){
                            $("#item").val(data('PROD_INFO'));
                            $("#costouni").val(data('PROD_PRECIO_VENTA'));
                        }
                    });
                }

            });
        });
        function masfilas(arg) {
            if (document.getElementById(arg)) {
                count++;
                var texto =
                    '<tr id="fila' + count + '">' +
                    '              <td>' +
                    '                <select name="tpventa' + count + '" required class="form-control" id="tpventa">' +
                    '                    <option value="">Seleccione</option>' +
                    '                  @foreach($tpventa as $tpv)' +
                    '                    <option value="{{ $tpv->ID_TP_VENTA }}">{{ $tpv->DESC_TP_VENTA }}</option>' +
                    '                  @endforeach' +
                    '                </select>' +
                    '              </td>' +
                    '              <td>' +
                    '                <select name="idpro' + count + '" required class="form-control" id="idpro">' +
                    '                    <option value="">Seleccione</option>' +
                    '                </select>' +
                    '              </td>' +

                    '<td><input type="text" style="width:175px;" class="form-control" readOnly id="item" name="item' + count + '"></td>' +

                    '<td><input type="number" style="width:85px;" required min="0" class="form-control" id="cantidad" name="cantidad' + count + '"></td>' +

                    '<td><input type="text" style="width:85px;" readOnly min="0" class="form-control" id="costouni" name="costouni' + count + '"></td>' +

                    '<td><input type="number" style="width:85px;" readOnly min="0" class="form-control" id="dsctouni" name="dsctouni' + count + '"></td>' +

                    '<td><input type="text" style="width:85px;" readOnly min="0" class="form-control numero" id="costototal" name="costototal' + count + '"></td>' +

                    '<td><input type="button" class="borrar" value="Eliminar" /></td></tr>';

                $("#fila0").after(texto);
                calcular_costo();
                calcular_totales();
                calcular_desc();
            }
        }
        function calcular_costo() {
            var total = 0;
            $('#cantidad').keyup(function (){
                total = ($('#costouni').val() * eval($(this).val()))-($('#dsctouni')*$('#costouni').val());
            });
            $("#costototal").val(total);
        }
        function calcular_totales() {

            var importe_total = 0;
            $('.numero').keyup(function (){
                $(".numero").each(
                    function(index, value) {
                        importe_total = importe_total + eval($(this).val());
                    }
                );
            });
            $("#subtotal").val(importe_total);
        }
        function calcular_desc() {

            var importe_total = 0;
            $('#desc').keyup(function (){
                importe_total =  ($("#subtotal").val)*($(this).val());
            });
            $("#totaldesc").val(importe_total);
        }
        $(document).ready(function(){

            calcular_costo();
            calcular_totales();
            calcular_desc();
        });
        $(function () {
            $(document).on('click', '.borrar', function (event) {
                event.preventDefault();
                $(this).closest('tr').remove();
            });
        });
    </script>

@endsection
                                                                                                                                                                  