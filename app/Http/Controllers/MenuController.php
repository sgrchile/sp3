<?php

namespace App\Http\Controllers;

use App\MenuModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class MenuController extends Controller
{

    public function getMenus()
    {
        $mn = MenuModel::get();

        return response()->json($mn);
    }
}
