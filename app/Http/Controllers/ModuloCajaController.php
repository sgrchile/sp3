<?php

namespace App\Http\Controllers;


use App\AsientoContable;
use App\AsientoCuenta;
use App\CuentaContable;
use DB;
use Carbon\Carbon;
use Illuminate\Http\Request;

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
                'message' => 'Hubo un error al registrar el registro de movimiento.'
            ], 400);
        }

      return redirect()->route('Finanzas')->with('success', 'Registro de movimiento fue creado exitosamente.');
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

        return RegistroMovimiento::create([
            'RMOV_FECHA' => $data['fecha'],
            'RMOV_MONTO' => $data['monto'],
            'RMOV_N_CTA' => $nro_cuenta,
            'RMOV_FOLIO' => $data['folio'],
            'RMOV_DESC' => $data['descripcion'],
            'RMOV_EMP_ID' => $data['empresa'],
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
        $asiento->TP_MOVIMIENTO = $data['_type'];
        $asiento->FECHA_CONT = $data['fecha'];
        $asiento->ID_USUARIO_ASIENTO = Auth::user()->PRO_RUN;
        $asiento->ID_EMP_ASIENTO = $data['empresa'];
        $asiento->TOTAL_DEBE = $data['monto'];
        $asiento->TOTAL_HABER = $data['monto'];
        $asiento->save();
        switch ($data['causa']){
            case 1:
                $asicta = new AsientoCuenta();
                $asicta->EMP_CTA_CONT = $data['empresa'];
                $asicta->ID_ASIENTO_CONT = $asiento->ID_ASIENTO_CONT;
                $cta = CuentaContable::all()
                    ->where('NOM_CTA_CONT','=','FONDOS POR RENDIR')
                    ->where('EMP_CTA_CONT','=',$data['empresa'])->ID_CTA_CONT;
                $asicta->ID_CTA_CONT = $cta;
                $asicta->ASIENTO_DEBE = $data['monto'];
                $asicta->save();
                $asicta2 = new AsientoCuenta();
                $asicta2->ID_ASIENTO_CONT = $asiento->ID_ASIENTO_CONT;
                $cta_caja = CuentaContable::all()
                    ->where('NOM_CTA_CONT','=','CAJA')
                    ->where('EMP_CTA_CONT','=',$data['empresa'])->ID_CTA_CONT;
                $asicta2->ID_CTA_CONT = $cta_caja;
                $asicta2->ASIENTO_HABER = $data['monto'];
                $asicta2->save();
                break;
            case 2:
                $asicta = new AsientoCuenta();
                $asicta->ID_ASIENTO_CONT = $asiento->ID_ASIENTO_CONT;
                $cta = CuentaContable::all()
                    ->where('NOM_CTA_CONT','=','REMUNERACIONES POR PAGAR')
                    ->where('EMP_CTA_CONT','=',$data['empresa'])->ID_CTA_CONT;
                $asicta->ID_CTA_CONT = $cta;
                $asicta->ASIENTO_HABER = $data['monto'];
                $asicta->save();
                $asicta2 = new AsientoCuenta();
                $asicta2->ID_ASIENTO_CONT = $asiento->ID_ASIENTO_CONT;
                $cta_caja = CuentaContable::all()
                    ->where('NOM_CTA_CONT','=','CAJA')
                    ->where('EMP_CTA_CONT','=',$data['empresa'])->ID_CTA_CONT;
                $asicta2->ID_CTA_CONT = $cta_caja;
                $asicta2->ASIENTO_DEBE = $data['monto'];
                $asicta2->ASIENTO_HABER = $data['monto'];
                $asicta2->save();
                break;
            case 3:
                $asicta = new AsientoCuenta();
                $asicta->ID_ASIENTO_CONT = $asiento->ID_ASIENTO_CONT;
                $cta = CuentaContable::all()
                    ->where('NOM_CTA_CONT','=','PROVEEDORES')
                    ->where('EMP_CTA_CONT','=',$data['empresa'])->ID_CTA_CONT;
                $asicta->ID_CTA_CONT = $cta;
                $asicta->ASIENTO_DEBE = $data['monto'];
                $asicta->ASIENTO_HABER = $data['monto'];
                $asicta->save();
                $asicta2 = new AsientoCuenta();
                $asicta2->ID_ASIENTO_CONT = $asiento->ID_ASIENTO_CONT;
                $cta_caja = CuentaContable::all()
                    ->where('NOM_CTA_CONT','=','CAJA')
                    ->where('EMP_CTA_CONT','=',$data['empresa'])->ID_CTA_CONT;
                $asicta2->ID_CTA_CONT = $cta_caja;
                $asicta2->ASIENTO_DEBE = $data['monto'];
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
                        ->where('EMP_CTA_CONT','=',$data['empresa'])->ID_CTA_CONT;
                    $asicta2->ID_CTA_CONT = $cta_caja;
                    $asicta2->ASIENTO_DEBE = $data['monto'];
                    $asicta2->save();
                    //HABER
                    $asicta = new AsientoCuenta();
                    $asicta->ID_ASIENTO_CONT = $asiento->ID_ASIENTO_CONT;
                    $cta = CuentaContable::all()
                        ->where('NOM_CTA_CONT','=','RETIROS')
                        ->where('EMP_CTA_CONT','=',$data['empresa'])->ID_CTA_CONT;
                    $asicta->ID_CTA_CONT = $cta;
                    $asicta->ASIENTO_HABER = $data['monto'];
                    $asicta->save();
                }else{
                    $asicta = new AsientoCuenta();
                    $asicta->ID_ASIENTO_CONT = $asiento->ID_ASIENTO_CONT;
                    $cta = CuentaContable::all()
                        ->where('NOM_CTA_CONT','=','RETIROS')
                        ->where('EMP_CTA_CONT','=',$data['empresa'])->ID_CTA_CONT;
                    $asicta->ID_CTA_CONT = $cta;
                    $asicta->ASIENTO_DEBE = $data['monto'];
                    $asicta->save();
                    $asicta2 = new AsientoCuenta();
                    $asicta2->ID_ASIENTO_CONT = $asiento->ID_ASIENTO_CONT;
                    $cta_caja = CuentaContable::all()
                        ->where('NOM_CTA_CONT','=','CAJA')
                        ->where('EMP_CTA_CONT','=',$data['empresa'])->ID_CTA_CONT;
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
                        ->where('NOM_CTA_CONT','=','CAJA')
                        ->where('EMP_CTA_CONT','=',$data['empresa'])->ID_CTA_CONT;
                    $asicta2->ID_CTA_CONT = $cta_caja;
                    $asicta2->ASIENTO_DEBE = $data['monto'];
                    $asicta2->save();
                    //HABER
                    $asicta = new AsientoCuenta();
                    $asicta->ID_ASIENTO_CONT = $asiento->ID_ASIENTO_CONT;
                    $cta = CuentaContable::all()
                        ->where('NOM_CTA_CONT','=','IMPOSICIONES POR PAGAR')
                        ->where('EMP_CTA_CONT','=',$data['empresa'])->ID_CTA_CONT;
                    $asicta->ID_CTA_CONT = $cta;
                    $asicta->ASIENTO_HABER = $data['monto'];
                    $asicta->save();
                }else{
                    $asicta = new AsientoCuenta();
                    $asicta->ID_ASIENTO_CONT = $asiento->ID_ASIENTO_CONT;
                    $cta = CuentaContable::all()
                        ->where('NOM_CTA_CONT','=','IMPOCISIONES POR PAGAR')
                        ->where('EMP_CTA_CONT','=',$data['empresa'])->ID_CTA_CONT;
                    $asicta->ID_CTA_CONT = $cta;
                    $asicta->ASIENTO_DEBE = $data['monto'];
                    $asicta->save();
                    $asicta2 = new AsientoCuenta();
                    $asicta2->ID_ASIENTO_CONT = $asiento->ID_ASIENTO_CONT;
                    $cta_caja = CuentaContable::all()
                        ->where('NOM_CTA_CONT','=','CAJA')
                        ->where('EMP_CTA_CONT','=',$data['empresa'])->ID_CTA_CONT;
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
                        ->where('EMP_CTA_CONT','=',$data['empresa'])->ID_CTA_CONT;
                    $asicta2->ID_CTA_CONT = $cta_caja;
                    $asicta2->ASIENTO_DEBE = $data['monto'];
                    $asicta2->save();
                    //HABER
                    $asicta = new AsientoCuenta();
                    $asicta->ID_ASIENTO_CONT = $asiento->ID_ASIENTO_CONT;
                    $cta = CuentaContable::all()
                        ->where('NOM_CTA_CONT','=','PRESTAMOS POR PAGAR')
                        ->where('EMP_CTA_CONT','=',$data['empresa'])->ID_CTA_CONT;
                    $asicta->ID_CTA_CONT = $cta;
                    $asicta->ASIENTO_HABER = $data['monto'];
                    $asicta->save();
                }else{
                    $asicta = new AsientoCuenta();
                    $asicta->ID_ASIENTO_CONT = $asiento->ID_ASIENTO_CONT;
                    $cta = CuentaContable::all()
                        ->where('NOM_CTA_CONT','=','PRESTAMOS POR PAGAR')
                        ->where('EMP_CTA_CONT','=',$data['empresa'])->ID_CTA_CONT;
                    $asicta->ID_CTA_CONT = $cta;
                    $asicta->ASIENTO_DEBE = $data['monto'];
                    $asicta->save();
                    $asicta2 = new AsientoCuenta();
                    $asicta2->ID_ASIENTO_CONT = $asiento->ID_ASIENTO_CONT;
                    $cta_caja = CuentaContable::all()
                        ->where('NOM_CTA_CONT','=','CAJA')
                        ->where('EMP_CTA_CONT','=',$data['empresa'])->ID_CTA_CONT;
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
                        ->where('EMP_CTA_CONT','=',$data['empresa'])->ID_CTA_CONT;
                    $asicta2->ID_CTA_CONT = $cta_caja;
                    $asicta2->ASIENTO_DEBE = $data['monto'];
                    $asicta2->save();
                    //HABER
                    $asicta = new AsientoCuenta();
                    $asicta->ID_ASIENTO_CONT = $asiento->ID_ASIENTO_CONT;
                    $cta = CuentaContable::all()
                        ->where('NOM_CTA_CONT','=','COMPRAS')
                        ->where('EMP_CTA_CONT','=',$data['empresa'])->ID_CTA_CONT;
                    $asicta->ID_CTA_CONT = $cta;
                    $asicta->ASIENTO_HABER = $data['monto'];
                    $asicta->save();
                }else{
                    $asicta = new AsientoCuenta();
                    $asicta->ID_ASIENTO_CONT = $asiento->ID_ASIENTO_CONT;
                    $cta = CuentaContable::all()
                        ->where('NOM_CTA_CONT','=','COMPRAS')
                        ->where('EMP_CTA_CONT','=',$data['empresa'])->ID_CTA_CONT;
                    $asicta->ID_CTA_CONT = $cta;
                    $asicta->ASIENTO_DEBE = $data['monto'];
                    $asicta->save();
                    $asicta2 = new AsientoCuenta();
                    $asicta2->ID_ASIENTO_CONT = $asiento->ID_ASIENTO_CONT;
                    $cta_caja = CuentaContable::all()
                        ->where('NOM_CTA_CONT','=','CAJA')
                        ->where('EMP_CTA_CONT','=',$data['empresa'])->ID_CTA_CONT;
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
                        ->where('EMP_CTA_CONT','=',$data['empresa'])->ID_CTA_CONT;
                    $asicta2->ID_CTA_CONT = $cta_caja;
                    $asicta2->ASIENTO_DEBE = $data['monto'];
                    $asicta2->save();
                    //HABER
                    $asicta = new AsientoCuenta();
                    $asicta->ID_ASIENTO_CONT = $asiento->ID_ASIENTO_CONT;
                    $cta = CuentaContable::all()
                        ->where('NOM_CTA_CONT','=','INVENTARIO')
                        ->where('EMP_CTA_CONT','=',$data['empresa'])->ID_CTA_CONT;
                    $asicta->ID_CTA_CONT = $cta;
                    $asicta->ASIENTO_HABER = $data['monto'];
                    $asicta->save();
                }else{
                    $asicta = new AsientoCuenta();
                    $asicta->ID_ASIENTO_CONT = $asiento->ID_ASIENTO_CONT;
                    $cta = CuentaContable::all()
                        ->where('NOM_CTA_CONT','=','INVENTARIO')
                        ->where('EMP_CTA_CONT','=',$data['empresa'])->ID_CTA_CONT;
                    $asicta->ID_CTA_CONT = $cta;
                    $asicta->ASIENTO_DEBE = $data['monto'];
                    $asicta->save();
                    $asicta2 = new AsientoCuenta();
                    $asicta2->ID_ASIENTO_CONT = $asiento->ID_ASIENTO_CONT;
                    $cta_caja = CuentaContable::all()
                        ->where('NOM_CTA_CONT','=','CAJA')
                        ->where('EMP_CTA_CONT','=',$data['empresa'])->ID_CTA_CONT;
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
                        ->where('NOM_CTA_CONT','=','CAJA')
                        ->where('EMP_CTA_CONT','=',$data['empresa'])->ID_CTA_CONT;
                    $asicta2->ID_CTA_CONT = $cta_caja;
                    $asicta2->ASIENTO_DEBE = $data['monto'];
                    $asicta2->save();
                    //HABER
                    $asicta = new AsientoCuenta();
                    $asicta->ID_ASIENTO_CONT = $asiento->ID_ASIENTO_CONT;
                    $cta = CuentaContable::all()
                        ->where('NOM_CTA_CONT','=','CAPITAL')
                        ->where('EMP_CTA_CONT','=',$data['empresa'])->ID_CTA_CONT;
                    $asicta->ID_CTA_CONT = $cta;
                    $asicta->ASIENTO_HABER = $data['monto'];
                    $asicta->save();
                }else{
                    $asicta = new AsientoCuenta();
                    $asicta->ID_ASIENTO_CONT = $asiento->ID_ASIENTO_CONT;
                    $cta = CuentaContable::all()
                        ->where('NOM_CTA_CONT','=','CAPITAL')
                        ->where('EMP_CTA_CONT','=',$data['empresa'])->ID_CTA_CONT;
                    $asicta->ID_CTA_CONT = $cta;
                    $asicta->ASIENTO_DEBE = $data['monto'];
                    $asicta->save();
                    $asicta2 = new AsientoCuenta();
                    $asicta2->ID_ASIENTO_CONT = $asiento->ID_ASIENTO_CONT;
                    $cta_caja = CuentaContable::all()
                        ->where('NOM_CTA_CONT','=','CAJA')
                        ->where('EMP_CTA_CONT','=',$data['empresa'])->ID_CTA_CONT;
                    $asicta2->ID_CTA_CONT = $cta_caja;
                    $asicta2->ASIENTO_HABER = $data['monto'];
                    $asicta2->save();
                }
                break;
        }
    }
}
