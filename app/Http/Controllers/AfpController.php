<?php

namespace App\Http\Controllers;

use App\Afp;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AfpController extends Controller
{

    public function getAfps()
    {
        $mn = Afp::get();

        return response()->json($mn);
    }
}
