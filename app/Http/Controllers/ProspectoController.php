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

        $this->validateSolicitudFondo($request);
        $createSolicitudFondo = $this->createSolicitudFondo($request->all());
        if (!$createSolicitudFondo) {
            return back()->with('error', 'Solicitud de Fondo NO fue creada');
        }

        return back()->with('success', 'Solicitud de Fondo fue creada exitosamente.');
        $cliente = new Prospecto();
        $cliente->setAttribute('CLI_RUT',$request->get('rut',null));
        $cliente->setAttribute('CLI_NOMBRE',$request->get('nombre',null));
        $cliente->setAttribute('CLI_NOM_FANT',$request->get('nombref',null));
        $cliente->setAttribute('CLI_FONO',$request->get('telefono',null));
        $cliente->setAttribute('CLI_EMAIL',$request->get('email',null));
        $cliente->setAttribute('CLI_FONO2',$request->get('telefono2',null));
        $cliente->setAttribute('CLI_ACT_COMERCIAL',$request->get('actcomercial',null));
        $cliente->setAttribute('CLI_DIRECCION',$request->get('direccion',null));
        $cliente->setAttribute('CLI_TCTA_BCO',$request->get('tipocuenta',null));
        $cliente->setAttribute('CLI_SITIO_WEB',$request->get('sitioweb',null));
        $cliente->setAttribute('CLI_GLOSA',$request->get('glosa',null));
        $cliente->setAttribute('CLI_RUBRO',$request->get('rubro',null));
        $cliente->setAttribute('CLI_SUB_RUBRO',$request->get('subrubro',null));
        $cliente->setAttribute('CLI_ACTIVIDAD',$request->get('actividad',null));
        $cliente->setAttribute('CLI_BANCO',$request->get('banco',null));
        $cliente->setAttribute('CLI_NRO_CTA',$request->get('nrocuenta',null));
        $cliente->setAttribute('CLI_ORIGEN',$request->get('origen',null));
        $cliente->setAttribute('CLI_PAIS',$request->get('pais',null));
        $cliente->setAttribute('CLI_REGION',$request->get('region',null));
        $cliente->setAttribute('CLI_CIUDAD',$request->get('ciudad',null));
        $cliente->setAttribute('CLI_PROVINCIA',$request->get('provincia', null));
        $cliente->setAttribute('CLI_TEMP',$request->get('temperatura', null));
        $cliente-> = $request->fec_nac;
    }

    public function createProspecto(array $data)
    {

        return Prospecto::create([
            'CLI_IDENT' => $data['rut'],
            'CLI_DENOMINACION' => $data['denomin'],
            'CLI_FONO' => $data['telefono'],
            'CLI_EMAIL' => $data['email'],
            'CLI_NOMBRE' => $data['nombre'],
            'CLI_APE_MATERNO' => $data['ape_mat'],
            'CLI_APE_PATERNO' => $data['ape_pat'],
            'CLI_FECH_NAC' => $data['fec_nac'],
            'CLI_ID_EMP' => $data['emp'],
            'CLI_PROPIETARIO' => 1,
            'CLI_ZIP' => $data['rec_banco'],
            'CLI_CASILLA' => $data['rec_tipocuenta'],
            'CLI_CARGO' => 3,
            'CLI_AREA' => $data['emp_nrocuenta'],
            'CLI_PROCEDENCIA' => $data['emp_ot'],
            'CLI_CATEGORIA' => $data['emp_ot'],
            'CLI_AREA_SERV' => $data['emp_ot'],
            'CLI_URGENCIA' => $data['emp_ot'],
            'CLI_RUT_COTIZ' => $data['emp_ot'],
            'CLI_FONO2' => $data['emp_ot'],
            'CLI_ACT_COMERCIAL' => $data['actcomercial'],
            'CLI_DIRECCION' => $data['direccion'],
            'CLI_TCTA_BCO' => $data['tipocuenta'],
            'CLI_SITIO_WEB' => $data['sitioweb'],
            'CLI_GLOSA' => $data['glosa'],
            'CLI_RUBRO' => $data['rubro'],
            'CLI_SUB_RUBRO' => $data['subrubro'],
            'CLI_ACTIVIDAD' => $data['actividad'],
            'CLI_BANCO' => $data['banco'],
            'CLI_NRO_CTA' => $data['nrocuenta'],
            'CLI_ORIGEN' => $data['origen'],
            'CLI_PAIS' => $data['pais'],
            'CLI_REGION' => $data['region'],
            'CLI_PROVINCIA' => $data['provincia'],
            'CLI_CIUDAD' => $data['ciudad'],
            'CLI_TEMP' => $data['temperatura'],
            'CLI_COMENTARIO' => $data['emp_ot'],
            'CLI_ESTADO' => $data['emp_ot'],
        ]);
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
