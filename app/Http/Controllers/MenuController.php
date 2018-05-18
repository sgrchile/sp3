<?php

namespace App\Http\Controllers;

use App\MenuModel;
use App\MenuNivel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class MenuController extends Controller
{

    public function getMenus()
    {
        $mns = MenuModel::get();
        $mnmvs = MenuNivel::where('NIVEL_ID','=',Auth::user()->PRO_NIVEL)->get();
        $list = [];
        $count = 0;
        for ($i=0;$i<$mns->count();$i++){
            for($e=0;$e<$mnmvs->count();$e++){
                if ($mnmvs[$e]->MENU_ID == $mns[$i]->MENU_ID){
                    $list[$count]=$mns[$i];
                    $count++;

                }
            }
        }
        return response()->json($list);
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
