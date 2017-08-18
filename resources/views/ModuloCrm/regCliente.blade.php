@extends('layouts.app')
@section('content')

<div align="center">
  <div class="row">
    <div class="col-xs-12 col-md-12 col-sm-12">
      <div class="block-web">
        <div class="header">
          <div class="actions"></div>
          <H1 class="text-center"><strong>REGISTRO DE CLIENTES </strong></H1>
        </div>
        <div class="porlets-content">
          <!-- FORM INICIO -->

          <form id="form1" name="form1" method="post" action="{{ route('post.clientes') }}">
            {{ csrf_field() }}
            <table class="table-condensed text-right" align="center">
              <tr>
                <td>NOMBRE:</td>
                <td>
                  <input name="nombre" type="text"  style="width:175px;" class="form-control" id="nombre" pattern="[A-Za-z]{4-16}" required="required"/>
                </td>

                <td>NOMBRE DE FANTASIA:</td>
                <td>
                  <input name="nombre" type="text"  style="width:175px;" class="form-control" id="nombre" pattern="[A-Za-z]{4-16}" required="required"/>
                </td>
              </tr>
              <tr>

                <td>RUT:</td>
                <td>

                  <input type="text" id="rut" name="rut"  style="width:175px;" class="form-control" maxlength="10" required oninput="checkRut(this)" />
                  <script src="{{asset('js/validarRUT.js')}}"></script>

                </td>

                <td>CONTACTO:</td>
                <td>
                  <input type="text"  style="width:175px;" class="form-control" required/>
                </td>



              </tr>

              <tr>

                <td>EMAIL:</td>
                <td>
                  <input type="text"  style="width:175px;" class="form-control" required/>
                </td>

                <td>TELEFONO:</td>
                <td>
                  <input type="text"  style="width:175px;" class="form-control" required/>
                </td>

              </tr>

              <tr>

                <td>ACTIVIDAD COMERCIAL: </td>
                <td >
                  <input name="actividad" type="text"   style="width:175px;" id="actividad" class="form-control" required/>
                </td>

                <td>SITIO WEB: </td>
                <td >
                  <input  type="text"   style="width:175px;" class="form-control" required/>
                </td>

              </tr>

              <tr>
                <td>GLOSA: </td>
                <td >
                  <input  type="text"   style="width:175px;" class="form-control" required/>
                </td>

                <td>RUBRO:</td>
                <td>
                  <select style="width:175px;" class="form-control"  required>

                    <option value=""></option>

                  </select>
                </td>

              </tr>

              <tr>

                <td>SUB RUBRO:</td>
                <td>
                  <select style="width:175px;" class="form-control"  required>

                    <option value=""></option>

                  </select>
                </td>

                <td>ACTIVIDAD:</td>
                <td>
                  <select style="width:175px;" class="form-control"  required>

                    <option value=""></option>

                  </select>
                </td>

              </tr>
              <tr>

                <td>BANCO:</td>
                <td>
                  <select style="width:175px;" class="form-control"  required>

                    <option value=""></option>

                  </select>
                </td>

                <td>TIPO DE CUENTA:</td>
                <td>
                  <select style="width:175px;" class="form-control"  required>

                    <option value=""></option>

                  </select>
                </td>

              </tr>

              <tr>

                <td>Nº DE CUENTA: </td>
                <td >
                  <input  type="text"   style="width:175px;" class="form-control" required/>
                </td>

                <td>ORIGEN: </td>
                <td >
                  <input  type="text"   style="width:175px;" class="form-control" required/>
                </td>
              </tr>


              <tr>

                <td>PAIS:</td>
                <td>
                  <select style="width:175px;" class="form-control"  required>

                    <option value=""></option>

                  </select>
                </td>
                <td>REGION:</td>
                <td>
                  <select style="width:175px;" class="form-control"  required>

                    <option value=""></option>

                  </select>
                </td>

              </tr>

              <tr>

                <td>COMUNA:</td>
                <td>
                  <select style="width:175px;" class="form-control"  required>

                    <option value=""></option>

                  </select>
                </td>

                <td>CIUDAD:</td>
                <td>
                  <select style="width:175px;" class="form-control"  required>

                    <option value=""></option>

                  </select>
                </td>


              </tr>
              <tr>

                <td>DIRECCION:</td>
                <td>
                  <input  type="text"   style="width:175px;" class="form-control" required/>
                </td>
              </tr>

            </table>
            <button class="btn btn-primary btn-lg">REGISTRAR</button>
          </form>


          <!-- FORM FINAL -->

        </div><!--/porlets-content-->
      </div><!--/block-web-->
    </div><!--/col-md-12-->
  </div><!--/row-->



  </div>
  <br>
  <div class="container">  <a href="{{ route('CRM') }}"><button class="btn btn-primary btn-lg">Volver</button></a></div>
@endsection
