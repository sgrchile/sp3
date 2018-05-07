<?php

namespace App\Http\Controllers;

use App\AsientoContable;
use App\AsientoCuenta;
use App\ClaseCuenta;
use App\Empresa;
use App\CuentaContable;
use App\TipoMovimiento;
use function GuzzleHttp\Promise\all;
use Illuminate\Http\Request;

class AsientoContableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $emp = Empresa::find($request->get('empresa'));
        $asientos = AsientoContable::orderby('ID_ASIENTO_CONT','ASC')
            ->where('ID_EMP_ASIENTO','=',$emp->EMP_ID)
            ->paginate(20);
        return view('ModuloCaja.AsientosContables')->with('asientos',$asientos);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tpmov = TipoMovimiento::pluck('TMOV_DESC','TMOV_ID');
        $clases = ClaseCuenta::all();
        $cuentas = CuentaContable::all();
        return view('ModuloCaja.NuevoAsientoContable')
            ->with('cuentas',$cuentas)
            ->with('clases',$clases);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //dd($request);
        $asiento = new AsientoContable();
        $asiento->COMENT_ASIENT = $request->comentario;
        $asiento->TP_MOVIMIENTO = $request->tp_movimiento;
        $asiento->FECHA_CONT = $request->fecasiento;
        $asiento->ID_USUARIO_ASIENTO = Auth\user();
        $asiento->ID_EMP_ASIENTO = $request->empresa;
        $tdebe=0;
        $thaber=0;
        $asiento->TOTAL_DEBE = $tdebe;
        $asiento->TOTAL_HABER = $thaber;
        $asiento->save();
        $count=0;
        $nreg=(($request->request->count())-6)/4;
        for ($i=0;$i<$nreg;$i++){
            if($request->exists("cuentas$count")){
                $asicta = new AsientoCuenta();
                $asicta->ID_ASIENTO_CONT = $asiento->ID_ASIENTO_CONT;
                $ctacont=CuentaContable::find($request->get("cuentas$count"))->where('EMP_CTA_CONT','=',$request->empresa);
                $asicta->setAttribute('ID_CTA_CONT',$ctacont->getAttribute('ID_CTA_CONT')) ;
                //dd($ctacont->getAttribute('TP_CTA_CON'));
                $monto=intval($ctacont->getAttribute('MONTO_CTA_CONT'));
                //dd($ctacont->tpcuenta());
                switch  ($ctacont->getAttribute('TP_CTA_CON')){
                    case 1:
                        if ($request->get("debe$count")!=null){
                            $monto=$monto + intval($request->get("debe$count"));
                            $tdebe = $tdebe + intval($request->get("debe$count"));
                            $asicta->setAttribute('ASIENTO_DEBE',$request->get("debe$count"));
                        }
                        if ($request->get("haber$count")!=null){
                            $monto=$monto - intval($request->get("haber$count"));
                            $thaber = $thaber + intval($request->get("haber$count"));
                            $asicta->setAttribute('ASIENTO_HABER',$request->get("haber$count"));
                        }
                        //dd($monto);
                        $ctacont->setAttribute('MONTO_CTA_CONT',$monto);
                        break;
                    case 2:
                        if ($request->get("debe$count")!=null){
                            $monto=$monto - intval($request->get("debe$count"));
                            $tdebe = $tdebe + intval($request->get("debe$count"));
                            $asicta->setAttribute('ASIENTO_DEBE',$request->get("debe$count"));
                        }
                        if ($request->get("haber$count")!=null){
                            $monto=$monto + intval($request->get("haber$count"));
                            $thaber = $thaber + intval($request->get("haber$count"));
                            $asicta->setAttribute('ASIENTO_HABER',$request->get("haber$count"));
                        }
                        $ctacont->setAttribute('MONTO_CTA_CONT',$monto);
                        break;
                    case 3:
                        if ($request->get("debe$count")!=null){
                            $monto=$monto - intval($request->get("debe$count"));
                            $tdebe = $tdebe + intval($request->get("debe$count"));
                            $asicta->setAttribute('ASIENTO_DEBE',$request->get("debe$count"));
                        }
                        if ($request->get("haber$count")!=null){
                            $monto=$monto + intval($request->get("haber$count"));
                            $thaber = $thaber + intval($request->get("haber$count"));
                            $asicta->setAttribute('ASIENTO_HABER',$request->get("haber$count"));
                        }
                        $ctacont->setAttribute('MONTO_CTA_CONT',$monto);
                        break;
                    case 4:
                        if ($request->get("debe$count")!=null){
                            $monto=$monto + intval($request->get("debe$count"));
                            $tdebe = $tdebe + intval($request->get("debe$count"));
                            $asicta->setAttribute('ASIENTO_DEBE',$request->get("debe$count"));
                        }
                        if ($request->get("haber$count")!=null){
                            $monto=$monto - intval($request->get("haber$count"));
                            $thaber = $thaber + intval($request->get("haber$count"));
                            $asicta->setAttribute('ASIENTO_HABER',$request->get("haber$count"));
                        }
                        $ctacont->setAttribute('MONTO_CTA_CONT',$monto);
                        break;
                    case 5:
                        if ($request->get("debe$count")!=null){
                            $monto=$monto - intval($request->get("debe$count"));
                            $tdebe = $tdebe + intval($request->get("debe$count"));
                            $asicta->setAttribute('ASIENTO_DEBE',$request->get("debe$count"));
                        }
                        if ($request->get("haber$count")!=null){
                            $monto=$monto + intval($request->get("haber$count"));
                            $thaber = $thaber + intval($request->get("haber$count"));
                            $asicta->setAttribute('ASIENTO_HABER',$request->get("haber$count"));
                        }
                        $ctacont->setAttribute('MONTO_CTA_CONT',$monto);
                        break;
                    case 6:
                        if ($request->get("debe$count")!=null){
                            $monto=$monto - intval($request->get("debe$count"));
                            $tdebe = $tdebe + intval($request->get("debe$count"));
                            $asicta->setAttribute('ASIENTO_DEBE',$request->get("debe$count"));
                        }
                        if ($request->get("haber$count")!=null){
                            $monto=$monto + intval($request->get("haber$count"));
                            $thaber = $thaber + intval($request->get("haber$count"));
                            $asicta->setAttribute('ASIENTO_HABER',$request->get("haber$count"));
                        }
                        $ctacont->setAttribute('MONTO_CTA_CONT',$monto);
                        break;
                }//FIN switch
                //dd($asicta);
                $ctacont->save();
                $asicta->save();
            }//FIN IF
            $count++;
        }//FIN FOR

        //dd($asiento);
        $asiento->TOTAL_DEBE = $tdebe;
        $asiento->TOTAL_HABER = $thaber;
        $asiento->save();
        //dd($asiento);

        return redirect()->back()->with('status_asiento', 'Asiento almacenado con exito!');
    }

    /**
     * Display the specified resource.
     *
     * @param  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $asiento = AsientoContable::find($id);
        $ctasiento = AsientoCuenta::all()->where('ID_ASIENTO_CONT','=',$id);
        //dd($ctasiento);
        return view('ModuloCaja.AsientoContable',compact('ctasiento'))->with('asiento',$asiento);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AsientoContable  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $asiento = AsientoContable::find($id);
        //dd($cuentas);
        return view('ModuloCaja.editarAsientoContable')->with('asiento',$asiento);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AsientoContable  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $asient = AsientoContable::find($id);
        $asientcta = AsientoCuenta::all()->where('ID_ASIENTO_CONT','=',$id);
        //dd($asientcta);
        foreach ($asientcta as $ascta){
            $cta = CuentaContable::find($ascta->ID_CTA_CONT);
            switch  ($cta->getAttribute('TP_CTA_CON')){
                case 1:
                    if ($ascta->ASIENTO_DEBE>0){
                        $monto = 0;
                        $monto = $cta->MONTO_CTA_CONT - $ascta->ASIENTO_DEBE;
                        $cta->setAttribute('MONTO_CTA_CONT',$monto);
                        $cta->save();
                    }
                    if ($ascta->ASIENTO_HABER>0){
                        $monto = 0;
                        $monto = $cta->MONTO_CTA_CONT + $ascta->ASIENTO_HABER;
                        $cta->setAttribute('MONTO_CTA_CONT',$monto);
                        $cta->save();
                    }
                    //dd($monto);
                    break;
                case 2:
                    if ($ascta->ASIENTO_DEBE>0){
                        $monto = 0;
                        $monto = $cta->MONTO_CTA_CONT + $ascta->ASIENTO_DEBE;
                        $cta->setAttribute('MONTO_CTA_CONT',$monto);
                        $cta->save();
                    }
                    if ($ascta->ASIENTO_HABER>0){
                        $monto = 0;
                        $monto = $cta->MONTO_CTA_CONT - $ascta->ASIENTO_HABER;
                        $cta->setAttribute('MONTO_CTA_CONT',$monto);
                        $cta->save();
                    }
                    //dd($monto);
                    break;
                case 3:
                    if ($ascta->ASIENTO_DEBE>0){
                        $monto = 0;
                        $monto = $cta->MONTO_CTA_CONT + $ascta->ASIENTO_DEBE;
                        $cta->setAttribute('MONTO_CTA_CONT',$monto);
                        $cta->save();
                    }
                    if ($ascta->ASIENTO_HABER>0){
                        $monto = 0;
                        $monto = $cta->MONTO_CTA_CONT - $ascta->ASIENTO_HABER;
                        $cta->setAttribute('MONTO_CTA_CONT',$monto);
                        $cta->save();
                    }
                    //dd($monto);
                    break;
                case 4:
                    if ($ascta->ASIENTO_DEBE>0){
                        $monto = 0;
                        $monto = $cta->MONTO_CTA_CONT - $ascta->ASIENTO_DEBE;
                        $cta->setAttribute('MONTO_CTA_CONT',$monto);
                        $cta->save();
                    }
                    if ($ascta->ASIENTO_HABER>0){
                        $monto = 0;
                        $monto = $cta->MONTO_CTA_CONT + $ascta->ASIENTO_HABER;
                        $cta->setAttribute('MONTO_CTA_CONT',$monto);
                        $cta->save();
                    }
                    //dd($monto);
                    break;
                case 5:
                    if ($ascta->ASIENTO_DEBE>0){
                        $monto = 0;
                        $monto = $cta->MONTO_CTA_CONT + $ascta->ASIENTO_DEBE;
                        $cta->setAttribute('MONTO_CTA_CONT',$monto);
                        $cta->save();
                    }
                    if ($ascta->ASIENTO_HABER>0){
                        $monto = 0;
                        $monto = $cta->MONTO_CTA_CONT - $ascta->ASIENTO_HABER;
                        $cta->setAttribute('MONTO_CTA_CONT',$monto);
                        $cta->save();
                    }
                    //dd($monto);
                    break;
                case 6:
                    if ($ascta->ASIENTO_DEBE>0){
                        $monto = 0;
                        $monto = $cta->MONTO_CTA_CONT + $ascta->ASIENTO_DEBE;
                        $cta->setAttribute('MONTO_CTA_CONT',$monto);
                        $cta->save();
                    }
                    if ($ascta->ASIENTO_HABER>0){
                        $monto = 0;
                        $monto = $cta->MONTO_CTA_CONT - $ascta->ASIENTO_HABER;
                        $cta->setAttribute('MONTO_CTA_CONT',$monto);
                        $cta->save();
                    }
                    //dd($monto);
                    break;
            }//FIN switch
        }//FIN FOREACH
        $asient->delete();
        return redirect()->back()->with('status_asiento', 'Asiento eliminado!');
    }
}
