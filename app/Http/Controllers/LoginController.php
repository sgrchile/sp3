<?php

namespace App\Http\Controllers;

use App\CategoriaEmpresa;
use App\CoberturaEmpresa;
use App\Empresa;
use App\NroEmpleados;
use App\Pagos;
use App\PersonaJuridica;
use App\PreguntasCerradas;
use App\TipoCuenta;
use App\Tp_Cuenta;
use App\VentasAnuales;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $emp = Empresa::all();
        return view('auth/login')->with('emp',$emp);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createemp()
    {
        $nro_empleados = NroEmpleados::all();
        $categoria = CategoriaEmpresa::all();
        $ventas_anuales = VentasAnuales::all();
        $cobertura = CoberturaEmpresa::all();
        $tpcuenta = TipoCuenta::all();
        $pagos = Pagos::all();
        $preguntas = PreguntasCerradas::all();
        $pers_juridica = PersonaJuridica::all();
        $emp = Empresa::all();
        return view('ModuloUsuarios.registerEmpresa')
            ->with('categoria',$categoria)
            ->with('ventas',$ventas_anuales)
            ->with('cobertura',$cobertura)
            ->with('tpcuenta',$tpcuenta)
            ->with('pagos',$pagos)
            ->with('empresa',$emp)
            ->with('preguntas',$preguntas)
            ->with('pers_juridica',$pers_juridica)
            ->with('nro_empleados',$nro_empleados);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
