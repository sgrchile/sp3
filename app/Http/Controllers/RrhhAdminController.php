<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proveedor;
use App\Region;
use App\Provincia;
use App\Ciudad;
use App\Banco;
use App\Cargo;
use App\Empresa;
use App\Pais;
use App\EstadoProveedor;
use App\Rubro;
use App\TipoCuenta;
use App\TipoProveedor;
use App\ServicioProfesional;
use App\ArriendoMaquinaria;
use App\OfertaServicio;
use App\OfertaArticulo;
use App\EstadoOfertaAdministrador;
use App\EstadoOfertaProveedor;
use App\Orientacion;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RrhhAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function getNuevoRh()
     {
         $regiones = Region::all();
         $provincias = Provincia::all();
         $ciudades = Ciudad::all();
         $bancos = Banco::all();
         $cargos = Cargo::all();
         $empresas = Empresa::all();
         $paises = Pais::all();
         $estado_proveedores = EstadoProveedor::all();
         $tipo_cuentas = TipoCuenta::all();
         $tipo_proveedores = TipoProveedor::all();

         return view('ModuloRRHH.AdmRRHH.regPers')
             ->with('bancos', $bancos)
             ->with('cargos', $cargos)
             ->with('empresas', $empresas)
             ->with('paises', $paises)
             ->with('estado_proveedores', $estado_proveedores)
             ->with('tipo_cuentas', $tipo_cuentas)
             ->with('tipo_proveedores', $tipo_proveedores)
             ->with('regiones', $regiones)
             ->with('ciudades', $ciudades)
             ->with('provincias', $provincias);
     }

     public function postRegistroRh(Request $request)
     {
         $this->validateNuevoRh($request);
         $createNuevoRh = $this->createNuevoRh($request->all());

         if (! $createNuevoRh) {
             return redirect()->route('regPersonal')->with('error', "Hubo un problema al crear el proveedor persona.");
         }

         return redirect()->route('regPersonal')->with('success', "El proveedor ha sido creado exitosamente.");
     }

     public function createNuevoRh($data) {
         $cargo = Cargo::where('CAR_DESC', '=', 'PROVEEDOR NO EVALUADO')->first()->CAR_ID;
         $estado = EstadoProveedor::where('EP_DESC', '=', 'OPERATIVO')->first()->EP_ID;
         $tipo_prov = TipoProveedor::where('TP_DESC', '=', 'EXTERNO')->first()->TP_ID;
         $empresa = Empresa::find($data['empresa'])->first()->EMP_ID;
         $banco = Banco::find($data['banco'])->first()->BCO_ID;
         $pais = Pais::find($data['pais'])->first()->PAI_COD;
         $region = Region::find($data['region'])->first()->REG_COD;
         $provincia = Provincia::find($data['provincia'])->first()->PV_COD;
         $ciudad = Ciudad::find($data['ciudad'])->first()->CIU_COD;
         $tipo_cuenta = TipoCuenta::find($data['tipo_cuenta'])->first()->TCTA_BCO;

         return Proveedor::updateOrCreate([
             'PRO_RUN' => $data['rut'],
             'PRO_NOMBRE' => $data['nombre'],
             'PRO_APE_PAT' => $data['apellido_paterno'],
             'PRO_APE_MAT' => $data['apellido_materno'],
             'PRO_SEXO' => $data['sexo'],
             'PRO_DIRECCION' => $data['direccion'],
             'PRO_NACIONALIDAD' => $data['nacionalidad'],
             'PRO_SEG_MED' => $data['seguro_medico'],
             'PRO_AFP' => $data['afp'],
             'PRO_N_CUENTA' => $data['nro_cuenta'],
             'PRO_CELULAR' => $data['celular'],
             'PRO_TEL' => $data['celular_dos'],
             'PRO_FECHA_PAGO' => $data['fecha_pago'],
             'PRO_CONTACTO_SECUNDARIO' => $data['celular_dos'],
             'PRO_EMAIL' => $data['email'],
             'PRO_REFERENCIA' => $data['referencia'],
             'PRO_FECHA_NAC' => $data['fecha_nacimiento'],
             'password' => Hash::make($data['password']),
             'PRO_CAR_ID' => $cargo,
             'PRO_EMP' => $empresa,
             'PRO_ESTADO_PERSONAL' => $estado,
             'PRO_TP_COD' => $tipo_prov,
             'PRO_BCO_ID' => $banco,
             'PRO_TCTA_BCO' => $tipo_cuenta,
             'PRO_PAI_COD' => $pais,
             'PRO_PV_COD' => $provincia,
             'PRO_REG_COD' => $region,
             'PRO_CIU_COD' => $ciudad,
         ]);
     }

     public function validateNuevoRh(Request $request) {
         $this->validate($request, [
             'nombre' => 'required',
             'apellido_paterno' => 'required',
             'apellido_materno' => 'required',
             'rut' => 'required|unique:PRO_PROVEEDOR,PRO_RUN',
             'fecha_nacimiento' => 'required',
             'celular' => 'required',
             'celular_dos' => 'required',
             'referencia' => 'required',
             'nacionalidad' => 'required',
             'sexo' => 'required',
             'direccion' => 'required',
             'pais' => 'required',
             'region' => 'required',
             'provincia' => 'required',
             'ciudad' => 'required',
             'seguro_medico' => 'required',
             'afp' => 'required',
             'fecha_pago' => 'required',
             'nro_cuenta' => 'required',
             'banco' => 'required',
             'tipo_cuenta' => 'required',
             'password' => 'required|min:6|confirmed',
             'email' => 'required|email|unique:PRO_PROVEEDOR,PRO_EMAIL',
             'personal' => 'required',
         ]);
     }

     public function getConsultaRh(Request $request)
     {
        $buscar = $request->input('buscarRh');
        $method = $request->method();

        if ($request->isMethod('post')) {
          $personal = Proveedor::where('PRO_RUN', 'LIKE', '%' . $buscar . '%')
          ->orWhere('PRO_NOMBRE', 'LIKE', '%' . $buscar . '%')->get();

           return view('ModuloRRHH.AdmRRHH.consRRHH')
           ->with('personal', $personal);
        }
        $personal = Proveedor::where('PRO_RUN', 'null')->get();
        return view('ModuloRRHH.AdmRRHH.consRRHH')
        ->with('personal', $personal);
     }

     public function getMostrarRh($id)
     {
        $personal = Proveedor::findOrFail($id);

         return view('ModuloRRHH.AdmRRHH.verconsulta')
         ->with('personal', $personal);
     }

     public function showEditarRh(Request $request)
     {
        $buscar = $request->input('buscarRh');
        $method = $request->method();

        if ($request->isMethod('post')) {
          $personal = Proveedor::where('PRO_RUN', 'LIKE', '%' . $buscar . '%')
          ->orWhere('PRO_NOMBRE', 'LIKE', '%' . $buscar . '%')->get();

           return view('ModuloRRHH.AdmRRHH.modPers')
           ->with('personal', $personal);
        }
        $personal = Proveedor::where('PRO_RUN', 'null')->get();
        return view('ModuloRRHH.AdmRRHH.modPers')
        ->with('personal', $personal);
     }

     public function getEditarRh($id)
     {
        $personal = Proveedor::findOrFail($id);
        $paises = Pais::all();
        $regiones = Region::all();
        $empresas = Empresa::all();
        $cargos = Cargo::all();
        $bancos = Banco::all();
        $tipo_cuentas = TipoCuenta::all();

         return view('ModuloRRHH.AdmRRHH.modificar')
         ->with('tipo_cuentas', $tipo_cuentas)
         ->with('bancos', $bancos)
         ->with('cargos', $cargos)
         ->with('empresas', $empresas)
         ->with('paises', $paises)
         ->with('regiones', $regiones)
         ->with('personal', $personal);
     }

     public function patchEditarRh(Request $request, $id)
     {
             $updatePersonal = Proveedor::findOrFail($id)->update([
               'PRO_RUN' => $request->input('rut'),
               'PRO_NOMBRE' => $request->input('nombre'),
               'PRO_APE_PAT' => $request->input('apellido_paterno'),
               'PRO_APE_MAT' => $request->input('apellido_materno'),
               'PRO_SEXO' => $request->input('sexo'),
               'PRO_DIRECCION' => $request->input('direccion'),
               'PRO_NACIONALIDAD' => $request->input('nacionalidad'),
               'PRO_SEG_MED' => $request->input('seguro_medico'),
               'PRO_AFP' => $request->input('afp'),
               'PRO_N_CUENTA' => $request->input('nro_cuenta'),
               'PRO_CELULAR' => $request->input('celular'),
               'PRO_TEL' => $request->input('telefono'),
               'PRO_FECHA_PAGO' => $request->input('fecha_pago'),
               'PRO_CONTACTO_SECUNDARIO' => $request->input('celular_dos'),
               'PRO_EMAIL' => $request->input('email'),
               'PRO_REFERENCIA' => $request->input('referencia'),
               'PRO_FECHA_NAC' => $request->input('fecha_nacimiento'),
               'PRO_CAR_ID' => $request->input('cargo'),
               'PRO_EMP' => $request->input('empresa'),
               'PRO_TP_COD' => $request->input('personal'),
               'PRO_BCO_ID' => $request->input('banco'),
               'PRO_TCTA_BCO' => $request->input('tipo_cuenta'),
               'PRO_PAI_COD' => $request->input('pais'),
              //  'PRO_PV_COD' => $request->input('provincia'),
              //  'PRO_REG_COD' => $request->input('region'),
              //  'PRO_CIU_COD' => $request->input('ciudad'),
         ]);

         if (!$updatePersonal) {
             return redirect()->route('modificarRh', $id)->with('error', 'Hubo un error al modificar personal');
           }
             return redirect()->route('modificarRh', $id)->with('success', 'Personal modificado exitosamente.');
         }

}
