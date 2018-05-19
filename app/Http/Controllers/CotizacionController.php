<?php

namespace App\Http\Controllers;

use App\Cliente;
use App\Cotizaciones;
use App\InventarioProducto;
use App\InventarioServicio;
use App\ItemCotizaciones;
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
        $lstcliente = Cliente::where('CLI_PROPIETARIO','=',Auth::user()
            ->PRO_RUN)->pluck('CLI_NOMBRE','CLI_RUT');
        $clientes = Cliente::all()-where('CLI_PROPIETARIO','=',Auth::user()
                ->PRO_RUN);
        $tpventa = TipoVenta::all();
        $lstprod = InventarioProducto::all();
        $lstserv = InventarioServicio::all();


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        dd(Auth::user()->PRO_NIVEL);
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
        dd(Auth::user()->PRO_NIVEL);
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
        dd($id);
    }
}
