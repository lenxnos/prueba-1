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

Route::get('/', function () {
    if(Auth::guest()){
    	return redirect('login');
    }
    else{
    	return redirect('home');
    }
});


Route::get('resumen', 'HomeController@resumen')->name('resumen');
//Route::get('/resumen/visor', 'ResumenController@index')->name('visor');

Auth::routes();

Route::get('home', 'HomeController@index')->name('home');


//Plan Obras
Route::get('planobras/old', 'PlanObraController@old')->name('planobras.old');
Route::resource('planobras', 'PlanObraController');

//FinanciaObras

Route::resource('financiaobras', 'FinanciaObrasController');

//FinanciaCreditos

Route::resource('financiacreditos', 'FinanciaCreditosController');
