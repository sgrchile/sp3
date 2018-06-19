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
    public function destroy($id){
        $afp = Afp::find($id);
        $afp->delete();
        return redirect()->back()->with('success','Afp eliminada');
    }
    public function store(Request $request){
        $afp = new Afp();
        $afp->AFP_NOMBRE = $request->nombre;
        $afp->AFP_TASA = $request->tasadep;
        $afp->AFP_SIS = $request->sis;
        $afp->AFP_TASA_INDEPENDIENTE = $request->tasaind;
        $afp->save();
    }
}
