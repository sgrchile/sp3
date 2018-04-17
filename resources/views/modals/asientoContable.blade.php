
<div class="modal fade" id="asientoContable" role="dialog" >
<div class="modal-dialog modal-lg">

<!-- Modal content-->
<div class="modal-content" >
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title text-center">ASIENTO CONTABLE</h4>
    </div>
    <div class="modal-body" align="center">

      <textarea name="name" rows="8" cols="80" readonly class="form-control" style="max-width:560px; max-height:150px;">{!! $asiento->COMENT_ASIENT !!}</textarea>
      <br />
      <br />


      <table class="table table-bordered">

        <tr>

          <td>CUENTA</td>
          <td>DEBE</td>
          <td>HABER</td>
        </tr>

        <!--@foreach($ctasiento as $cta)
        <tr>
          <td>{!! App\CuentaContable::find($cta->ID_CTA_CONT) !!}</td>
          <td>{!! App\CuentaContable::find($cta->ASIENTO_DEBE) !!}</td>
          <td>{!! App\CuentaContable::find($cta->ASIENTO_HABER) !!}</td>
        </tr>
        @endforeach-->

      </table>


    </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
