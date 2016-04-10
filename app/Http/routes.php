<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/listaCli','ClienteController@listaCliJSON');

Route::Get('/listaCidades','CidadeControlller@listaCidadeJSON');

Route::get('/cliente',function() {
    return view('cliente.cliente');
});

Route::post('/cliente','ClienteController@salvaCliJSON');

Route::group(['middleware' => ['web']], function () {
    Route::get('/listaCli','ClienteController@listaCliJSON');
});
