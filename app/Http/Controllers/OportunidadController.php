<?php

namespace App\Http\Controllers;

use App\CentroNegocio;
use App\Cliente;
use App\Estado;
use App\Etapa;
use App\Moneda;
use App\Oportunidad;
use App\Proceso;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class OportunidadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $oportunidades = Oportunidad::orderBy('ID_OPORTUNIDAD','ASC')->paginate(10);
        //dd($oportunidades);
        return view('ModuloCrm.listaOportunidades')->with('oportunidades',$oportunidades);
        //return view('ModuloCrm.Oportunidades');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
        $clientes = Cliente::all()
            ->where('CLI_EMP','=',Auth::user()->PRO_EMP)
            ->pluck('CLI_NOMBRE','CLI_RUT')
            ->prepend('Seleccione');
        $procneg = Proceso::all()->where('PRO_JERARQUIA','=',$user->PRO_EMP );
        //dd($procneg);
        //$etapa = Etapa::all();
        //dd($etapa);
        $moneda = Moneda::pluck('DESC_MONEDA', 'ID_MONEDA')->prepend('Seleccione');
        $centneg = CentroNegocio::all()->where('CT_EMP_ID','=',Auth::user()->PRO_EMP)->pluck('CT_PROCESO', 'CT_ID')->prepend('Seleccione');
        $estprop = Estado::pluck('EST_DESC', 'EST_ID')->prepend('Seleccione');
        //dd($procneg);

        return view('ModuloCrm.oportunidades',['clientes'=>$clientes, 'procneg'=>$procneg, 'moneda'=>$moneda,
            'centneg'=>$centneg, 'estprop'=>$estprop]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $create = $this->createOportunidad($request->all());
        if (!$create) {
            return back()->with('error', 'Oportunidad NO fue creada');
        }

        return back()->with('success', 'Oportunidad fue creada exitosamente.');

    }

    public function createOportunidad(array $data)
    {

        return Oportunidad::create([
            'NOMBRE' => $data['nombre'],
            'ID_CLIENTE' => $data['clientes'],
            'PROC_NEGOCIO' => $data['procneg'],
            'ETAPA' => $data['etapa'],
            'PROBABILIDAD' => $data['probabilidad'],
            'TASA' => $data['tasa'],
            'MONEDA' => $data['moneda'],
            'TOTAL' => $data['total'],
            'FEC_INGRESO' => $data['fechingreso'],
            'FEC_CIERRE' => $data['fechcierre'],
            'CENT_NEGOCIO' => $data['centneg'],
            'SIG_PASO' => $data['sig_paso'],
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
        dd($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        dd($id);
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
        $oport = Oportunidad::find($id);
        $oport->delete();
        return redirect()->back()->with('status_oportunidad', 'Oportunidad Eliminada!');
        //dd($id);
    }
}
