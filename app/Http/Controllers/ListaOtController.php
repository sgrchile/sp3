<?php

namespace App\Http\Controllers;

use App\Cliente;
use App\CentroNegocio;
use App\DocumentoPendiente;
use App\Empresa;
use App\Estado;
use App\EstadoOt;
use App\Factura;
use App\OrdenTrabajo;
use App\Proveedor;
use App\SolicitudFondo;
use App\TipoDocumento;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ListaOtController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function ListaOt()
    {
        /*$ots = OrdenTrabajo::all();*/
        $ots = OrdenTrabajo::orderBy('OT_FECHA_INI','ASC')->paginate(10);

        return view('ModuloOt.listaOt')
            ->with('ots', $ots);
    }

    public function getVerOt($id)
    {
        $ot = OrdenTrabajo::find($id);

        if (!$ot) {
            return redirect()->route('ModuloOt.listaOt')->with('error', 'Orden de Trabajo no encontrada.');
        }

        return view('ModuloOt.verOT')
            ->with('orden_trabajo', $ot);
    }

    public function getModificarOt($id)
    {
        $ot = OrdenTrabajo::find($id);
        $clientes = Cliente::all()->where('CLI_EMP','=',Auth::user()->PRO_EMP);
        $centro_negocios = CentroNegocio::all()->where('CT_EMP_ID','=',Auth::user()->PRO_EMP);
        $encargados = Proveedor::all()->where('PRO_RUN','=',Auth::user()->PRO_RUN);
        $estados = EstadoOt::all();
        $sfondo = SolicitudFondo::where('SF_OT_ID', $id)->get();
        $sumaSF = $sfondo->map(function ($document) {
            return $document->SF_MONTO;
        })->sum();
        $margen_pesos=$ot->OT_MONTO_NETO - $sumaSF;
        $emp = Empresa::all()->where('EMP_ID','=',Auth::user()->PRO_EMP)->first();
        //dd($emp);
        $margen_porcentual = $ot->OT_MARGEN_PORCENTUAL;
        $tpdoc = TipoDocumento::pluck('TDC_DESC','TDC_ID');


        if (!$ot) {
            return redirect()->route('ModuloOt.listaOt')->with('error', 'Orden de Trabajo no encontrada.');
        }

        return view('ModuloOt.modificaOt')
            ->with('clientes', $clientes)
            ->with('centro_negocios', $centro_negocios)
            ->with('encargados', $encargados)
            ->with('estados', $estados)
            ->with('tpdoc',$tpdoc)
            ->WITH('emp',$emp)
            ->with('sumaSF', $sumaSF)
            ->with('margen_pesos', $margen_pesos)
            ->with('margen_porcentual', $margen_porcentual)
            ->with('solfon',$sfondo)
            ->with('orden_trabajo', $ot);
    }

    public function putModificarOt(Request $request, $id)
    {
        //dd($request);
        $ot = OrdenTrabajo::findOrFail($id)->update([
            'OT_OC' => $request->input('oc'),
            'OT_DESC' => $request->input('descripcion'),
            'OT_FECHA_FIN' => $request->input('fecha_fin'),
            //'OT_CLI_RUT' => $request->input('id_cliente'),
            'OT_PER_RUT_ENCARGADO' => $request->input('id_encargado'),
            //'OT_MONTO_NETO' => $request->input('monto_neto'),
            //'OT_CENTRO_NEGOCIO_ID' => $request->input('centro_negocio'),
            'OT_EST_ID' => $request->input('id_estado'),
            'OT_MARGEN_PORCENTUAL' => $request->input('porcentaje'),
        ]);

        if (!$ot) {
            return redirect()->route('modificaOt', $id)->with('error', 'Hubo un error al modificar la Orden de Trabajo.');
        }

        return redirect()->route('modificaOt', $id)->with('success', 'Orden de Trabajo modificada exitosamente.');
    }
    public function ingresoDoc(Request $request)
    {
        //dd((int)$request->input('foliodoc'));
        $docOT = DocumentoPendiente::created([
            'DCP_FOLIO' => $request->input('foliodoc'),
            'DCP_GLOSA' => $request->input('glosadoc'),
            'DCP_FECHA' => $request->input('fecdoc'),
            'DCP_NETO' => (int)$request->input('netodoc'),
            'DCP_IVA' => (int)$request->input('impdoc'),
            'DCP_TOTAL' => (int)$request->input('totaldoc'),
            'EMP_EMPRESA_EMP_ID' => Auth::user()->PRO_EMP,
            'OT_ORDEN_TRABAJO_OT_ID' => (int)$request->input('otid'),
            'TDC_TIPO_DOC_TDC_ID' => (int)$request->input('tpdoc'),
            'DCP_EST' => 10,
            'DCP_PRO_RUN' => Auth::user()->PRO_RUN
        ]);
        if (!$docOT){
            return redirect()->back()->with('error', 'Hubo un error al ingresar el documento.');
        }
        return redirect()->back()->with('success', 'Documento ingresado correctamente.');
    }

    /*
     * metodo post para guarar la factura de OT
     */
    public function facturaOt(Request $request){

        //dd($request->neto);
        $facOT = new Factura();
        $facOT->FCT_FECHA = Carbon::now()->toDateString();
        $facOT->FCT_GLOSA = $request->glosa;
        $facOT->FCT_NETO = (int)$request->neto;
        $facOT->FCT_EMP_ID = (int)Auth::user()->PRO_EMP;
        $facOT->FCT_TP_ID = (int)$request->tpfac;
        $facOT->TDC_TIPO_DOC_TDC_ID = 4;
        $facOT->FCT_CLI_RUT = $request->cliente;
        $facOT->FCT_EST_ID = 1;
        $facOT->FCT_OT_ID = (int)$request->ot;
        /*$facOT = Factura::created([
            'FCT_FECHA' => Carbon::now()->toDateString(),
            'FCT_GLOSA' => $request->input('glosa'),
            'FCT_NETO' => (int)$request->input('neto'),
            'FCT_EMP_ID' => (int)Auth::user()->PRO_EMP,
            'FCT_TP_ID' => (int)$request->input('tpfac'),
            'TDC_TIPO_DOC_TDC_ID' => 4,
            'FCT_CLI_RUT' => $request->input('cliente'),
            'FCT_EST_ID' => 1,
            'FCT_OT_ID' => (int)$request->input('ot'),
        ]);*/
        //dd($facOT);
        if (!$facOT){
            return redirect()->back()->with('error', 'Hubo un error al ingresar la facturación.');
        }
        $facOT->save();
        return redirect()->back()->with('success', 'Se ha enviado la factración.');
    }
}
