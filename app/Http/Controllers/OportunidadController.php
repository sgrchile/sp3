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
        $oportunidades = Oportunidad::orderBy('ID_OPORTUNIDAD','ASC')->paginate(5);
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
        $clientes = Cliente::pluck('CLI_NOMBRE','CLI_RUT')->prepend('Seleccione');
        $procneg = Proceso::all()->where('PRO_JERARQUIA','=',$user->PRO_EMP );
        //dd($procneg);
        //$etapa = Etapa::all();
        //dd($etapa);
        $moneda = Moneda::pluck('DESC_MONEDA', 'ID_MONEDA')->prepend('Seleccione');
        $centneg = CentroNegocio::pluck('CT_PROCESO', 'CT_ID')->prepend('Seleccione');
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
        $oportunidad = new Oportunidad();

        $oportunidad->setAttribute('NOMBRE', $request->get('nombre', null));
        $cliente = Cliente::pluck('CLI_RUT', 'CLI_RUT');
        $oportunidad->setAttribute('ID_CLIENTE', $cliente{$request->get('clientes')});
        $proneg = Proceso::find($request->get('procneg'));
        $oportunidad->setAttribute('PROC_NEGOCIO', $proneg->getAttribute('PRO_DESC'));
        $etap = Etapa::find($request->get('etapa'));
        $oportunidad->setAttribute('ETAPA', $etap->getAttribute('DESC_ETAPA'));
        $oportunidad->setAttribute('PROBABILIDAD', $request->get('probabilidad', null));
        $oportunidad->setAttribute('TASA', $request->get('tasa', null));
        $mon = Moneda::find($request->get('moneda'));
        $oportunidad->setAttribute('MONEDA', $mon->getAttribute('DESC_MONEDA'));
        $oportunidad->setAttribute('TOTAL', $request->get('total', null));
        $oportunidad->setAttribute('FEC_INGRESO', $request->get('fechingreso', null));
        $oportunidad->setAttribute('FEC_CIERRE', $request->get('fechcierre', null));
        $ceneg = CentroNegocio::find($request->get('centneg'));
        $oportunidad->setAttribute('CENT_NEGOCIO', $ceneg->getAttribute('CT_PROCESO'));
        $espro = Estado::find($request->get('estprop'));
        $oportunidad->setAttribute('EST_PROP', $espro->getAttribute('EST_DESC'));

        $oportunidad->save();
        //return view('CRM');
        return redirect()->back();
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
        //$oport->delete();
        return redirect()->back()->with('status_oportunidad', 'Oportunidad Eliminada!');
        //dd($id);
    }
}
