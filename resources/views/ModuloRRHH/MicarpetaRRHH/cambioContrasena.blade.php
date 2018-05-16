@extends('layouts.app')
@section('content')


<br>
<div class="container" align="center">

  <div class="row">
    <div class="col-xs-12 col-md-12 col-sm-12">
      <div class="block-web">
        <div class="header">
          <div class="actions"></div>
          <h1 class="content-header text-center text-uppercase"><b>RESETEAR CONTRASEÑA</b></h1>
        </div>
        <div class="porlets-content">
          <!-- FORM INICIO -->

          {!! Form::open(['method' => 'post', 'route' => 'post.resetpass']) !!}
          <table class="table-condensed text-right" align="center">

            <tr>
              <td>NUEVA CONTRASEÑA:</td>
              <td>
                <input type="password" id="pass1" name="pass1" required autofocus="autofocus" min="6" max="10" placeholder="Escriba la contraseña" />
              </td>
            </tr>
            <tr>
              <td>CONFIRMAR:</td>
              <td>
                <input type="password" id="pass2" name="pass2" required min="6" max="10" placeholder="Vuelva a escribir la contraseña" />
              </td>
            </tr>
          </table>
          <br>
          <button class="btn btn-primary btn-md">RESETEAR </button>

        {!! Form::close() !!}

          <!-- FORM FINAL -->

        </div><!--/porlets-content-->
      </div><!--/block-web-->
    </div><!--/col-md-12-->
  </div><!--/row-->


</div>
<br>
<div class="container">

<a href="{{route('CarpetaPersonal')}}"><button class="btn btn-primary btn-lg">Volver</button></a>

</div>
<script>
    $(document).ready(function() {
        //variables
        var pass1 = $("#pass1");
        var pass2 = $("#pass2");
        var confirmacion = "Las contraseñas si coinciden";
        var longitud = "La contraseña debe estar formada entre 6-10 carácteres (ambos inclusive)";
        var negacion = "No coinciden las contraseñas";
        var vacio = "La contraseña no puede estar vacía";
        //oculto por defecto el elemento span
        var span = $('<span></span>').insertAfter(pass2);
        span.hide();
        //función que comprueba las dos contraseñas
        function coincidePassword(){
            var valor1 = pass1.val();
            var valor2 = pass2.val();
            //muestro el span
            span.show().removeClass();
            //condiciones dentro de la función
            if(valor1 != valor2){
                span.text(negacion).addClass('negacion');
            }
            if(valor1.length==0 || valor1==""){
                span.text(vacio).addClass('negacion');
            }
            if(valor1.length<6 || valor1.length>10){
                span.text(longitud).addClass('negacion');
            }
            if(valor1.length!=0 && valor1==valor2){
                span.text(confirmacion).removeClass("negacion").addClass('confirmacion');
            }
        }
        //ejecuto la función al soltar la tecla
        pass2.keyup(function(){
            coincidePassword();
        });
    });
</script>

@endsection
