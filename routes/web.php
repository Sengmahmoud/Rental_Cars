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
    return view('welcome');
});
Route::get('home','AgenciesController@show');
Route::post('agencystore','AgenciesController@store');
Route::get('home/{id}/delete','AgenciesController@delete');
Route::get('home/{id}','AgenciesController@show_one_agency');


Route::get('home/{id}/Users','CustomersController@show');
Route::post('home/{agency}/Users/store','CustomersController@add');
Route::get('home/{id}/Users/{usid}/delete','CustomersController@delete');


Route::get('home/{id}/Cars','CarsController@show');
Route::post('home/{agency}/Cars/store','CarsController@add');
Route::get('home/{id}/Cars/{car}/edit','CarsController@edit');
Route::post('home/{id}/Cars/{car}/update','CarsController@update');
