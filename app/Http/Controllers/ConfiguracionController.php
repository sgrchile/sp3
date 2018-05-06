<?php

namespace App\Http\Controllers;

use App\Afp;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AfpController extends Controller
{

    public function admin()
    {
        $prov = Proveedor::where('PRO_ALTA', 0)->orderBy('CREATED_AT','DESC')->paginate(10);
        return view('pages.config')->with('proveedores',$prov);
    }
}
