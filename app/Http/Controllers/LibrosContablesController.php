<?php

namespace App\Http\Controllers;

use App\FolioOrdenCompra;
use App\ListaVenta;
use App\Remuneracion;
use App\Empresa;
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
}
