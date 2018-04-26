<?php

namespace App\Http\Controllers;

use App\Banco;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class BancosController extends Controller
{

    public function getBancos()
    {
        $mn = Banco::get();

        return response()->json($mn);
    }
}
