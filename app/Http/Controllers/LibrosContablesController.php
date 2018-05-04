<?php

namespace App\Http\Controllers;

use App\AsientoContable;
use App\AsientoCuenta;
use App\CuentaContable;
use App\FolioOrdenCompra;
use App\ListaVenta;
use App\Remuneracion;
use App\Empresa;
use Carbon\Carbon;
use Illuminate\Http\Request;

class LibrosContablesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $emp = Empresa::find($request->get('empresa'));
        $libcompras = FolioOrdenCompra::orderby('FOL_COD','ASC')
            ->where('FOL_EMP_ID','=',$emp->EMP_ID)
            ->paginate(10);
        $libventas = ListaVenta::orderby('LVS_V_ID','ASC')
            //->where('FOL_EMP_ID','=',$emp->EMP_ID)
            ->paginate(10);
        $librems = Remuneracion::orderby('REM_ID', 'ASC')
            //->where('FOL_EMP_ID','=',$emp->EMP_ID)
            ->paginate(10);

        return view('ModuloCaja.librosContables',compact('libcompras','libventas','librems'));
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

    /**
     * Balance General
     */
    public function balance(Request $request){

        $desde=$request->get('desde');
        $hasta=$request->get('hasta');
        $emp = Empresa::find($request->get('empresa'));
        //dd($emp);
        return view('ModuloCaja.Balance')->with('desde',$desde)->with('emp',$emp)->with('hasta',$hasta);
    }
    /**
     * Flujo de caja
     */
    public function flujodecaja(Request $request){
        $desde=Carbon::parse($request->get('desde'));
        $hasta=Carbon::parse($request->get('hasta'));
        $emp = Empresa::find($request->get('empresa'));
        $mes = $desde->copy();
        //dd($mes);
        $asientos = AsientoContable::all()
            ->where('ID_EMP_ASIENTO','=',$emp->EMP_ID)
            ->where('FECHA_CONT','>',$desde)
            ->where('FECHA_CONT','<',$hasta);
       // $ctas= AsientoCuenta::all()->where('ID_ASIENTO_CONT','=',$asientos->ID_ASIENTO_CONT);
        return view('ModuloCaja.flujoCaja')
            ->with('desde',$desde)
            ->with('emp',$emp)
            ->with('hasta',$hasta)
            ->with('asientos',$asientos);
    }
}
