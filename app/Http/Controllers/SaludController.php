<?php

namespace App\Http\Controllers;

use App\Salud;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class SaludController extends Controller
{

    public function getPrevisiones()
    {
        $mn = Salud::get();

        return response()->json($mn);
    }
}
