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

//Route(s) of Homepage

use App\Http\Controllers\Auth\LoginController;


//Route(s) of Login Page
Route::get('/', 'LoginController@index')->name('login');
Route::post('/postlogin', 'LoginController@postLogin');
Route::get('/logout', 'LoginController@logout');

//Route(s) to protect the contents of the web
Route::group(['middleware' => ['auth','checkUsername:admin']], function () {
    
    //Route(s) of Homepage
    
    //Route(s) of Tabungan CRUD Operations
    Route:: get('/tabungan/create', 'TabunganController@create');
    Route:: post('/tabungan', 'TabunganController@store');
    Route:: delete('/tabungan/{tabungan}', 'TabunganController@destroy');
    Route:: get('/tabungan/{tabungan}/edit', 'TabunganController@edit');
    Route:: patch('/tabungan/{tabungan}', 'TabunganController@update');
    
    //Route(s) of Giro CRUD Operations
    Route:: get('/giro/create', 'GiroController@create');
    Route:: post('/giro', 'GiroController@store');
    Route:: delete('/giro/{giro}', 'GiroController@destroy');
    Route:: get('/giro/{giro}/edit', 'GiroController@edit');
    Route:: patch('/giro/{giro}', 'GiroController@update');
    
    //Route(s) of Deposito CRUD Operations
    Route:: get('/deposito/create', 'DepositoController@create');
    Route:: post('/deposito', 'DepositoController@store');
    Route:: delete('/deposito/{deposito}', 'DepositoController@destroy');
    Route:: get('/deposito/{deposito}/edit', 'DepositoController@edit');
    Route:: patch('/deposito/{deposito}', 'DepositoController@update');
    
    //Route(s) of DPK CRUD Operations
    Route:: get('/dpk/create', 'DpkController@create');
    Route:: post('/dpk', 'DpkController@store');
    Route:: delete('/dpk/{dpk}', 'DpkController@destroy');
    Route:: get('/dpk/{dpk}/edit', 'DpkController@edit');
    Route:: patch('/dpk/{dpk}', 'DpkController@update');
    
    //Route(s) of Casa CRUD Operations
    Route:: get('/casa/create', 'CasaController@create');
    Route:: post('/casa', 'CasaController@store');
    Route:: delete('/casa/{casa}', 'CasaController@destroy');
    Route:: get('/casa/{casa}/edit', 'CasaController@edit');
    Route:: patch('/casa/{casa}', 'CasaController@update');
    
    //Route(s) of Kantor CRUD Operations
    Route:: get('/kantor/create', 'KantorController@create');
    Route:: post('/kantor', 'KantorController@store');
    Route:: delete('/kantor/{kantor}', 'KantorController@destroy');
    Route:: get('/kantor/{kantor}/edit', 'KantorController@edit');
    Route:: patch('/kantor/{kantor}', 'KantorController@update');
    
});

Route::group(['middleware' => ['auth','checkUsername:admin,guest']], function () {
    
    //Route(s) of Homepage
    Route::get('/beranda', 'BerandaController@index');
    
    //Route(s) of Tabungan Pages
    Route:: get('/tabungan', 'TabunganController@index');
    
    //Route(s) of Giro Pages
    Route:: get('/giro', 'GiroController@index');
    
    //Route(s) of Deposito Pages
    Route:: get('/deposito', 'DepositoController@index');
    
    //Route(s) of DPK Pages
    Route:: get('/dpk', 'DpkController@index');
    
    //Route(s) of Casa Pages
    Route:: get('/casa', 'CasaController@index');
    
    //Route(s) of Kantor Pages
    Route:: get('/kantor', 'KantorController@index');
    
});
