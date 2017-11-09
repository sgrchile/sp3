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

          <textarea class="form-control" style="max-width:1000px; width:1000px;"></textarea>

          <table class="table-condensed text-right" align="center">


            <tr>
              <td>EMPRESA</td>
              <td>
                <select class="form-comtrol" style="width:175px;" name="">
                  <option>biogest</option>
                  <option>trener</option>
                  <option>kutralco</option>
                  <option>sgrchile</option>
                  <option>Plataforma sp3</option>
                </select>
              </td>
            </tr>
            <tr>
              <td>AREA</td>
              <td>
                <select class="form-comtrol" style="width:175px;" name="">
                  <option>Capacitaciones</option>
                  <option>Corporativo</option>
                  <option>Audiovisual</option>
                  <option>Consulta</option>
                </select>
              </td>
            </tr>
            <tr>
              <td>SECTOR</td>

              <td>
                <select class="form-comtrol" style="width:175px;" name="">
                  <option value="">Generales</option>
                  <option value="">Administración</option>
                  <option value="">Contabilidad</option>
                  <option value="">Informática</option>
                  <option value="">Hotelería</option>
                  <option value="">Turismo</option>
                  <option value="">Medio ambiente</option>
                  <option value="">Ingeniería</option>
                  <option value="">Comerciales</option>
                  <option value="">Diseño</option>
                  <option value="">Tutoriales</option>
                  <option value=""></option>
                  <option value="">Logo</option>
                  <option value="">Credencial</option>
                  <option value="">Firma e-mail</option>
                  <option value="">Fondo escritorio</option>
                  <option value="">Merchandising</option>
                  <option value="">Oferta digital</option>
                  <option value="">Organigrama</option>
                  <option value="">Perfil</option>
                  <option value="">Saludos</option>
                  <option value="">Ropa</option>
                  <option value=""></option>
                  <option value="">2010</option>
                  <option value="">2011</option>
                  <option value="">2012</option>
                  <option value="">2013</option>
                  <option value="">2014</option>
                  <option value="">2015</option>
                  <option value="">2016</option>
                  <option value="">2017</option>
                  <option value="">2018</option>
                  <option value=""></option>
                  <option value="">Antecedentes Legales  </option>
                  <option value="">Contratos
                  <option value="">Convenios  </option>
                  <option value="">Registros  </option>
                  <option value="">Actas  </option>
                  <option value="">Licencias  </option>
                  <option value="">Prácticas  </option>
                  <option value="">Vehículos  </option>
                  <option value="">Claves  </option>
                  <option value="">Software  </option>
                  <option value=""></option>
                </select>
              </td>

            </tr>
            <tr>
              <td>MATERIA</td>
              <td>
                <select class="form-comtrol" style="width:175px;" name="">
                  <option value="">Ceremonias</option>
                  <option value="">Entrevistas</option>
                  <option value="">Servicios</option>
                  <option value="">Testimonios</option>
                  <option value=""></option>
                  <option value="">Constitución</option>
                  <option value="">Modificación</option>
                  <option value="">Vigencia</option>
                  <option value="">Extracto</option>
                  <option value="">Personería</option>
                  <option value="">Publicación D.O.</option>
                  <option value="">Inscripción B.R.</option>
                  <option value="">Rut</option>
                  <option value="">Poderes</option>
                  <option value="">Certificados</option>
                  <option value="">Seguros</option>
                  <option value="">Patente</option>
                  <option value="">Firmas</option>
                  <option value=""></option>
                  <option value="">Redes Sociales</option>
                  <option value="">Web</option>
                  <option value="">Tributarias</option>
                  <option value="">Financieras</option>
                  <option value="">Computacionales</option>
                  <option value="">Físicas</option>
                </select>
              </td>
            </tr>

          </table>

          <table class="table-condensed" align="center">
            <tr>
                <td>
                  <button class="btn btn-primary btn-lg">  <span class="glyphicon glyphicon-search"></span>BUSCAR</button>
                </td><td>
                  <button class="btn btn-primary btn-lg">   <span class="glyphicon glyphicon-plus-sign"></span>  AGREGAR</button>
                </td>
                <td>
                  <button class="btn btn-primary btn-lg">  <span class="glyphicon glyphicon-search"></span>BAJAR</button>
                </td>
            </tr>

          </table>

          <h1 class="text-center text-uppercase">DOCUMENTOS EN DROPBOX</h1>
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
