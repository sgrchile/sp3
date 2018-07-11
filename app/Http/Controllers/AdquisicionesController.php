<?php

namespace App\Http\Controllers;

use App\Folios;
use App\OfertaArticulo;
use App\OrdenCompra;
use App\Proveedor;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdquisicionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ocv = OrdenCompra::orderby('OC_COD','asc')->where('OC_ESTADO','=',1);
        $oca = OrdenCompra::orderby('OC_COD','asc')->where('OC_ESTADO','=',2);
        $ocr = OrdenCompra::orderby('OC_COD','asc')->where('OC_ESTADO','=',3);
        return view('ModuloInventario.Adquisiciones.ordenesDeCompra.validar')
            ->with('ocv',$ocv)
            ->with('oca',$oca)
            ->with('ocr',$ocr);
    }

    /**
     * Show the form for creating a new resource.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //dd($request);
        $prov = Proveedor::find($request->prov);
        $productos = OfertaArticulo::all()->where('OFAR_PRO_RUN','=',$request->prov);
        return view('ModuloInventario.Adquisiciones.compras')
            ->with('productos',$productos)
            ->with('prov',$prov);
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
        $oc = new OrdenCompra();
        $ofa = OfertaArticulo::find($request->codart);
        $folio = Folios::all()
            ->where('FOL_ID_EMP','=',Auth::user()->PRO_EMP)
            ->where('FOL_DOC','=','ORDEN DE COMPRA')->first();
        //dd($folio->FOL_ULT);
        if($ofa != null){
            if ($request->cant < $ofa->OFAR_CAPACIDAD){
                $oc->OC_FOLIO = $folio->FOL_ULT + 1;
                $oc->OC_PRO_RUN = Auth::user()->PRO_RUN;
                $oc->OC_COMPRADOR = $request->prov;
                $oc->OC_ARTICULO_ID = $request->codart;
                $oc->OC_FECHA_CREACION = Carbon::now()->format('aaaa-mm-dd');
                $oc->OC_CANTIDAD = $request->cant;
                $oc->OC_VALOR = $request->valor;
                $oc->OC_TOTAL = $request->total;
                $oc->OC_ESTADO = 1;
                $oc->OC_EMP = Auth::user()->PRO_EMP;
                $oc->save();
                return back()->with('success', 'Orden de Compra Creada');
            }
            return back()->with('error', 'La Cantidad Supera lo en bodega');
        }
        return back()->with('error', 'Orden de Compra NO fue creada');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $oc = OrdenCompra::find($id);
        $art = OfertaArticulo::all()->where('OFAR_ID','=',$oc->OC_ARTICULO_ID);
        return view('ModuloInventario.Adquisiciones.ordenesDeCompra.DescripcionOC')
            ->with('articulos',$art)
            ->with('oc',$oc);
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
