<?php

namespace App\Http\Controllers;

use App\ArriendoMaquinaria;
use App\OfertaArticulo;
use App\OfertaServicio;
use App\ServicioProfesional;
use Illuminate\Http\Request;

class CatalogoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ofertarts = OfertaArticulo::orderby('OFAR_DESC','asc')
            ->where('OFAR_ESTA_ID','=',1)
            ->where('OFAR_ESTP_ID','=',1)
            ->paginate(20);
        $arriendmaq = ArriendoMaquinaria::orderby('ARM_DESCRIPCION','asc')
            ->where('ARM_ESTA_ID','=',1)
            ->where('ARM_ESTP_ID','=',1)
            ->paginate(20);
        $servpro = ServicioProfesional::orderby('STP_DESCRIPCION','asc')
            ->where('STP_ESTA_ID','=',1)
            ->where('STP_ESTP_ID','=',1)
            ->paginate(20);
        $servicios = OfertaServicio::orderby('OFSER_DESCRIPCION','asc')
            ->where('OFSER_ESTA_ID','=',1)
            ->where('OFSER_ESTP_ID','=',1)
            ->paginate(20);

        return view('ModuloInventario.Catalogo')
            ->with('maquinas',$arriendmaq)
            ->with('servpro',$servpro)
            ->with('servicios',$servicios)
            ->with('ofertaarts',$ofertarts);
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
