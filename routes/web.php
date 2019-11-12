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

Route::middleware('auth')->group(function(){
    //view
    Route::get('/business-developper', function () {
        return view('business.developper');
    });
    Route::get('/monitoring-graphical', function () {
        return view('monitoring.graphical');
    });
    Route::get('/', function () {
        return view('case.case');
    });
    Route::get('/contact', function () {
        return view('contact.contact');
    });
    //create
    Route::get('/create-business-developper', function () {
        return view('create.business-developper');
    });
    Route::get('/create-case', function () {
        return view('create.case');
    });
    Route::get('/create-contact', function () {
        return view('create.contact');
    });
    //auth
    Route::get('comptes', function(){

    });

});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
