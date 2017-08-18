@extends('layouts.app')
@section('content')


<br>

<div class="row">
  <div class="col-xs-12 col-md-12 col-sm-12">
    <div class="block-web">
      <div class="header">
        <div class="actions"></div>
        <h1 class=" text-center text-uppercase" >CARGOS</h1>
      </div>
      <div class="porlets-content">
        <!-- FORM INICIO -->
        <div class="container" align="center">

          <br>

          <h5 class="text-uppercase" >Empresa</h5>
          <select  class="btn btn-default dropdown-toggle " 	name="Empresas">
            <option value="empresa1">empresa1</option>
            <option value="empresa2">empresa2</option>
            <option value="empresa3">empresa3</option>
            <option value="empresa4">empresa4</option>
          </select>

          <div class="container" >

            <table style="text-align:right" class="table-condensed">

              <tr>
                <td>Nombre del cargo:</td>
                <td><input type="text" style="width:175px"></td>
                <td><button class="btn btn-primary btn-sm">Buscar</button></td>
              </tr>

              <tr>
                <td>Nivel jerarquico:</td>
                <td>
                  <!--se carga por base de datos-->
                  <select  class="btn btn-default dropdown-toggle " 	name="jerarquico" style="width:175px">
                    <option value="empresa1">Jefe</option>
                    <option value="empresa2">Secretaria</option>
                    <option value="empresa3">Diseñador</option>
                    <option value="empresa4">Ingeniero</option>
                  </select>
                </td>
              </tr>

              <tr>
                <td>Area de operacio:</td>
                <td>
                  <!--se carga por base de datos-->
                  <select  class="btn btn-default dropdown-toggle " 	name="jerarquico" style="width:175px">
                    <option value="empresa1">Jefe</option>
                    <option value="empresa2">Secretaria</option>
                    <option value="empresa3">Diseñador</option>
                    <option value="empresa4">Ingeniero</option>
                  </select>
                </td>
              </tr>


            </table>

            <div class="row" >

              <div class="col-sm-6">
                <h3 class="text-center text-uppercase">actividades</h3>
                <table class="table-condensed table-bordered" align="center" >
                  <tr>
                    <th>ID</th>

                    <th>DESCRIPCION</th>
                    <th>ACCION</th>
                  </tr>
                  <!--aqui debe llamar a base de datos-->
                  <tr>

                    <td>1</td>
                    <td>jefe</td>
                    <td><button class="btn btn-primary btn-sm">Eliminar</button></td>
                    <!--aqui debe llamar a php-->
                  </tr>

                  <tr>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><button class="btn btn-primary btn-sm" style="width:67px">Nuevo</button></td>
                  </tr>

                </table>
              </div>

              <div class="col-sm-6" >
                <h3 class="text-center text-uppercase">actividades</h3>
                <table class="table-condensed table-bordered" align="center">
                  <tr>
                    <th>ID</th>

                    <th>DESCRIPCION</th>
                    <th>ACCION</th>
                  </tr>
                  <!--aqui debe llamar a base de datos-->
                  <tr>

                    <td>1</td>
                    <td>jefe</td>
                    <td><button class="btn btn-primary btn-sm">Eliminar</button></td>
                    <!--aqui debe llamar a php-->
                  </tr>

                  <tr>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><button class="btn btn-primary btn-sm" style="width:67px">Nuevo</button></td>
                  </tr>

                </table>
              </div>

            </div>

            <button class="btn btn-primary btn-lg">Aplicar y guardar</button>
          </div>

          <br>
          <br>
          <br>

        </div>

        <!-- FORM FINAL -->

      </div><!--/porlets-content-->
    </div><!--/block-web-->
  </div><!--/col-md-12-->
</div><!--/row-->

<div class="container"><a href="index.php"><button class="btn btn-primary btn-lg">Volver</button></a></div>

<br>
<br>

@endsection
