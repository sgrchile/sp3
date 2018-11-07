<?php

namespace App\Http\Controllers;


use App\AsientoContable;
use App\AsientoCuenta;
use App\BonoPersonal;
use App\CuentaContable;
use App\Remuneracion;
use DB;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Estado;
use App\SolicitudFondo;
use App\Banco;
use App\OrdenTrabajo;
use App\TipoMovimiento;
use App\Personal;
use App\Causa;
use App\CuentaEmpresa;
use App\Empresa;
use App\Fuente;
use App\RegistroMovimiento;
use App\TipoCuenta;
use App\TipoDocumento;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpKernel\EventListener\SessionListener;

class ModuloCajaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getIndex()
    {
      return view('ModuloCaja.index');
    }
    public function financiero()
    {
      $causas = Causa::all();
      $fuentes = Fuente::all();
      $empresas = Empresa::all();
      $tipo_cuentas = TipoCuenta::all();
      $tipo_documentos = TipoDocumento::all();
      $cuentas = CuentaEmpresa::all();

        //dd($empresas);

      return view('ModuloCaja.financiero')
          ->with('fuentes', $fuentes)
          ->with('causas', $causas)
          ->with('empresas', $empresas)
          ->with('tipo_cuentas', $tipo_cuentas)
          ->with('cuentas', $cuentas)
          ->with('tipo_documentos', $tipo_documentos);
    }
    public function postRegistro(Request $request)
    {
        $this->validateRegistro($request);
        $createRegistro = $this->createRegistro($request->all());

        if (!$createRegistro) {
            #return redirect()->route('moduloCaja')->with('success', false);
            return response()->json([
                'success' => false,
                'message' => 'Hubo un error al registrar el movimiento.'
            ], 400);
        }else{
            $createAsiento = $this->createAsiento($request->all());
            dd('adsd1');
            if (!$createAsiento){
                return response()->json([
                    'success' => false,
                    'message' => 'Hubo un error al registrar el asiento.'
                ], 400);
            }else{
                dd('adsd');
                return redirect()->back()->with('success', 'Registro de movimiento fue creado exitosamente.');
            }
        }
    }

    protected function validateRegistro(Request $request)
    {
        $this->validate($request, [
            'empresa' => 'required',
            'tipo_cuenta' => 'required',
            'nro_cuenta' => 'required',
            'fecha' => 'required',
            'fuente' => 'required',
            'causa' => 'required',
            'folio' => 'required',
            'descripcion' => 'required',
            'tipo_documento' => 'required',
            'nro_documento' => 'required',
            'monto' => 'required',
        ]);
    }

    protected function createRegistro(array $data)
    {
        if (!$data['_type']) {
            return null;
        }

        $type_mov = $data['_type'] == "ingreso"
            ? TipoMovimiento::find(1)
            : $type_mov = TipoMovimiento::find(2);

        $nro_cuenta = CuentaEmpresa::find($data['nro_cuenta'])->CTAE_NUMERO_CUENTA;
        $emp = Auth::user()->PRO_EMP;

        return RegistroMovimiento::create([
            'RMOV_FECHA' => $data['fecha'],
            'RMOV_MONTO' => $data['monto'],
            'RMOV_N_CTA' => $nro_cuenta,
            'RMOV_FOLIO' => $data['folio'],
            'RMOV_DESC' => $data['descripcion'],
            'RMOV_EMP_ID' => $emp,
            'RMOV_FTE_ID' => $data['fuente'],
            'RMOV_CAU_ID' => $data['causa'],
            'RMOV_CTAE' => $data['nro_cuenta'],
            'RMOV_TMOV_ID' => $type_mov->TMOV_ID,
            'RMOV_TPDOC_ID' => $data['tipo_documento'],
            'RMOV_EST_ID' => 1,
            'RMOV_NUMERO_DOCUMENTO' => $data['nro_documento'],
        ]);
    }

    protected  function createAsiento(array $data)
    {
        $type_mov = $data['_type'] == "ingreso"
            ? TipoMovimiento::find(1)
            : $type_mov = TipoMovimiento::find(2);
        $asiento = new AsientoContable();
        $asiento->COMENT_ASIENT = $data['descripcion'];
        $asiento->TP_MOVIMIENTO = $type_mov->TMOV_ID;
        $asiento->FECHA_CONT = $data['fecha'];
        $asiento->ID_USUARIO_ASIENTO = Auth::user()->PRO_RUN;
        $asiento->ID_EMP_ASIENTO = Auth::user()->PRO_EMP;
        $asiento->TOTAL_DEBE = (int)$data['monto'];
        $asiento->TOTAL_HABER = (int)$data['monto'];
        //dd($type_mov->TMOV_ID);
        $asiento->save();

        switch ((int)$data['causa']){
            case 1:
                $updateTransferir = SolicitudFondo::findOrFail((int)$data['folio'])->update([
                    'SF_EST' => 6,]);
                $asicta = new AsientoCuenta();
                //$asicta->EMP_CTA_CONT = (int)$data['empresa'];
                $asicta->ID_ASIENTO_CONT = $asiento->ID_ASIENTO_CONT;
                $cta = CuentaContable::all()
                    ->where('NOM_CTA_CONT','=','FONDOS POR RENDIR')
                    ->where('EMP_CTA_CONT','=',$data['empresa'])->first()->ID_CTA_CONT;
                //dd((int)$data['empresa']);
                $asicta->ID_CTA_CONT = $cta;
                $asicta->ASIENTO_DEBE = $data['monto'];
                $asicta->save();
                $asicta2 = new AsientoCuenta();
                $asicta2->ID_ASIENTO_CONT = $asiento->ID_ASIENTO_CONT;
                $cta_caja = CuentaContable::all()
                    ->where('NOM_CTA_CONT','=','BANCO')
                    ->where('EMP_CTA_CONT','=',$data['empresa'])->first()->ID_CTA_CONT;
                $asicta2->ID_CTA_CONT = $cta_caja;
                $asicta2->ASIENTO_HABER = (int)$data['monto'];
                $asicta2->save();
                break;
            case 2:
                $asicta = new AsientoCuenta();
                $asictav = new AsientoCuenta();
                $asictac = new AsientoCuenta();
                $asictam = new AsientoCuenta();
                $asictap = new AsientoCuenta();
                $asictasig = new AsientoCuenta();
                $asictimp = new AsientoCuenta();
                $asictapxp = new AsientoCuenta();
                $asictarxp = new AsientoCuenta();
                $asictarxp2 = new AsientoCuenta();
                $asicta->ID_ASIENTO_CONT = $asiento->ID_ASIENTO_CONT;
                $asictav->ID_ASIENTO_CONT = $asiento->ID_ASIENTO_CONT;
                $asictac->ID_ASIENTO_CONT = $asiento->ID_ASIENTO_CONT;
                $asictap->ID_ASIENTO_CONT = $asiento->ID_ASIENTO_CONT;
                $asictasig->ID_ASIENTO_CONT = $asiento->ID_ASIENTO_CONT;
                $asictimp->ID_ASIENTO_CONT = $asiento->ID_ASIENTO_CONT;
                $asictapxp->ID_ASIENTO_CONT = $asiento->ID_ASIENTO_CONT;
                $asictarxp->ID_ASIENTO_CONT = $asiento->ID_ASIENTO_CONT;
                $asictarxp2->ID_ASIENTO_CONT = $asiento->ID_ASIENTO_CONT;
                $rem = Remuneracion::all()
                    ->where('RH_REM_EMP','=',$data['empresa']);
                $simpt = 0;
                $viat = 0;
                $colt = 0;
                $movt = 0;
                $aport = 0;
                $timpo =0;
                $tliq = 0;
                $tant = 0;

                foreach ($rem as $remu){
                    $sbase = $remu->REM_SUELDO_BASE;
                    $grat = $remu->REM_GRATIFICACION_MENSUAL;
                    $sbono = $remu->REM_BONO_PRODUCCION;
                    $simp = $sbase + $grat + $sbono;
                    $viat = $viat + $remu->REM_T_HAB_N_IMP_Y_N_TRIBUT;
                    $aport = $aport + $remu->REM_T_LEYES_SOCIALES;
                    //$colt = $colt + $remu->;
                    $movt = $movt + $remu->REM_T_MOVILIZACION;
                    $bonop = BonoPersonal::all()->where('BONOS_PRO_RUN','=',$remu->REM_PRO_RUN);
                    $simpt = $simpt + $remu->REM_T_HAB_IMP_Y_TRIBUT;
                    $timpo = $timpo + $remu->REM_AFC_TRAB_0 + $remu->REM_T_FONDO_PENSION;
                    $tliq = $tliq + $remu->REM_SUELDO_LIQUIDO;
                    $tant = $tant + $remu->REM_ANTICIPO_SUELDO;
            }
                $cta1 = CuentaContable::all()
                    ->where('NOM_CTA_CONT','=','REMUNERACIONES')
                    ->where('EMP_CTA_CONT','=',$data['empresa'])->first()->ID_CTA_CONT;

                $asicta->ID_CTA_CONT = $cta1->ID_CTA_CONT;
                $asicta->ASIENTO_DEBE = $simpt;
                $asicta->save();
                $cta2 = CuentaContable::all()
                    ->where('NOM_CTA_CONT','=','BONOS  NO IMPONIBLE')
                    ->where('EMP_CTA_CONT','=',$data['empresa'])->first()->ID_CTA_CONT;
                $asictav->ID_CTA_CONT = $cta2;
                $asictav->ASIENTO_DEBE = $viat;
                $asictav->save();
                $asictapxp->ID_CTA_CONT = CuentaContable::all()
                    ->where('NOM_CTA_CONT','=','APORTE PATRONAL POR PAGAR')
                    ->where('EMP_CTA_CONT','=',$data['empresa'])->first()->ID_CTA_CONT;
                $asictapxp->ASIENTO_HABER = $aport;
                $asictapxp->save();
                $asictimp->ID_CTA_CONT = CuentaContable::all()
                    ->where('NOM_CTA_CONT','=','IMPOSICIONES POR PAGAR')
                    ->where('EMP_CTA_CONT','=',$data['empresa'])->first()->ID_CTA_CONT;
                $asictimp->ASIENTO_HABER = $timpo;
                $asictimp->save();
                $asictarxp->ID_CTA_CONT = CuentaContable::all()
                    ->where('NOM_CTA_CONT','=','REMUNERACIONES POR PAGAR')
                    ->where('EMP_CTA_CONT','=',$data['empresa'])->first()->ID_CTA_CONT;
                $asictarxp->ASIENTO_HABER = $tliq;
                $asictarxp->save();
                //asiento de pago de sueldo a banco
                $asictarxp2->ID_CTA_CONT = CuentaContable::all()
                    ->where('NOM_CTA_CONT','=','REMUNERACIONES POR PAGAR')
                    ->where('EMP_CTA_CONT','=',$data['empresa'])->first()->ID_CTA_CONT;
                $asictarxp2->ASIENTO_DEBE = $tliq;
                $asictarxp2->save();
                $asicta3 = new AsientoCuenta();
                $asicta3->ID_ASIENTO_CONT = $asiento->ID_ASIENTO_CONT;
                $asicta3->ID_CTA_CONT = CuentaContable::all()
                    ->where('NOM_CTA_CONT','=','ANTICIPO DE REMUNERACION')
                    ->where('EMP_CTA_CONT','=',$data['empresa'])->first()->ID_CTA_CONT;
                $asicta3->ASIENTO_HABER = $tant;
                $asicta3->save();
                $asicta2 = new AsientoCuenta();
                $asicta2->ID_ASIENTO_CONT = $asiento->ID_ASIENTO_CONT;
                $cta_bco = CuentaContable::all()
                    ->where('NOM_CTA_CONT','=','BANCO')
                    ->where('EMP_CTA_CONT','=',$data['empresa'])->first()->ID_CTA_CONT;
                $asicta2->ID_CTA_CONT = $cta_bco;
                $asicta2->ASIENTO_HABER = $tliq-$tant;
                $asicta2->save();
                break;
            case 3:
                $asicta = new AsientoCuenta();
                $asicta->ID_ASIENTO_CONT = $asiento->ID_ASIENTO_CONT;
                if ($data['tipo_documento'] == 5){
                    $cta = CuentaContable::all()
                        ->where('NOM_CTA_CONT','=','COMPRAS EXENTAS')
                        ->where('EMP_CTA_CONT','=',$data['empresa'])->first()->ID_CTA_CONT;
                    $asicta->ID_CTA_CONT = $cta;
                    $asicta->ASIENTO_DEBE = $data['monto'];
                    $asicta->save();
                }else{
                    $asictacf = new AsientoCuenta();
                    $asictacf->ID_ASIENTO_CONT = $asiento->ID_ASIENTO_CONT;
                    $cta = CuentaContable::all()
                        ->where('NOM_CTA_CONT','=','CREDITO FISCAL')
                        ->where('EMP_CTA_CONT','=',$data['empresa'])->first()->ID_CTA_CONT;
                    $asictacf->ID_CTA_CONT = $cta;
                    $imp = $data['monto']*(0.19);
                    $asictacf->ASIENTO_DEBE = $imp;
                    $cta2 = CuentaContable::all()
                        ->where('NOM_CTA_CONT','=','COMPRAS AFECTAS')
                        ->where('EMP_CTA_CONT','=',$data['empresa'])->first()->ID_CTA_CONT;
                    $asicta->ID_CTA_CONT = $cta2;
                    $asicta->ASIENTO_DEBE = $data['monto']-$imp;
                    $asicta->save();
                    $asictacf->save();
                }
                $asicta2 = new AsientoCuenta();
                $asicta2->ID_ASIENTO_CONT = $asiento->ID_ASIENTO_CONT;
                $cta_caja = CuentaContable::all()
                    ->where('NOM_CTA_CONT','=','FONDOS POR RENDIR')
                    ->where('EMP_CTA_CONT','=',$data['empresa'])->first()->ID_CTA_CONT;
                $asicta2->ID_CTA_CONT = $cta_caja;
                $asicta2->ASIENTO_HABER = $data['monto'];
                $asicta2->save();
                break;
            case 4:
                if ($type_mov->TMOV_ID == 1){
                    //DEBE
                    $asicta2 = new AsientoCuenta();
                    $asicta2->ID_ASIENTO_CONT = $asiento->ID_ASIENTO_CONT;
                    $cta_caja = CuentaContable::all()
                        ->where('NOM_CTA_CONT','=','CAJA')
                        ->where('EMP_CTA_CONT','=',$data['empresa'])->first()->ID_CTA_CONT;
                    $asicta2->ID_CTA_CONT = $cta_caja;
                    $asicta2->ASIENTO_DEBE = $data['monto'];
                    $asicta2->save();
                    //HABER
                    $asicta = new AsientoCuenta();
                    $asicta->ID_ASIENTO_CONT = $asiento->ID_ASIENTO_CONT;
                    $cta = CuentaContable::all()
                        ->where('NOM_CTA_CONT','=','RETIROS')
                        ->where('EMP_CTA_CONT','=',$data['empresa'])->first()->ID_CTA_CONT;
                    $asicta->ID_CTA_CONT = $cta;
                    $asicta->ASIENTO_HABER = $data['monto'];
                    $asicta->save();
                }else{
                    $asicta = new AsientoCuenta();
                    $asicta->ID_ASIENTO_CONT = $asiento->ID_ASIENTO_CONT;
                    $cta = CuentaContable::all()
                        ->where('NOM_CTA_CONT','=','RETIROS')
                        ->where('EMP_CTA_CONT','=',$data['empresa'])->first()->ID_CTA_CONT;
                    $asicta->ID_CTA_CONT = $cta;
                    $asicta->ASIENTO_DEBE = $data['monto'];
                    $asicta->save();
                    $asicta2 = new AsientoCuenta();
                    $asicta2->ID_ASIENTO_CONT = $asiento->ID_ASIENTO_CONT;
                    $cta_caja = CuentaContable::all()
                        ->where('NOM_CTA_CONT','=','CAJA')
                        ->where('EMP_CTA_CONT','=',$data['empresa'])->first()->ID_CTA_CONT;
                    $asicta2->ID_CTA_CONT = $cta_caja;
                    $asicta2->ASIENTO_HABER = $data['monto'];
                    $asicta2->save();
                }

                break;
            case 5:
                if ($type_mov->TMOV_ID == 1){
                    //DEBE
                    $asicta2 = new AsientoCuenta();
                    $asicta2->ID_ASIENTO_CONT = $asiento->ID_ASIENTO_CONT;
                    $cta_caja = CuentaContable::all()
                        ->where('NOM_CTA_CONT','=','BANCO')
                        ->where('EMP_CTA_CONT','=',$data['empresa'])->first()->ID_CTA_CONT;
                    $asicta2->ID_CTA_CONT = $cta_caja;
                    $asicta2->ASIENTO_DEBE = $data['monto'];
                    $asicta2->save();
                    //HABER
                    $asicta = new AsientoCuenta();
                    $asicta->ID_ASIENTO_CONT = $asiento->ID_ASIENTO_CONT;
                    $cta = CuentaContable::all()
                        ->where('NOM_CTA_CONT','=','IMPOSICIONES POR PAGAR')
                        ->where('EMP_CTA_CONT','=',$data['empresa'])->first()->ID_CTA_CONT;
                    $asicta->ID_CTA_CONT = $cta;
                    $asicta->ASIENTO_HABER = $data['monto'];
                    $asicta->save();
                }else{
                    $asicta = new AsientoCuenta();
                    $asicta->ID_ASIENTO_CONT = $asiento->ID_ASIENTO_CONT;
                    $cta = CuentaContable::all()
                        ->where('NOM_CTA_CONT','=','IMPOCISIONES POR PAGAR')
                        ->where('EMP_CTA_CONT','=',$data['empresa'])->first()->ID_CTA_CONT;
                    $asicta->ID_CTA_CONT = $cta;
                    $asicta->ASIENTO_DEBE = $data['monto'];
                    $asicta->save();
                    $asicta2 = new AsientoCuenta();
                    $asicta2->ID_ASIENTO_CONT = $asiento->ID_ASIENTO_CONT;
                    $cta_caja = CuentaContable::all()
                        ->where('NOM_CTA_CONT','=','BANCO')
                        ->where('EMP_CTA_CONT','=',$data['empresa'])->first()->ID_CTA_CONT;
                    $asicta2->ID_CTA_CONT = $cta_caja;
                    $asicta2->ASIENTO_HABER = $data['monto'];
                    $asicta2->save();
                }

                break;
            case 6:
                if ($type_mov->TMOV_ID == 1){
                    //DEBE
                    $asicta2 = new AsientoCuenta();
                    $asicta2->ID_ASIENTO_CONT = $asiento->ID_ASIENTO_CONT;
                    $cta_caja = CuentaContable::all()
                        ->where('NOM_CTA_CONT','=','CAJA')
                        ->where('EMP_CTA_CONT','=',$data['empresa'])->first()->ID_CTA_CONT;
                    $asicta2->ID_CTA_CONT = $cta_caja;
                    $asicta2->ASIENTO_DEBE = $data['monto'];
                    $asicta2->save();
                    //HABER
                    $asicta = new AsientoCuenta();
                    $asicta->ID_ASIENTO_CONT = $asiento->ID_ASIENTO_CONT;
                    $cta = CuentaContable::all()
                        ->where('NOM_CTA_CONT','=','PRESTAMOS POR PAGAR')
                        ->where('EMP_CTA_CONT','=',$data['empresa'])->first()->ID_CTA_CONT;
                    $asicta->ID_CTA_CONT = $cta;
                    $asicta->ASIENTO_HABER = $data['monto'];
                    $asicta->save();
                }else{
                    $asicta = new AsientoCuenta();
                    $asicta->ID_ASIENTO_CONT = $asiento->ID_ASIENTO_CONT;
                    $cta = CuentaContable::all()
                        ->where('NOM_CTA_CONT','=','PRESTAMOS POR PAGAR')
                        ->where('EMP_CTA_CONT','=',$data['empresa'])->first()->ID_CTA_CONT;
                    $asicta->ID_CTA_CONT = $cta;
                    $asicta->ASIENTO_DEBE = $data['monto'];
                    $asicta->save();
                    $asicta2 = new AsientoCuenta();
                    $asicta2->ID_ASIENTO_CONT = $asiento->ID_ASIENTO_CONT;
                    $cta_caja = CuentaContable::all()
                        ->where('NOM_CTA_CONT','=','CAJA')
                        ->where('EMP_CTA_CONT','=',$data['empresa'])->first()->ID_CTA_CONT;
                    $asicta2->ID_CTA_CONT = $cta_caja;
                    $asicta2->ASIENTO_HABER = $data['monto'];
                    $asicta2->save();
                }
                break;
            case 7:
                if ($type_mov->TMOV_ID == 1){
                    //DEBE
                    $asicta2 = new AsientoCuenta();
                    $asicta2->ID_ASIENTO_CONT = $asiento->ID_ASIENTO_CONT;
                    $cta_caja = CuentaContable::all()
                        ->where('NOM_CTA_CONT','=','CAJA')
                        ->where('EMP_CTA_CONT','=',$data['empresa'])->first()->ID_CTA_CONT;
                    $asicta2->ID_CTA_CONT = $cta_caja;
                    $asicta2->ASIENTO_DEBE = $data['monto'];
                    $asicta2->save();
                    //HABER
                    $asicta = new AsientoCuenta();
                    $asicta->ID_ASIENTO_CONT = $asiento->ID_ASIENTO_CONT;
                    $cta = CuentaContable::all()
                        ->where('NOM_CTA_CONT','=','GASTOS GENERALES')
                        ->where('EMP_CTA_CONT','=',$data['empresa'])->first()->ID_CTA_CONT;
                    $asicta->ID_CTA_CONT = $cta;
                    $asicta->ASIENTO_HABER = $data['monto'];
                    $asicta->save();
                }else{
                    $asicta = new AsientoCuenta();
                    $asicta->ID_ASIENTO_CONT = $asiento->ID_ASIENTO_CONT;
                    $cta = CuentaContable::all()
                        ->where('NOM_CTA_CONT','=','GASTOS GENERALES')
                        ->where('EMP_CTA_CONT','=',$data['empresa'])->first()->ID_CTA_CONT;
                    $asicta->ID_CTA_CONT = $cta;
                    $asicta->ASIENTO_DEBE = $data['monto'];
                    $asicta->save();
                    $asicta2 = new AsientoCuenta();
                    $asicta2->ID_ASIENTO_CONT = $asiento->ID_ASIENTO_CONT;
                    $cta_caja = CuentaContable::all()
                        ->where('NOM_CTA_CONT','=','CAJA')
                        ->where('EMP_CTA_CONT','=',$data['empresa'])->first()->ID_CTA_CONT;
                    $asicta2->ID_CTA_CONT = $cta_caja;
                    $asicta2->ASIENTO_HABER = $data['monto'];
                    $asicta2->save();
                }
                break;
            case 8:
                if ($type_mov->TMOV_ID == 1){
                    //DEBE
                    $asicta2 = new AsientoCuenta();
                    $asicta2->ID_ASIENTO_CONT = $asiento->ID_ASIENTO_CONT;
                    $cta_caja = CuentaContable::all()
                        ->where('NOM_CTA_CONT','=','CAJA')
                        ->where('EMP_CTA_CONT','=',$data['empresa'])->first()->ID_CTA_CONT;
                    $asicta2->ID_CTA_CONT = $cta_caja;
                    $asicta2->ASIENTO_DEBE = $data['monto'];
                    $asicta2->save();
                    //HABER
                    $asicta = new AsientoCuenta();
                    $asicta->ID_ASIENTO_CONT = $asiento->ID_ASIENTO_CONT;
                    $cta = CuentaContable::all()
                        ->where('NOM_CTA_CONT','=','INVENTARIO')
                        ->where('EMP_CTA_CONT','=',$data['empresa'])->first()->ID_CTA_CONT;
                    $asicta->ID_CTA_CONT = $cta;
                    $asicta->ASIENTO_HABER = $data['monto'];
                    $asicta->save();
                }else{
                    $asicta = new AsientoCuenta();
                    $asicta->ID_ASIENTO_CONT = $asiento->ID_ASIENTO_CONT;
                    $cta = CuentaContable::all()
                        ->where('NOM_CTA_CONT','=','INVENTARIO')
                        ->where('EMP_CTA_CONT','=',$data['empresa'])->first()->ID_CTA_CONT;
                    $asicta->ID_CTA_CONT = $cta;
                    $asicta->ASIENTO_DEBE = $data['monto'];
                    $asicta->save();
                    $asicta2 = new AsientoCuenta();
                    $asicta2->ID_ASIENTO_CONT = $asiento->ID_ASIENTO_CONT;
                    $cta_caja = CuentaContable::all()
                        ->where('NOM_CTA_CONT','=','CAJA')
                        ->where('EMP_CTA_CONT','=',$data['empresa'])->first()->ID_CTA_CONT;
                    $asicta2->ID_CTA_CONT = $cta_caja;
                    $asicta2->ASIENTO_HABER = $data['monto'];
                    $asicta2->save();
                }
                break;
            case 9:
                if ($type_mov->TMOV_ID == 1){
                    //DEBE
                    $asicta2 = new AsientoCuenta();
                    $asicta2->ID_ASIENTO_CONT = $asiento->ID_ASIENTO_CONT;
                    $cta_caja = CuentaContable::all()
                        ->where('NOM_CTA_CONT','=','BANCO')
                        ->where('EMP_CTA_CONT','=',$data['empresa'])->first()->ID_CTA_CONT;
                    $asicta2->ID_CTA_CONT = $cta_caja;
                    $asicta2->ASIENTO_DEBE = $data['monto'];
                    $asicta2->save();
                    //HABER
                    $asicta = new AsientoCuenta();
                    $asicta->ID_ASIENTO_CONT = $asiento->ID_ASIENTO_CONT;
                    $cta = CuentaContable::all()
                        ->where('NOM_CTA_CONT','=','CAPITAL')
                        ->where('EMP_CTA_CONT','=',$data['empresa'])->first()->ID_CTA_CONT;
                    $asicta->ID_CTA_CONT = $cta;
                    $asicta->ASIENTO_HABER = $data['monto'];
                    $asicta->save();
                }else{
                    $asicta = new AsientoCuenta();
                    $asicta->ID_ASIENTO_CONT = $asiento->ID_ASIENTO_CONT;
                    $cta = CuentaContable::all()
                        ->where('NOM_CTA_CONT','=','CAPITAL')
                        ->where('EMP_CTA_CONT','=',$data['empresa'])->first()->ID_CTA_CONT;
                    $asicta->ID_CTA_CONT = $cta;
                    $asicta->ASIENTO_DEBE = $data['monto'];
                    $asicta->save();
                    $asicta2 = new AsientoCuenta();
                    $asicta2->ID_ASIENTO_CONT = $asiento->ID_ASIENTO_CONT;
                    $cta_caja = CuentaContable::all()
                        ->where('NOM_CTA_CONT','=','BANCO')
                        ->where('EMP_CTA_CONT','=',$data['empresa'])->first()->ID_CTA_CONT;
                    $asicta2->ID_CTA_CONT = $cta_caja;
                    $asicta2->ASIENTO_HABER = $data['monto'];
                    $asicta2->save();
                }
                break;
        }
    }
}
