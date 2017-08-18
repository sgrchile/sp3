@extends('layouts.app')
@section('content')


<br>
<div class="container" align="center">

  <div class="row">
    <div class="col-xs-12 col-md-12 col-sm-12">
      <div class="block-web">
        <div class="header">
          <div class="actions"></div>
          <h1 class=" text-center text-uppercase" >MIS DATOS PERSONALES</h1>
        </div>
        <div class="porlets-content">
          <!-- FORM INICIO -->

          <table class="table-condensed text-right" >

            <tr>
              <td>DEPORTES:</td>
              <td><textarea name="message" class="form-control" style ="max-width:175px; max-height:175px;" placeholder="¿Que deportes practica?"></textarea></td>

              <td>HOBBY'S:</td>
              <td><textarea name="message" class="form-control" style ="max-width:175px; max-height:175px;" placeholder="¿Que deportes practica?"></textarea></td>
            </tr>

            <tr>
              <td>ZONA LABORAL DE PREF.:</td>
              <td><textarea name="message"  class="form-control" style ="max-width:175px; max-height:175px;" placeholder="¿Que deportes practica?"></textarea></td>
              <td>EMPRENDIMIENTOS:</td>
              <td><textarea name="message" class="form-control" style ="max-width:175px; max-height:175px;" placeholder="¿Que deportes practica?"></textarea></td>
            </tr>

            <tr>
              <td>AREA DE MEJOR DESEMPEÑO:</td>
              <td><textarea name="message" class="form-control" style ="max-width:175px; max-height:175px;" placeholder="¿Que deportes practica?"></textarea></td>

              <td>LUGAR IDEAL PARA VIVIR:</td>
              <td><textarea name="message" class="form-control" style ="max-width:175px; max-height:175px;" placeholder="¿Que deportes practica?"></textarea></td>
            </tr>

            <tr>

              <td>INSTRUMENTAL:</td>
              <td><textarea name="message" class="form-control" style ="max-width:175px; max-height:175px;" placeholder="¿Que deportes practica?"></textarea></td>
              <td>LUGAR DE NACIMIENTO:</td>
              <td><textarea name="message" class="form-control" style ="max-width:175px; max-height:175px;" placeholder="¿Donde nacio?"></textarea></td>

            </tr>

            <tr>

              <td>TRABAJO EN EQUIPO:</td>
              <td>
                <select style="width:175px;" class="form-control">
                  <option>SI</option>
                  <option>NO</option>
                </select>
              </td>

              <td>EQUIPO PERSONAL:</td>
              <td>
                <select style="width:175px;" class="form-control">
                  <option>SI</option>
                  <option>NO</option>
                </select>
              </td>
            </tr>

            <tr>
              <td>CUENTA CON LUGAR ADECUADO DE TRABAJO:</td>
              <td>
                <select style="width:175px;"  class="form-control">
                  <option>SI</option>
                  <option>NO</option>
                </select>
              </td>

              <td>TIENE INTERNET:</td>
              <td>
                <select style="width:175px;"  class="form-control">
                  <option>SI</option>
                  <option>NO</option>
                </select>
              </td>

            </tr>

            <tr>
              <td>EST. ED. MEDIA:</td>
              <td><input type="text" readonly class="form-control"  style="width:175px;"></td>

              <td>EST. ED. BASICA:</td>
              <td><input type="text" readonly class="form-control"  style="width:175px;"></td>
            </tr>

            <tr>
              <td>RESIDENCIA ACTUAL:</td>
              <td><input type="text" readonly class="form-control"  style="width:175px;"></td>

              <td>VEHICULO:</td>
              <td>
                <select id=Selvehiculo class="form-control" style="width:175px;">
                  <option value="1">SI</option>
                  <option value="0">NO</option>
                </select>
              </td>
            </tr>

            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>MODELO:</td>
              <td><input type="text" readonly class="form-control" style="width:175px;"></td>
            </tr>

            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>MARCA:</td>
              <td><input type="text" readonly class="form-control"  visible="false" style="width:175px;"></td>
            </tr>

            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>TIPO:</td>
              <td><input type="text" readonly  class="form-control" style="width:175px;"></td>
            </tr>

            <tr>
              <td>PERTENENCIA A INSTITUCIONES:</td>
              <td colspan="3">
                <input type="checkbox" name="vehicle2" value="Car">CHILE PAIS
                <input type="checkbox" name="vehicle2" value="Car">GREEN PEACE
                <input type="checkbox" name="vehicle2" value="Car">BOMBEROS
                <input type="checkbox" name="vehicle2" value="Car">FFAA
                <input type="checkbox" name="vehicle2" value="Car">SCOUTS
                <input type="checkbox" name="vehicle2" value="Car">CRUZ ROJA
              </td>
            </tr>

          </table>


          <br>
          <a href=""><button class="btn btn-primary btn-lg">REGISTRAR</button></a>

          <!-- FORM FINAL -->

        </div><!--/porlets-content-->
      </div><!--/block-web-->
    </div><!--/col-md-12-->
  </div><!--/row-->



<br>
<br>



</div>
<div class="container">

<a href="{{route("CarpetaPersonal")}}"><button class="btn btn-primary btn-lg">Volver</button></a>

</div>



<br>
<br>

@endsection
