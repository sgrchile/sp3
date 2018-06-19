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

          <table class="table-condensed text-right" align="center" >


            <tr>
              <td>NOMBRE:</td>
              <td><input type="text" value="{{ \Illuminate\Support\Facades\Auth::user()->PRO_NOMBRE }}" class="form-control" readonly  style="width:175px;"></td>

              <td>APELLIDO:</td>
              <td><input type="text" value="{{ \Illuminate\Support\Facades\Auth::user()->PRO_APE_PAT  }}" readonly  class="form-control" style="width:175px;"></td>

              <td>RUT:</td>
              <td><input type="text" value="{{ \Illuminate\Support\Facades\Auth::user()->PRO_RUN }}" readonly class="form-control" style="width:175px;"></td>


            </tr>

            <tr>

              <td>EMPRESA:</td>

              <td>
                <input type="text" readonly VALUE="{{ \Illuminate\Support\Facades\Auth::user()->PRO_EMP }}"  class="form-control" style="width:175px;">
              </td>

              <td>CARGO:</td>

              <td>
                <input type="text" value="{{ \Illuminate\Support\Facades\Auth::user()->PRO_CAR }}" readonly class="form-control"  style="width:175px;">
              </td>

              <td>TIPO DE PERSONAL:</td>
              <td>
                @if(isset($datos['MP_JORNADA']))
                <input type="text" value="{{ App\Jornada::find($datos['MP_JORNADA'])->DESC_JORNADA }}" readonly class="form-control"  style="width:175px;">
                  @else
                  <input type="text" value="" readonly class="form-control"  style="width:175px;">
                  @endif
              </td>

            </tr>

            <tr>

              <td>AFP:</td>

              <td>
                <input type="text" readonly class="form-control"  style="width:175px;">
              </td>

              <td>SEGURO MEDICO:</td>

              <td>
                <input type="text" readonly class="form-control" style="width:175px;">
              </td>

            </tr>


          </table>

          <h3 class="text-uppercase text-center ">LICENCIAS EMITIDAS</h3>
          <table class="table table-bordered">

            <tr>
              <td>FECHA</td>
              <td>MOTIVO</td>
              <td>INICIO</td>
              <td>FIN</td>
              <td>ESTADO</td>
            </tr>
           <tbody>
           @foreach($licencias as $licencia)
             <tr>
               <td>{{ $licencia->CREATED_AT }}</td>
               <td> {{ $licencia->LM_MLC_ID }}</td>
               <td> {{ $licencia->LM_INICIO }}</td>
               <td> {{ $licencia->LM_FIN }}</td>
             </tr>
             @endif
           </tbody>
            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>

          </table>

          <h3 class="text-uppercase text-center ">PERMISOS SOLICITADOS</h3>
          <table class="table table-bordered">

            <tr>
              <td>FECHA</td>
              <td>MOTIVO</td>
              <td>INICIO</td>
              <td>FIN</td>
              <td>ESTADO</td>
            </tr>

            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>

          </table>

          <h3 class="text-uppercase text-center ">VACACIONES SOLICITADAS</h3>
          <table class="table table-bordered">

            <tr>
              <td>FECHA</td>
              <td>INICIO</td>
              <td>FIN</td>
              <td>ESTADO</td>
            </tr>

            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>

            </tr>

          </table>

          <h3 class="text-uppercase text-center ">ACTIVOS ASIGNADOS</h3>
          <table class="table table-bordered">

            <tr>
              <td>ID</td>
              <td>DESCRIPCION</td>

            </tr>

            <tr>
              <td></td>
              <td></td>
            </tr>

          </table>

          <!-- FORM FINAL -->

        </div><!--/porlets-content-->
      </div><!--/block-web-->
    </div><!--/col-md-12-->
  </div><!--/row-->


<br>
<br>


</div>
<br>
<div class="container">  <a href="{{route('CarpetaPersonal')}}"><button class="btn btn-primary btn-lg">Volver</button></a></div>



<br>
<br>

@endsection
