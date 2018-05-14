<?php

namespace App\Http\Controllers;

use App\ActActividad;
use App\Contactos;
use Illuminate\Http\Request;

class ActividadesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $actividades = ActActividad::orderBy('ID_ACT','ASC')->paginate(5);
        //dd($actividades);
        return view('ModuloCrm.listaActividades')->with('actividades',$actividades);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ModuloCrm.regActividad');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $createActividad = $this->createActividad($request->all());
        if (!$createActividad) {
            return back()->with('error', 'Actividad NO fue creada');
        }

        return back()->with('success', 'Actividad fue creada exitosamente.');
    }
    public function createActividad(array $data)
    {

        return ActActividad::create([
            'DESC_ACT' => $data['descripcion'],
            'FECHA_ACT' => $data['fecha'],
            'HORA' => $data['hora'],
            'ID_CLIENTE_ACT' => $data['cliente'],
            'TP_ACTIVIDAD' => (int)$data['tp_act'],
        ]);
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
        //dd($id);
        $act = ActActividad::find($id);
        //dd($act);
        return view('modals.modActividad')->with('act',$act);
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
        dd($request);
        return redirect()->back()->with('status_actividad', 'Actividad Modificada!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //dd($id);
        $act = ActActividad::find($id);
        $act->delete();
        return redirect()->back()->with('status_actividad', 'Actividad Eliminada!');
    }
}
