<?php

namespace App\Http\Controllers;

use App\Factura;
use App\Remuneracion;
use DB;
use Carbon\Carbon;
use App\CentroNegocio;
use App\Cliente;
use App\OrdenTrabajo;
use App\TipoCuenta;
use App\SolicitudFondo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Stmt\Return_;

class OrdenTrabajoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getAgregarOrdenTrabajo()
    {
        $clientes = Cliente::all()->where('CLI_EMP','=',Auth::user()->PRO_EMP);
        $centro_negocios = CentroNegocio::all()->where('CT_EMP_ID','=',Auth::user()->PRO_EMP);

        return view('ModuloOt.ingresoOt')
            ->with('clientes', $clientes)
            ->with('centro_negocios', $centro_negocios);
    }

    public function postAgregarOrdenTrabajo(Request $request)
    {
        $this->validateAgregarOt($request);
        $createOt = $this->createOrdenTrabajo($request->all());
        if (!$createOt) {
            return redirect()->route('ModuloOt.IngresoOt')->with('error', 'Hubo un error al crear la Orden de Trabajo.');
        }

        return redirect()->route('ModuloOt.IngresoOt')->with('success', 'Orden de Trabajo creada exitosamente.');
    }

    protected function validateAgregarOt(Request $request)
    {
        $this->validate($request, [
            'idcliente' => 'required',
            'MontoNeto' => 'required',
            'centro_negocio' => 'required',
            'oContrato' => 'required',
            'descripcion' => 'required',
        ]);
    }

    protected function createOrdenTrabajo(array $data)
    {
        $cliente = Cliente::find($data['idcliente'])->CLI_RUT;
        $centro_negocio = CentroNegocio::find($data['centro_negocio'])->CT_ID;

        return OrdenTrabajo::create([
            'OT_OC' => $data['oContrato'],
            'OT_DESC' => $data['descripcion'],
            'OT_FECHA_INI' => Carbon::now(),
            'OT_MONTO_NETO' => $data['MontoNeto'],
            'OT_MARGEN_PORCENTUAL' => 100,
            'OT_EST_ID' => 1,
            'OT_CLI_RUT' => $cliente,
            'OT_PER_RUT_ENCARGADO' => Auth::user()->PRO_RUN,
            'OT_CENTRO_NEGOCIO_ID' => $centro_negocio,
        ]);
    }

    public function getClientes()
    {
        $tipo_cuentas = TipoCuenta::all();

        return view('ModuloOt.registroClientes')
            ->with('tipo_cuentas', $tipo_cuentas);
    }


    public function getAllClientes()
    {
        $clientes = Cliente::orderBy('CLI_NOMBRE','ASC')->paginate(10);
        return view('ModuloOt.listaCli')
            ->with('clientes', $clientes);
    }

    public function postClientes(Request $request)
    {
        dd($request->all());
        /*$this->validateCliente($request);*/
        $createCliente = $this->createCliente($request->all());
        if (!$createCliente) {
            return redirect()->route('regcli')->with('success', false);
        }

        return redirect()->route('regcli')->with('success', true);
    }

    protected function validateCliente(Request $request)
    {
        $this->validate($request, [
            'nombre' => 'required',
            'tipo_cuenta' => 'required',
            'rut' => 'required',
            'actividad' => 'required',
            'direccion' => 'required',
            'contacto' => 'required',
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
            'CLI_CONTACTO' => $data['contacto'],
            'CLI_ACT_COMERCIAL' => $data['actividad'],
            'CLI_DIRECCION' => $data['direccion'],
            'CLI_TCTA_BCO' => $tipo_cuenta_id,
        ]);
    }
    public function getGrafico()
    {
        $aprobadas = SolicitudFondo::where('SF_EST', '5');
        $porconciliar = SolicitudFondo::where('SF_EST', '7');
        $porfacturar = Factura::where('FCT_EST_ID','=',1);
        $porcobrar = Factura::where('FCT_EST_ID','=',2);
        $porliquidar = Remuneracion::where('RH_REM_EST','=',1);
        $porpagar = Remuneracion::where('RH_REM_EST','=',1);

        return view('ModuloOt.Graficos')
            ->with('aprobadas', $aprobadas)
            ->with('porfacturar', $porfacturar)
            ->with('porcobrar', $porcobrar)
            ->with('porliquidar', $porliquidar)
            ->with('porpagar', $porpagar)
            ->with('porconciliar', $porconciliar);
    }
    public function confOt(){
        $cetro_negocios = CentroNegocio::all()->where('CT_EMP_ID','=',Auth::user()->PRO_EMP);
        //dd($cetro_negocios);
        Return view('ModuloOt.confOT')->with('centro_negocios',$cetro_negocios);
    }
}
