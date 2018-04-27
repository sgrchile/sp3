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
    public function index()
    {
        $libcompras = FolioOrdenCompra::orderby('FOL_COD','ASC')->paginate(10);
        $libventas = ListaVenta::orderby('LVS_V_ID','ASC')->paginate(10);
        $librems = Remuneracion::orderby('REM_ID', 'ASC')->paginate(10);

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
