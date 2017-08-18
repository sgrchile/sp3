@extends('layouts.app')
@section('content')

 <script>
$().ready(function()
	{
		$('.pasar1').click(function() { return !$('#origen1 option:selected').remove().appendTo('#destino1'); });
		$('.quitar1').click(function() { return !$('#destino1 option:selected').remove().appendTo('#origen1'); });
		$('.pasartodos1').click(function() { $('#origen1 option').each(function() { $(this).remove().appendTo('#destino1'); }); });
		$('.quitartodos1').click(function() { $('#destino1 option').each(function() { $(this).remove().appendTo('#origen1'); }); });
		$('.pasar2').click(function() { return !$('#origen2 option:selected').remove().appendTo('#destino2'); });
		$('.quitar2').click(function() { return !$('#destino2 option:selected').remove().appendTo('#origen2'); });
		$('.pasartodos2').click(function() { $('#origen2 option').each(function() { $(this).remove().appendTo('#destino2'); }); });
		$('.quitartodos2').click(function() { $('#destino2 option').each(function() { $(this).remove().appendTo('#origen2'); }); });

		$('.submit').click(function() { $('#destino option').prop('selected', 'selected'); });
	});
</script>




<div class="container" >

  <div class="row">
    <div class="col-xs-12 col-md-12 col-sm-12">
      <div class="block-web">
        <div class="header">
          <div class="actions"></div>
          <h1 class="text-center text-uppercase">consolidar cartola</h1>
        </div>
        <div class="porlets-content">
          <!-- FORM INICIO -->

          <table class="table-condensed form-group text-right text-uppercase" border="0" align="center" cellspacing="15px" style=" border-collapse: separate;
            border-spacing: 5px; ">
              <tr>
              <td class="text-right">Periodo: </td>
              <td>
              <input   type="month" name="fecha" style="width:175px;">
              </td>
              <td>
              <input type="submit" class="btn btn-primary btn-lg" >
              </td>
              </tr>
          <table>




          <table  class="table" align="center">
          <tr>
          <td align="center"><h2>Movimiento por sistema</h2></td>
          <td align="center"><h2>Movimientos bancarios</h2></td>

          </tr>

          </table>

          <table class="table-condensed" border="1" align="center">
          <form action="" method="post" id="formulario">
            <tbody>
              <tr>
                <td  colspan="2" align="center">

                		<select name="origen1[]" id="origen1" multiple="multiple" size="8" style="width:500px">
                      <option value="1">Opción 1</option>
                      <option value="2">Opción 2</option>
                      <option value="3">Opción 3</option>
                      <option value="4">Opción 4</option>
                      <option value="5">Opción 5</option>
                      <option value="6">Opción 6</option>
                      <option value="7">Opción 7</option>
                      <option value="8">Opción 8</option>
                      </select>

                      <select name="origen2[]" id="origen2" multiple="multiple" size="8" style="width:500px">
                      <option value="1">Opción 1</option>
                      <option value="2">Opción 2</option>
                      <option value="3">Opción 3</option>
                      <option value="4">Opción 4</option>
                      <option value="5">Opción 5</option>
                      <option value="6">Opción 6</option>
                      <option value="7">Opción 7</option>
                      <option value="8">Opción 8</option>
                      </select>
          	  </td>
              </tr>

              <tr>
                  <td align="center">
                      <input type="button" class="pasar1 izq" value="Pasar »">
                      <input type="button" class="quitar1 der" value="« Quitar">
                  </td>

                  <td align="center"><input type="button" class="pasar1 izq" value="Pasar »">
                    <input type="button" class="quitar1 der" value="« Quitar"></td>
              </tr>

              <tr>
                  <td align="center">
                       <input type="button" class="pasartodos1 izq" value="Todos »">
                      <input type="button" class="quitartodos1 der" value="« Todos">
                  </td>

                  <td align="center">
                  	<input type="button" class="pasartodos2 izq" value="Todos »">
                  	<input type="button" class="quitartodos2 der" value="« Todos"></td>
              </tr>

              <tr>
                  <td>
                  <select name="destino1[]" id="destino1" multiple="multiple" size="8"></select>
                  </td>
                   <td >
               	<select name="destino2[]" id="destino2" multiple="multiple" size="8"></select>
              </td>
              </tr>
          	</tbody>
              </form>
          </table>

            <center><input type="button" class="btn btn-primary btn-lg"  value="Consolidar"></center>


          <!-- FORM FINAL -->

        </div><!--/porlets-content-->
      </div><!--/block-web-->
    </div><!--/col-md-12-->
  </div><!--/row-->
</div>

 <div class="container">  <a href="index.php"><button class="btn btn-primary btn-lg">Volver</button></a></div>

 @endsection
