<?php

namespace App\Http\Controllers;

use App\Prospecto;
use App\ActActividad;
use App\Cliente;
use App\Oportunidad;
use App\Provincia;
use App\Rubro;
use App\SubRubro;
use App\Banco;
use App\Pais;
use App\Region;
use App\Ciudad;
use App\TipoCuenta;
use App\Actividad;
use App\Contactos;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProspectoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prosp = Prospecto::orderBy('CLI_IDENT','ASC')->paginate(10);

        //dd($clientes);

        return view('ModuloCrm.prospectos')->with('clientes',$prosp);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rubro = Rubro::pluck('RUB_DESC','RUB_COD')->prepend('seleccione');
        $subrubro = SubRubro::pluck('SUB_RUB_DESC', 'SUB_RUB_COD')->prepend('seleccione');
        $banco = Banco::pluck('BCO_DESC','BCO_ID')->prepend('seleccione');
        $pais = Pais::pluck('PAI_DESC','PAI_COD')->prepend('seleccione');
        $region = Region::pluck('REG_DESC','REG_COD')->prepend('seleccione');
        $provincia = Provincia::pluck('PV_DESC', 'PV_COD')->prepend('seleccione');
        $ciudad = Ciudad::pluck('CIU_DESC', 'CIU_COD')->prepend('seleccione');
        $tcta = TipoCuenta::pluck('TCTA_DESC', 'TCTA_BCO')->prepend('seleccione');
        $actividad = Actividad::pluck('ACT_DESC', 'ACT_COD_COD')->prepend('seleccione');

        //dd($rubro->all());

        return view('ModuloCrm.regProspecto', ['pais'=>$pais, 'rubro'=>$rubro, 'subrubro'=>$subrubro, 'banco'=>$banco,
            'region'=>$region, 'provincia'=>$provincia , 'ciudad'=>$ciudad , 'tipocuenta'=>$tcta, 'actividad'=>$actividad]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd('Modulo en contruccion, disculpe las molestias ');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Prospecto  $prospecto
     * @return \Illuminate\Http\Response
     */
    public function show(Prospecto $prospecto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Prospecto  $prospecto
     * @return \Illuminate\Http\Response
     */
    public function edit(Prospecto $prospecto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Prospecto  $prospecto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Prospecto $prospecto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Prospecto  $prospecto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prospecto $prospecto)
    {
        $prosp = Prospecto::find($id);
        $prosp->delete();
        //dd($contac);
        return redirect()->back()->with('status_prosp', 'Cliente eliminado!');
    }
}
