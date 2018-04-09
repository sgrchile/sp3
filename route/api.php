<?php

use Illuminate\Http\Request;

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

Route::get('/crm/oportunidades', [
    'uses' => 'OportunidadController@last',
    'as' => 'get.oportunidad',
]);
