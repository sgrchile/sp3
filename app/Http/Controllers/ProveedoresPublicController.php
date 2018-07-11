<?php

namespace App\Http\Controllers;

use App\Pais;
use App\Banco;
use App\TipoCuenta;
use App\Salud;
use App\Afp;
use App\Region;
use App\Provincia;
use App\Ciudad;
use App\Proveedor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class ProveedoresPublicController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }
    /********************************/
    /** Crear un proveedor persona **/
    /** Formulario público         **/
    /********************************/
    public function NewProveedor(Request $request)
    {
        $this->validateProveedorPersona($request);
        $createProveedorPersona = $this->createProveedorPersona($request->all());
        if (! $createProveedorPersona) {
            $respuesta = new \stdClass;
            $respuesta->respuesta = "Hubo un problema al crear el proveedor persona.";
            return response()->json($respuesta);
        }
        $respuesta = new \stdClass;
        $respuesta->respuesta = "El proveedor ha sido creado exitosamente.";
        return response()->json($respuesta);
    }
    public function createProveedorPersona($data) {
        $pais = Pais::find($data['pais'])->first()->PAI_COD;
        $banco = Banco::find($data['banco'])->first()->BCO_ID;
        $tipo_cuenta = TipoCuenta::find($data['bancocuenta'])->first()->TCTA_BCO;
        $salud = Salud::find($data['medico'])->first()->TCTA_BCO;
        $afp = Afp::find($data['afp'])->first()->TCTA_BCO;
        if ($pais !== 1){
            $region = 0;
            $provincia = 0;
            $ciudad = 0;
        }
        else{
            $region = Region::find($data['region'])->first()->REG_COD;
            $provincia = Provincia::find($data['provincia'])->first()->PV_COD;
            $ciudad = Ciudad::find($data['ciudad'])->first()->CIU_COD;
        }

        return Proveedor::create([
            'PRO_NOMBRE' => $data['nombre'],
            'PRO_APE_PAT' => $data['paterno'],
            'PRO_APE_MAT' => $data['materno'],
            'PRO_RUN' => $data['rut'],
            'PRO_FECHA_NAC' => $data['fecha'],
            'PRO_SEXO' => $data['genero'],
            'PRO_ESTCIVIL' => $data['estado'],
            'PRO_EMAIL' => $data['email'],
            'PRO_NACIONALIDAD' => $data['nacionalidad'],
            'password' => Hash::make($data['contrasena']),
            'PRO_CELULAR' => $data['telefono'],
            'PRO_TEL' => $data['telefonodos'],
            'PRO_DIRECCION' => $data['direccion'],
            'PRO_PAI_COD' => $pais,
            'PRO_PV_COD' => $provincia,
            'PRO_REG_COD' => $region,
            'PRO_CIU_COD' => $ciudad,
            'PRO_PAGO' => $data['pago'],
            'PRO_FECHA_PAGO' => $data['fechapago'],
            'PRO_N_CUENTA' => $data['ncuenta'],
            'PRO_BCO_ID' => $banco,
            'PRO_TCTA_BCO' => $tipo_cuenta,
            'PRO_SEG_MED' => $salud,
            'PRO_AFP' => $afp,
        ]);
    }
    public function validateProveedorPersona(Request $request) {
        $this->validate($request, [
            'nombre' => 'required',
            'paterno' => 'required',
            'materno' => 'required',
            'rut' => 'required|unique:PRO_PROVEEDOR,PRO_RUN',
            'fecha' => 'required',
            'genero' => 'required',
            'estado' => 'required',
            'email' => 'required|email|unique:PRO_PROVEEDOR,PRO_EMAIL',
            'nacionalidad' => 'required',
            'contrasena' => 'required|min:6',
            'telefono' => 'required',
            'direccion' => 'required',
            'pais' => 'required',
            'region' => 'required',
            'provincia' => 'required',
            'ciudad' => 'required',
            'pago' => 'required',
            'fechapago' => 'required',
            'ncuenta' => 'required',
            'banco' => 'required',
            'bancocuenta' => 'required',
            'medico' => 'required',
            'afp' => 'required'
        ]);
    }
    public function getProveedorEmpresa()
    {
        $bancos = Banco::all();
        $cargos = Cargo::all();
        $ciudades = Ciudad::all();
        $empresas = Empresa::all();
        $provincias = Provincia::all();
        $paises = Pais::all();
        $estado_proveedores = EstadoProveedor::all();
        $regiones = Region::all();
        $tipo_cuentas = TipoCuenta::all();
        $tipo_proveedores = TipoProveedor::all();
        return view('ModuloProv.regProv')
            ->with('bancos', $bancos)
            ->with('cargos', $cargos)
            ->with('ciudades', $ciudades)
            ->with('empresas', $empresas)
            ->with('provincias', $provincias)
            ->with('estado_proveedores', $estado_proveedores)
            ->with('regiones', $regiones)
            ->with('tipo_cuentas', $tipo_cuentas)
            ->with('paises', $paises)
            ->with('tipo_proveedores', $tipo_proveedores);
    }
    public function postProveedorEmpresa(Request $request)
    {
        // dd($request->all());
        $this->validateProveedorEmpresa($request);
        $createProveedorEmpresa = $this->createProveedorEmpresa($request->all());
        if (! $createProveedorEmpresa) {
            return redirect()->route('registroProv')->with('error', "Hubo un problema al crear el proveedor empresa.");
        }
        return redirect()->route('registroProv')->with('success', "El proveedor ha sido creado exitosamente.");
    }
    public function createProveedorEmpresa($data)
    {
        $banco = Banco::find($data['banco'])->first()->BCO_ID;
        $pais = Pais::find($data['pais'])->first()->PAI_COD;
        $region = Region::find($data['region'])->first()->REG_COD;
        $provincia = Provincia::find($data['provincia'])->first()->PV_COD;
        $ciudad = Ciudad::find($data['ciudad'])->first()->CIU_COD;
        $tipo_cuenta = TipoCuenta::find($data['tipo_cuenta'])->first()->TCTA_BCO;
        return Proveedor::create([
            'PRO_RUN' => $data['rut'],
            'PRO_NOMBRE' => $data['nombre'],
            'PRO_N_CUENTA' => $data['nro_cuenta'],
            'PRO_CELULAR' => $data['telefono'],
            'PRO_RAZON_SOCIAL' => $data['razon_social'],
            'PRO_CONTACTO_SECUNDARIO' => $data['contacto_secundario'],
            'PRO_FACEBOOK' => $data['facebook'],
            'PRO_EMAIL' => $data['email'],
            'PRO_RUBRO' => $data['rubro'],
            'PRO_SUBRUBRO' => $data['subrubro'],
            'password' => Hash::make($data['password']),
            'PRO_TP_COD' => '3',
            'PRO_BCO_ID' => $banco,
            'PRO_TCTA_BCO' => $tipo_cuenta,
            'PRO_PAI_COD' => $pais,
            'PRO_PV_COD' => $data['provincia'],
            'PRO_REG_COD' => $data['region'],
            'PRO_CIU_COD' => $data['ciudad'],
        ]);
    }
}