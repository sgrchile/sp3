@extends('layouts.app')
@section('content')

<div class="row">
  <div class="col-xs-12 col-md-12 col-sm-12">
    <div class="block-web">
      <div class="header">
        <div class="actions"></div>
        <h1 class="content-header" align="center"><b>REGISTRO DE OFERTAS</b></h1>
      </div>
      <div class="porlets-content">
        <!-- FORM INICIO -->

        <div class="container" align="center" ng-app="">
          <table class="table-condensed text-right" align="center" >

        
        <tr>
        <td style="text-align:right"><label>TIPO DE OFERTA:</label></td>
        <td style="text-align:right">
            <select class="form-control" style="width:175px;" ng-model="myVar">
                <option value="1">Servicio Profesional o Técnico</option>
                <option value="2">Trasporte / Arriendo maquinaria</option>
                <option value="3">Oferta de Servicios</option>
                <option value="4">Oferta de Artículos</option>
            </select>
        </td>
        </tr>
        </table>
        <br>

        <div class="container" align="center" ng-switch="myVar">

        <div ng-switch-when="1">
         <h4 class="text-center">Servicio Profesional o Tecnico</h4>
         <form id="form1" name="form1" method="post" action="{{ route('post.registrarServicioProfesional') }}">
         {{ csrf_field() }}
         <table class="table-condensed" style="text-align:right" align="center">
           <table class="table-condensed text-right" align="center" >
           <tr>
             <td style="text-align:right"><label>ORIENTADO A:</label></td>
             <td style="text-align:right">
                 <select class="form-control" style="width:175px;" name="orientado" >
                     <option value="0">Seleccione</option>
                     <option value="1">Turismo</option>
                     <option value="2">Ingeniería</option>
                     <option value="3">Administración</option>
                     <option value="4">Producción Gráfica</option>
                 </select>
             </td>
           </tr>
           </table>
           <tr>
           <td  colspan="2" align=center ><label>DESCRIPCION:</label></td>
           </tr>

           <tr>
           <td colspan="2">
           <textarea rows="10" name="descripcion" required style="width:500px; max-width:500px;" class="form-control"></textarea>
           </td>
           </tr>
        </table>
         <table class="table-condensed" style="text-align:right;" align="center">
           <tr>
           <td><label>Formación:</label></td>
           <td style="text-align:left">
           <input type="radio" name="formacion" value="Profesional" checked > Profesional<br>
           <input type="radio" name="formacion" value="Técnica">Tecnica<br>
           </td>
           </tr>

           <tr>
           <td><label>Centro de educacion:</label></td>
           <td><input type="text" name="educacion" required id="cu" class="form-control"></td>
           </tr>

           <tr>
           <td><label>Carrera:</label></td>
           <td><input type="text" required id="carrera" name="carrera" class="form-control"></td>
           </tr>

           <tr>
           <td><label>Años de experiencia:</label></td>
           <td><input type="number" name="experiencia" required min="0"  id="aex" class="form-control"></td>
           </tr>

         <table class="table-condensed" style="text-align:right;" align="center">
           <tr>
           <td colspan="2" style="text-align:center"><label>Fortalezas:</label></td>
           </tr>
           <tr>
           <td colspan="2" style="text-align:center"><textarea class="form-control" name="fortaleza" style="width:500px; max-width:500px;" required rows="4" cols="50" id="fortalezas"></textarea></td>
           </tr>

           <tr>
           <td colspan="2" style="text-align:center"><label>Debilidades:</label></td>
           </tr>
           <tr>
           <td colspan="2" style="text-align:center"><textarea  class="form-control" name="debilidades" style="width:500px; max-width:500px;" required rows="4" cols="50" id="debilidades"></textarea></td>
           </tr>

           <tr>
           <td colspan="2" style="text-align:center"><label>Experiencia Laboral:</label></td>
           </tr>
           <tr>
           <td colspan="2" style="text-align:center"><textarea class="form-control" name="exlaboral" style="width:500px; max-width:500px;" required rows="4" cols="50" id="explab"></textarea></td>
           </tr>

           <tr>
           <td colspan="2" style="text-align:center"><label>Busco:</label></td>
           </tr>
           <tr>
           <td colspan="2" style="text-align:center"><textarea class="form-control" name="busco" style="width:500px; max-width:500px;" required rows="4" cols="50" id="Busco"></textarea></td>
           </tr>

           <tr>
           <td colspan="2" style="text-align:center"><label>Ofrezco:</label></td>
           </tr>
           <tr>
           <td colspan="2" style="text-align:center"><textarea class="form-control" name="ofrezco" style="width:500px; max-width:500px;" required rows="4" cols="50" id="ofresco"></textarea></td>
           </tr>


           <tr>
           <td colspan="2" style="text-align:center"><label>Cursos o posgrados:</label></td>
           </tr>
           <tr>
           <td colspan="2" style="text-align:center"><textarea class="form-control" name="cursos" style="width:500px; max-width:500px;" required rows="4" cols="50" id="crpsg"></textarea></td>
           </tr>

           <tr>
           <td colspan="2" style="text-align:center"><label>Cobertura del servicio (Lugar de desempeño laboral):</label></td>
           </tr>
           <tr>
           <td colspan="2" style="text-align:center"><textarea class="form-control" name="cobertura" style="width:500px; max-width:500px;" rows="4" cols="50" id="cobser" required></textarea></td>
           </tr>

           <tr>
               <td ><label>VALOR:</label></td>
               <td align="left"><input type="number" class="form-control" name="valor" required min="0" ></td>
           </tr>

           </table>
           <br>
           <button type="submit" class="btn btn-primary btn-lg" >Registrar Servicio Profesional</button>

           </form>
         </div>





        <div ng-switch-when="2">
         <h4 class="text-center">Trasporte / Arriendo maquinaria</h4>
         <form id="form1" name="form1" method="post" action="{{ route('post.registrarArriendoMaquinaria') }}">
         {{ csrf_field() }}
         <table class="table-condensed" style="text-align:right" align="center">
           <tr>
           <td style="text-align:right"><label>ORIENTADO A:</label></td>
           <td style="text-align:right">
               <select class="form-control" style="width:175px;" name="orientado" >
                   <option value="0">Seleccione</option>
                   <option value="1">Turismo</option>
                   <option value="2">Ingeniería</option>
                   <option value="3">Administración</option>
                   <option value="4">Producción Gráfica</option>
               </select>
           </td>
           </tr>
           <tr>
           <td  colspan="2" align=center ><label>DESCRIPCIÓN:</label></td>
           </tr>
           <tr>
           <td colspan="2">
           <textarea rows="10" class="form-control" name="descripcion" required style="width:500px; max-width:500px;"></textarea>
           </td>
           </tr>
        </table>
        <table class="table-condensed" style="text-align:right" align="center">
         <tr>
         <td><label>Tipo de vehículo o maquina:</label></td>
         <td><input type="text" name="vehiculo" class="form-control" required></td>
         </tr>
         <tr>
         <td><label>Marca Vehículo:</label></td>
         <td><input type="text" name="marca" class="form-control" required></td>
         </tr>
         <tr>
         <td><label>Año:</label></td>
         <td><input type="number" min="1900" max="2038" name="anho" class="form-control" required></td>
         </tr>
         <tr>
         <td><label>Seguros Asociados</label></td>
         <td><input type="TEXT" name="seguros" class="form-control" required></td>
         </tr>
         <tr>
         <td><label>Operario o chofer  incluido:</label></td>
         <td style="text-align:left">
           <input type="radio" name="chofer" value="Si" checked required> SI<br>
           <input type="radio" name="chofer" value="No" required>NO<br>
         </td>
         </tr>
         <tr>
         <td><label>Licencias de conducir</label></td>
         <td><input type="text" name="licencia" class="form-control" required></td>
         </tr>
         <tr>
         <td><label>Cursos:</label></td>
         <td><input type="text" name="cursos" class="form-control" required></td>
         </tr>
         <tr>
         <td><label>Dias laborables:</label></td>
         <td style="text-align:left;"><input type="TEXT" name="dlaborales" class="form-control" required></td>
         </tr>
         <tr>
         <td><label>Horas laborales:</label></td>
         <td style="text-align:left">
           <input type="time" name="horainicio" class="form-control" required >A
           <input type="time" name="horafinal" class="form-control" required >
        </td>
         </tr>
         <tr>
           <td><label>Cobertura del servicio:</label></td>
           <td><input type="text" name="cobertura" class="form-control" required></td>
         </tr>
         <tr>
         <td><label>Razon de cobro:</label></td>
         <td><input type="text" name="cobro" class="form-control" required></td><!--preguntar si es necesario hacerlo con un cbx o concaja de texto-->
         </tr>
         <tr>
           <td><label>VALOR:</label></td>
           <td><input type="number" name="valor" class="form-control" required min="0" ></td>
         </tr>
         </table>
         <br>
            <button type="submit" class="btn btn-primary btn-lg" >Registrar Trasporte / Arriendo maquinaria</button>
         </form>
         </div>




        <div ng-switch-when="3">
         <h4 class="text-center">Oferta de Servicios</h4>
         <form id="form1" name="form1" method="post" action="{{ route('post.registrarOfertaServicio') }}">
         {{ csrf_field() }}
         <table class="table-condensed text-right" style="text-align:right" align="center">
             <tr>
                 <td style="text-align:right"><label>NOMBRE :</label></td>
                 <td>
                     <input type="text" id="nombre" class="form-control" name="nombre" required>
                 </td>
             </tr>
           <tr>
           <td style="text-align:right"><label>ORIENTADO A:</label></td>
           <td style="text-align:right">
               <select class="form-control" style="width:175px;" name="orientado" >
                   <option value="0">Seleccione</option>
                   <option value="1">Turismo</option>
                   <option value="2">Ingeniería</option>
                   <option value="3">Administración</option>
                   <option value="4">Producción Gráfica</option>
               </select>
           </td>
           </tr>
           <tr>
           <td  colspan="2" align=center ><label>DESCRIPCION:</label></td>
           </tr>
           <tr>
           <td colspan="2">
           <textarea rows="10" class="form-control" name="descripcion" required style="width:500px; max-width:500px;"></textarea>
           </td>
           </tr>
        </table>
         <table class="table-condensed" style="text-align:right" align="center">
         <tr>
         <td><label>Dias laborables:</label></td>
         <td><input type="number" class="form-control" name="dlaborales" min="1" max="31" required></td>
         </tr>
         <tr>
         <td><label>Horas trabajo:</label></td>
         <td >
           <input type="time" class="form-control" name="hora1" required>A<input type="time" class="form-control" name="hora2" required></td>
         </tr>
         <tr>
         <td><label>Cobertura del servicio:</label></td>
         <td><input type="text" id="cs2" class="form-control" name="cobertura" required></td>
         </tr>
         <tr>
         <td><label>Razón de cobro:</label></td>
         <td><input type="text" id="rc" class="form-control" name="cobro" required></td><!--preguntar si es necesario hacerlo con un cbx o concaja de texto-->
         </tr>
         <tr>
           <td><label>VALOR:</label></td>
           <td><input type="number" class="form-control" name="valor" required min="0" ></td>
         </tr>
         </table>
          <br>
            <button class="btn btn-primary btn-lg" >Registrar</button>
         </form>
         </div>




        <div ng-switch-when="4">
        <h4 class="text-center">Oferta de Artículos</h4>
        <form id="form1" name="form1" method="post" action="{{ route('post.registrarOfertaArticulo') }}">
        {{ csrf_field() }}
        <table class="table-condensed" style="text-align:right" align="center">
          <tr>
          <td style="text-align:right"><label>ORIENTADO A:</label></td>
          <td style="text-align:right">
              <select class="form-control" style="width:175px;" name="orientado" >
                  <option value="0">Seleccione</option>
                  <option value="1">Turismo</option>
                  <option value="2">Ingeniería</option>
                  <option value="3">Administración</option>
                  <option value="4">Producción Gráfica</option>
              </select>
          </td>
          </tr>
          <tr>
          <td  colspan="2" align=center ><label>DESCRIPCION:</label></td>
          </tr>
          <tr>
          <td colspan="2">
          <textarea rows="10" class="form-control" name="descripcion" required style="width:500px; max-width:500px;"></textarea>
          </td>
          </tr>
        </table>
        <table class="table-condensed" style="text-align:right" align="center">
        <tr>
        <td><label>Entrega:</label></td>
        <td><input type="text" class="form-control" name="entrega" required></td><!--preguntar si es necesario hacerlo con un cbx o concaja de texto-->
        </tr>
        <tr>
        <td><label>Capacidad:</label></td>
        <td><input type="number" class="form-control" name="capacidad" required></td>
        </tr>
        <tr>
        <td colspan="2" style="text-align:center"><label> Dia de Entrega:</label></td>
        </tr>
        <tr>
        <td colspan="2"><p  style="text-align:center">Presione ctrl para seleccionar varios dias</p>
        <select multiple class="form-control" name="dias" >
        <option value="Lunes">Lunes</option>
        <option value="Martes">Martes</option>
        <option value="Miércoles">Miércoles</option>
        <option value="Jueves">Jueves</option>
        <option value="Viernes">Viernes</option>
        <option value="Sábado">Sábado</option>
        <option value="Domingo">Domingo</option>
        </select>
        </td>
        </tr>
        <tr>
        <td><label>Horas de entrega:</label></td>
        <td style="text-align:center"><input type="time" class="form-control" name="hora1" required>A<input type="time"  name="hora2" class="form-control"  required></td>
        </tr>
        <tr>
        <td><label>Razon de cobro:</label></td>
        <td><input type="text" id="rc3" class="form-control"  name="cobro" required></td><!--preguntar si es necesario hacerlo con un cbx o concaja de texto-->
        </tr>
        <tr>
        <td><label>VALOR:</label></td>
        <td><input type="number" class="form-control" name="valor"  required min="0" ></td>
        </tr>
        </table>
        <br>
        <input type="submit" class="btn btn-primary btn-lg" value="Registrar"></input>
        </form>
        </div>
        </div>
        </div>
        <br>
        <div class="container">  <a href="{{route('misOfertas')}}"><button class="btn btn-primary btn-lg">Volver</button></a></div>

        <br>
        <br>

        <!-- FORM FINAL -->

      </div><!--/porlets-content-->
    </div><!--/block-web-->
  </div><!--/col-md-12-->
</div><!--/row-->




@endsection
