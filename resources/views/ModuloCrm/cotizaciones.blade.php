@extends('layouts.app')
@section('content')


  <div class="row">
    <div class="col-xs-12 col-md-12 col-sm-12">
      <div class="block-web">
        <div class="header">
          <div class="actions"></div>
        <h1 class="text-center text-uppercase">COTIZACION</h1>
        </div>
        <div class="porlets-content">
          <!-- FORM INICIO -->
          <div class="row">
            <div class="col-sm-6">

                <h4 class="text-left text-uppercase">FECHA:</h4>
            </div>
            <div class="col-sm-6">
              <h4 class="text-right text-uppercase">{!! $fecha=strftime( "%Y-%m-%d", time() ) !!} </h4>
            </div>
          </div>

         <h1>DATOS DE CLIENTE</h1>
         <table class="table table-condensed  text-right" align="center">

            <td>
              <td>ID:</td>
              <td> {!! Form::select('cliente',$cliente, null,['placeholder' => 'Seleccione...', 'class' => 'form-control']) !!}</td>
              <td>RUT:</td>
              <td><input type="text"  style="width:175px;" class="form-control"  readOnly/></td>
            </tr>
            <tr>

              <td>NOMBRE:</td>
              <td><input type="text"  style="width:175px;" class="form-control"  readOnly/></td>
              <td>EMAIL:</td>
              <td><input type="text"  style="width:175px;" class="form-control"  readOnly/></td>
            </tr>
              <td>TELEFONO:</td>
              <td><input type="text"  style="width:175px;" class="form-control"  readOnly/></td>
              <td>CONTACTO:</td>
              <td><input type="text"  style="width:175px;" class="form-control"  readOnly/></td>

         </table>

         <table class="table-condensed table-bordered  ">
           <tr>
             <td>TIPO</td>

             <td>ITEM</td>
             <td>ID</td>
             <td>CANTIDAD</td>
             <td>COSTO UNITARIO</td>
             <td>DSCTO.</td>
             <td>COSTO</td>
             <td>ACCION</td>
           </tr>

           <tr>
             <td> </td>
             <td> </td>
             <td></td>
             <td> </td>
             <td> </td>
             <td></td>
             <td> </td>
             <td><button class="btn btn-primary btn-xs"> ELIMINAR</button>
             </td>

           </tr>

           <tr>
             <td>
               <select  style="width:175px;" class="form-control" >
                 <option>PRODUCTO</option>
                 <option>SERVICIO</option>
               </select>
             </td>

             <td>
               <select  style="width:175px;" class="form-control" >
                 <option></option>
                 <option></option>
               </select>
             </td>
             <td><input type="text"  style="width:175px;" class="form-control"  readOnly/></td>
             <td><input type="number" min="0"  style="width:85px;" class="form-control"  required/></td>
             <td></td>
             <td><input type="text"  style="width:85px;" class="form-control"  required/></td>
             <td> </td>
             <td><button class="btn btn-primary btn-xs"> AGREGAR</button></td>

           </tr>

           <tr>

             <td colspan="6" align="right">SUB TOTAL:</td>
             <td><input type="text"  style="width:100px;" class="form-control"  readOnly/></td>
           </tr>
           <tr>

             <td colspan="6" align="right">DESCUENTO:</td>
             <td><input type="text"  style="width:100px;" class="form-control"  readOnly/></td>
           </tr>
           <tr>

             <td colspan="6" align="right">TOTAL DESCUENTO:</td>
             <td><input type="text"  style="width:100px;" class="form-control"  readOnly/></td>
           </tr>
           <tr>

             <td colspan="6" align="right">TOTAL NETO:</td>
             <td><input type="text"  style="width:100px;" class="form-control"  readOnly/></td>
           </tr>


           <tr>

             <td colspan="6" align="right">IVA:</td>
             <td><input type="text"  style="width:100px;" class="form-control"  readOnly/></td>
           </tr>
           <tr>

             <td colspan="6" align="right">BRUTO:</td>
             <td><input type="text"  style="width:100px;" class="form-control"  readOnly/></td>
           </tr>


         </table>

          <!-- FORM FINAL -->

        </div><!--/porlets-content-->
      </div><!--/block-web-->
    </div><!--/col-md-12-->
  </div><!--/row-->



<div class="container">
<a href="{{route('CRM')}}"><button class="btn btn-primary btn-lg"> Volver</button></a>

</div>
</a>
<br>

@endsection
