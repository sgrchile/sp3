<?php

namespace App\Http\Controllers;

use App\DatosAdicionalesProv;
use App\Empresa;
use App\LicenciaMedica;
use App\Proveedor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\VarDumper\Cloner\Data;
use Illuminate\Support\Facades\Hash;

class RrhhMiCarpetaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $emp = Empresa::find(Auth::user()->PRO_EMP);
        $licencias = LicenciaMedica::all()->where('LM_PER_RUT','=',Auth::user()->PRO_RUN);
        $datos = DatosAdicionalesProv::all()->where('MP_PRO_RUN','=',Auth::user()->PRO_RUN);
        //dd($datos);
        return view('ModuloRRHH.MicarpetaRRHH.misDatos')
            ->with('emp',$emp)
            ->with('licencias',$licencias)
            ->with('datos',$datos);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function resetPass(Request $request){
        //
        $prov = $this->actualizarpass($request->all());
        if (!$prov){
            return redirect()->route('resetpass')->with('error', 'Hubo un error al cambiar la contraseña.');
        }else{
            return redirect()->route('resetpass')->with('success', 'contraseña cambiada con exito.');
        }
    }

    public function actualizarpass($data){
        if ($data['pass1'] == $data['pass2']){
            $prov = Proveedor::find(Auth::user()->PRO_RUN);
            $prov->password = Hash::make($data['pass1']);
            $prov->save();
            return true;
        }else{
            return false;
        }

    }
}
