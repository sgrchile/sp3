@extends('layouts.app')
@section('content')
<div align="center">

  <div class="row">
    <div class="col-xs-12 col-md-12 col-sm-12">
      <div class="block-web">
        <div class="header">
          <div class="actions"></div>
          <H1 class="text-center"><strong> REGISTRO DE OPORTUNIDADES </strong></H1>
        </div>
        <div class="porlets-content">
          <!-- FORM INICIO -->
          {{ csrf_field() }}

          <table class="table-condensed text-right" align="center">
            <tr>
              <td>NOMBRE:</td>
              <td>
                <input name="nombre" type="text"  style="width:175px;" class="form-control" id="nombre" pattern="[A-Za-z]{4-16}" required="required"/>
              </td>

              <td>CONTACTO:</td>
              <td>
                <select style="width:175px;" class="form-control"  required>

                  <option value=""></option>

                </select>
              </td>
            </tr>

            <tr>

              <td>PROCESO DE NEGOCIO:</td>
              <td>

                <select style="width:175px;" class="form-control"  required>

                  <option value=""></option>

                </select>

              </td>

              <td>ETAPA:</td>
              <td>
                <select style="width:175px;" class="form-control"  required>

                  <option value=""></option>

                </select>
              </td>



            </tr>

            <tr>

              <td>PROBABILIDAD:</td>
              <td>
                <input type="text"  style="width:175px;" class="form-control" required/>
              </td>

              <td>TASA:</td>
              <td>
                <input type="text"  style="width:175px;" class="form-control" required/>
              </td>
            </tr>

            <tr>

              <td>MONEDA: </td>
              <td >
                <input  type="text"   style="width:175px;" class="form-control" required/>
              </td>

              <td>TOTAL: </td>
              <td >
                <input  type="text"   style="width:175px;" class="form-control" required/>
              </td>

            </tr>


            <tr>

              <td>FECHA DE INGRESO:</td>
              <td>
                <input  type="date"   style="width:175px;" class="form-control" required/>
              </td>

              <td>FECHA DE CIERRRE:</td>
              <td>
                <input  type="date"   style="width:175px;" class="form-control" required/>
              </td>



            </tr>
            <tr>

              <td>CENTRO DE NEGOCIO:</td>
              <td>
                <select style="width:175px;" class="form-control"  required>

                  <option value=""></option>

                </select>

              </td>

              <td>ESTADO DE PROPUESTA:</td>
              <td>
                <select style="width:175px;" class="form-control"  required>

                  <option value=""></option>

                </select>
              </td>

            </tr>



          </table>

          <button class="btn btn-primary btn-lg">REGISTRO</button>

          <!-- FORM FINAL -->

        </div><!--/porlets-content-->
      </div><!--/block-web-->
    </div><!--/col-md-12-->
  </div><!--/row-->




  </div>
  <br>
  <div class="container">  <a href="{{ route('listaOportunidades') }}"><button class="btn btn-primary btn-lg">Volver</button></a></div>
@endsection
