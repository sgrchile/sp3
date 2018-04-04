<?php

namespace App\Http\Controllers;

use App\AsientoContable;
use App\AsientoCuenta;
use App\CuentaContable;
use App\TipoMovimiento;
use Illuminate\Http\Request;

class AsientoContableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $asientos = AsientoContable::orderby('ID_ASIENTO_CONT','ASC')->paginate(20);
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
        $cuenta = CuentaContable::pluck('NOM_CTA_CONT','ID_CTA_CONT');
        return view('ModuloCaja.NuevoAsientoContable',['tpmov'=>$tpmov,'cuenta'=>$cuenta]);
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
        $asiento->TOTAL_DEBE = $request->debe;
        $asiento->TOTAL_HABER = $request->haber;
        $asiento->ID_USUARIO_ASIENTO = null;
        $asiento->save();
        //dd($asiento);
        //$cuenta = new AsientoCuenta();
        //$cuenta->ID_ASIENTO_CONT = $asiento->ID_ASIENTO_CONT;
        //$cuenta->ASIENTO_DEBE = $request->debe;
        //$cuenta->ASIENTO_HABER = $request->haber;
        //$cuenta->ID_CTA_CONT = $request->cta_cont;
        //$cuenta->save();
        return redirect()->back()->with('status_asiento', $asiento);
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
        return redirect()->back()->with('idasiento',$asiento);
        //dd($id);
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
        $asient->delete();
        //dd($contac);
        return redirect()->back();
    }
}
