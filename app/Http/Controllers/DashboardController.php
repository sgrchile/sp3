<?php

namespace App\Http\Controllers;
use App\SolicitudFondo;
use App\OrdenTrabajo;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }

  public function index()
  {
      $sol_fondos = SolicitudFondo::all();
      $ots = OrdenTrabajo::all();

      $neto_ots = $ots->map(function ($document) {
          return $document->OT_MONTO_NETO;
      })->sum();

      $neto_sfs = $sol_fondos->map(function ($document) {
          return $document->SF_MONTO;
      })->sum();

      return view('dashboard')
      ->with('sol_fondos', $sol_fondos)
      ->with('neto_ots', $neto_ots)
      ->with('neto_sfs', $neto_sfs)
      ->with('ots', $ots);
  }


}
