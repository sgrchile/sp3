<?php

namespace App\Http\Controllers;

use App\ReservaSala;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ReservaSalaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservas = ReservaSala::orderby('RES_FECHA','ASC')->paginate(10);
        return view('ModuloReservaDeSala.Horario')->with('reservas',$reservas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        $reserva = new ReservaSala();
        $reserva->RES_SALA = $request->sala;
        $reserva->RES_MOTIVO = $request->motivo;
        $reserva->RES_DESC = $request->descripcion;
        $reserva->RES_FECHA = $request->fecha;
        $reserva->RES_HR_INICIO = $request->hrinicio;
        $reserva->RES_HR_FIN = $request->hrtermino;
        $reserva->ID_RESERVANTE = Auth::user()->PRO_RUN;
        $reserva->RES_EMP = Auth::user()->PRO_EMP;
        if (!$this->RevisarReserva($reserva)) {
            return back()->with('error', 'Horario de sala ya reservado');
        }
        $reserva->save();
        return back()->with('success', 'Reserva de sala creada exitosamente.');
    }

    public function validateReserva(Request $request)
    {
        $this->validate($request, [
            'sala' => 'required|',
            'motivo' => 'required',
            'descripcion' => 'required',
            'fecha' => 'required',
            'hrinicio' => 'required',
            'hrtermino' => 'required',
        ]);
    }
    public function RevisarReserva(ReservaSala $reserva)
    {
        $res = ReservaSala::all()
            ->where('RES_FECHA','=',$reserva->RES_FECHA)
            ->where('RES_SALA','=',$reserva->RES_SALA);
        $result = true;
        if ($res->count()>1){
            foreach ($res as $re){
                if ($reserva->RES_HR_INICIO < $re->RES_HR_INICIO &&
                    $reserva->RES_HR_INICIO >= $re->RES_HR_FIN &&
                    $reserva->RES_HR_FIN <= $re->RES_HR_INICIO &&
                    $reserva->RES_HR_FIN > $re->RES_HR_FIN) {
                    $result = true;
                }else{
                    $result = false;
                }
            }
            $result = false;
        }
        return $result;
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
