@extends('layouts.app')
@section('content')

    {!! Html::script('js/jquery-2.1.1.min.js') !!}

    <div class="row">
        <div class="col-xs-12 col-md-12 col-sm-12">
            <div class="block-web">
                <div class="header">
                    <div class="actions"></div>
                    <h1 class="text-center text-uppercase">COTIZACION</h1>
                </div>
                <div class="porlets-content">
                    <!-- FORM INICIO -->
                    {!! Form::open(['route' => 'post.cotizacion']) !!}
                    <div class="row">
                        <div class="col-sm-6">

                            <h4 class="text-left text-uppercase">FECHA:</h4>
                        </div>
                        <div class="col-sm-6">
                            <h4 class="text-right text-uppercase">{!! Carbon\Carbon::now() !!} </h4>
                        </div>
                    </div>

                    <h4>DATOS DE CLIENTE</h4>
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
                        </tr>

                    </table>
                    <a href="#" class="btn btn-primary btn-sm" onclick='masfilas("mytable")'>Agregar</a>

                    <table class="table-condensed table-bordered" id="mytable" >
                        <tr>
                            <td>TIPO</td>
                            <td>ID</td>
                            <td>ITEM</td>
                            <td>CANTIDAD</td>
                            <td>COSTO UNITARIO</td>
                            <td>DSCTO.</td>
                            <td>COSTO</td>
                            <td>ACCION</td>
                        </tr>

                            <tr>
                                <td>  </td>
                                <td>  </td>
                                <td>  </td>
                                <td>  </td>
                                <td>  </td>
                                <td>  </td>
                                <td>  </td>
                                <td></td>
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
                            <td><input type="number" min="0" name="cantidad0" class="form-control" id="cantidad" style="width:85px;"  required/></td>
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
                            <td><input type="number" min="0" id="desc" name="descuento" style="width:100px;" class="form-control" /></td>
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
                    $.get("https://plataforma.sgrchile.com/api/servicio/").done(function(data){
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
                    $.get("https://plataforma.sgrchile.com/api/producto/").done(function(data){
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
                    $("#idpro").on("change", function(){
                        let prod = $(this).val();
                        $("#item").empty();
                        let tpventa = $("#tpventa").val();
                        if (tpventa == 1){
                            $.get("https://plataforma.sgrchile.com/api/itemserv/" + prod).done(function(data){
                                if (data !== null){
                                    $("#item").val(data('SER_DESC'));
                                    $("#costouni").val(data('PROD_PRECIO_VENTA'));
                                }
                            });
                        } if (tpventa == 2) {
                            alert(tpventa);
                            $.get("https://plataforma.sgrchile.com/api/itemprod/" + prod).done(function(data){
                                if (data !== null){
                                    $("#item").val(data('PROD_DESC'));
                                    $("#costouni").val(data('PROD_PRECIO_VENTA'));
                                }
                            });
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
