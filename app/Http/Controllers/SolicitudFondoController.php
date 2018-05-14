<?php

namespace App\Http\Controllers;

use DB;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\SolicitudFondo;
use App\Banco;
use App\Proveedor;
use App\OrdenTrabajo;
use App\Estado;
use App\Personal;
use App\Causa;
use App\CuentaEmpresa;
use App\Empresa;
use App\Fuente;
use App\TipoCuenta;
use App\TipoDocumento;
use App\TipoGasto;
use App\DocumentoRendicion;

class SolicitudFondoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('Modulosolicitudfondo.index');
    }

    public function getAllOts()
    {
        $tipo_cuentas = TipoCuenta::all();
        $cuentas = CuentaEmpresa::all()->where('CTAE_EMP_ID','=',Auth::user()->PRO_EMP);
        $causas = Causa::all();
        $ordenes_trabajo = OrdenTrabajo::all()->where('OT_PER_RUT_ENCARGADO','=',Auth::user()->PRO_RUN);
        $bancos = Banco::all();
        $personales = Proveedor::all()->where('PRO_RUN','=',Auth::user()->PRO_RUN);
        $sfondos = SolicitudFondo::all();

        //dd( Auth::user());

        return view('Modulosolicitudfondo.solicitar')
            ->with('cuentas', $cuentas)
            ->with('causas', $causas)
            ->with('ordenes_trabajo', $ordenes_trabajo)
            ->with('bancos', $bancos)
            ->with('personales', $personales)
            ->with('tipo_cuentas', $tipo_cuentas)
            ->with('sfondos', $sfondos);
    }

    public function postSolicitudFondo(Request $request)
    {
        $this->validateSolicitudFondo($request);
        $createSolicitudFondo = $this->createSolicitudFondo($request->all());
        if (!$createSolicitudFondo) {
            return back()->with('error', 'Solicitud de Fondo NO fue creada');
        }

        return back()->with('success', 'Solicitud de Fondo fue creada exitosamente.');
    }

    public function validateSolicitudFondo(Request $request)
    {
        $this->validate($request, [
            'emp_tipocuenta' => 'required|',
            'emp_nrocuenta' => 'required',
            'emp_causa' => 'required',
            'emp_solicitante' => 'required',
            'rec_id' => 'required',
            'rec_banco' => 'required',
            'rec_tipocuenta' => 'required',
            'rec_nrocuenta' => 'required',
            'rec_monto' => 'required',
            'rec_descripcion' => 'required',
        ]);
    }

    public function createSolicitudFondo(array $data)
    {
        $otasociado = null;

        if ($data['emp_ot']) {
            $otasociado = OrdenTrabajo::find($data['emp_ot'])->OT_DESC;
        }
        return SolicitudFondo::create([
            'SF_ASOCIADO_A' => $otasociado,
            'SF_RECEPTOR' => $data['rec_id'],
            'SF_N_CTA_RECEPTOR' => $data['rec_nrocuenta'],
            'SF_SOLICITANTE_RUT' => $data['emp_solicitante'],
            'SF_RECEPTOR_RUT' => $data['rec_id'],
            'SF_MONTO' => $data['rec_monto'],
            'SF_FECHA' => Carbon::now(),
            'SF_DESC' => $data['rec_descripcion'],
            'SF_CAU_ID' => $data['emp_causa'],
            'SF_EMP_ID' => 1,
            'SF_BCO_ID' => $data['rec_banco'],
            'SF_TIPO_CTA_BCO' => $data['rec_tipocuenta'],
            'SF_EST' => 3,
            'SF_CTAC' => $data['emp_nrocuenta'],
            'SF_OT_ID' => $data['emp_ot'],
        ]);
    }

    public function insertIngDoc(Request $request)
    {
        $this->validarIngDocumento($request);
        $createSolicitudFondo = $this->createIngDocumento($request->all());
        if (!$createSolicitudFondo) {
            return redirect()->route('ingresardocSf', $request->input('idsol'))->with('error', 'Ingreso documento NO fue creado');
        }

        return redirect()->route('ingresardocSf', $request->input('idsol'))->with('success', 'Ingreso documento fue creado exitosamente.');
    }

    public function validarIngDocumento(Request $request)
    {
        $this->validate($request, [
            'rutProv' => 'required',
            'idsol' => 'required',
            'tipodoc' => 'required',
            'fecha' => 'required',
            'nodoc' => 'required',
            'rutRecep' => 'required',
            'tipogasto' => 'required',
            'monto' => 'required',
        ]);
    }

    public function createIngDocumento(array $data)
    {
        return DocumentoRendicion::create([
            'DOC_RUT' => $data['rutRecep'],
            'DOC_PROVEEDOR' => $data['rutProv'],
            'DOC_FECHA' => Carbon::now(),
            'DOC_N_DOC' => $data['nodoc'],
            'DOC_MONTO' => $data['monto'],
            'DOC_EMP_ID' => 1,
            'DOC_SOLICITUD_ID' => $data['idsol'],
            'DOC_TIPO_DOC' => $data['tipodoc'],
            'DOC_TIPO_GASTO' => $data['tipogasto'],
        ]);
    }

  public function getModIngresarDocSf($id)
    {
        $sfondos = SolicitudFondo::find($id);
        $tipodocs = TipoDocumento::all();
        $tipogastos = TipoGasto::all();
        $docsPorSolFon = DocumentoRendicion::where('DOC_SOLICITUD_ID', $id)->get();
        $sumita = $docsPorSolFon->map(function ($document) {
            return $document->DOC_MONTO;
        })->sum();


        if (!$sfondos) {
            return redirect()->route('verRendir')->with('error', 'Solicitud de fondo no encontrada.');
        }

        return view('Modulosolicitudfondo.ingresarDocumento')
            ->with('sfondos', $sfondos)
            ->with('tipogastos', $tipogastos)
            ->with('docsPorSolFon', $docsPorSolFon)
            ->with('sumita', $sumita)
            ->with('tipodocs', $tipodocs);
    }

    public function showEvaluar()
    {
        $id = null;
        $sfondos = SolicitudFondo::where('SF_EST', '=',3)->get();
        $empresas = Empresa::all();
        $tipo_cuentas = TipoCuenta::all();
        $cuentas = CuentaEmpresa::all();
        $fuentes = Fuente::all();
        $causas = Causa::all();
        $tipo_documentos = TipoDocumento::all();
        $solicitud = SolicitudFondo::find($id);

        return view('Modulosolicitudfondo.evaluar')
            ->with('sfondos', $sfondos)
            ->with('causas', $causas)
            ->with('tipo_cuentas', $tipo_cuentas)
            ->with('cuentas', $cuentas)
            ->with('fuentes', $fuentes)
            ->with('empresas', $empresas)
            ->with('solicitud', $solicitud)
            ->with('tipo_documentos', $tipo_documentos);
    }
    public function getModificarEvaluar($id)
    {
        $sfondos = SolicitudFondo::where('SF_EST', '3')->get();
        $empresas = Empresa::all();
        $tipo_cuentas = TipoCuenta::all();
        $cuentas = CuentaEmpresa::all();
        $fuentes = Fuente::all();
        $causas = Causa::all();
        $tipo_documentos = TipoDocumento::all();
        $solicitud = SolicitudFondo::find($id);

        if (!$solicitud) {
            return redirect()->route('get.modificar.evaluar', $id)->with('error', 'La solicitud que intenta obtener, no existe.');
        }

        return view('Modulosolicitudfondo.evaluar')
            ->with('sfondos', $sfondos)
            ->with('causas', $causas)
            ->with('tipo_cuentas', $tipo_cuentas)
            ->with('cuentas', $cuentas)
            ->with('fuentes', $fuentes)
            ->with('empresas', $empresas)
            ->with('solicitud', $solicitud)
            ->with('tipo_documentos', $tipo_documentos);
    }

    public function patchModificarEvaluar(Request $request, $id)
    {
        $cntEstado = $request->input('slcambiarestado');    

        $updateEvaluar = SolicitudFondo::findOrFail($id)->update([
            'SF_EST' => $cntEstado,
        ]);

        if (!$updateEvaluar) {
            return redirect()->route('verEvaluar')->with('error', 'Hubo un error al modificar estado de Solicitud de Fondo.');
          }

            return redirect()->route('verEvaluar')->with('success', 'Solicitud de Fondo cambiada de estado exitosamente.');
        }
    public function showTransferirSf()
    {
        $id = null;
        $sfondos = SolicitudFondo::all()->where('SF_EST','=',5);
        $empresas = Empresa::all();
        $tipo_cuentas = TipoCuenta::all();
        $cuentas = CuentaEmpresa::all();
        $fuentes = Fuente::all();
        $causas = Causa::all();
        $tipo_documentos = TipoDocumento::all();
        $solicitud = SolicitudFondo::find($id);

        return view('Modulosolicitudfondo.transferir')
            ->with('sfondos', $sfondos)
            ->with('causas', $causas)
            ->with('tipo_cuentas', $tipo_cuentas)
            ->with('cuentas', $cuentas)
            ->with('fuentes', $fuentes)
            ->with('empresas', $empresas)
            ->with('solicitud', $solicitud)
            ->with('tipo_documentos', $tipo_documentos);
    }
    public function getModificarTransferir($id)
    {
        $sfondos = SolicitudFondo::all();
        $empresas = Empresa::all();
        $tipo_cuentas = TipoCuenta::all();
        $cuentas = CuentaEmpresa::all();
        $fuentes = Fuente::all();
        $causas = Causa::all();
        $tipo_documentos = TipoDocumento::all();
        $solicitud = SolicitudFondo::find($id);

        if (!$solicitud) {
            return redirect()->route('get.modificar.transferir', $id)->with('error', 'La solicitud que intenta obtener, no existe.');
        }

        return view('Modulosolicitudfondo.transferir')
            ->with('sfondos', $sfondos)
            ->with('causas', $causas)
            ->with('tipo_cuentas', $tipo_cuentas)
            ->with('cuentas', $cuentas)
            ->with('fuentes', $fuentes)
            ->with('empresas', $empresas)
            ->with('solicitud', $solicitud)
            ->with('tipo_documentos', $tipo_documentos);
    }

    public function patchModificarTransferir(Request $request, $id)
    {
        $estado = Estado::where('EST_DESC', 'POR RENDIR')->first();

        $updateTransferir = SolicitudFondo::findOrFail($id)->update([
            'SF_EST' => $estado->EST_ID,
        ]);

        if (!$updateTransferir) {
            return redirect()->route('verTransferir')->with('error', 'Hubo un error al modificar la transferencia de Solicitud de Fondo.');
          }

        return redirect()->route('verTransferir')->with('success', 'Solicitud de Fondo modificada exitosamente.');
    }
    public function showRendirSf()
    {
        $sfondos = SolicitudFondo::all();
        $empresas = Empresa::all();
        $tipo_cuentas = TipoCuenta::all();
        $cuentas = CuentaEmpresa::all();
        $fuentes = Fuente::all();
        $causas = Causa::all();
        $tipo_documentos = TipoDocumento::all();
        return view('Modulosolicitudfondo.rendir')
            ->with('sfondos', $sfondos);
    }

    public function showConsolidarSf()
    {
        $id= null;
        $sfondos = SolicitudFondo::all();
        $empresas = Empresa::all();
        $tipo_cuentas = TipoCuenta::all();
        $cuentas = CuentaEmpresa::all();
        $fuentes = Fuente::all();
        $causas = Causa::all();
        $tipo_documentos = TipoDocumento::all();
        $documentos = DocumentoRendicion::where('DOC_SOLICITUD_ID', $id)->get();

        return view('Modulosolicitudfondo.consolidar')
            ->with('sfondos', $sfondos)
            ->with('causas', $causas)
            ->with('tipo_cuentas', $tipo_cuentas)
            ->with('cuentas', $cuentas)
            ->with('fuentes', $fuentes)
            ->with('empresas', $empresas)
            ->with('documentos', $documentos)
            ->with('tipo_documentos', $tipo_documentos);
    }

    public function getModificarConsolidar($id)
    {
        $sfondos = SolicitudFondo::all();
        $empresas = Empresa::all();
        $tipo_cuentas = TipoCuenta::all();
        $cuentas = CuentaEmpresa::all();
        $fuentes = Fuente::all();
        $causas = Causa::all();
        $tipo_documentos = TipoDocumento::all();
        $solicitud = SolicitudFondo::find($id);
        $documentos = DocumentoRendicion::where('DOC_SOLICITUD_ID', $id)->get();

        if (!$solicitud) {
            return redirect()->route('verConsolidar')->with('error', 'La solicitud que intenta obtener, no existe.');
        }

        return view('Modulosolicitudfondo.consolidar')
            ->with('documentos', $documentos)
            ->with('sfondos', $sfondos)
            ->with('causas', $causas)
            ->with('tipo_cuentas', $tipo_cuentas)
            ->with('cuentas', $cuentas)
            ->with('fuentes', $fuentes)
            ->with('empresas', $empresas)
            ->with('solicitud', $solicitud)
            ->with('tipo_documentos', $tipo_documentos);
    }

    public function patchModificarConsolidar(Request $request, $id)
    {
        $estado = Estado::where('EST_DESC', 'POR CONCILIAR')->first();

        $updateConsolidar = SolicitudFondo::findOrFail($id)->update([
            'SF_EST' => 2,
        ]);

        if (!$updateConsolidar) {
            return redirect()->route('verConsolidar')->with('error', 'Hubo un error al modificar la consolidación de Solicitud de Fondo.');
          }
            return redirect()->route('verConsolidar')->with('success', 'Solicitud de Fondo consolidada exitosamente.');
    }

    public function showPrepRendicionSf()
    {
        $sfondos = SolicitudFondo::all()->where('SF_EST','=',6);
        return view('Modulosolicitudfondo.rendicion')
            ->with('sfondos', $sfondos);

    }

    public function showEstadoSf(Request $request)
    {
        $sfondos = SolicitudFondo::all();
        if ($request->isMethod('post')) {
            $fondo_id = $request->input('idsol');
            $sfondosearch = SolicitudFondo::find($fondo_id);
            $sfondosearch = $sfondosearch->estado->EST_DESC;

            return view('Modulosolicitudfondo.estado')
                ->with('sfondos', $sfondos)
                ->with('sfondosearch', $sfondosearch);
        }
        return view('Modulosolicitudfondo.estado', compact('sfondos'));
    }

    public function showHistorico(Request $request)
    {
        $id = null;
        $desde = $request->input('fecha1');
        $hasta = $request->input('fecha2');
        $empresa = Auth::user()->PRO_EMP;
        $documentos = DocumentoRendicion::where('DOC_SOLICITUD_ID', $id)->get();

        if (!$desde == null or !$hasta==null){
        $consultas = SolicitudFondo::where('SF_EMP_ID', $empresa)
        ->whereBetween('SF_FECHA', [$desde, $hasta])
        ->paginate(15);
        $consultas->appends(request()->input())->links();

        return view('Modulosolicitudfondo.historico')
        ->with('consultas', $consultas)
        ->with('documentos', $documentos);
    }
    $consultas = SolicitudFondo::where('SF_EMP_ID', $empresa)->paginate(15);
    $consultas->appends(request()->input())->links();

    return view('Modulosolicitudfondo.historico')
    ->with('consultas', $consultas)
    ->with('documentos', $documentos);
  }
  public function verDocs(Request $request, $id)
  {
    $documentos = DocumentoRendicion::where('DOC_SOLICITUD_ID','=', $id)->get();

    return view('Modulosolicitudfondo.historico')
    ->with('documentos', $documentos);
  }

    public function putModIngDocSf(Request $request, $id)
    {
        $montoSf = $request->input('montosolfon');
        $sumaDocs = $request->input('suma');
        $diferencia = $montoSf - $sumaDocs;
        $updateIngDoc = SolicitudFondo::findOrFail($id)->update([
            'SF_MONTO_RENDIDO' => $sumaDocs,
            'SF_DIFERENCIA' => $diferencia,
            'SF_EST' => 7,
        ]);

        if (!$updateIngDoc) {
            return redirect()->route('ingresardocSf', $id)->with('error', 'Hubo un error al ingresar documentos a Solicitud de Fondo.');
        }

        return redirect()->route('ingresardocSf', $id)->with('success', 'Rendición de documentos modificada exitosamente.');
    }

    public function eliminarDocSf(Request $request, $id)
    {
        $deletedRows = DocumentoRendicion::where('DOC_ID', $id)->delete();

        if (!$deletedRows) {
            return redirect()->route('verPrepRendicion')->with('error', 'Hubo un error al eliminar documentos a Solicitud de Fondo.');
        }

        return redirect()->route('verPrepRendicion')->with('success', 'Documentos eliminados exitosamente.');
    }


    public function patchModificarEspera(Request $request, $id)
    {
        $estado = Estado::where('EST_DESC', 'PENDIENTE')->first();

        $updateEspera = SolicitudFondo::findOrFail($id)->update([
            'SF_EST' => $estado->EST_ID,
        ]);

        if (!$updateEspera) {
            return redirect()->route('verTransferir')->with('error', 'Hubo un error al modificar estado de Solicitud de Fondo.');
          }

            return redirect()->route('verTransferir')->with('success', 'Solicitud de Fondo cambiada a estado pendiente exitosamente.');
        }
}
