<?php

namespace App\Http\Controllers;

use App\AreaServicio;
use App\Etapa;
use App\Proceso;
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

    public function getEtapa($proceso)
    {
        return response()
            ->json(Etapa::where('ID_PROCESO', '=', (int) $proceso)->get(), 200);
    }
    public function getServ($serv_req)
    {
        return response()
            ->json(AreaServicio::where('ID_AREA', '=', (int) $serv_req)->get(), 200);
    }
}
