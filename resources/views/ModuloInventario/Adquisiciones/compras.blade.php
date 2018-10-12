@extends('layouts.app')
@section('content')
  {!! Html::script('js/jquery-2.1.1.min.js') !!}
<div class="container-fluid"  align="center">

  <div class="row">
    <div class="col-xs-12 col-md-12 col-sm-12">
      <div class="block-web">
        <div class="alert alert-info" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <strong><i>La sección a la que usted acaba de ingresar, se encuentra en etapa de programación. Disculpe las molestias</i></strong>
        </div>
        <div class="header">
          <div class="actions"></div>
          <h1 class="text-center text-uppercase">COMPRAR PRODUCTOS</h1>
        </div>
        <div class="porlets-content">
          <!-- FORM INICIO -->
        {!! Form::open(['route' => 'post.compra', 'method' => 'POST']) !!}
        {{ csrf_field() }}

          <!-- <table class="table-condensed text-right" align="center">
             <tr>
               <td>BUSCAR PROVEEDOR:</td>
               <td >
                 <select required style="width:175px;" class="form-control">>
                   <option></option>
                   <option></option>
                   <option></option>
                   <option></option>
                   <option></option>
                 </select>
               </td>
               <td align="left"><button type="button" class="btn btn-primary btn-xs">  <i class="fa fa-search" style="font-size:29px"></i></button></td>
             </tr>

           </table>-->

           <table class="table-condensed table-bordered">

               <tr>
                   <td><input name="prov" id="prov" value="{{ $prov->PRO_RUN }}" readonly hidden></td>
               </tr>

             <tr>

               <td>COD. ART.</td>
               <td>DESC. ART.</td>
               <td>EN STOCK</td>
               <td>VALOR</td>
               <td>CANTIDAD</td>
               <td>TOTAL</td>
               <!--<td>ACCION</td>-->
             </tr>

             <tr>
               <td><select name="codart"  class="form-control" id="codart">
                   <option value="">Seleccione</option>
                   @foreach($productos as $producto)
                     <option value="{{ $producto->OFAR_ID }}">{{ $producto->OFAR_ID }}</option>
                   @endforeach
                 </select>
               </td>
               <td><input type="text" readOnly name="desc" id="desc" class="form-control"></td>
               <td><input type="number" readOnly name="stock" id="stock"  class="form-control"></td>
               <td><input type="number" readOnly name="valor" id="valor" class="form-control"></td>
               <td><input type="number" name="cant" id="cant" min="1" max="1" class="form-control"></td>
               <td><input type="number" readOnly name="total" id="total"  class="form-control"></td>
               <!--<td><button class="btn btn-primary btn-xs">ELIMNAR</button></td>-->
             </tr>
               <!--<tr>

                 <td><input type="text" readOnly   class="form-control"></td>
                 <td>
                   <select required  class="form-control">>
                     <option></option>
                     <option></option>
                     <option></option>
                     <option></option>
                     <option></option>
                   </select>
                 </td>
                 <td><input type="text" readOnly   class="form-control"></td>
                 <td><input type="text" readOnly   class="form-control"></td>

                 <td><input type="number" min="0" required class="form-control" /></td>
                 <td><input type="text" readOnly  class="form-control"></td>

                 <td><button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#AGREGAR" data-backdrop="static">AGREGAR</button></td>

               </tr>-->

             </table>
             <br>
             <button class="btn btn-primary btn-lg">CREAR ORDEN DE COMPRA</button>

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
<script  type='text/javascript'>
    $(document).ready(function(){
        $("#codart").on("change", function(){
            let cod = $(this).val();
            $("#desc").empty();
            $("#stock").empty();
            $("#valor").empty();
            $("#cant").empty();
            $("#total").empty();
            $.get("https://plataforma.sgrchile.com/api/ofertaprod/" + cod).done(function(data){
                if (data !== null){
                    //alert(data['OFAR_CAPACIDAD']);
                    $("#desc").val(data['OFAR_DESC']);
                    $("#stock").val(data['OFAR_CAPACIDAD']);
                    $("#valor").val(data['OFAR_VALOR']);
                    $("#cant").attr("max",data['OFAR_CAPACIDAD']);

                }
            });
        });
        $("#cant").on("change", function(){
            let cant = $(this).val();
            let val = $("#valor").val();
            $("#total").val(cant*val);
        });
    });
</script>

@endsection
