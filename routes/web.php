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
    return view('front');
});
Route::get('/create-entity', function () {
    return view('create.entity');
});
Route::get('/business-developper', function () {
    return view('business.developper');
});
Route::get('/monitoring-graphical', function () {
    return view('monitoring.graphical');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
