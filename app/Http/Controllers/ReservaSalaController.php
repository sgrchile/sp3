<?php

namespace App\Http\Controllers;

use App\Horarios;
use App\MotivoReserva;
use App\ReservaSala;
use App\Sala;
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
        $reservas = Horarios::orderby('RS_FECHA','ASC')->paginate(30);
        return view('ModuloReservaDeSala.Horario')->with('reservas',$reservas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //dd($request);
        $fecha = $request->fecha;
        $salas = $request->sala;
        $motivos = MotivoReserva::all();
        $horarios = Horarios::all()
            ->where('RS_FECHA','=',$fecha)
            ->where('RS_MODULO','=',$salas)
            ->where('RS_DISPONIBLE','=',1);
        return view('ModuloReservaDeSala.Reserva')
            ->with('motivos',$motivos)
            ->with('horarios',$horarios);
    }

    public function reserva($id){
        //dd($id);
        $motivos = MotivoReserva::all();
        $horario = Horarios::find($id);
        return view('ModuloReservaDeSala.Reservar')
            ->with('motivos',$motivos)
            ->with('horario',$horario);
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
        $reserva->RES_ID_HORARIO = $request->sala;
        $reserva->RES_MOTIVO = $request->motivo;
        $reserva->RES_DESC = $request->descripcion;
        $reserva->RES_NOMBRE = $request->nombre;
        $reserva->RES_APELLIDO = $request->apellido;
        $reserva->RES_NRO_TEL = $request->telefono;
        $reserva->RES_EMAIL = $request->email;
        $reserva->ID_RESERVANTE = Auth::user()->PRO_RUN;
        $reserva->RES_EMP = Auth::user()->PRO_EMP;
        $reserva->save();
        $horario = Horarios::find($request->sala);
        $horario->RS_DISPONIBLE = 2;
        $horario->save();
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
