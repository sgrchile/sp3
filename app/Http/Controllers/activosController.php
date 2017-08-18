<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ActivoInterno;
use app\ActivoAsignado;
use app\Proveedor;

use Carbon\Carbon;


class ActivosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function showActivos()
    {
          //DESDE WEB SE LLAMA ESTE METODO, PUES CONTIENE LA RUTA
          return view('ModuloInventario.Activos.IndexActivos');
    }

    // INICIO REGISTRO DE ACTIVO

    public function postRegistrarActivo(Request $request)
    {
        $this->validarRegistroActivo($request);
        $createRegistro = $this->createRegistro($request->all());
        if (!$createRegistro) {
            return redirect()->route('indexActivos')->with('error', 'Activo no Creado');
        }

        return redirect()->route('indexActivos')->with('success', 'Activo Creado');
    }
    public function validarRegistroActivo(Request $request)
    {
        //
        $this->validate($request, [
            'desc' => 'required',
            'marca' => 'required',
            'valorCompra' => 'required',
            'vigencia' => 'required',
            'seguros' => 'required',
        ]);

    }

    public function createRegistro(array $data)
    {

      $valor=$data['valorCompra'];
      $salvamento= ($valor)/100*50;
        return ActivoInterno::create([
            'ACT_DESC' => $data['desc'],
            'ACT_INFO' => $data['info'],
            'ACT_MARCA' => $data['marca'],
            'ACT_ESTADO' => 'EN USO',
            'ACT_FECHA_INGRESO' => Carbon::now(),
            'ACT_VALOR_COMPRA' => $data['valorCompra'],
            'ACT_TASA_DESPRECIACION' => '20',
            'ACT_VALOR_ACTUAL' => $data['valorCompra'],
            'ACT_SEGUROS' => $data['seguros'],
            'ACT_VALOR_DE_SALVAMENTO' => $salvamento ,
            'ACT_VIGENCIA' => $data['vigencia'],
        ]);
    }
    // FIN REGISTRO DE ACTIVO

    public function buscadorActivos(Request $request)
    {
      $estAct = $request->input('estadoActivos');
      $actint =  ActivoInterno::where('ACT_ESTADO' , $estAct)->get();
      return view('ModuloInventario.Activos.Listado')
      ->with('actint', $actint);

    }

    public function showListaActivos()
    {

      $id=null;
      $actint =  ActivoInterno::where('ACT_ESTADO' , $id)->get();
      return view('ModuloInventario.Activos.Listado')
      ->with('actint', $actint);
    }

    public function showActualizarActivo()
    {
      $actint =  ActivoInterno::all();

      return view('ModuloInventario.Activos.actualizar')
          ->with('actint', $actint);
    }

    public function getModificarActivos($id)
    {
      $actint = ActivoInterno::all();
      $activo = ActivoInterno::find($id);

        return view('ModuloInventario.Activos.actualizar')
        ->with('actint', $actint)
        ->with('activo', $activo);
    }

    public function patchModificarActivos(Request $request, $id)
    {
      $actEstado = $request->input('estadoActivo');

      $updateActivo = ActivoInterno::findOrFail($id)->update([
          'ACT_ESTADO' => $actEstado,
      ]);

          return redirect()->route('indexActivos')->with('success', 'El Activo cambio de estado exitosamente.');
      }

      public function showAsignarActivo()
      {
          $proveedor = Proveedor::all();
          return view('ModuloInventario.Activos.Asignar')
          ->with('prov', $proveedor);
      }



    }
