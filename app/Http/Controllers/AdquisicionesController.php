<?php

namespace App\Http\Controllers;

use App\EstadoEjecucionOC;
use App\EstadoOC;
use App\Folios;
use App\GuiaDespacho;
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
        $rol = Auth::user()->PRO_ROL;
        if ($rol == 1){
            $ocv = OrdenCompra::orderby('OC_COD','asc')
                ->where('OC_ESTADO','=',1)->paginate(20);
            $oca = OrdenCompra::orderby('OC_COD','asc')
                ->where('OC_ESTADO','=',2)->paginate(20);
            $ocr = OrdenCompra::orderby('OC_COD','asc')
                ->where('OC_ESTADO','=',3)->paginate(20);
        }
        if ($rol == 2){
            $ocv = OrdenCompra::orderby('OC_COD','asc')
                ->where('OC_EMP','=',Auth::user()->PRO_EMP)
                ->where('OC_ESTADO','=',1)->paginate(20);
            $oca = OrdenCompra::orderby('OC_COD','asc')
                ->where('OC_EMP','=',Auth::user()->PRO_EMP)
                ->where('OC_ESTADO','=',2)->paginate(20);
            $ocr = OrdenCompra::orderby('OC_COD','asc')
                ->where('OC_EMP','=',Auth::user()->PRO_EMP)
                ->where('OC_ESTADO','=',3)->paginate(20);
        }
        if ($rol == 3){
            $ocv = OrdenCompra::orderby('OC_COD','asc')
                ->where('OC_PRO_RUN','=',Auth::user()->PRO_RUN)
                ->where('OC_ESTADO','=',1)->paginate(20);
            $oca = OrdenCompra::orderby('OC_COD','asc')
                ->where('OC_PRO_RUN','=',Auth::user()->PRO_RUN)
                ->where('OC_ESTADO','=',2)->paginate(20);
            $ocr = OrdenCompra::orderby('OC_COD','asc')
                ->where('OC_PRO_RUN','=',Auth::user()->PRO_RUN)
                ->where('OC_ESTADO','=',3)->paginate(20);
        }

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
                //$oc->OC_FECHA_CREACION = Carbon::now()->toFormattedDateString();
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
        //dd($id);
        $estados = EstadoOC::pluck('EST_OC_DESC','EST_OC_ID');
        $oc = OrdenCompra::find($id);
        $art = OfertaArticulo::all()->where('OFAR_ID','=',$oc->OC_ARTICULO_ID);
        return view('ModuloInventario.Adquisiciones.ordenesDeCompra.DescripcionOC')
            ->with('estados',$estados)
            ->with('articulos',$art)
            ->with('oc',$oc);
    }

    public function recibir(){

        $ordenC = OrdenCompra::orderBy('UPDATED_AT','asc')
            ->where('OC_PRO_RUN','=',Auth::user()->PRO_RUN)
            ->where('OC_ESTADO','=',4)
            ->where('OC_EJECUCION','=',1)->paginate(20);
        $estados = EstadoEjecucionOC::pluck('DESC_EST_EJEC','ID_EST_EJEC');
        return view('ModuloInventario.Adquisiciones.ordenesDeCompra.recibir')
            ->with('ordenC',$ordenC)
            ->with('estados',$estados);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function historico()
    {
        $rol = Auth::user()->PRO_ROL;
        if ($rol == 1){
            $oc = OrdenCompra::orderby('OC_COD','asc')
                ->where('OC_EJECUCION','=',2)->paginate(20);
        }
        if ($rol == 2){
            $oc = OrdenCompra::orderby('OC_COD','asc')
                ->where('OC_EMP','=',Auth::user()->PRO_EMP)
                ->where('OC_EJECUCION','=',2)->paginate(20);
        }
        if ($rol == 3){
            $oc = OrdenCompra::orderby('OC_COD','asc')
                ->where('OC_PRO_RUN','=',Auth::user()->PRO_RUN)
                ->where('OC_EJECUCION','=',2)->paginate(20);
        }
        return view('ModuloInventario.Adquisiciones.ordenesDeCompra.Historico')
            ->with('ordcompra',$oc);
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
        $oc = OrdenCompra::findOrFail($id)->update([
            'OC_ESTADO' => $request->input('estado'),
        ]);

        if (!$oc) {
            return redirect()->route('validar', $id)->with('error', 'Hubo un error al Actualizar la Orden de Compra.');
        }

        return redirect()->route('validar', $id)->with('success', 'Estado de la Orden De Compra Actualizado Correctamente.');
    }

    public function ListaGuiasDeDespacho(){
        $rol = Auth::user()->PRO_ROL;
        if ($rol == 1){
            $oc = OrdenCompra::all();
            $gp = GuiaDespacho::orderby('GD_COD','asc')
                ->whereIn('GD_OC_COD',$oc)
                ->paginate(20);
        }
        if ($rol == 2){
            $oc = OrdenCompra::all()->where('OC_EMP','=',Auth::user()->PRO_EMP);
            $gp = GuiaDespacho::orderby('GD_COD','asc')
                ->whereIn('GD_OC_COD',$oc)
                ->paginate(20);
        }
        if ($rol == 3){
            $oc = OrdenCompra::all()->where('OC_PRO_RUN','=',Auth::user()->PRO_RUN);
            $gp = GuiaDespacho::orderby('GD_COD','asc')
                ->whereIn('GD_OC_COD',$oc)
                ->paginate(20);
        }
        return view('ModuloInventario.Adquisiciones.ordenesDeCompra.ListaGuiasDeDespacho')
            ->with('guiadesp',$gp);
    }

    public function ListaLiquidar(){
        $rol = Auth::user()->PRO_ROL;
        if ($rol == 1){
            $oc = OrdenCompra::orderby('OC_COD','asc')
                ->where('OC_ESTADO','=',2)->paginate(20);
        }
        if ($rol == 2){
            $oc = OrdenCompra::orderby('OC_COD','asc')
                ->where('OC_EMP','=',Auth::user()->PRO_EMP)
                ->where('OC_ESTADO','=',2)->paginate(20);
        }
        if ($rol == 3){
            $oc = OrdenCompra::orderby('OC_COD','asc')
                ->where('OC_PRO_RUN','=',Auth::user()->PRO_RUN)
                ->where('OC_ESTADO','=',2)->paginate(20);
        }
        return view('ModuloInventario.Adquisiciones.ordenesDeCompra.OCparaLiquidar')
            ->with('ordenC',$oc);
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
