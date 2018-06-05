<?php

namespace App\Http\Controllers;

use App\Area;
use App\Categoria;
use App\Procedencia;
use App\Prospecto;
use App\ActActividad;
use App\Cliente;
use App\Oportunidad;
use App\Provincia;
use App\Rubro;
use App\Servicio;
use App\SubRubro;
use App\Banco;
use App\Pais;
use App\Region;
use App\Ciudad;
use App\TipoCuenta;
use App\Actividad;
use App\Contactos;
use App\Cargos;
use Illuminate\Support\Facades\Auth;
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
        $prosp = Prospecto::orderBy('CLI_IDENT','ASC')
            ->where('CLI_PROPIETARIO','=',Auth::user()->PRO_RUN)
            ->where('CLI_ESTADO','=',1)
            ->paginate(20);

        //dd($prosp);

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
        $proc = Procedencia::pluck('DESC_PROCEDENCIA', 'ID_PROCEDENCIA')->prepend('seleccione');
        $actividad = Actividad::pluck('ACT_DESC', 'ACT_COD_COD')->prepend('seleccione');
        $categoria = Categoria::pluck('DESC_CATEGORIA','ID_CATEGORIA')->prepend('Seleccione');
        $area = Area::all();
        $cargos = Cargos::Pluck('DESC_CARGO','ID_CARGO')->prepend('Seleccione');

        //dd($rubro->all());

        return view('ModuloCrm.regProspecto',
            ['pais'=>$pais,
                'rubro'=>$rubro,
                'subrubro'=>$subrubro,
                'banco'=>$banco,
                'region'=>$region,
                'provincia'=>$provincia ,
                'ciudad'=>$ciudad ,
                'proc'=>$proc,
                'actividad'=>$actividad,
                'categoria'=>$categoria,
                'cargos'=>$cargos,
                'area'=>$area]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $createSolicitudFondo = $this->createProspecto($request->all());
        if (!$createSolicitudFondo) {
            return back()->with('error', 'Prospecto NO creado');
        }

        return back()->with('success', 'Prospecto creado exitosamente.');
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
            'CLI_PROPIETARIO' => Auth::user()->PRO_RUN,
            'CLI_ZIP' => $data['zip'],
            'CLI_CASILLA' => $data['casilla'],
            'CLI_CARGO' => $data['cargo'],
            'CLI_AREA' => $data['area'],
            'CLI_PROCEDENCIA' => $data['procedencia'],
            'CLI_CATEGORIA' => $data['categoria'],
            'CLI_TEMP' => $data['temperatura'],
            'CLI_AREA_SERV' => $data['serv_req'],
            'CLI_URGENCIA' => $data['urgencia'],
            'CLI_RUT_COTIZ' => $data['rut_cot'],
            'CLI_FONO2' => $data['telefono2'],
            'CLI_ESTADO' => $data['emp_ot'],
            'CLI_DIRECCION' => $data['direccion'],
            'CLI_SITIO_WEB' => $data['sitioweb'],
            'CLI_RUBRO' => $data['rubro'],
            'CLI_SUB_RUBRO' => $data['subrubro'],
            'CLI_ACTIVIDAD' => $data['actividad'],
            'CLI_PAIS' => $data['pais'],
            'CLI_REGION' => $data['region'],
            'CLI_PROVINCIA' => $data['provincia'],
            'CLI_CIUDAD' => $data['ciudad'],
            'CLI_SOLIC_POR' => $data['solic_por'],
            'CLI_COMENTARIO' => $data['comentario'],

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
        $prosp = Prospecto::find($prospecto);
        $prosp->delete();
        //dd($contac);
        return redirect()->back()->with('status_prosp', 'Cliente eliminado!');
    }
}
