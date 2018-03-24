<?php

namespace App\Http\Controllers;

use App\Cliente;
use App\CentroNegocio;
use App\Estado;
use App\OrdenTrabajo;
use App\Proveedor;
use App\SolicitudFondo;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

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
        $clientes = Cliente::all();
        $centro_negocios = CentroNegocio::all();
        $encargados = Proveedor::all();
        $estados = Estado::all();
        $sfondo = SolicitudFondo::where('SF_OT_ID', $id)->get();
        $sumaSF = $sfondo->map(function ($document) {
            return $document->SF_MONTO;
        })->sum();
        $margen_pesos=$ot->OT_MONTO_NETO - $sumaSF;
        $margen_porcentual=$margen_pesos/$ot->OT_MONTO_NETO;

        if (!$ot) {
            return redirect()->route('ModuloOt.listaOt')->with('error', 'Orden de Trabajo no encontrada.');
        }

        return view('ModuloOt.modificaOt')
            ->with('clientes', $clientes)
            ->with('centro_negocios', $centro_negocios)
            ->with('encargados', $encargados)
            ->with('estados', $estados)
            ->with('sumaSF', $sumaSF)
            ->with('margen_pesos', $margen_pesos)
            ->with('margen_porcentual', $margen_porcentual)
            ->with('orden_trabajo', $ot);
    }

    public function putModificarOt(Request $request, $id)
    {
        $ot = OrdenTrabajo::findOrFail($id)->update([
            'OT_OC' => $request->input('oc'),
            'OT_DESC' => $request->input('descripcion'),
            'OT_FECHA_FIN' => $request->input('fecha_fin'),
            'OT_CLI_RUT' => $request->input('id_cliente'),
            'OT_PER_RUT_ENCARGADO' => $request->input('id_encargado'),
            'OT_MONTO_NETO' => $request->input('monto_neto'),
            'OT_CENTRO_NEGOCIO_ID' => $request->input('centro_negocio'),
            'OT_EST_ID' => $request->input('id_estado'),
        ]);

        if (!$ot) {
            return redirect()->route('modificaOt', $id)->with('error', 'Hubo un error al modificar la Orden de Trabajo.');
        }

        return redirect()->route('modificaOt', $id)->with('success', 'Orden de Trabajo modificada exitosamente.');
    }
}
