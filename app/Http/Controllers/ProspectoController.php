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
use App\Temperatura;
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
        if (Auth::user()->PRO_NIVEL ==14){
            $prosp = Prospecto::orderBy('CLI_IDENT','ASC')
                ->where('CLI_ESTADO','=',1)
                ->paginate(50);
        }else{
            if (Auth::user()->PRO_ROL == 1){
                $prosp = Prospecto::orderBy('CLI_IDENT','ASC')
                    ->where('CLI_ESTADO','=',1)
                    ->paginate(50);
            }if (Auth::user()->PRO_ROL == 2){
                $prosp = Prospecto::orderBy('CLI_IDENT','ASC')
                    ->where('CLI_ESTADO','=',1)
                    ->where('CLI_EMP','=',Auth::user()->PRO_EMP)
                    ->paginate(50);
            }if (Auth::user()->PRO_ROL == 3){
                $prosp = Prospecto::orderBy('CLI_IDENT','ASC')
                    ->where('CLI_ESTADO','=',1)
                    ->where('CLI_PROPIETARIO','=',Auth::user()->PRO_RUN)
                    ->paginate(50);
            }
        }
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
        $rubro = Rubro::all();
        $subrubro = SubRubro::pluck('SUB_RUB_DESC', 'SUB_RUB_COD')->prepend('seleccione');
        $banco = Banco::pluck('BCO_DESC','BCO_ID')->prepend('seleccione');
        $pais = Pais::all();
        $region = Region::pluck('REG_DESC','REG_COD')->prepend('seleccione');
        $provincia = Provincia::pluck('PV_DESC', 'PV_COD')->prepend('seleccione');
        $ciudad = Ciudad::pluck('CIU_DESC', 'CIU_COD')->prepend('seleccione');
        $proc = Procedencia::pluck('DESC_PROCEDENCIA', 'ID_PROCEDENCIA')->prepend('seleccione');
        $actividad = Actividad::pluck('ACT_DESC', 'ACT_COD_COD')->prepend('seleccione');
        $categoria = Categoria::pluck('DESC_CATEGORIA','ID_CATEGORIA')->prepend('Seleccione');
        $area = Area::all();
        $cargos = Cargos::Pluck('DESC_CARGO','ID_CARGO')->prepend('Seleccione');

        //dd($rubro->all());

        return view('ModuloCrm.regProspecto')
            ->with('pais',$pais)
            ->with('rubro',$rubro)
            ->with('banco',$banco)
            ->with('procedencia',$proc)
            ->with('actividad',$actividad)
            ->with('categoria',$categoria)
            ->with('cargos',$cargos)
            ->with('area',$area);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $createProspecto = $this->createProspecto($request->all());
        if (!$createProspecto) {
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
            'CLI_ID_EMP' => Auth::user()->PRO_EMP,
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
            'CLI_FONO2' => $data['telefono2'],
            'CLI_ESTADO' => 1,
            'CLI_DIRECCION' => $data['direccion'],
            'CLI_SITIO_WEB' => $data['sitioweb'],
            'CLI_RUBRO' => $data['rubro'],
            'CLI_SUB_RUBRO' => $data['subrubro'],
            'CLI_ACTIVIDAD' => $data['actividad'],
            'CLI_PAIS' => $data['pais'],
            'CLI_REGION' => $data['region'],
            'CLI_PROVINCIA' => $data['provincia'],
            'CLI_CIUDAD' => $data['ciudad'],
            'CLI_SOLIC_POR' => Auth::user()->PRO_RUN,
            'CLI_COMENTARIO' => $data['comentario'],

        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cliente = Prospecto::find($id);
        //dd($cliente);
        //$rut = $cliente->CLI_RUT;

        //$contacto = Contactos::orderBy('CONT_CLI_ID','ASC')->where('CONT_CLI_ID','=',$rut)->paginate(10);
        //$oportunidades = Oportunidad::orderBY('ID_CLIENTE','ASC')->where('ID_CLIENTE','=',$rut)->paginate(10);
        $actividades = ActActividad::orderBy('ID_ACT','ASC')->where('ID_CLIENTE_ACT','=',$id)->paginate(10);


        return view('ModuloCrm.fichaClienteProspecto')
            ->with('actividades',$actividades)
            ->with('cliente',$cliente);
        //return view('ModuloCrm.fichaClienteProspecto',compact('contacto','oportunidades','actividades'))->with('cliente',$cliente);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cliente = Prospecto::find($id);
        $rubro = Rubro::all();
        $banco = Banco::pluck('BCO_DESC','BCO_ID')->prepend('seleccione');
        $pais = Pais::all();
        $tcta = TipoCuenta::pluck('TCTA_DESC', 'TCTA_BCO')->prepend('seleccione');
        //dd($cliente);
        return view('ModuloCrm.convertirCliente')
            ->with('rubro',$rubro)
            ->with('banco',$banco)
            ->with('pais',$pais)
            ->with('tcta',$tcta)
            ->with('cliente',$cliente);
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

    public function convertir(Request $request){
        $existe = Cliente::all()
            ->where('CLI_EMP','=',$request->emp)
            ->where('CLI_RUT','=',$request->rut)
            ->count();
        if ($existe == 0){
            $cliente = new Cliente();
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
            $cliente->setAttribute('CLI_PAIS',$request->get('pais',null));
            $cliente->setAttribute('CLI_REGION',$request->get('region',null));
            $cliente->setAttribute('CLI_CIUDAD',$request->get('ciudad',null));
            $cliente->setAttribute('CLI_PROVINCIA',$request->get('provincia', null));
            $cliente->setAttribute('CLI_TEMP',$request->get('temperatura', null));
            $cliente->CLI_PROPIETARIO = $request->prop;
            $cliente->CLI_EMP = $request->emp;
            $cliente->CLI_PROSP = $request->idprosp;
            //dd($cliente);
            $cliente->save();
            return redirect()->back()->with('success', "ha sido convertido exitosamente.");
            $pros = Prospecto::find($request->idprosp);
            $pros->CLI_ESTADO = 2;
            $pros->save();

        }else{
            return redirect()->back()->with('error', "El CLIENTE ya está registrado favor comunicarce con administrador.");
        }
    }

    function valida_rut($rut)
    {
        $rut = preg_replace('/[^k0-9]/i', '', $rut);
        $dv  = substr($rut, -1);
        $numero = substr($rut, 0, strlen($rut)-1);
        $i = 2;
        $suma = 0;
        foreach(array_reverse(str_split($numero)) as $v)
        {
            if($i==8)
                $i = 2;
            $suma += $v * $i;
            ++$i;
        }
        $dvr = 11 - ($suma % 11);

        if($dvr == 11)
            $dvr = 0;
        if($dvr == 10)
            $dvr = 'K';
        if($dvr == strtoupper($dv))
            return true;
        else
            return false;
    }

}
