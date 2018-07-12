<?php

namespace App\Http\Controllers;

use App\Proveedor;
use App\ProveedorExterno;
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
use App\CategoriaEmpresa;
use App\CoberturaEmpresa;
use App\NroEmpleados;
use App\Pagos;
use App\PersonaJuridica;
use App\PreguntasCerradas;
use App\Tp_Cuenta;
use App\VentasAnuales;
use App\EstadoOfertaAdministrador;
use App\EstadoOfertaProveedor;
use App\Orientacion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProveedoresController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prov = Proveedor::orderBy('PRO_NOMBRE','ASC')->paginate(10);

        //dd($clientes);

        return view('ModuloProv.prov.listaProv')->with('proveedores',$prov);
    }

    public function admin()
    {  
        $prov = Proveedor::where('PRO_ALTA', 0)->orderBy('CREATED_AT','DESC')->paginate(10);
        return view('ModuloProv.admin')->with('proveedores',$prov);
    }

    public function altaUsuario($idUsuario)
	{
        $updateAlta = Proveedor::where('PRO_RUN', $idUsuario)->firstOrFail()->increment('PRO_ALTA'); 
        return response()->json($updateAlta);
	}

    public function getProveedorPersona()
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
        $rubros = Rubro::all();
        $pagos = Pagos::all();

        return view('ModuloProv.regPerAct')
            ->with('bancos', $bancos)
            ->with('cargos', $cargos)
            ->with('empresas', $empresas)
            ->with('pais', $paises)
            ->with('estado_proveedores', $estado_proveedores)
            ->with('tipo_cuentas', $tipo_cuentas)
            ->with('tipo_proveedores', $tipo_proveedores)
            ->with('regiones', $regiones)
            ->with('ciudades', $ciudades)
            ->with('rubro', $rubros)
            ->with('pagos', $pagos)
            ->with('provincias', $provincias);
    }

    public function postProveedorPersona(Request $request)
    {
        $this->validateProveedorPersona($request);
        $createProveedorPersona = $this->createProveedorPersona($request->all());

        if (! $createProveedorPersona) {
            return redirect()->route('regPerAct')->with('error', "Hubo un problema al crear el proveedor persona.");
        }

        return redirect()->route('regPerAct')->with('success', "El proveedor ha sido creado exitosamente.");
    }

    public function createProveedorPersona($data) {

        return ProveedorExterno::create([
            'PRO_EXT_RUT' => $data['rut'],
            'PRO_EXT_NOM' => $data['nombre'],
            'PRO_EXT_APE_PAT' => $data['apellido_paterno'],
            'PRO_EXT_APE_MAT' => $data['apellido_materno'],
            'PRO_EXT_GENERO' => $data['sexo'],
            'PRO_EXT_DIRECCION' => $data['direccion'],
            'PRO_EXT_NACIONALIDAD' => $data['nacionalidad'],
            'PRO_EXT_NRO_CTA' => $data['nro_cuenta'],
            'PRO_EXT_TELEFONO' => $data['celular'],
            'PRO_EXT_TEL_EMERG' => $data['celular_dos'],
            'PRO_EXT_FORM_PAGO' => $data['fecha_pago'],
            'PRO_EXT_WEB' => $data['sitio_web'],
            'PRO_EXT_REDES' => $data['facebook'],
            'PRO_EXT_EMAIL' => $data['email'],
            'PRO_EXT_FEC_NAC' => $data['fecha_nacimiento'],
            'PRO_EXT_RUBRO' => $data['rubro'],
            'PRO_EXT_SUB_RUBRO' => $data['subrubro'],
            'PRO_EXT_ACTIVIDAD' => $data['actividad'],
            'PRO_EXT_EMP' => $data['empresa'],
            'PRO_EXT_BCO' => $data['banco'],
            'PRO_EXT_TP_CTA' => $data['tipo_cuenta'],
            'PRO_EXT_PAIS' => $data['pais'],
            'PRO_EXT_PROVINCIA' => $data['provincia'],
            'PRO_EXT_COMUNA' => $data['region'],
            'PRO_EXT_CIUDAD' => $data['ciudad'],
        ]);
    }

    public function validateProveedorPersona(Request $request) {
        $this->validate($request, [
            'nombre' => 'required',
            'apellido_paterno' => 'required',
            'rut' => 'required|unique:PROVEEDOR_EXTERNO,PRO_EXT_RUT',
            'celular' => 'required',
            'nacionalidad' => 'required',
            'direccion' => 'required',
            'pais' => 'required',
            'email' => 'required|email|unique:PROVEEDOR_EXTERNO,PRO_EXT_EMAIL',
            'empresa' => 'required',
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
        $nro_empleados = NroEmpleados::all();
        $categoria = CategoriaEmpresa::all();
        $ventas_anuales = VentasAnuales::all();
        $cobertura = CoberturaEmpresa::all();
        $tpcuenta = TipoCuenta::all();
        $pagos = Pagos::all();
        $preguntas = PreguntasCerradas::all();
        $pers_juridica = PersonaJuridica::all();

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
      ->with('tipo_proveedores', $tipo_proveedores)
          ->with('categoria',$categoria)
          ->with('ventas',$ventas_anuales)
          ->with('cobertura',$cobertura)
          ->with('tpcuenta',$tpcuenta)
          ->with('pagos',$pagos)
          ->with('preguntas',$preguntas)
          ->with('pers_juridica',$pers_juridica)
          ->with('nro_empleados',$nro_empleados);
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
        $nro_empleados = NroEmpleados::find($data['empleados'])->first();
        $categoria = CategoriaEmpresa::find($data['categoria'])->first();
        $ventas_anuales = VentasAnuales::find($data['ventas'])->first();
        $cobertura = CoberturaEmpresa::find($data['cobertura'])->first();
        $pers_juridica = PersonaJuridica::find($data['persjuridica'])->first();
        $empresas = Empresa::find($data['empresa'])->first();
        $estado_proveedores = EstadoProveedor::find($data['estprov'])->first();
        $tipo_proveedores = TipoProveedor::find($data['tpprov'])->first();
        $pagos = Pagos::find($data['pagos'])->first();

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
          'PRO_PERS_JURID' => $data['juridica'],
          'PRO_REP_LEGAL' => $data['repleg'],
          'PRO_PAGINA_WEB' => $data['pagweb'],
      ]);
    }

    public function validateProveedorEmpresa(Request $request){
        $this->validate($request, [
            'nombre' => 'required',
            'rut' => 'required',
            'razon_social' => 'required',
            'rubro' => 'required',
            'subrubro' => 'required',
            'pais' => 'required',
            'email' => 'required',
            'telefono' => 'required',
            //'password' => 'required|min:6|confirmed',
            'pagos' => 'required',
            'oficina' => 'required',
            'pers_juridica' => 'required',
            'rep_legal' => 'required',
        ]);
    }

    public function postServicioProfesional(Request $request){
      $this->validateServicioProfesional($request);
      $createServicioProfesional = $this->createServicioProfesional($request->all());

      if (! $createServicioProfesional) {
          return redirect()->route('registroOferta')->with('error', "Hubo un problema al crear el servicio profesional");
      }

      return redirect()->route('registroOferta')->with('success', "El servicio profesional ha sido creado exitosamente.");

    }

    public function validateServicioProfesional(Request $request) {
        $this->validate($request, [
            'descripcion' => 'required',
            'formacion' => 'required',
            'educacion' => 'required',
            'carrera' => 'required',
            'experiencia' => 'required',
            'fortaleza' => 'required',
            'debilidades' => 'required',
            'exlaboral' => 'required',
            'busco' => 'required',
            'ofrezco' => 'required',
            'cursos' => 'required',
            'cobertura' => 'required',
            'valor' => 'required',
            'orientado' => 'required',
        ]);
      }

      public function createServicioProfesional($data) {
      $proveedor = Auth::user()->PRO_RUN;

      return ServicioProfesional::create([
            'STP_PRO_RUN' => $proveedor,
            'STP_DESCRIPCION' => $data['descripcion'],
            'STP_FORMACION' => $data['formacion'],
            'STP_FORMACION_ESTABLECIMIENTO' => $data['educacion'],
            'STP_CARRERA' => $data['carrera'],
            'STP_ANHOS_EXPERIENCIA' => $data['experiencia'],
            'STP_FORTALEZAS' => $data['fortaleza'],
            'STP_DEBILIDADES' => $data['debilidades'],
            'STP_DESC_EXP_LABORAL' => $data['exlaboral'],
            'STP_BUSC_O_OF' => $data['busco'],
            'STP_OFREZCO' => $data['ofrezco'],
            'STP_CURSOS_PST_GRADOS' => $data['cursos'],
            'STP_COB_SERV' => $data['cobertura'],
            'STP_VALOR' => $data['valor'],
            'STP_OR_COD' => $data['orientado'],
            'STP_ESTA_ID' =>1,
            'STP_ESTP_ID'=>1,
            ]);
        }

      public function postArriendoMaquinaria(Request $request){
        $this->validateArriendoMaquinaria($request);
        $createArriendoMaquinaria = $this->createArriendoMaquinaria($request->all());

        if (! $createArriendoMaquinaria) {
            return redirect()->route('registroOferta')->with('error', "Hubo un problema al crear el Trasporte / Arriendo maquinaria");
          }

        return redirect()->route('registroOferta')->with('success', "El Trasporte / Arriendo maquinaria ha sido creado exitosamente.");

        }

  public function validateArriendoMaquinaria(Request $request) {
      $this->validate($request, [
        'descripcion' => 'required',
        'vehiculo' => 'required',
        'marca' => 'required',
        'anho' => 'required',
        'seguros' => 'required',
        'chofer' => 'required',
        'licencia' => 'required',
        'cursos' => 'required',
        'dlaborales' => 'required',
        'horainicio' => 'required',
        'horafinal' => 'required',
        'cobertura' => 'required',
        'cobro' => 'required',
        'valor' => 'required',
        'orientado' => 'required',
            ]);
          }

    public function createArriendoMaquinaria($data) {
          $proveedor = Auth::user()->PRO_RUN;

      return ArriendoMaquinaria::create([
          'ARM_DESCRIPCION' => $data['descripcion'],
          'ARM_TP_VEHICULO' => $data['vehiculo'],
          'ARM_MARCA' => $data['marca'],
          'ARM_ANHO' => $data['anho'],
          'ARM_SEGUROS_ASOCIADOS' => $data['seguros'],
          'ARM_OPERARIO' => $data['chofer'],
          'ARM_LICENCIAS_CONDUCIR' => $data['licencia'],
          'ARM_CURSOS' => $data['cursos'],
          'ARM_DIAS_LABORALES' => $data['dlaborales'],
          'ARM_HOR_INI' => $data['horainicio'],
          'ARM_HOR_FIN' => $data['horafinal'],
          'ARM_COB_SERVICIO' => $data['cobertura'],
          'ARM_RAZON_COBRO' => $data['cobro'],
          'ARM_VALOR' => $data['valor'],
          'ARM_PRO_RUN' => $proveedor,
          'ARM_OR_COD' => $data['orientado'],
          'ARM_ESTA_ID' =>1,
          'ARM_ESTP_ID'=>1,
              ]);
            }

      public function postOfertaServicio(Request $request){
            $this->validateOfertaServicio($request);
            $createOfertaServicio = $this->createOfertaServicio($request->all());

            if (! $createOfertaServicio) {
            return redirect()->route('registroOferta')->with('error', "Hubo un problema al crear Oferta de Servicios");
                      }
            return redirect()->route('registroOferta')->with('success', "Oferta de Servicios ha sido creado exitosamente.");

                    }

     public function validateOfertaServicio(Request $request) {
          $this->validate($request, [
          'descripcion' => 'required',
          'dlaborales'  => 'required',
          'hora1'       => 'required',
          'hora2'       => 'required',
          'cobertura'   => 'required',
          'cobro'       => 'required',
          'valor'       => 'required',
          'orientado'   => 'required',
            ]);
          }

  public function createOfertaServicio($data) {
      $proveedor = Auth::user()->PRO_RUN;

  return OfertaServicio::create([
        'OFSER_DESCRIPCION' => $data['descripcion'],
        'OFSER_DIAS_LABORALES' => $data['dlaborales'],
        'OFSER_HORARIOS_TRABAJO_INI' => $data['hora1'],
        'OFSER_HORARIOS_TRABAJO_FIN' => $data['hora2'],
        'OFSER_COBERTURA_SERVICIO' => $data['cobertura'],
        'OFSER_RAZ_COBRO' => $data['cobro'],
        'OFSER_VALOR' => $data['valor'],
        'OFSER_PRO_RUN' => $proveedor,
        'OFSER_OR_COD' => $data['orientado'],
        'OFSER_ESTA_ID' =>1,
        'OFSER_ESTP_ID'=>1,
        ]);
    }

    public function postOfertaArticulo(Request $request){
          $this->validateOfertaArticulo($request);
          $createOfertaArticulo = $this->createOfertaArticulo($request->all());

          if (! $createOfertaArticulo) {
          return redirect()->route('registroOferta')->with('error', "Hubo un problema al crear Oferta de Artículo");
                    }
          return redirect()->route('registroOferta')->with('success', "Oferta de Artículo ha sido creado exitosamente.");

                  }

   public function validateOfertaArticulo(Request $request) {
        $this->validate($request, [
        'descripcion' => 'required',
        'entrega'     => 'required',
        'dias'        => 'required',
        'hora1'       => 'required',
        'hora2'       => 'required',
        'cobro'       => 'required',
        'valor'       => 'required',
        'orientado'   => 'required',
        'capacidad'   => 'required',
          ]);
        }

  public function createOfertaArticulo($data) {
    $proveedor = Auth::user()->PRO_RUN;

  return OfertaArticulo::create([
      'OFAR_DESC' => $data['descripcion'],
      'OFAR_RAZON_COBRO' => $data['cobro'],
      'OFAR_DIAS_ENTREGA' => $data['dias'],
      'OFAR_HORARIO_ENT_INI' => $data['hora1'],
      'OFAR_HORARIO_ENT_FIN' => $data['hora2'],
      'OFAR_CAPACIDAD' => $data['capacidad'],
      'OFAR_VALOR' => $data['valor'],
      'OFAR_PRO_RUN' => $proveedor,
      'OFAR_ESTA_ID' =>1,
      'OFAR_ESTP_ID'=>1,
      'OFAR_OR_COD' =>$data['orientado'],
      ]);
  }

  public function getConsultaOfertas()
  {
    $articulos = OfertaArticulo::all();
    $servicios = OfertaServicio::all();
    $arriendos = ArriendoMaquinaria::all();
    $profesionales = ServicioProfesional::all();

    return view('ModuloProv.prov.consOF')
        ->with('articulos', $articulos)
        ->with('arriendos', $arriendos)
        ->with('profesionales', $profesionales)
        ->with('servicios', $servicios);
  }
  public function getActualizarOfertas()
  {
    $articulos = OfertaArticulo::all();
    $servicios = OfertaServicio::all();
    $arriendos = ArriendoMaquinaria::all();
    $profesionales = ServicioProfesional::all();

    return view('ModuloProv.prov.actOF')
        ->with('articulos', $articulos)
        ->with('arriendos', $arriendos)
        ->with('profesionales', $profesionales)
        ->with('servicios', $servicios);
  }

  public function getMisEvaluaciones()
  {
    $proveedor = Auth::user()->PRO_RUN;

    $articulos = OfertaArticulo::where('OFAR_PRO_RUN', $proveedor)
                 ->get();

    $servicios = OfertaServicio::where('OFSER_PRO_RUN', $proveedor)
                 ->get();

    $arriendos = ArriendoMaquinaria::where('ARM_PRO_RUN', $proveedor)
                 ->get();

    $profesionales = ServicioProfesional::where('STP_PRO_RUN', $proveedor)
                 ->get();

    return view('ModuloProv.prov.misEV')
        ->with('articulos', $articulos)
        ->with('arriendos', $arriendos)
        ->with('profesionales', $profesionales)
        ->with('servicios', $servicios);
  }

  public function getMisDatosPersona()
  {
    $proveedor = Auth::user()->PRO_RUN;
    $proveedores = Proveedor::find($proveedor);

    return view('ModuloProv.prov.misDatosProvPers')
        ->with('proveedores', $proveedores);
  }

  public function getMisDatosEmpresa()
  {
    $proveedor = Auth::user()->PRO_RUN;

    $proveedores = Proveedor::find($proveedor);

    return view('ModuloProv.prov.misDatos')
        ->with('proveedores', $proveedores);
  }
  public function getModificarServicio($id)
  {
    $servicios = OfertaServicio::find($id);
    $orientados = Orientacion::all();
      if (!$servicios) {
          return redirect()->route('modificarServicio', $id)->with('error', 'Servicio que intenta obtener, no existe.');
      }

      return view('ModuloProv.prov.ActOferta.OfertaServ')
          ->with('servicios', $servicios)
          ->with('orientados', $orientados);
  }

  public function patchModificarServicio(Request $request, $id)
  {
          $proveedor = Auth::user()->PRO_RUN;
          $updateServicio = OfertaServicio::findOrFail($id)->update([
            'OFSER_DIAS_LABORALES' => $request->input('dlaborales'),
            'OFSER_DESCRIPCION' => $request->input('descripcion'),
            'OFSER_HORARIOS_TRABAJO_INI' => $request->input('hora1'),
            'OFSER_HORARIOS_TRABAJO_FIN' => $request->input('hora2'),
            'OFSER_COBERTURA_SERVICIO' => $request->input('cobertura'),
            'OFSER_RAZ_COBRO' => $request->input('cobro'),
            'OFSER_VALOR' => $request->input('valor'),
            'OFSER_PRO_RUN' => $proveedor,
            'OFSER_OR_COD' => $request->input('orientado'),
      ]);

      if (!$updateServicio) {
          return redirect()->route('modificarServicio', $id)->with('error', 'Hubo un error al modificar Servicio.');
        }
          return redirect()->route('modificarServicio', $id)->with('success', 'Servicio modificado exitosamente.');
  }

  public function getModificarArticulo($id)
  {
    $articulos = OfertaArticulo::find($id);
    $orientados = Orientacion::all();
      if (!$articulos) {
          return redirect()->route('modificarArticulo', $id)->with('error', 'Articulo que intenta obtener, no existe.');
      }

      return view('ModuloProv.prov.ActOferta.OfertaArt')
          ->with('articulos', $articulos)
          ->with('orientados', $orientados);
  }

  public function patchModificarArticulo(Request $request, $id)
  {
          $proveedor = Auth::user()->PRO_RUN;
          $updateArticulo = OfertaArticulo::findOrFail($id)->update([
            'OFAR_DESC' => $request->input('descripcion'),
            'OFAR_RAZON_COBRO' => $request->input('cobro'),
            'OFAR_DIAS_ENTREGA' => $request->input('entrega'),
            'OFAR_HORARIO_ENT_INI' => $request->input('hora1'),
            'OFAR_HORARIO_ENT_FIN' => $request->input('hora2'),
            'OFAR_CAPACIDAD' => $request->input('capacidad'),
            'OFAR_VALOR' => $request->input('valor'),
            'OFAR_PRO_RUN' => $proveedor,
            'OFAR_OR_COD' => $request->input('orientado'),
      ]);

      if (!$updateArticulo) {
          return redirect()->route('modificarArticulo', $id)->with('error', 'Hubo un error al modificar Artículo');
        }
          return redirect()->route('modificarArticulo', $id)->with('success', 'Artículo modificado exitosamente.');
      }
      public function getModificarArriendo($id)
      {
        $arriendos = ArriendoMaquinaria::find($id);
        $orientados = Orientacion::all();
          if (!$arriendos) {
              return redirect()->route('modificarArriendo', $id)->with('error', 'Arriendo que intenta obtener, no existe.');
          }

          return view('ModuloProv.prov.ActOferta.OfertaArriendoMaq')
              ->with('arriendos', $arriendos)
              ->with('orientados', $orientados);
      }

      public function patchModificarArriendo(Request $request, $id)
      {
              $proveedor = Auth::user()->PRO_RUN;
              $updateArriendo = ArriendoMaquinaria::findOrFail($id)->update([
                'ARM_DESCRIPCION' => $request->input('descripcion'),
                'ARM_TP_VEHICULO' => $request->input('vehiculo'),
                'ARM_MARCA' => $request->input('marca'),
                'ARM_ANHO' => $request->input('anho'),
                'ARM_SEGUROS_ASOCIADOS' => $request->input('seguros'),
                'ARM_OPERARIO' => $request->input('chofer'),
                'ARM_LICENCIAS_CONDUCIR' => $request->input('licencia'),
                'ARM_PRO_RUN' => $proveedor,
                'ARM_OR_COD' => $request->input('orientado'),
                'ARM_CURSOS' => $request->input('cursos'),
                'ARM_DIAS_LABORALES' => $request->input('dlaborales'),
                'ARM_SEGUROS_ASOCIADOS' => $request->input('seguros'),
                'ARM_HOR_INI' => $request->input('horainicio'),
                'ARM_HOR_FIN' => $request->input('horafinal'),
                'ARM_COB_SERVICIO' => $request->input('cobertura'),
                'ARM_RAZON_COBRO' => $request->input('cobro'),
                'ARM_VALOR' => $request->input('valor'),
          ]);

          if (!$updateArriendo) {
              return redirect()->route('modificarArriendo', $id)->with('error', 'Hubo un error al modificar Arriendo');
            }
              return redirect()->route('modificarArriendo', $id)->with('success', 'Arriendo modificado exitosamente.');
          }
          public function getModificarProfesional($id)
          {
            $profesionales = ServicioProfesional::find($id);
            $orientados = Orientacion::all();
              if (!$profesionales) {
                  return redirect()->route('modificarProfesional', $id)->with('error', 'Servicio Profesional que intenta obtener, no existe.');
              }

              return view('ModuloProv.prov.ActOferta.OfertaSerTecPro')
                  ->with('profesionales', $profesionales)
                  ->with('orientados', $orientados);
          }

          public function patchModificarProfesional(Request $request, $id)
          {
                  $proveedor = Auth::user()->PRO_RUN;
                  $updateProfesional = ServicioProfesional::findOrFail($id)->update([
                    'STP_DESCRIPCION' => $request->input('descripcion'),
                    'STP_FORMACION' => $request->input('formacion'),
                    'STP_FORMACION_ESTABLECIMIENTO' => $request->input('educacion'),
                    'STP_CARRERA' => $request->input('carrera'),
                    'STP_ANHOS_EXPERIENCIA' => $request->input('experiencia'),
                    'STP_FORTALEZAS' => $request->input('fortaleza'),
                    'STP_DEBILIDADES' => $request->input('debilidades'),
                    'STP_PRO_RUN' => $proveedor,
                    'STP_DESC_EXP_LABORAL' => $request->input('exlaboral'),
                    'STP_BUSC_O_OF' => $request->input('busco'),
                    'STP_OFREZCO' => $request->input('ofrezco'),
                    'STP_CURSOS_PST_GRADOS' => $request->input('cursos'),
                    'STP_COB_SERV' => $request->input('cobertura'),
                    'STP_VALOR' => $request->input('valor'),
                    'STP_OR_COD' => $request->input('orientado'),
              ]);

              if (!$updateProfesional) {
                  return redirect()->route('modificarProfesional', $id)->with('error', 'Hubo un error al modificar Servicio Profesional');
                }
                  return redirect()->route('modificarProfesional', $id)->with('success', 'Servicio Profesional modificado exitosamente.');
              }
