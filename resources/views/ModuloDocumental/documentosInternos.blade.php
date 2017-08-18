@extends('layouts.app')
@section('content')


<br>




<div class="row">
  <div class="col-md-12 col-sm-9" >
    <div class="block-web">
      <div class="header">
        <div class="actions"></div>
        <h1 class="text-center text-uppercase">MODULO DOCUMENTAL</h1>
      </div>
        <div class="porlets-content">


          <h3 class="text-center text-uppercase">FORMATOS CORPORATIVOS</h3>
          <div class="table-responsive">

            <table class="table-condensed table-bordered" align="center">
              <tr>
                <td>
                  <button style="font-size:24px"><i class="fa fa-cloud-download"></i>
                </td>
                <td>
                  <h4>CONTRATO A HONORARIOS</h4>
                </td>
              </tr>

              <tr>
                <td>
                  <button style="font-size:24px"><i class="fa fa-cloud-download"></i>
                </td>
                <td>
                  <h4 >CONTRATO FULL TIME</h4>
                </td>
              </tr>

              <tr>
                <td>
                  <button style="font-size:24px"><i class="fa fa-cloud-download"></i>
                </td>
                <td>
                  <h4>CONTRATO PART TIME</h4>
                </td>
              </tr>
            </table>
          </div>

          <h3 class="text-center text-uppercase">PLANTILLAS PRESENTACION</h3>
          <div class="table-responsive">

            <table class="table-condensed table-bordered" align="center">
              <tr>
                <td>
                  <button style="font-size:24px"><i class="fa fa-cloud-download"></i>
                </td>
                <td>
                  <h4>FORMATO POWER POINT</h4>
                </td>
              </tr>

              <tr>
                <td>
                  <button style="font-size:24px"><i class="fa fa-cloud-download"></i>
                </td>
                <td>
                  <h4 >FIRMAS</h4>
                </td>
              </tr>

              <tr>
                <td>
                  <button style="font-size:24px"><i class="fa fa-cloud-download"></i>
                </td>
                <td>
                  <h4>SALUDOS</h4>
                </td>
              </tr>
            </table>
          </div>


            <h3 class="text-center text-uppercase">DOCUMENTACION INTERNA</h3>
            <div class="table-responsive">

              <table class="table-condensed table-bordered" align="center">
                <tr>
                  <td>
                    <button style="font-size:24px"><i class="fa fa-cloud-download"></i>
                  </td>
                  <td>
                    <h4>ANTECEDENTES LEGALES DE LA EMPRESA</h4>
                  </td>
                </tr>

                <tr>
                  <td>
                    <button style="font-size:24px"><i class="fa fa-cloud-download"></i>
                  </td>
                  <td>
                    <h4 >ANTECEDENTES LEGALES DE LA EMPRESA</h4>
                  </td>
                </tr>

                <tr>
                  <td>
                    <button style="font-size:24px"><i class="fa fa-cloud-download"></i>
                  </td>
                  <td>
                    <h4>DIAGRAMAS DE PROCESO</h4>
                  </td>
                </tr>
              </table>
            </div>
            <br />
            <div class="container" align="center">

              <button class="btn btn-primary btn-lg"  data-toggle="modal" data-target="#agregarDocumentos" data-backdrop="static">AGREGAR DOCUMENTO</button>
              @include('modals.Agregardocumento')
            </div>
        </div>

      </div><!--/porlets-content-->
    </div><!--/block-web-->
  </div><!--/col-md-12-->
</div><!--/row-->



<div class="container"><a href="javascript:history.back(1)"><button class="btn btn-primary btn-lg">Volver</button></a></div>

<BR>




@endsection
