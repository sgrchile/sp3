<?php
/**
 * Created by PhpStorm.
 * User: crist
 * Date: 07/01/2018
 * Time: 15:18
 */

Route::group(['prefix' => 'cliente'], function (){
    Route::resource('clientes','ClientesController');
});

// app/routes.php
Route::get('dropdown', function(){
    $id = Input::get('option');
    $etapa = \App\Proceso::find($id)->etapas;
    return $etapa->lists('DESC_ETAPA', 'ID_ETAPA');
});





