
@extends('layouts.app')
@section('content')

<div class="container-fluid " align="center">

  <br>

  <div class="row">
    <div class="col-xs-12 col-md-12 col-sm-12">
      <div class="block-web">
        <div class="header">
          <div class="actions"></div>
          <h1 class="text-center text-uppercase">MODULO MEJORA CONTINUA</h1>
        </div>
        <div class="porlets-content">

          <table class="table-condensed text-right" align="center">
            <tr>
              <td>EMPRESA:</td>
              <td>
                <select class="form-control" style="width:175px;" name="">
                  <option value=""></option>
                  <option value=""></option>
                  <option value=""></option>
                  <option value=""></option>
                  <option value=""></option>
                </select>
              </td>

            </tr>

            <tr>
              <td>CENTRO DE NEGOCIOS:</td>
              <td>
                <select class="form-control" style="width:175px;" name="">
                  <option value=""></option>
                  <option value=""></option>
                  <option value=""></option>
                  <option value=""></option>
                  <option value=""></option>
                </select>

              </td>
            </tr>
            <tr>
              <td>
                DESDE
              </td>
              <td>
                <input type="date" class="form-control" style="width:175px;" />
              </td>
            </tr>

            <tr>
              <td>
                HASTA
              </td>
              <td>
                <input type="date" class="form-control" style="width:175px;" />
              </td>
            </tr>

            <tr  >
              <td  align="center" colspan="2" ><button type="button" class="btn btn-primary btn-xs">  <i class="fa fa-search" style="font-size:29px"></i> FILTRAR</button></td>
            </tr>

          </table>

        </div>

          <div class="table-responsive">
             <table class="table table-bordered">
               <tr>
                 <td>ID</td>
                 <td>FECHA DE SERVICIO</td>
                 <td>OT</td>
                 <td>MANDANTE</td>
                 <td>EVALUACION</td>
                 <td>ACCION</td>
               </tr>

               <tr>
                 <td>1</td>
                 <td>1-11-1111</td>
                 <td>1234</td>
                 <td>lorem</td>
                 <td>5</td>
                 <td><a href="{{route('resumenEvaluacion')}}"><button class="btn btn-primary btn-md">VER</button></a></td>
               </tr>
             </table>
          </div>

        </div>

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
