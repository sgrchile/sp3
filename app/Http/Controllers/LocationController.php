<?php

namespace App\Http\Controllers;

use App\Region;
use App\Provincia;
use App\Ciudad;
use App\Rubro;

use Illuminate\Http\Request;

class LocationController extends Controller
{
	public function getRegion()
	{
		return response()
			->json(Region::all(), 200);
	}

	public function getProvincia($region)
	{
		return response()
			->json(Provincia::where('PV_REG_COD', '=', (int) $region)->get(), 200);
	}

	public function getCiudad($provincia)
	{
		return response()
			->json(Ciudad::where('CIU_PV_COD', '=', (int) $provincia)->get(), 200);
	}

	public function getRubro($rubro)
	{
		return response()
			->json(Rubro::where('RUB_COD', '=', (int) $rubro)->get(), 200);
	}
}
