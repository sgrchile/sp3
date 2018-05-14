<?php

namespace App\Http\Controllers;

use App\ActActividad;
use Illuminate\Support\Facades\Auth;
use App\Cliente;
use App\Oportunidad;
use App\Provincia;
use Illuminate\Http\Request;
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

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = Cliente::orderBy('CLI_NOMBRE','ASC')->paginate(10);

        //dd($clientes);

        return view('ModuloCrm.clientes')->with('clientes',$clientes);
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
        $pais = Pais::all();
        $region = Region::pluck('REG_DESC','REG_COD')->prepend('seleccione');
        $provincia = Provincia::pluck('PV_DESC', 'PV_COD')->prepend('seleccione');
        $ciudad = Ciudad::pluck('CIU_DESC', 'CIU_COD')->prepend('seleccione');
        $tcta = TipoCuenta::pluck('TCTA_DESC', 'TCTA_BCO')->prepend('seleccione');
        $actividad = Actividad::pluck('ACT_DESC', 'ACT_COD_COD')->prepend('seleccione');

        //dd($rubro->all());

        return view('ModuloCrm.regCliente', ['pais'=>$pais, 'rubro'=>$rubro, 'subrubro'=>$subrubro, 'banco'=>$banco,
            'region'=>$region, 'provincia'=>$provincia , 'ciudad'=>$ciudad , 'tipocuenta'=>$tcta, 'actividad'=>$actividad]);
    }

    /*public function getSubRubro(Request $request, $id){

        if ($request->ajax()){
            $subrubro = SubRubro::subrubros($id);
            return response()->json($subrubro);
        }
    }*/

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
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
        $cliente->setAttribute('CLI_ORIGEN',$request->get('origen',null));
        $cliente->setAttribute('CLI_PAIS',$request->get('pais',null));
        $cliente->setAttribute('CLI_REGION',$request->get('region',null));
        $cliente->setAttribute('CLI_CIUDAD',$request->get('ciudad',null));
        $cliente->setAttribute('CLI_PROVINCIA',$request->get('provincia', null));
        $cliente->setAttribute('CLI_TEMP',$request->get('temperatura', null));


        //dd($this->regcliente($cliente->getAttribute('CLI_RUT')));

        if ($this->regcliente($cliente->getAttribute('CLI_RUT'))){

            $cliente->save();
            //dd("true");
            //return view('ModuloOt.result')->with('success', true);
            return back()->with('success', 'Cliente creado exitosamente.');
            //return redirect()->route('result')->with('success', true);
        }else{
            //dd("false");
            return back()->with('error', 'Cliente NO creado');
            //return view('ModuloOt.result')->with('success', false);
        }

    }

    protected function result(){

    }

    protected function validateCliente(Request $request)
    {
        $this->validate($request, [
            'nombre' => 'required',
            'tipo_cuenta' => 'required',
            'rut' => 'required',
            'actividad' => 'required',
            'direccion' => 'required',
            'email' => 'required',
            'fono' => 'required',
        ]);
    }

    protected function createCliente(array $data)
    {
        $tipo_cuenta_id = TipoCuenta::find($data['tipo_cuenta'])->TCTA_BCO;

        return Cliente::create([
            'CLI_RUT' => $data['rut'],
            'CLI_FONO' => $data['fono'],
            'CLI_EMAIL' => $data['email'],
            'CLI_NOMBRE' => $data['nombre'],
            'CLI_ACT_COMERCIAL' => $data['actividad'],
            'CLI_DIRECCION' => $data['direccion'],
            'CLI_TCTA_BCO' => $tipo_cuenta_id,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $rut
     * @return \Illuminate\Http\Response
     */
    public function show($rut)
    {
        $results = Cliente::select('select * from cli_cliente where CLI_RUT = ?', [$rut]);
        $cliente = new Client();
        if ($results=! null){
            $cliente = new Client();
            $cliente->setAttribute('CLI_RUT',$results->get('CLI_RUT',null));
            $cliente->setAttribute('CLI_NOMBRE',$results->get('CLI_NOMBRE',null));
            $cliente->setAttribute('CLI_FONO',$results->get('CLI_FONO',null));
            $cliente->setAttribute('CLI_EMAIL',$results->get('CLI_EMAIL',null));
            $cliente->setAttribute('CLI_FONO2',$results->get('CLI_FONO2',null));
            $cliente->setAttribute('CLI_ACT_COMERCIAL',$results->get('CLI_ACT_COMERCIAL',null));
            $cliente->setAttribute('CLI_DIRECCION',$results->get('CLI_DIRECCION',null));
            $cliente->setAttribute('CLI_TCTA_BCO',$results->get('CLI_TCTA_BCO',null));
            return $cliente;
        }else{
            return $results;
        }
    }

    public function regcliente($rut){

        $cliente = Cliente::find($rut);

        //dd($cliente);
        if (empty($cliente)){
            return true;
        }else{
            return false;
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cliente = Cliente::find($id);
        //dd($cliente);
        return view('ModuloCrm.modCliente')->with('cliente',$cliente);

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
        $cliente = Cliente::find($id);
        //dd($request);
        $cliente->setAttribute('CLI_FONO',$request->get('telefono'));
        $cliente->setAttribute('CLI_EMAIL',$request->get('email'));
        $cliente->setAttribute('CLI_FONO2',$request->get('telefono2'));
        $cliente->setAttribute('CLI_ACT_COMERCIAL',$request->get('actcomercial'));
        $cliente->setAttribute('CLI_SITIO_WEB',$request->get('sitioweb'));
        $cliente->setAttribute('CLI_GLOSA',$request->get('glosa'));
        $cliente->setAttribute('CLI_RUBRO',$request->get('rubro'));
        $cliente->setAttribute('CLI_SUB_RUBRO',$request->get('subrubro'));
        $cliente->setAttribute('CLI_ACTIVIDAD',$request->get('actividad'));
        $cliente->setAttribute('CLI_BANCO',$request->get('banco'));
        $cliente->setAttribute('CLI_TCTA_BCO',$request->get('tipocuenta'));
        $cliente->setAttribute('CLI_NRO_CTA',$request->get('nrocuenta'));
        $cliente->setAttribute('CLI_ORIGEN',$request->get('origen'));
        $cliente->setAttribute('CLI_PAIS',$request->get('pais'));
        $cliente->setAttribute('CLI_REGION',$request->get('region'));
        $cliente->setAttribute('CLI_PROVINCIA',$request->get('provincia'));
        $cliente->setAttribute('CLI_CIUDAD',$request->get('ciudad'));
        $cliente->setAttribute('CLI_DIRECCION',$request->get('direccion'));
        $cliente->save();
        return redirect()->back()->with('status_cliente', 'Cliente Actualizado Correctamente');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cliente = Cliente::find($id);
        //dd($cliente);
        $cliente->delete();
        return redirect()->back()->with('status_cliente', 'Cliente eliminado!');
    }

    public function fichaclicons($rut)
    {
        $cliente = Cliente::find($rut);
        $rubro = Rubro::find($cliente->getAttribute('CLI_RUBRO'));
        $subrub = SubRubro::find($cliente->getAttribute('CLI_SUB_RUBRO'));
        $ACT = Actividad::find($cliente->getAttribute('CLI_ACTIVIDAD'));
        $BCO = Banco::find($cliente->getAttribute('CLI_BANCO'));
        $TCTA = TipoCuenta::find($cliente->getAttribute('CLI_TCTA_BCO'));
        $Pais = Pais::find($cliente->getAttribute('CLI_PAIS'));
        $Reg = Region::find($cliente->getAttribute('CLI_REGION'));
        $CIU = Ciudad::find($cliente->getAttribute('CLI_CIUDAD'));
        $pro = Provincia::find($cliente->getAttribute('CLI_PROVINCIA'));
        $cliente->setAttribute('CLI_RUBRO', $rubro->getAttribute('RUB_DESC'));
        $cliente->setAttribute('CLI_SUB_RUBRO', $subrub->getAttribute('SUB_RUB_DESC'));
        $cliente->setAttribute('CLI_ACTIVIDAD', $ACT->getAttribute('ACT_DESC'));
        $cliente->setAttribute('CLI_BANCO', $BCO->getAttribute('BCO_DESC'));
        $cliente->setAttribute('CLI_TCTA_BCO', $TCTA->getAttribute('TCTA_DESC'));
        $cliente->setAttribute('CLI_PAIS', $Pais->getAttribute('PAI_DESC'));
        $cliente->setAttribute('CLI_REGION', $Reg->getAttribute('REG_DESC'));
        $cliente->setAttribute('CLI_CIUDAD', $CIU->getAttribute('CIU_DESC'));
        $cliente->setAttribute('CLI_PROVINCIA', $pro->getAttribute('PV_DESC'));

        $cli = $cliente->getAttributes();

        //dd($cliente);
        //$contacto = Contactos::find($rut)->get();

        //$contacto = Contactos::where('CONT_CLI_ID','=',$rut)->get();
        $contacto = Contactos::orderBy('CONT_CLI_ID','ASC')->where('CONT_CLI_ID','=',$rut)->paginate(10);
        $oportunidades = Oportunidad::orderBY('ID_CLIENTE','ASC')->where('ID_CLIENTE','=',$rut)->paginate(10);
        $actividades = ActActividad::orderBy('ID_ACT','ASC')->where('ID_CLIENTE_ACT','=',$rut)->paginate(10);

        //dd($cliente);
        //dd($cli);
        //dd($contacto);

        //return view('ModuloCrm.fichaClienteConsolidado',compact('contacto','oportunidades','actividades'));
        //return view('ModuloCrm.fichaClienteConsolidado')->with('cliente',$cliente);
        return view('ModuloCrm.fichaClienteConsolidado',compact('contacto','oportunidades','actividades'))->with('cliente',$cliente);

    }

    public function fichaclipros($rut)
    {
        $cliente = Cliente::find($rut);
        $rubro = Rubro::find($cliente->getAttribute('CLI_RUBRO'));
        $subrub = SubRubro::find($cliente->getAttribute('CLI_SUB_RUBRO'));
        $ACT = Actividad::find($cliente->getAttribute('CLI_ACTIVIDAD'));
        $BCO = Banco::find($cliente->getAttribute('CLI_BANCO'));
        $TCTA = TipoCuenta::find($cliente->getAttribute('CLI_TCTA_BCO'));
        $Pais = Pais::find($cliente->getAttribute('CLI_PAIS'));
        $Reg = Region::find($cliente->getAttribute('CLI_REGION'));
        $CIU = Ciudad::find($cliente->getAttribute('CLI_CIUDAD'));
        $pro = Provincia::find($cliente->getAttribute('CLI_PROVINCIA'));
        $cliente->setAttribute('CLI_RUBRO', $rubro->getAttribute('RUB_DESC'));
        $cliente->setAttribute('CLI_SUB_RUBRO', $subrub->getAttribute('SUB_RUB_DESC'));
        $cliente->setAttribute('CLI_ACTIVIDAD', $ACT->getAttribute('ACT_DESC'));
        $cliente->setAttribute('CLI_BANCO', $BCO->getAttribute('BCO_DESC'));
        $cliente->setAttribute('CLI_TCTA_BCO', $TCTA->getAttribute('TCTA_DESC'));
        $cliente->setAttribute('CLI_PAIS', $Pais->getAttribute('PAI_DESC'));
        $cliente->setAttribute('CLI_REGION', $Reg->getAttribute('REG_DESC'));
        $cliente->setAttribute('CLI_CIUDAD', $CIU->getAttribute('CIU_DESC'));
        $cliente->setAttribute('CLI_PROVINCIA', $pro->getAttribute('PV_DESC'));

        $contacto = Contactos::orderBy('CONT_CLI_ID','ASC')->where('CONT_CLI_ID','=',$rut)->paginate(10);
        $oportunidades = Oportunidad::orderBY('ID_CLIENTE','ASC')->where('ID_CLIENTE','=',$rut)->paginate(10);
        $actividades = ActActividad::orderBy('ID_ACT','ASC')->where('ID_CLIENTE_ACT','=',$rut)->paginate(10);

        //return view('ModuloCrm.fichaClienteProspecto',compact('contacto','oportunidades','actividades'));
        return view('ModuloCrm.fichaClienteProspecto',compact('contacto','oportunidades','actividades'))->with('cliente',$cliente);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function regcontac(Request $request)
    {
        $contacto = new Contactos();
        $contacto->setAttribute('CONT_NOM',$request->get('nombre',null));
        $contacto->setAttribute('CONT_CEL',$request->get('celular',null));
        $contacto->setAttribute('CONT_EMAIL_EMP',$request->get('email_empresarial',null));
        $contacto->setAttribute('CONT_EMAIL',$request->get('email',null));
        $contacto->setAttribute('CONT_CLI_ID', $request->get('cliente'));
        $ciu = Ciudad::find($request->get('ciudad'));
        $contacto->setAttribute('CONT_SUCURSAL', $ciu->getAttribute('CIU_DESC'));

        //dd($contacto);
        $contacto->save();


        return redirect()->back();
    }

    public function convertir(Request $request, $id){
        $cliente = Cliente::find($id);
        //dd($id);
        $cliente->setAttribute('CLI_NOMBRE',$request->get('nombre',null));
        $cliente->setAttribute('CLI_RUT',$request->get('rut'));
        $cliente->setAttribute('CLI_RUBRO',$request->get('rubro'));
        $cliente->setAttribute('CLI_SUB_RUBRO',$request->get('subrubro'));
        $cliente->setAttribute('CLI_ACTIVIDAD',$request->get('actividad'));

        //dd($cliente);

        if ($this->regcliente($cliente->getAttribute('CLI_RUT'))){

            $cliente->save();
            //dd("true");
            //return view('ModuloOt.result')->with('success', true);
            return redirect()->action(fichaclicons)->with('success', "ha sido convertido exitosamente.");
            //return redirect()->route('result')->with('success', true);
        }else{
            //dd("false");
            return redirect()->back()->with('error', "El CLIENTE ya está registrado favor comunicarce con administrador.");
            //return view('ModuloOt.result')->with('success', false);
        }
        return redirect();
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
