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
          {!! Form::open(['route' => 'createOportunidad', 'method' => 'POST']) !!}
          {{ csrf_field() }}
          <table class="table-condensed text-right" align="center">
            <tr>
              <td>NOMBRE:</td>
              <td>
                {{ Form::text('nombre',null,['class'=>'form-control','required','pattern'=>'[A-Za-z]{4-16}']) }}
                <!--<input name="nombre" type="text"  style="width:175px;" class="form-control" id="nombre" pattern="[A-Za-z]{4-16}" required="required"/>-->
              </td>
              <td>CUENTA ASOCIADA:</td>
              <td>
                {!! Form::select('clientes',$clientes,null,['id'=>'clientes']) !!}
              </td>
            </tr>
            <tr>
              <td>PROCESO DE NEGOCIO:</td>
              <td>
                {!! Form::select('procneg',$procneg,null,['id'=>'procneg']) !!}
              </td>
              <td>ETAPA:</td>
              <td>
                {!! Form::select('etapa',$etapa,null,['id'=>'etapa']) !!}
              </td>
            </tr>
            <tr>
              <td>PROBABILIDAD:</td>
              <td>
                {{ Form::selectRange('number', 10, 100,['class'=>'form-control','required']) }}
              </td>
              <td>TASA:</td>
              <td>
                {{ Form::number('tasa',null,['class'=>'form-control', 'required']) }}
              </td>
            </tr>
            <tr>
              <td>MONEDA: </td>
              <td >
                {!! Form::select('moneda',$moneda,null,['id'=>'moneda']) !!}
              </td>
              <td>TOTAL: </td>
              <td >
                {{ Form::number('total',null,['class'=>'form-control', 'required']) }}
                <!--<input  type="text"  name="total" id="total" style="width:175px;" class="form-control" required/>-->
              </td>
            </tr>
            <tr>
              <td>FECHA DE INGRESO:</td>
              <td>
                {{ Form::date('fechaingreso',\Carbon\Carbon::now()->format('d-m-Y')) }}
              </td>
              <td>FECHA DE CIERRRE:</td>
              <td>
                {{ Form::date('fechacierre',\Carbon\Carbon::now()->format('d-m-Y')) }}
              </td>
            </tr>
            <tr>
              <td>CENTRO DE NEGOCIO:</td>
              <td>
                {!! Form::select('centneg',$centneg,null,['id'=>'centneg']) !!}
              </td>
              <td>ESTADO DE PROPUESTA:</td>
              <td>
                {!! Form::select('estprop',$estprop,null,['id'=>'estprop']) !!}
              </td>
            </tr>
          </table>
          {!! Form::submit('REGISTRO', ['class' => 'btn btn-primary btn-lg']) !!}
          {!! Form::close() !!}
          <!-- FORM FINAL -->
        </div><!--/porlets-content-->
      </div><!--/block-web-->
    </div><!--/col-md-12-->
  </div><!--/row-->




  </div>
  <br>
  <div class="container">  <a href="{{ route('listaOportunidades') }}"><button class="btn btn-primary btn-lg">Volver</button></a></div>
@endsection
