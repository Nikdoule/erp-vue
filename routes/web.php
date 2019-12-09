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
    Route::get('/parameters', 'ParameterController@index');

    Route::get('/', 'MonitoringController@index');

    Route::get('/deals', 'DealController@index');

    Route::get('/contacts', 'ContactController@index');

    Route::get('/business-developpers', 'BusinessDevlopperController@index');

    //create
    Route::get('/create-business-developper', 'BusinessDevlopperController@store');

    Route::get('/create-deal', 'DealController@store');

    Route::get('/create-contact', 'ContactController@store');

    Route::get('/create-action-parameter', 'ParamActionController@store');

    Route::get('/create-contact-parameter', 'ParamContactController@store');
    
    Route::get('/create-todo-parameter', 'ParamTodoController@store');
    //edit
    Route::get('/business-developper/{developperId}', 'BusinessDevlopperController@edit');

    Route::get('/contact/{contactId}', 'ContactController@edit');

    Route::get('/deal/{dealId}', 'DealController@edit');
    //auth
    Route::get('comptes', function(){

    });

});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
