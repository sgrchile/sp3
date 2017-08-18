<?php

namespace App\Http\Controllers;

use DB;
use App\TipoMovimiento;
use Illuminate\Http\Request;

use App\CuentaEmpresa;
use App\Causa;
use App\CartolaBancaria;


class CartolaBancariaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getIndex()
    {
        $causas = Causa::all();
        $cuentas = CuentaEmpresa::all();
        $tipomovs = TipoMovimiento::all();
        //$cartolas = CartolaBancaria::all();

        // cuenta empresa,

        return view('ModuloCaja.AgregarCartola')
            ->with('causas', $causas)
            ->with('cuentas', $cuentas)
            ->with('tipomovs', $tipomovs);
    }

    public function getAllCartolas()
    {
        $cartolas = CartolaBancaria::all();

        return view('ModuloCaja.VisualizarCartola')
            ->with('cartolas', $cartolas);
    }

    public function postRegistro(Request $request)
    {
        $this->validateRegistro($request);
        $createRegistro = $this->createRegistro($request->all());

        if (!$createRegistro) {
            return back()->with('success', false);
        }

        return back()->with('success', true);
    }

    protected function validateRegistro(Request $request)
    {
        $this->validate($request, [
            'nrocta' => 'required',
            'tipomov' => 'required',
            'fecha' => 'required',
            'causa' => 'required',
            'descrip' => 'required',
            'monto' => 'required',
        ]);
    }

    protected function createRegistro(array $data)
    {

        return CartolaBancaria::create([
            'CB_CTAEEMPRESA_CTAE_ID' => $data['nrocta'],
            'CB_TMOV_ID' => $data['tipomov'],
            'CB_FECHA' => $data['fecha'],
            'CB_CAUSA_ID' => $data['causa'],
            'CB_DESC' => $data['descrip'],
            'CB_MONTO' => $data['monto'],
            'CB_CAUSA_ID' => $data['causa'],
        ]);
    }

}
