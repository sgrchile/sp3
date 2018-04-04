@extends('layouts.app')
@section('content')

  {!! Html::script('js/jquery-2.1.1.min.js') !!}

  <div class="row">
    <div class="col-xs-12 col-md-12 col-sm-12">
      <div class="block-web">
        <div class="header">
          <div class="actions"></div>
          <h1 class="text-center text-uppercase">MODULO DE CAJA</h1>
        </div>
        <div class="porlets-content">
          <!-- FORM INICIO -->

	{!! Form::open(['route' => 'post.asientocontable']) !!}
          <h3 class="text-center">NUEVO ASIENTO CONTABLE</h3>

          <table class="table-condensed" align="center" style="text-align:right;">

            <tr>
              <td>TIPO DE MOVIMIENTO</td>
              <td>
                {{ Form::select('tp_movimiento',$tpmov,null,['class'=>'form-control','required']) }}
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

          <table class="table table-bordered" id="mytable">

            <tr>
              <td>CUENTA</td>
              <td>DEBE</td>
              <td>HABER</td>
              <td>ACCION</td>
            </tr>

            <tr>
              <td><input type="number" readonly class="form-control" style="width:175px;"></td>
              <td><input type="number" readonly class="form-control" style="width:175px;"></td>
              <td><input type="number" readonly  class="form-control" style="width:175px;"></td>
              <td>    <button class="btn btn-primary btn-sm">ELIMINAR</button></td>

            </tr>
	    <tr>
              <td>
                {{ Form::select('cta_cont',App\CuentaContable::pluck('NOM_CTA_CONT','ID_CTA_CONT'),null,['class'=>'form-control','style'=>'width:175px']) }}
              </td>
              <td>
                {{ Form::number('debe',null,['id'=>'debe','class'=>'form-control','style'=>'width:175px']) }}
              </td>
              <td>
                {{ Form::number('haber',null,['id'=>'haber','class'=>'form-control','style'=>'width:175px']) }}
              </td>
              <td>
                <a id="masfilas"><button class="btn btn-primary btn-sm">AGREGAR</button></a>
              </td>

            </tr>
          </table>
	  
	  <table class="table table-bordered" id="mytableresult">
            <tr>

              <td>
                {{ Form::label('total','TOTAL',['id'=>'total','class'=>'form-control','style'=>'width:175px']) }}
              </td>
              <td>
                {{ Form::number('debe',null,['class'=>'form-control','style'=>'width:175px','readonly']) }}
              </td>
              <td>
                {{ Form::number('haber',null,['class'=>'form-control','style'=>'width:175px','readonly']) }}
              </td>
              <td>  <button class="btn btn-primary btn-sm">ACTUALIZAR</button></td>

            </tr>

          </table>

          <div class="container" align="center">

          <button class="btn btn-primary btn-lg">REGISTAR</button>
          </div>
	{!! Form::close() !!}

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
