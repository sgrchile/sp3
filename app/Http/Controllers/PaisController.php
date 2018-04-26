<?php

namespace App\Http\Controllers;

use App\MenuModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PaisController extends Controller
{

    public function getPaises()
    {
        $mn = Pais::get();

        return response()->json($mn);
    }
}
