@extends('layouts.app')
@section('content')
  <div class="container" align="center">


    <div class="row">
      <div class="col-xs-12 col-md-12 col-sm-12">
        <div class="block-web">
          <div class="header">
            <div class="actions"></div>
            <H1 class="text-center"><strong>REGISTRO DE CONTACTO </strong></H1>
          </div>
          <div class="porlets-content">
            <!-- FORM INICIO -->

            <form id="form1" name="form1" method="post" action="{{ route('post.contacto') }}">
              {{ csrf_field() }}
              <table class="table-condensed text-right" align="center">

                <tr>
                  <td><a style="color: #9A0000">* </a>NOMBRE:</td>
                  <td>
                    <input name="nombre" type="text"  style="width:175px;" class="form-control" id="nombre" required/>
                  </td>

                  <td><a style="color: #9A0000">* </a>CELULAR:</td>
                  <td>
                    <input type="text"  style="width:175px;" class="form-control" required/>
                  </td>
                </tr>
                <tr>

                  <td>EMAIL EMPRESARIAL:</td>
                  <td>
                    <input type="email"  style="width:175px;" class="form-control" />

                  </td>

                  <td><a style="color: #9A0000">* </a>EMAIL PERSONAL:</td>
                  <td><input type="email"  style="width:175px;" class="form-control" required/></td>
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
  <div class="container">  <a href="{{ route('fichaClienteConsolidado') }}"><button class="btn btn-primary btn-lg">Volver</button></a></div>
@endsection
