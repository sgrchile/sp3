@extends('layouts.app')
@section('content')
<div ng-app="">

<h1 class="text-center text-uppercase">Estado de Orden de Trabajo</h1>


<div class="container " align="center">

<br>

<select ng-model="myVar">
    <option value="1">SGR CHILE</option>
    <option value="2">TRENER</option>
    <option value="3">LOICA</option>
    <option value="4">KUTRALCO</option>
</select>

<br>
 <br>
<div class="container" align="center" ng-switch="myVar">

          <div ng-switch-when="1">
            <div class="row">

              <div class="col-sm-6">
                <table class=" table table-bordered text-center"  >
                  <tr>
                    <th colspan="2">
                    <h3 class="text-center">  SOLICITUD DE FONDO</h3>
                    </th>
                  </tr>

                  <tr>
                  <td>Por Transferir</td>
                  <td>Por consiliar</td>
                  </tr>

                  <tr>
                  <td><h2>{{ $aprobadas->count() }}</h2></td>
                  <td><h2>{{ $porconciliar->count() }}</h2></td>
                  </tr>
                  <tr>
                  <td>
                  <a href="{{route('verTransferir')}}"></a><button class="btn btn-primary btn-sm" style="width:139px;" >Transferir</button>


                  </td>
                  <td>
                  <a href={{route('verRendir')}}><button class="btn btn-primary btn-sm" style="width:139px;" >Rendir</button></a>

                  </td>
                  </tr>
                </table>
                <br>
              </div>

              <div class="col-sm-6">
                <table class="table  table-bordered  text-center" align="center">
                  <tr>
                  <th colspan="2"><h3 class="text-center">  FACTURA</h3></th>
                  </tr>
                  <tr>
                  <td>Por facturar</th>
                  <td>Por cobrar</th>
                  </tr>
                  <tr>
                  <td><h2>{{ $porfacturar->count() }}</h2></td>
                  <td><h2>{{ $porcobrar->count() }}</h2></td>
                  </tr>
                  <tr>
                  <td>
                  <button class="btn btn-primary btn-sm"  style="width:139px;" >Facturar</button>

                  </td>
                  <td>
                  <button class="btn btn-primary btn-sm" style="width:139px;" data-target="#regEgreso" data-backdrop="static">Ingreso</button>
                  </td>
                  </tr>
                </table>
                <br>
            
              </div>

              <div class="col-sm-6">
                <table class="table table-bordered text-center"  align="center">
                <tr>
                  <th colspan="2" class="text-center"><h3>LIQUIDACIONES</h3></th>

                </tr>

                <tr>
                <td>Por liquidar</td>
                <td>Por pagar</td>
                </tr>
                <tr>
                  <td><h2>{{$porliquidar->count()}}</h2></td>
                  <td><h2>{{$porpagar->count()}}</h2></td>
                </tr>

                <tr>
                <td>
                <button class="btn btn-primary btn-sm" style="width:139px;">Generar Documentos</button>
                </td>
                <td>
                <button class="btn btn-primary btn-sm" style="width:139px;">Pagar</button>
                </td>
                </tr>

                </table>
                <br>
              </div>

              <div class="col-sm-6">
                <table class="table table-bordered text-center"  align="center" >
                  <tr>
                  <th colspan="2"><h3 class="text-center">MOVIMIENTO</h3></th>
                  </tr>
                  <tr>
                  <td>Cartolas por subir</td>
                  <td>Cuentas por conciliar</td>
                  </tr>
                  <tr>
                  <td><h2>###</h2></td>
                  <td><h2>###</h2></td>
                  </tr>
                  <tr>
                  <td>
                    <button class="btn btn-primary btn-sm" style="width:139px;">Subir cartola</button>
                  </td>
                  <td>
                  <a href="../sol/consolidarNewCartola.php"><button class="btn btn-primary btn-sm" style="width:139px;">Conciliar Cartola</button>
                  </td>
                  </tr>

                </table>
                <br>
                </div>

            </div>
          </div>

          <div ng-switch-when="2">
            <!--se llama a base de datos para llenar esta tabla -->
            <table align="center" cellspacing="15px" style="width: 700px; height: 300px;" border="1" >
              <tr>

                <td rowspan="3">C1</td>
                <td>Estado:</td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>6</td>
                <td>7</td>
              </tr>
              <tr>
                <td>Dinero:</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>Cantidad</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>

            </table>

          </div>

          <div ng-switch-when="3">

            <!--se llama a base de datos para llenar esta tabla -->
            <table align="center" cellspacing="15px" style="width: 700px; height: 300px;"  border="1" >
              <tr>

                <td rowspan="3">C1</td>
                <td>Estado:</td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>6</td>
                <td>7</td>
              </tr>
              <tr>
                <td>Dinero:</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>Cantidad</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>

            </table>

          </div>

          <div ng-switch-when="4">

            <!--se llama a base de datos para llenar esta tabla -->
            <table align="center" cellspacing="15px" style="width: 700px; height: 300px;"  border="1" >
              <tr>

                <td rowspan="3">C1</td>
                <td>Estado:</td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>6</td>
                <td>7</td>
              </tr>
              <tr>
                <td>Dinero:</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>Cantidad</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>

            </table>

          </div>

</div>
</div>

<div class="container">  <a href={{route('ModuloOt')}}><button class="btn btn-primary btn-lg">Volver</button></a></div>

<br>
<br>
<br>
<br>
</div>
@endsection
