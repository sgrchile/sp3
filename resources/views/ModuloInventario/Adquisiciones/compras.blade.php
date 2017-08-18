@extends('layouts.app')
@section('content')

<h1 class="text-center text-uppercase">COMPRAR PRODUCTOS</h1>

<div class="container-fluid"  align="center">

  <div class="row">
    <div class="col-xs-12 col-md-12 col-sm-12">
      <div class="block-web">
        <div class="header">
          <div class="actions"></div>
          <h1 class="text-center text-uppercase">COMPRAR PRODUCTOS</h1>
        </div>
        <div class="porlets-content">
          <!-- FORM INICIO -->

          <table class="table-condensed text-right" align="center">
            <tr>
              <td>BUSCAR PROVEEDOR:</td>
              <td >
                <select required style="width:175px;" class="form-control">>
                  <option></option>
                  <option></option>
                  <option></option>
                  <option></option>
                  <option></option>
                </select>
              </td>
              <td align="left"><button type="button" class="btn btn-primary btn-xs">  <i class="fa fa-search" style="font-size:29px"></i></button></td>
            </tr>

          </table>

          <table class="table-condensed table-bordered">

            <tr>

              <td>COD. ART.</td>
              <td>DESC. ART.</td>
              <td>EN STOCK</td>
              <td>VALOR</td>
              <td>CANTIDAD</td>
              <td>TOTAL</td>
              <td>ACCION</td>
            </tr>

            <tr>

              <td><input type="text" readOnly  style="width:175px;" class="form-control"></td>
              <td><input type="text" readOnly  style="width:175px;" class="form-control"></td>
              <td><input type="text" readOnly  style="width:175px;" class="form-control"></td>
              <td><input type="text" readOnly  style="width:175px;" class="form-control"></td>
              <td><input type="text" readOnly  style="width:175px;" class="form-control"></td>
              <td><input type="text" readOnly  style="width:175px;" class="form-control"></td>
              <td><button class="btn btn-primary btn-xs">ELIMNAR</button></td>

            </tr>

            <tr>

              <td><input type="text" readOnly  style="width:175px;" class="form-control"></td>
              <td>
                <select required style="width:175px;" class="form-control">>
                  <option></option>
                  <option></option>
                  <option></option>
                  <option></option>
                  <option></option>
                </select>
              </td>
              <td><input type="text" readOnly  style="width:175px;" class="form-control"></td>
              <td><input type="text" readOnly  style="width:175px;" class="form-control"></td>

              <td><input type="number" min="0" required class="form-control" style="width:175px;"/></td>
              <td><input type="text" readOnly  style="width:175px;" class="form-control"></td>

              <td><button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#AGREGAR" data-backdrop="static">AGREGAR</button></td>

            </tr>

          </table>
          <br>
          <button class="btn btn-primary btn-lg">CREAR ORDEN DE COMPRA</button>

          <!-- FORM FINAL -->

        </div><!--/porlets-content-->
      </div><!--/block-web-->
    </div><!--/col-md-12-->
  </div><!--/row-->
</div>

<br>

<div class="container">

<a href="javascript:history.back(1)"><button class="btn btn-primary btn-lg">Volver</button></a>

</div>
</a>
<br>

@endsection
