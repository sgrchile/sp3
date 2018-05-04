
<div class="modal fade" id="FiltroFlujo" role="dialog" >
    <div class="modal-dialog modal-lg" align="center">

        <!-- Modal content-->
        <div class="modal-content" >
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <div class="modal-body">
                <form id="form1" name="form1" method="post" action="{{ route('post.flujo') }}">
                    {{ csrf_field() }}
                    <table class="table-condensed text-right" align="center">
                        <tr>
                            <td><h4 class="modal-title text-center">SELECIONE EMPRESA</h4></td>
                        </tr>
                        <tr>
                            <td>{!! Form::select('empresa',App\Empresa::pluck('EMP_DESC','EMP_ID'),null,['class'=>'form-control','style'=>'width:175px','placeholder'=>'Seleccione']) !!}</td>
                        </tr>

                        <tr>
                            <td><h4 class="modal-title text-center">DESDE</h4></td>
                        </tr>

                        <tr>
                            <td>{!! Form::date('desde',Carbon\Carbon::now(),['class'=>'form-control','style'=>'width:175px',]) !!}</td>
                        </tr>

                        <tr>
                            <td><h4 class="modal-title text-center">HASTA</h4></td>
                        </tr>

                        <tr>
                            <td>{!! Form::date('hasta',Carbon\Carbon::tomorrow(),['class'=>'form-control','style'=>'width:175px',]) !!}</td>
                        </tr>

                    </table>

                    <button class="btn btn-primary btn-lg">SELECCIONAR</button>


                </form>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
