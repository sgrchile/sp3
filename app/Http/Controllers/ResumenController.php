<?php

namespace App\Http\Controllers;

use App\ActActividad;
use App\Actividad;
use App\Cliente;
use App\Empresa;
use App\Oportunidad;
use App\Prospecto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ResumenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->PRO_NIVEL == 14){
            $emp = Empresa::all();
            $oport = Oportunidad::orderBy('CREATED_AT','desc')->limit(10)->get();
            $actividad = ActActividad::orderBy('CREATED_AT','desc')->limit(10)->get();
            $prosp = Prospecto::orderBy('CLI_PROSP_ID','desc')->limit(10)->get();
            $clientes = Cliente::orderBy('CREATED_AT','desc')->limit(10)->get();
        }else{
            $emp = Empresa::all()->where('EMP_ID','=',Auth::user()->PRO_EMP);
            $oport = Oportunidad::orderBy('CREATED_AT','desc')
                ->where('OPORT_RESP','=',Auth::user()->PRO_RUN)->limit(10)->get();
            $actividad = ActActividad::orderBy('CREATED_AT','desc')
                ->where('RESPONSABLE_ACT','=',Auth::user()->PRO_RUN)->limit(10)->get();
            $prosp = Prospecto::orderBy('CLI_PROSP_ID','desc')
                ->where('CLI_PROPIETARIO','=',Auth::user()->PRO_RUN)->limit(10)->get();
            $clientes = Cliente::orderBy('CREATED_AT','desc')
                ->where('CLI_PROPIETARIO','=',Auth::user()->PRO_RUN)->limit(10)->get();
        }
        //dd($prosp);
        return view('ModuloCrm.resumen')
            ->with('clientes',$clientes)
            ->with('actividad',$actividad)
            ->with('oportunidad',$oport)
            ->with('prospectos',$prosp)
            ->with('empresa',$emp);
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
}
