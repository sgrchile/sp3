<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

use App\Causa;
use App\CuentaEmpresa;
use App\Empresa;
use App\Fuente;
use App\RegistroMovimiento;
use App\TipoCuenta;
use App\TipoDocumento;
use App\TipoMovimiento;

class ListaMovimientosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function ListaMovimientos()
    {
        $id = null;
        $movimientos = RegistroMovimiento::where('RMOV_TMOV_ID', $id);

        return view('ModuloCaja.historicoMovimientos', compact('movimientos'));
    }
    public function PostMovs(Request $request)
    {
      $desde = $request->input('fecha1');
      $hasta = $request->input('fecha2');
      $tipomv = $request->input('tipomov');

        if (!$desde == null or !$hasta==null){
        $movimientos = RegistroMovimiento::where('RMOV_TMOV_ID', $tipomv)
        ->whereBetween('RMOV_FECHA', [$desde, $hasta])
        ->get();

        return view('ModuloCaja.historicoMovimientos', compact('movimientos'));
    }
    $movimientos = RegistroMovimiento::where('RMOV_TMOV_ID', $tipomv)->get();

    return view('ModuloCaja.historicoMovimientos', compact('movimientos'));
  }

}
