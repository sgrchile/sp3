<?php

use Illuminate\Http\Request;
use \Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API route for your application. These
| route are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/**
 * Regiones, provincias y comunas para cargar dinámicamente vía Ajax
 */
Route::get('/region', [
    'uses' => 'LocationController@getRegion',
    'as' => 'get.region',
]);

Route::get('/provincia/{region}', [
    'uses' => 'LocationController@getProvincia',
    'as' => 'get.provincia',
]);

Route::get('/ciudad/{provincia}', [
    'uses' => 'LocationController@getCiudad',
    'as' => 'get.ciudad',
]);

Route::get('/rubro/{rubro}', [
    'uses' => 'LocationController@getRubro',
    'as' => 'get.rubro',
]);

Route::get('/crm/oportunidades', function(){

    $db = App\Oportunidad::orderBy('CREATED_AT','DESC')
        ->where('OPORT_EMP','=',Auth::user()->PRO_EMP)
        ->take(10)->get();
    return response()->json($db);
});

Route::get('/menus/all/{id}', [
    'uses' => 'MenuController@getMenus',
    'as' => 'get.menus',
]);

Route::get('/pais', [
    'uses' => 'PaisController@getPaises',
    'as' => 'get.pais',
]);
Route::get('/bancos', [
    'uses' => 'BancosController@getBancos',
    'as' => 'get.banco',
]);
Route::get('/bancos/cuentas', [
    'uses' => 'BancosController@getCuentas',
    'as' => 'get.bancocuentas',
]);
Route::get('/salud', [
    'uses' => 'SaludController@getPrevisiones',
    'as' => 'get.previsiones',
]);
Route::get('/afp', [
    'uses' => 'AfpController@getAfps',
    'as' => 'get.afp',
]);
Route::get('/etapa/{proceso}', [
    'uses' => 'LocationController@getEtapa',
    'as' => 'get.etapa',
]);
Route::get('/area/{serv_req}', [
    'uses' => 'LocationController@getServ',
    'as' => 'get.area',
]);
Route::get('/probabilidad/{etapa}', [
    'uses' => 'LocationController@getprob',
    'as' => 'get.prob',
]);
Route::get('/servicio', [
    'uses' => 'LocationController@getservicio',
    'as' => 'get.serv',
]);
Route::get('/producto', [
    'uses' => 'LocationController@getproducto',
    'as' => 'get.prod',
]);
Route::get('/itemserv/{prod}', [
    'uses' => 'LocationController@getitemserv',
    'as' => 'get.itemserv',
]);
Route::get('/itemprod/{prod}', [
    'uses' => 'LocationController@getitemprod',
    'as' => 'get.itemprod',
]);
