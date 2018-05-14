@extends('layouts.app')
@section('content')
  {!! Html::script('js/jquery-2.1.1.min.js') !!}
<div align="center">

  <div class="row">
    <div class="col-xs-12 col-md-12 col-sm-12">
      <div class="block-web">
        <div class="header">
          <div class="actions"></div>
          <H1 class="text-center"><strong> OPORTUNIDADES </strong></H1>
        </div>
        <div class="porlets-content">
          <!-- FORM INICIO -->
          {!! Form::open(['route' => 'createOportunidad', 'method' => 'POST']) !!}
          {{ csrf_field() }}
          <table class="table-condensed text-right" align="center">
            <tr>
              <td>NOMBRE:</td>
              <td>
                {{ Form::text('nombre', Auth::user()->PRO_NOMBRE ,['class'=>'form-control','required','pattern'=>'[A-Za-z]{4-16}']) }}
                <!--<input name="nombre" type="text"  style="width:175px;" class="form-control" id="nombre" pattern="[A-Za-z]{4-16}" required="required"/>-->
              </td>
              <td>CLIENTE:</td>
              <td>
                {!! Form::select('clientes',$clientes,null,['id'=>'clientes']) !!}
              </td>
            </tr>
            <tr>
              <td>PROCESO DE NEGOCIO:</td>
              <td>
                <select name="procneg" required class="form-control" id="procneg">
                  <option value="">Seleccione</option>
                  @foreach($procneg as $proc)
                  <option value="{{ $proc->PRO_ID }}">{{ $proc->PRO_DESC }}</option>
                  @endforeach
                  </select>
              </td>
              <td>ETAPA:</td>
              <td>
                <select name="etapa" required class="form-control" id="etapa" >
                    <option value="">Seleccione un proceso</option>
                </select>
              </td>
            </tr>
            <tr>
              <td>PROBABILIDAD:</td>
              <td>
                {{ Form::selectRange('number', 10, 100,['class'=>'form-control','readOnly']) }}
              </td>
              <td>TASA:</td>
              <td>
                {{ Form::number('tasa',null,['class'=>'form-control']) }}
              </td>
            </tr>
            <tr>
              <td>MONEDA: </td>
              <td >
                {!! Form::select('moneda',$moneda,null,['id'=>'moneda']) !!}
              </td>
              <td>TOTAL estimado: </td>
              <td >
                {{ Form::number('total',null,['class'=>'form-control', 'required']) }}
                <!--<input  type="text"  name="total" id="total" style="width:175px;" class="form-control" required/>-->
              </td>
            </tr>
            <tr>
              <td>FECHA DE INGRESO:</td>
              <td>
                {{ Form::date('fechaingreso',\Carbon\Carbon::now(),['class'=>'form-control','style'=>'width:175px','readOnly']) }}
              </td>
              <td>FECHA DE CIERRRE:</td>
              <td>
                {{ Form::date('fechacierre',\Carbon\Carbon::now(),['class'=>'form-control','style'=>'width:175px']) }}
              </td>
            </tr>
            <tr>
              <td>CENTRO DE NEGOCIO:</td>
              <td>
                {!! Form::select('centneg',$centneg,null,['id'=>'centneg','class'=>'form-control','style'=>'width:175px']) !!}
              </td>
              <td>SIGUIENTE PASO:</td>
              <td>
                {!! Form::text('sig_paso',null,['id'=>'sig_paso','class'=>'form-control','style'=>'width:175px']) !!}
              </td>
            </tr>
          </table>
          {!! Form::submit('REGISTRAR', ['class' => 'btn btn-primary btn-lg']) !!}
          {!! Form::close() !!}
          <!-- FORM FINAL -->
        </div><!--/porlets-content-->
      </div><!--/block-web-->
    </div><!--/col-md-12-->
  </div><!--/row-->


  <script  type='text/javascript'>
      $(document).ready(function(){
          $("#procneg").on("change", function(){
              let procneg = $(this).val();
              $("#etapa").empty();
              $.get("https://plataforma.sgrchile.com/api/etapa/" + procneg).done(function(data){
                  if (data !== null){
                      if (Object.keys(data).length > 0 ){
                          $.each(data, function( index, value ){
                              let option = "<option value='"+ value.ID_ETAPA + "'>" + value.DESC_ETAPA+ "</option>";
                              $("#etapa").append(option);
                          });
                          $("#etapa").trigger("change");
                      }
                  }
              });
          });

      });
  </script>


  </div>
  <br>
  <div class="container">  <a href="{{ route('listaOportunidades') }}"><button class="btn btn-primary btn-lg">Volver</button></a></div>
@endsection

