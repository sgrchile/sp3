<?php

namespace App\Http\Controllers;

use App\Cliente;
use App\Cotizaciones;
use App\InventarioProducto;
use App\InventarioServicio;
use App\ItemCotizaciones;
use App\Folios;
use App\MenuModel;
use App\MenuNivel;
use App\Producto;
use App\Proveedor;
use App\TipoVenta;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Stmt\Return_;

class CotizacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cotizaciones = Cotizaciones::where('EMP_COTIZ','=',Auth::user()->PRO_EMP)
            ->orderby('FEC_COTIZ','ASC')->paginate();
        //dd($cotizaciones);

        return view('ModuloCrm.listaCotizaciones')->with('cotizaciones',$cotizaciones);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $id = null;
        $lstcliente = Cliente::find($id);
        $clientes = Cliente::all()->where('CLI_PROPIETARIO','=',Auth::user()
                ->PRO_RUN);
        $tpventa = TipoVenta::all();
        $lstprod = InventarioProducto::all();
        $lstserv = InventarioServicio::all();
        $nrocot = Folios::all()->where('FOL_DOC','=','cotizacion')
            ->where('FOL_ID_EMP','=',Auth::user()->PRO_EMP)->first()->FOL_ULT;


        return view('ModuloCrm.regCotizacion')
            ->with('lstcliente',$lstcliente)
            ->with('clientes',$clientes)
            ->with('tpventa',$tpventa)
            ->with('lstprod',$lstprod)
            ->with('ultcot',$nrocot)
            ->with('lstserv',$lstserv);

    }

    public function getModificarCotizar($id){

        $lstcliente = Cliente::where('CLI_RUT','=',$id)->first();
        $clientes = Cliente::all()->where('CLI_PROPIETARIO','=',Auth::user()
            ->PRO_RUN);
        //dd($lstcliente);
        $tpventa = TipoVenta::all();
        $lstprod = InventarioProducto::all();
        $lstserv = InventarioServicio::all();
        $nrocot = Folios::all()->where('FOL_DOC','=','cotizacion')
            ->where('FOL_ID_EMP','=',Auth::user()->PRO_EMP)->first()->FOL_ULT;

        return view('ModuloCrm.regCotizacion')
            ->with('lstcliente',$lstcliente)
            ->with('clientes',$clientes)
            ->with('tpventa',$tpventa)
            ->with('lstprod',$lstprod)
            ->with('ultcot',$nrocot)
            ->with('lstserv',$lstserv);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validateCotizacion($request);
        $cotizacion = new Cotizaciones();
        $cotizacion->FEC_COTIZ = $request->fecha;
        $cotizacion->CLI_COTIZ = $request->rut;
        $cotizacion->VAL_NETO_COTIZ = $request->totalneto;
        $cotizacion->ID_VENDEDOR = $vend = Auth::user()->PRO_RUN;
        $cotizacion->EST_COTIZ = 1;
        $cotizacion->COMENT_COTIZ = $request->comentario;
        $cotizacion->EMP_COTIZ = Auth::user()->PRO_EMP;
        $cotizacion->save();
        $folio = Folios::all()->where('FOL_ID_EMP','=',Auth::user()->PRO_EMP)
            ->where('FOL_DOC','=','cotizacon')->first();
        $ultnro = $folio->FOL_ULT;
        $folio->FOL_ULT = $ultnro+1;
        $folio->save();

        if (! $cotizacion->exists) {
            return redirect()->route('regCotizacion')->with('error', "Hubo un problema al crear la Cotizacion.");
        }
        $count=0;
        $nreg=(($request->request->count())-13)/7;
        for ($i=0;$i<$nreg;$i++) {
            if ($request->exists("idpro$count")) {
                $item = new ItemCotizaciones();
                $item->ID_COTIZACION = $cotizacion->ID_COTIZ;
                $item->TP_ITEM = $request->get("tpventa$count");
                $item->ID_ITEM_COTIZ = $request->get("idpro$count");
                $item->CANT_ITEM = $request->get("cantidad$count");
                $item->VALOR_UNIT = $request->get("costouni$count");
                $item->DESC_ITEM = $request->get("dsctouni$count");
                $item->DESC_ITEM_COTIZ = $request->get("item$count");
                $item->VALOR_TOTAL = $request->get("costototal$count");
                $item->save();

            }
            $count++;
        }
        return redirect()->route('regCotizacion')->with('success', "La Cotizacion ha sido creado exitosamente.");
    }

    public function validateCotizacion(Request $request) {
        $this->validate($request, [
            'CLI_COTIZ' => 'required',
            'VAL_NETO_COTIZ' => 'required',
            'COMENT_COTIZ' => 'required',
        ]);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cotizacion = Cotizaciones::find($id);
        $cliente = Cliente::all()->where('CLI_RUT','=',$cotizacion->CLI_COTIZ)->first();
        $vendedor = Proveedor::all()->where('PRO_RUN','=',$cotizacion->ID_VENDEDOR)->first();
        $items = ItemCotizaciones::all()->where('ID_COTIZACION','=',$id);
        //dd($id);
        return view('ModuloCrm.cotizaciones')
            ->with('cotizacion',$cotizacion)
            ->with('cliente',$cliente)
            ->with('vendedor',$vendedor)
            ->with('items',$items);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        dd('en construccion');
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
        dd($id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cotizacion = Cotizaciones::find($id);
        $cotizacion->delete();
        return redirect()->back()->with('success', 'Cotizacion eliminada con exito!');
    }
}
