@extends('layouts.app')
@section('content')

<!--
DATOS QUE SE REGISTRAN POR DEFECTO

*ENCARGADO AL MOMENTO DE INGRESAR ES EL ADMINISTADOR (RUT)
*MARGEN ES 100% AL INGRSAR
*FECHA INICIO ES EL DIA DEL INCERT Y FECHA FIN ES 00/00/0000

-->
<div class="row">
  <div class="col-xs-12 col-md-12 col-sm-12">
    <div class="block-web">
      <div class="header">
        <div class="actions"></div>
        <h1 class="content-header text-center text-uppercase"><b>ORDEN DE TRABAJO</b></h1>
      </div>
      <div class="porlets-content">
        <!-- FORM INICIO -->

        <div class="container-fluid" align="center">
        <form id="form1" name="form1" class="form-horizontal row-border" method="post" action="{{ route('ordenTrabajo.agregar.post') }}">
        {{ csrf_field() }}




            <div class="col-sm-6 col-md-12">


                  <h4>ID cliente:</h4>

                  <input class="form-control"	 name="idcliente" type="text" id="idcliente" value="" readonly style="width:175;">
                  <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modalCliente">  <span class="glyphicon glyphicon-search"></span></button></td>


            </div>

            <div class="col-sm-6 col-md-12">
              <h4>Monto neto:</h4>

              <input type="number" min="0"  class="form-control" name="MontoNeto"  id="MontoNeto"   required="required" >

            </div>
            <div class="col-sm-6 col-md-12">

              <h4>Centro de negocio:</h4>

              <select name="centro_negocio" required class="form-control" id="centro-negocio">
              @foreach($centro_negocios as $centro_negocio)
              <option value="{{ $centro_negocio->CT_ID }}">{{ $centro_negocio->CT_PROCESO }}</option>
              @endforeach
              </select>

            </div>

            <div class="col-sm-6 col-md-12">

              <h4>OC/contrato:</h4>
              <textarea  class="form-control"  name="oContrato" type="text" id="oContrato"  rows="10" cols="100" required></textarea>
            </div>

            <div class="col-sm-6 col-md-12">
            <h4>Descripcion:</h4>
            <textarea  class="form-control" name="descripcion" type="text" id="descripcion" rows="10" cols="100"  required></textarea>
            </div>


            <div class="col-sm-6 col-md-12">


            <input   class="btn btn-primary btn-lg" name="adot_boton" type="submit" id="adot_boton" value="Agregar" />


            </div>

        </form>
      </div>
      <br>

      <br>

          <!-- Modal -->
          <div class="modal fade" id="modalCliente" role="dialog" >
            <div class="modal-dialog modal-lg">

              <!-- Modal content-->
              <div class="modal-content" >
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Seleccionar	</h4>
                </div>
                <div class="modal-body">
                  <ul id="clients">
                    @foreach($clientes as $cliente)
                      <li><a href="#" data-dismiss="modal" data-client-id="{{ $cliente->CLI_ID }}">{{ $cliente->CLI_NOMBRE }}</a></li>
                    @endforeach
                  </ul>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>

            </div>
          </div>



         <div class="container">  <a href="{{route('ModuloOt')}}"><button class="btn btn-primary btn-lg">Volver</button></a></div>
        <br>

        <br>


        <!-- FORM FINAL -->

      </div><!--/porlets-content-->
    </div><!--/block-web-->
  </div><!--/col-md-12-->
</div><!--/row-->




@endsection
