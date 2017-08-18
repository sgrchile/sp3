@extends('layouts.app')
@section('content')

<div class="container-fluid">
<h1 class="text-center">    Ingreso Documentos</h1>

  <form id="form1" name="form1" method="post" action="agrega_documentos.php">



         <!-- <input name="sol" type="hidden" value="170119182016" rehacerlo="" agregar="" campo="" de="" rut="" proveedor="">-->


	<table class="table-responsive" style=" border-collapse:separate; border-spacing:15px;" align="center">
          <tbody>
            <tr>
              <td><label>RUT</label></td>
              <td><input  style="width:175px" type="text" name="rut" id="rut" ></td>

              <td><label>N&ordm; Solicitud:: <?php echo $sol;?><?php echo "<input name=sol type=hidden value=$sol>";?></label></td>
              <td><input style="width:175px" type="text"  name=""> </td>

              <td><label>Tipo Doc:</label></td>
              <td>
                  <select style="width:175px;" name="tipodoc" id="tipodoc" required>
                        <option value="0">Boleta</option>
                        <option value="1">Boleto</option>
                        <option value="2">Factura</option>
                        <option value="3">Liquidacion</option>
                        <option value="4">Boleta Honorarios</option>
                        <option value="5">Retiro</option>
                   </select>
              </td>

              <td><label>Fecha: </label></td>
              <td><input  style="width:175px" name="fecha" type="date" id="fecha" required="required"></td>

            </tr>

            <tr>
              <td><label>Nº documento:</label></td>
              <td> <input  style="width:175px" name="nodoc" type="text" id="nodoc" required="required"></td>
              <td><label>Proveedor:</label></td>
              <td> <input  style="width:175px" name="prove" type="text" id="prove" required="required"></td>
              <td><label>Tipo Gasto:</label></td>
              <td>
                  <select style="width:175px;" name="tipogasto" id="tipogasto">
                    <option value="0">Insumos</option>
                    <option value="1">Materiales</option>
                    <option value="2">Operativos</option>
                    <option value="3">Administrativos</option>
                    <option value="4">Servicios</option>
                    <option value="5">Nomina</option>
                  </select>
              </td>
              <td><label>Monto: </label></td>
              <td><input style="width:175px" name="monto" type="text" id="monto" required="required"></td>
            </tr>



          </tbody>
	</table>

    <br>
<center><input class="btn btn-primary btn-lg" name="adot_boton" type="submit" id="adot_boton" value="Agregar"></center>

</form>
<br>

<table class="table" align="center" style=" border-collapse:separate; border-spacing:5px;">
        <tbody>

            <tr>
                <td><label>ID Solicitud</label></td>
                <td><label>Fecha</label></td>
                <td><label>Tipo</label></td>
                <td><label>Nº documento</label></td>
                <td><label>Proveedor</label></td>
                <td><label>Monto</label></td>
                <td><label>Gasto</label></td>
                 <td><label>ACCION</label></td>
            </tr>

        </tbody>

        <tbody>

            <tr>
                <td>####</td>
                <td><label>####</label></td>
                <td><label>####</label></td>
                <td><label>####</label></td>
                <td><label>####</label></td>
                <td><label>####</label></td>
                <td><label>####</label></td>

                <td><button class="btn btn-primary btn-sm">ELIMINAR</button></td>
            </tr>

        </tbody>
</table>

<br>

<a href="RendirFondos.php"> <button class="btn btn-primary btn-lg">volver</button></a>
<br>


</div>
@endsection
