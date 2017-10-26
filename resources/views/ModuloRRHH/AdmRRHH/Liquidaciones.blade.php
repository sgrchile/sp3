@extends('layouts.app')
@section('content')

  <div class="row">
    <div class="col-xs-12 col-md-12 col-sm-12">
      <div class="block-web">
        <div class="header">
          <div class="actions"></div>
          <h1 class=" text-center text-uppercase" >LIQUIDACION DE SUELDO</h1>
        </div>
        <div class="porlets-content">
          <!-- FORM INICIO -->
          <div class="container-fluid" align="center">

          <label>BUSCAR PERSONAL:</label><input type="text" required  style="width:175px;">
          <button type="button" class="btn btn-primary btn-xs">  <i class="fa fa-search" style="font-size:36px"></i></button>

          <table class="table-responsive text-right" align="center" >

            <td><br></td>
            <tr>
              <td>NOMBRE:</td>
              <td><input type="text" readonly  style="width:175px;"></td>

              <td>APELLIDOS:</td>
              <td><input type="text" readonly  style="width:175px;"></td>

              <td>RUT:</td>
              <td><input type="text" readonly  style="width:175px;"></td>

            </tr>
            <tr>
              <td>EMPRESA:</td>

              <td>
                <input type="text" readonly  style="width:175px;">
              </td>
              <td>CARGO:</td>
              <td>
                <input type="text" readonly  style="width:175px;">
              </td>
              <td>TIPO DE PERSONAL:</td>
              <td>
                <input type="text" readonly  style="width:175px;">
              </td>

            </tr>

            <tr>
              <td>CENTRO DE NEGOCIO:</td>
              <td>
                <input type="text" readonly  style="width:175px;">
              </td>

              <td>AFP:</td>

              <td>
                <input type="text" readonly  style="width:175px;">
              </td>

              <td>SEGURO MEDICO:</td>

              <td>
                <input type="text" readonly  style="width:175px;">
              </td>

            </tr>

          </table>
          <br>
          <div class="container-fluid" >

            <div class="row"  >
              <div class="col-md-2" ></div>
              <div class="col-md-4" >
                <table class="table-condensed text-right" >
                  <tr>
                    <th colspan="2">DETALLE HABERES</th>
                  </tr>

                  <tr>
                    <td><label>SUELDO BASE:</label></td>
                    <td><input type=number required min="0"  style="width:100px;"></td>
                  </tr>

                  <tr>
                    <td><label>DIAS TRABAJADOS</label></td>
                    <td><input type=number required min="0"  style="width:100px;"></td>
                  </tr>


                  <tr>
                    <td><label>BONO PRODUCCION:</label></td>
                    <td><input type=number required min="0"  style="width:100px;"></td>
                  </tr>

                  <tr>
                    <td><label>GRATIFICACION MENSUAL:</label></td>
                    <td><input type=number required min="0"  style="width:100px;"></td>
                  </tr>

                  <tr>
                    <td><label>T HAB IMP Y TRIBUTARIO</label></td>
                    <td><input type=number required min="0"  style="width:100px;"></td>
                  </tr>

                  <tr>
                    <td><label>T COLACION</label></td>
                    <td><input type=number required min="0"  style="width:100px;"></td>
                  </tr>

                  <tr>
                    <td><label>T MOVILIZACION</label></td>
                    <td><input type=number required min="0"  style="width:100px;"></td>
                  </tr>


                  <tr>
                    <td><label>VIATICO/AGUINALDO</label></td>
                    <td><input type=number required min="0"  style="width:100px;"></td>
                  </tr>

                
                  <tr>
                    <td><label>TOTAL HABERES</label></td>
                    <td><input type=number readonly min="0"  style="width:100px;"></td>
                  </tr>

                </table>
              </div>

              <div class="col-md-4">
                <table  class=" table-condensed  text-right" >
                  <tr>
                    <th colspan="2">DETALLE DESCUENTOS</th>
                  </tr>

                  <tr>
                    <td><label>T. FONDO PENSION:</label></td>
                    <td><input type=number required min="0"  style="width:100px;"></td>
                  </tr>

                  <tr>
                    <td><label>APORTE SALUD:</label></td>
                    <td><input type=number required min="0"  style="width:100px;"></td>
                  </tr>

                  <tr>
                    <td><label>AFC TRAB 0.6:</label></td>
                    <td><input type=number required min="0"  style="width:100px;"></td>
                  </tr>

                  <tr>
                    <td><label>T. LEYES SOCIALES:</label></td>
                    <td><input type=number required min="0"  style="width:100px;"></td>
                  </tr>

                  <tr>
                    <td><label>ANTICIPO DE SUELDO:</label></td>
                    <td><input type=number required min="0"  style="width:100px;"></td>
                  </tr>
                  <tr>
                    <td><label>&nbsp;</label></td>
                  </tr>

                  <tr>
                    <td><label>&nbsp;</label></td>
                  </tr>


                  <tr>
                    <td><label>&nbsp;</label></td>
                  </tr>


                  <tr>
                    <td><label>&nbsp;</label></td>
                  </tr>




                  <tr>
                    <td><label>TOTAL DESCUENTOS:</label></td>
                    <td><input type=number readonly min="0"  style="width:100px;"></td>
                  </tr>

                  <tr>
                    <td><label>SUELLDO LIQUIDO:</label></td>
                    <td><input type=number readonly min="0"  style="width:100px;"></td>

                  </tr>
                </table>


              </div>
            </div>



            <button class="btn btn-primary btn-lg">CALCULAR</button>
            <button class="btn btn-primary btn-lg">IMPRIMIR</button>
            <button class="btn btn-primary btn-lg">PDF</button>
            <br>
            <br>
            <button class="btn btn-primary btn-lg">REGISTRAR</button>
          </div>

          <!-- FORM FINAL -->
          </div><!--/container-->
        </div><!--/porlets-content-->
      </div><!--/block-web-->
    </div><!--/container-->
    </div><!--/col-md-12-->
  </div><!--/row-->

<br>
<br>


<br>
<div class="container">  <a href="{{route('admRRHH')}}"><button class="btn btn-primary btn-lg">Volver</button></a></div>



<br>
<br>

@endsection
