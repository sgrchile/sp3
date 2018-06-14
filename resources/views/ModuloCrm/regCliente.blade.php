@extends('layouts.app')
@section('content')

  {!! Html::script('js/jquery-2.1.1.min.js') !!}
  {!! Html::script('js/dropdown.js') !!}

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
                <td><a style="color: #9A0000">* </a> NOMBRE:</td>
                <td>
                  {{ Form::text('nombre',null,['class'=>'form-control','style'=>'width:175px', 'required', 'pattern'=>'[A-Za-z]{4-16}']) }}
                </td>

                <td>NOMBRE DE FANTASIA:</td>
                <td>
                  {{ Form::text('nombref',null,['class'=>'form-control', 'pattern'=>'[A-Za-z]{4-16}','style'=>'width:175px']) }}
                </td>
              </tr>
              <tr>

                <td><a style="color: #9A0000">* </a> RUT:</td>
                <td>
                  {{ Form::text('rut',null,['class'=>'form-control', 'required', 'pattern'=>'[A-Za-z]{4-16}','maxlength'=>'11','style'=>'width:175px']) }}
                  <!--<input type="text" id="rut" name="rut"  style="width:175px;" class="form-control" maxlength="10" required /><!--oninput="checkRut(this)"-->
                  <!--<script src="{{asset('js/validarRUT.js')}}"></script>-->
                </td>
                <td><a style="color: #9A0000">* </a> TELEFONO:</td>
                <td>
                  {{ Form::number('telefono',null,['class'=>'form-control','style'=>'width:175px']) }}
                </td>
              </tr>
              <tr>
                <td><a style="color: #9A0000">* </a> EMAIL:</td>
                <td>
                  {{ Form::email('email', null,['class'=>'form-control','placeholder'=>'example@gmail.com','required','style'=>'width:175px']) }}
                </td>

                <td> TELEFONO 2:</td>
                <td>
                  {{ Form::number('telefono2',null,['class'=>'form-control','style'=>'width:175px']) }}
                </td>

              </tr>

              <tr>

                <td><a style="color: #9A0000">* </a> ACTIVIDAD COMERCIAL: </td>
                <td >
                  {{ Form::text('actcomercial',null,['class'=>'form-control', 'required','style'=>'width:175px']) }}
                </td>

                <td>SITIO WEB: </td>
                <td >
                  {{ Form::text('sitioweb',null,['class'=>'form-control','style'=>'width:175px']) }}
                </td>

              </tr>

              <tr>
                <td>GLOSA: </td>
                <td >
                  {{ Form::text('glosa',null,['class'=>'form-control','class'=>'form-control','style'=>'width:175px']) }}
                </td>

                <td>RUBRO:</td>
                <td>
                  {!! Form::select('rubro',$rubro,null,['class'=>'form-control','style'=>'width:175px']) !!}
                </td>

              </tr>

              <tr>

                <td>SUB RUBRO:</td>
                <td>
                  {!! Form::select('subrubro',$subrubro,null ,['class'=>'form-control','style'=>'width:175px','placeholder'=>'Seleccione']) !!}
                </td>
                <td>ACTIVIDAD:</td>
                <td>
                  {!! Form::select('actividad',$actividad,null ,['class'=>'form-control','id'=>'actividad','style'=>'width:175px']) !!}
                </td>

              </tr>
              <tr>
                  <td>ORIGEN: </td>
                  <td >
                      {{ Form::text('origen',null,['class'=>'form-control', 'required','style'=>'width:175px']) }}
                  </td>
              </tr>
              <tr>

                <td>PAIS:</td>
                <td>
                  <select name="pais" required class="form-control" id="pais">
                    <option value="">Seleccione</option>
                    @foreach($pais as $pai)
                      <option value="{{ $pai->PAI_COD }}">{{ $pai->PAI_DESC }}</option>
                    @endforeach
                  </select>
                </td>
                <td>REGION:</td>
                <td>
                  <select name="region" required class="form-control" id="region">
                    <option value="">Seleccione</option>
                  </select>
                </td>

              </tr>

              <tr>

                <td>PROVINCIA:</td>
                <td>
                  <select name="provincia" required class="form-control" id="provincia">
                    <option value="">Seleccione</option>
                  </select>
                </td>

                <td>CIUDAD:</td>
                <td>
                  <select name="ciudad" required class="form-control" id="ciudad">
                    <option value="">Seleccione</option>
                  </select>
                </td>
              </tr>
              <tr>
                <td><a style="color: #9A0000">* </a> DIRECCION:</td>
                <td>
                  {{ Form::text('direccion',null,['class'=>'form-control', 'required','style'=>'width:175px']) }}
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

  <script>
      $.get("https://plataforma.sgrchile.com/api/pais").done(function(data){
          let option = "<option value='0'>Seleccione</option>";
          $("#pais").append(option);
          if (data !== null){
              if (Object.keys(data).length > 0 ){
                  $.each(data, function( index, value ){
                      let option = "<option value='"+ value.PAI_COD + "'>" + value.PAI_DESC+ "</option>";
                      $("#pais").append(option);
                  });
              }
          }
      });
      $("#pais").on("change", function(){
          let pais = $(this).val();

          if (pais == 1){
              $("#region").empty();
              $.get("https://plataforma.sgrchile.com/api/region").done(function(data){
                  if (data !== null){
                      if (Object.keys(data).length > 0 ){
                          $.each(data, function( index, value ){
                              let option = "<option value='"+ value.REG_COD + "'>" + value.REG_DESC+ "</option>";
                              $("#region").append(option);
                          });
                          $("#region").trigger("change");
                      }
                  }
              });
          }
          else{
              $("#region").empty();
              $("#provincia").empty();
              $("#ciudad").empty();
              let option = "<option value='0'>No corresponde</option>";
              $("#region").append(option);
              $("#provincia").append(option);
              $("#ciudad").append(option);
          }
      });
      $("#region").on("change", function(){
          let region = $(this).val();
          $("#provincia").empty();
          $.get("https://plataforma.sgrchile.com/api/provincia/" + region).done(function(data){
              if (data !== null){
                  if (Object.keys(data).length > 0 ){
                      $.each(data, function( index, value ){
                          let option = "<option value='"+ value.PV_COD + "'>" + value.PV_DESC+ "</option>";
                          $("#provincia").append(option);
                      });
                      $("#provincia").trigger("change");
                  }
              }
          });
      });

      $("#provincia").on("change", function(){
          let provincia = $(this).val();
          $("#ciudad").empty();
          $.get("https://plataforma.sgrchile.com/api/ciudad/" + provincia).done(function(data){
              if (data !== null){
                  if (Object.keys(data).length > 0 ){
                      $.each(data, function( index, value ){
                          let option = "<option value='"+ value.CIU_COD + "'>" + value.CIU_DESC+ "</option>";
                          $("#ciudad").append(option);
                      });
                      $("#ciudad").trigger("change");
                  }
              }
          });
      });
  </script>
@endsection
