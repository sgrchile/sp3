<?php

namespace App\Http\Controllers;

use App\Banco;
use App\TipoCuenta;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class BancosController extends Controller
{

    public function getBancos()
    {
        $mn = Banco::get();

        return response()->json($mn);
    }

    public function getCuentas()
    {
        $mn = TipoCuenta::get();

        return response()->json($mn);
    }
}
