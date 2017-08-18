@extends('layouts.app')
@section('content')

<div ng-app="">
  <br>
  <div class="row">
    <div class="col-xs-12 col-md-12 col-sm-12">
      <div class="block-web">
        <div class="header">
          <div class="actions"></div>
            <H1 class="text-center text-uppercase">libros contables</H1>
        </div>
        <div class="porlets-content">
          <!-- FORM INICIO -->


          <br>
          <table class="table-condensed form-group text-right text-uppercase" align="center">

          <tr>
            <td>Tipo de libro:</td>
            <td><select ng-model="myVar" style="width:175px;">
              <option value="1" >Libro de compras</option>
              <option value="2">libro de ventas</option>
              <option value="3">Libo de honorarios</option>
              <option value="4">Libo de remuneracion</option>
            </select>
          </td>
        </tr>

        <tr>
          <td class="text-right">Periodo: </td>
          <td>



            <input   type="month" name="fecha" style="width:175px;">

          </td>

        </tr>

        <tr>
          <td colspan="4" align="center">
            <!-- https://www.w3schools.com/js/js_ajax_php.asp aqui muestra como obtener datos desde php-->
            <input type="submit" class="btn btn-primary btn-lg " >
          </td>
        </tr>

      </table>

      <div class="container" align="center" ng-switch="myVar">

        <div ng-switch-when="1">
          <h4 class="text-center">Libro de Compras</h4>
          <table class="table">
            <tr>
              <td>Fecha</td>
              <td>Tipo de documento</td>
              <td>Descripcion</td>
              <td>Monto</td>
            </tr>
          </table>
        </div>

        <div ng-switch-when="2">
          <h4 class="text-center">Libro de ventas</h4>
          <table class="table">
            <tr>
              <td>Fecha</td>
              <td>Tipo de documento</td>
              <td>Descripcion</td>
              <td>Monto</td>
            </tr>
          </table>
        </div>

        <div ng-switch-when="3">
          <h4 class="text-center">Libro de Honoararios</h4>
          <table class="table">
            <tr>
              <td>Fecha</td>
              <td>Tipo de documento</td>
              <td>Descripcion</td>
              <td>Monto</td>
            </tr>
          </table>
        </div>

        <div ng-switch-when="4">
          <h4 class="text-center">Libro de Remuneracion</h4>
          <table class="table">
            <tr>
              <td>Fecha</td>
              <td>Tipo de documento</td>
              <td>Descripcion</td>
              <td>Monto</td>
            </tr>
          </table>
        </div>

          <!-- FORM FINAL -->

        </div><!--/porlets-content-->
      </div><!--/block-web-->
    </div><!--/col-md-12-->
  </div><!--/row-->


</div>

</div>
 <div class="container">  <a href="{{route('SolFon')}}"><button class="btn btn-primary btn-lg">Volver</button></a></div>
@endsection
