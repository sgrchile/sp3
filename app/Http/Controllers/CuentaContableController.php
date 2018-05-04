<?php

namespace App\Http\Controllers;

use App\CuentaContable;
use App\Empresa;
use Grpc\ServerCredentials;
use Illuminate\Http\Request;

class CuentaContableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $emp = Empresa::find($request->get('empresa'));
        $cuentas = CuentaContable::orderby('NOM_CTA_CONT','ASC')
            ->where('EMP_CTA_CONT','=',$emp->EMP_ID)
            ->paginate(20);
        //dd( session());
        return view('ModuloCaja.planDeCuentas')
            ->with('cuentas',$cuentas)
            ->with('emp',$emp);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cuenta = new CuentaContable();
        $cuenta->setAttribute('EMP_CTA_CONT',$request->get('empresa'));
        $cuenta->setAttribute('NOM_CTA_CONT',$request->get('nomcta'));
        $cuenta->setAttribute('CL_CTA_CONT',$request->get('clasecuenta'));
        $cuenta->setAttribute('TP_CTA_CON',$request->get('tpcuenta'));
        //$cuenta->setAttribute('MONTO_CTA_CONT',$request->get('montocta',null));
        //$cuenta->setAttribute('USUARIO_CTA_CONT',$request->session->get('login_web'));
        //dd($request->session()->all());
        $cuenta->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CuentaContable  $cuentaContable
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CuentaContable  $cuentaContable
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        dd($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CuentaContable  $cuentaContable
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $cuenta = CuentaContable::find($request->idcuenta);

        $cuenta->NOM_CTA_CONT = $request->nomcta;
        $cuenta->CL_CTA_CONT = $request->clasecta;
        $cuenta->TP_CTA_CON = $request->tipocta;

        $cuenta->save();
        //dd($request);

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CuentaContable  $cuentaContable
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
