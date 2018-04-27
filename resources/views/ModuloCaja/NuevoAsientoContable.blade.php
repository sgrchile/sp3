@extends('layouts.app')
@section('content')

  {!! Html::script('js/jquery-2.1.1.min.js') !!}

  <div class="row">
    <div class="col-xs-12 col-md-12 col-sm-12">
      <div class="block-web">
        <div class="header">
          <div class="actions"></div>
          <h1 class="text-center text-uppercase">CAJA</h1>
        </div>
        @if (session('status_asiento'))
          <div class="alert alert-success">
            {{ session('status_asiento') }}
          </div>
        @endif
        <div class="porlets-content">
          <!-- FORM INICIO -->

	{!! Form::open(['route' => 'post.asientocontable']) !!}
          <h3 class="text-center">NUEVO ASIENTO CONTABLE</h3>

          <table class="table-condensed" align="center" style="text-align:right;">

            <tr>
              <td>EMPRESA</td>
              <td>
                {{ Form::select('empresa',App\Empresa::pluck('EMP_DESC','EMP_ID'),null,
                ['class'=>'form-control','style'=>'width:175px','placeholder'=>'Seleccione','id'=>'empresa','require']) }}
              </td>
            </tr>
            <tr>
              <td>TIPO DE MOVIMIENTO</td>
              <td>
                {{ Form::select('tp_movimiento',App\TipoMovimiento::pluck('TMOV_DESC','TMOV_ID'),null,['class'=>'form-control','required']) }}
              </td>
            </tr>
            <tr>
              <td>FECHA CONTABLE</td>
              <td>
                {{ Form::date('fecasiento',\Carbon\Carbon::now()->format('d-m-Y'),['class'=>'form-control','required']) }}
              </td>
            </tr>

            <tr>
              <td>COMENTARIO</td>
              <td> <textarea id="comentario" name="comentario" class="form-control" style=" width:175px; max-width:175px; max-height:175px;" required></textarea></td>
            </tr>
          </table>

          <br>
          <div>
            <a href="#" class="btn btn-primary btn-lg" onclick='masfilas("mytable")'>Agregar Cuenta</a>
          </div>

          <table class="table table-bordered" id="mytable">

            <tr>
              <td>CLASE</td>
              <td>CUENTA</td>
              <td>DEBE</td>
              <td>HABER</td>
              <td>ACCION</td>
            </tr>

	    <tr id="fila0">
              <td>
                <select name="clase0" required class="form-control" id="clase0" >
                  @foreach($clases as $clase)
                    <option value="{{ $clase->ID_CL_CUENTA }}">{{ $clase->DESC_CL_CUENTA }}</option>
                  @endforeach
                </select>
              </td>
              <td>
                <select name="cuentas0" required class="form-control" id="cuentas0">
                  @foreach($cuentas as $cuenta)
                    <option value="{{ $cuenta->ID_CTA_CONT }}">{{ $cuenta->NOM_CTA_CONT }}</option>
                  @endforeach
                </select>
              </td>
                <td><input type="number" class="numerod" name="debe0"></td>

                <td><input type="number" class="numeroh" name="haber0"></td>
              <td>
                 <input type="button" class="borrar" value="Eliminar" />
              </td>

            </tr>
          </table>

	  
	  <table class="table table-bordered" id="mytableresult">
            <tr>

              <td>
                <div style="width: 175px" />
              </td>

              <td>
                {{ Form::label('total','TOTAL',['id'=>'total','class'=>'form-control','style'=>'width:175px']) }}
              </td>
              <td>
                {{ Form::number('tdebe',null,['id'=>'totald','class'=>'form-control','style'=>'width:175px','readonly']) }}
              </td>
              <td>
                {{ Form::number('thaber',null,['id'=>'totalh','class'=>'form-control','style'=>'width:175px','readonly']) }}
              </td>
              <td>  <a href="#" class="btn btn-primary btn-sm" onclick='calcular_totald()'>Actualizar</a></td>

            </tr>

          </table>

          <div class="container" align="center">

          <button class="btn btn-primary btn-lg">REGISTAR</button>
          </div>
	{!! Form::close() !!}
          <script type='text/javascript'>
              var count = 0;
              function masfilas(arg) {
                  if (document.getElementById(arg)) {
                      count++;
                      var texto =
                          '<tr id="fila' + count + '">' +
                          '              <td>' +
                          '                <select name="clase' + count + '" required class="form-control" id="clase' + count + '">' +
                          '                  @foreach($clases as $clase)' +
                          '                    <option value="{{ $clase->ID_CL_CUENTA }}">{{ $clase->DESC_CL_CUENTA }}</option>' +
                          '                  @endforeach' +
                          '                </select>' +
                          '              </td>' +
                          '              <td>' +
                          '                <select name="cuentas' + count + '" required class="form-control" id="cuentas' + count + '">' +
                          '                  @foreach($cuentas as $cuenta)' +
                          '                    <option value="{{ $cuenta->ID_CTA_CONT }}">{{ $cuenta->NOM_CTA_CONT }}</option>' +
                          '                  @endforeach' +
                          '                </select>' +
                          '              </td>' +

                          '<td><input type="number" class="numerod" name="debe' + count + '"></td>' +

                          '<td><input type="number" class="numeroh" name="haber' + count + '"></td>' +

                          '<td><input type="button" class="borrar" value="Eliminar" /></td></tr>';
                      $("#mytable").append(texto);
                      calcular_totald();
                      calcular_totalh();
                  }
              }
                  function calcular_totald() {

                      var importe_total = 0
                      $('.numerod').keyup(function (){
                          $(".numerod").each(
                              function(index, value) {
                                  importe_total = importe_total + eval($(this).val());
                              }
                          );
                      });
                      $("#totald").val(importe_total);
                  }
                  function calcular_totalh() {

                      var importe_total = 0
                      $('.numeroh').keyup(function (){
                          $(".numeroh").each(
                              function(index, value) {
                                  importe_total = importe_total + eval($(this).val());
                              }
                          );
                      });
                      $("#totalh").val(importe_total);
                  }
                  $(document).ready(function(){

                      calcular_totald();
                      calcular_totalh();

                  });
              $(function () {
                  $(document).on('click', '.borrar', function (event) {
                      event.preventDefault();
                      $(this).closest('tr').remove();
                  });
              });
          </script>

          <!-- FORM FINAL -->
        </div><!--/porlets-content-->
      </div><!--/block-web-->
    </div><!--/col-md-12-->
  </div><!--/row-->
</div>
<br>


<div class="container">
<a href="{{route('AsientosContables')}}"><button class="btn btn-primary btn-lg">Volver</button></a>

</div>
</a>
<br>

@endsection
