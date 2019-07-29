<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(['namespace' => 'Site'/*, 'middleware' => 'auth'*/], function() {

    Route::get('/', 'SiteController@index');
    Route::get('/contato', 'SiteController@contato');

    Route::get('/categoria/{id}', 'SiteController@categoria');
    Route::get('/categoriaOp/{id?}', 'SiteController@categoriaOption');
});


Route::group(['prefix' => 'painel'], function() {
    
    Route::get('/users', function() {
        return 'Controle de usuários';
    });

    Route::get('/financeiro', function() {
        return 'Painel financeiro';
    });

    Route::get('/', function() {
        return 'Dashboard';
    });
});