<?php

namespace App\Http\Controllers;

use App\Afp;
use App\DatosAdicionalesProv;
use App\Salud;
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
use Illuminate\Support\Facades\App;
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
         $afps = Afp::pluck('AFP_NOMBRE','AFP_ID');
         $salud = Salud::pluck('SALUD_NOMBRE','SALUD_ID');

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
             ->with('provincias', $provincias)
             ->with('afps', $afps)
            ->with('salud', $salud);
     }

     public function postRegistroRh(Request $request)
     {
         //dd($request);
         $this->validateDatosAdic($request);
         $createNuevoRh = $this->createDatosAdic($request->all());

         if (! $createNuevoRh) {
             return redirect()->route('regPersonal')->with('error', "Hubo un problema al guardar sus datos.");
         }

         return redirect()->route('regPersonal')->with('success', "Sus datos han sido guardados exitosamente.");
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

     public function createDatosAdic($data){
         $intituciones='';

         if (isset($data['chilepais'])){
             $intituciones = $intituciones.','.$data['chilepais'];
         }
         if (isset($data['greenpeace'])){
             $intituciones = $intituciones.','.$data['greenpeace'];
         }
         if (isset($data['bomberos'])){
             $intituciones = $intituciones.','.$data['bomberos'];
         }
         if (isset($data['ffaa'])){
             $intituciones = $intituciones.','.$data['ffaa'];
         }
         if (isset($data['scouts'])){
             $intituciones = $intituciones.','.$data['scouts'];
         }
         if (isset($data['cruzroja'])){
             $intituciones = $intituciones.','.$data['cruzroja'];
         }

         return DatosAdicionalesProv::updateOrCreate([
             'MP_HOBBY' => $data['hobby'],
             'MP_DEPORTES' => $data['deporte'],
             'MP_ZONA_PREF_TRABAJAR' => $data['zona_lab_pref'],
             'MP_AREA_MEJOR_DESEMPEÑO' => $data['area_mejor_desemp'],
             'MP_TRABAJO_EQUIPO' => $data['trab_equipo'],
             'MP_EMPRENDIMIENTOS' => $data['emprendimiento'],
             'MP_LUGAR_NACIMIENTO' => $data['lug_nac'],
             'MP_ESTABLECIMIENTO_ED_SUP' => $data['est_ed_superior'],
             'MP_ESTABLECIMIENTO_ED_MEDIA' => $data['est_ed_media'],
             'MP_RESIDENCIA_ACTUAL' => $data['resid_actual'],
             'MP_LUGAR_IDEAL_VIVIR_TRABAJAR' => $data['lug_ideal'],
             'MP_EQUIPO_PERSONAL' => $data['compu'],
             'MP_INTERNET' => $data['internet'],
             'MP_ESPACIO_ADECUADO_PARA_TRABAJAR' => $data['lug_trabajo'],
             'MP_VEHICULO' => $data['vehiculo'],
             'MP_LISTA_INSTRUMENTAL' => $data['instrumental'],
             'MP_MARCA' => $data['marca'],
             'MP_MOD' =>$data['modelo'],
             'MP_PERTENENCIA_INSTITUCIONES' => $intituciones,
             'MP_PRO_RUN' => Auth::user()->PRO_RUN,
             'MP_AREA_DESEMP' => $data['area_desemp'],
             'MP_SIT_LAB' => $data['sit_lab'],
             'MP_AÑOS_EXP' => $data['años_exp'],
             'MP_REDES' => $data['redes'],
             'MP_CAPACITACIONES' => $data['capacitaciones'],
             'MP_DOM_INGLES' => $data['dom_ingles'],
             'MP_DOM_COMPUTACIONAL' => $data['dom_compu'],
             'MP_DOM_SOFTWARE' => $data['dom_software'],
             'MP_LIC_CONDUCIR' => $data['lic_conducir'],
             'MP_MOV_PROPIA' => $data['mov_propia'],
             'MP_DISCAPACIDAD' => $data['discapacidad'],
             'MP_JORNADA' => $data['jornada'],
             'MP_COMENTARIOS' => $data['comentarios'],
             'MP_FOTO' => $data['foto'],
             'MP_CERTIFICADO_ANT' => $data['cert_antec'],
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

    public function validateDatosAdic(Request $request) {
        $this->validate($request, [
            'deporte' => 'required',
            'hobby' => 'required',
            'zona_lab_pref' => 'required',
            'emprendimiento' => 'required',
            'area_mejor_desemp' => 'required',
            'lug_ideal' => 'required',
            'instrumental' => 'required',
            'lug_nac' => 'required',
            'trab_equipo' => 'required',
            'compu' => 'required',
            'lug_trabajo' => 'required',
            'internet' => 'required',
            'est_enseñanza' => 'required',
            'area_desemp' => 'required',
            'est_ed_media' => 'required',
            'est_ed_superior' => 'required',
            'sit_lab' => 'required',
            'años_exp' => 'required',
            'redes' => 'required',
            'capacitaciones' => 'required',
            'dom_ingles' => 'required',
            'dom_compu' => 'required',
            'dom_software' => 'required',
            'lic_conducir' => 'required',
            'mov_propia' => 'required',
            'discapacidad' => 'required',
            'jornada' => 'required',
            'resid_actual' => 'required',
            'vehiculo' => 'required',
            'comentarios' => 'required',
        ]);
    }

     public function getConsultaRh(Request $request)
     {
         if ($request != null){
             $buscar = $request->input('buscarRh');
         }else{
             $buscar = 0;
         }
         $method = $request->method();

        if ($request->isMethod('post')) {
            if ($buscar == 0){
                $personal = Proveedor::where('PRO_TP_COD', '=', 1)
                    ->get();
            }else{
                $personal = Proveedor::where('PRO_TP_COD', '=', 1)
                    ->where('PRO_RUN', 'LIKE', '%' . $buscar . '%')
                    ->orWhere('PRO_NOMBRE', 'LIKE', '%' . $buscar . '%')->get();
            }
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
         if ($request != null){
             $buscar = $request->input('buscarRh');
         }else{
             $buscar = 0;
         }
         $method = $request->method();

        if ($request->isMethod('post')) {
            if ($buscar == 0){
                $personal = Proveedor::where('PRO_TP_COD', '=', 1)
                    ->get();
            }else{
                $personal = Proveedor::where('PRO_TP_COD', '=', 1)
                    ->where('PRO_RUN', 'LIKE', '%' . $buscar . '%')
                    ->orWhere('PRO_NOMBRE', 'LIKE', '%' . $buscar . '%')->get();
            }

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
