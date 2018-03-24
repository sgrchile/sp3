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





