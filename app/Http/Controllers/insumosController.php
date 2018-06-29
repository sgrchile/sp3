<?php

namespace App\Http\Controllers;

use App\Insumo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InsumosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $insumo = new Insumo();
        $insumo->INS_DESC = $request->nombre;
        $insumo->INS_PRO_RUN = Auth::user()->PRO_RUN;
        $insumo->INS_INFO = $request->informacion;
        $insumo->INS_MARCA = $request->marca;
        $insumo->INS_TIPO = $request->tipo;
        $insumo->INS_CANTIDAD = $request->cantidad;
        $insumo->INS_COSTO = $request->costo;
        $insumo->save();
        return redirect()->route('RegistrarInsumo')->with('success', 'Insumo Registrado');
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
}