public function getEvaluarOfertas(Request $request)
{
  $search = $request->input('search');

  $articulos = OfertaArticulo::where('OFAR_PRO_RUN', $search)
               ->orderBy('OFAR_PRO_RUN')
               ->get();

  $servicios = OfertaServicio::where('OFSER_PRO_RUN', $search)
               ->orderBy('OFSER_PRO_RUN')
               ->get();

  $arriendos = ArriendoMaquinaria::where('ARM_PRO_RUN', $search)
              ->orderBy('ARM_PRO_RUN')
              ->get();

  $profesionales = ServicioProfesional::where('STP_PRO_RUN', $search)
              ->orderBy('STP_PRO_RUN')
              ->get();

  return view('ModuloProv.EvProveedor.ListaOfertas')
      ->with('articulos', $articulos)
      ->with('arriendos', $arriendos)
      ->with('profesionales', $profesionales)
      ->with('servicios', $servicios);
  }
  public function getEvaluarArticulo($id)
  {
    $articulos = OfertaArticulo::find($id);
      if (!$articulos) {
          return redirect()->route('EvaluarArticulo', $id)->with('error', 'Evaluación que intenta obtener, no existe.');
      }

      return view('ModuloProv.EvProveedor.articulo')
          ->with('articulos', $articulos);
  }

  public function patchEvaluarArticulo(Request $request, $id)
  {
            $evaluateArticulo = OfertaArticulo::findOrFail($id)->update([
            'OFAR_CALIFICACION' => $request->input('puntos'),
            'OFAR_COMENTARIO' => $request->input('comentario'),
      ]);

      if (!$evaluateArticulo) {
          return redirect()->route('EvaluarArticulo', $id)->with('error', 'Hubo un error al evaluar oferta');
        }
          return redirect()->route('EvaluarArticulo', $id)->with('success', 'Oferta evaluada exitosamente.');
      }

      public function getEvaluarArriendo($id)
      {
        $arriendos = ArriendoMaquinaria::find($id);
          if (!$arriendos) {
              return redirect()->route('EvaluarArriendo', $id)->with('error', 'Evaluación que intenta obtener, no existe.');
          }

          return view('ModuloProv.EvProveedor.arriendo')
              ->with('arriendos', $arriendos);
      }

      public function patchEvaluarArriendo(Request $request, $id)
      {
                $evaluateArticulo = ArriendoMaquinaria::findOrFail($id)->update([
                'ARM_CALIFICACION' => $request->input('puntos'),
                'ARM_COMENTARIO' => $request->input('comentario'),
          ]);

          if (!$evaluateArticulo) {
              return redirect()->route('EvaluarArriendo', $id)->with('error', 'Hubo un error al evaluar oferta');
            }
              return redirect()->route('EvaluarArriendo', $id)->with('success', 'Oferta evaluada exitosamente.');
          }

          public function getEvaluarProfesional($id)
          {
            $profesionales = ServicioProfesional::find($id);
              if (!$profesionales) {
                  return redirect()->route('EvaluarProfesional', $id)->with('error', 'Evaluación que intenta obtener, no existe.');
              }

              return view('ModuloProv.EvProveedor.profesional')
                  ->with('profesionales', $profesionales);
          }

          public function patchEvaluarProfesional(Request $request, $id)
          {
                    $evaluateProfesional = ServicioProfesional::findOrFail($id)->update([
                    'STP_CALIFICACION' => $request->input('puntos'),
                    'STP_COMENTARIO' => $request->input('comentario'),
              ]);

              if (!$evaluateProfesional) {
                  return redirect()->route('EvaluarProfesional', $id)->with('error', 'Hubo un error al evaluar oferta');
                }
                  return redirect()->route('EvaluarProfesional', $id)->with('success', 'Oferta evaluada exitosamente.');
              }

              public function getEvaluarServicio($id)
              {
                $servicios = OfertaServicio::find($id);
                  if (!$servicios) {
                      return redirect()->route('EvaluarServicio', $id)->with('error', 'Evaluación que intenta obtener, no existe.');
                  }

                  return view('ModuloProv.EvProveedor.servicio')
                      ->with('servicios', $servicios);
              }

              public function patchEvaluarServicio(Request $request, $id)
              {
                        $evaluateServicio = OfertaServicio::findOrFail($id)->update([
                        'OFSER_CALIFICACION' => $request->input('puntos'),
                        'OFSER_COMENTARIO' => $request->input('comentario'),
                  ]);

                  if (!$evaluateServicio) {
                      return redirect()->route('EvaluarServicio', $id)->with('error', 'Hubo un error al evaluar oferta');
                    }
                      return redirect()->route('EvaluarServicio', $id)->with('success', 'Oferta evaluada exitosamente.');
                  }
}
