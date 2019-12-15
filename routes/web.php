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

    Route::get('/', 'MonitoringController@index')->middleware('verified');

    Route::get('/deals', 'DealController@index')->middleware('verified');

    Route::get('/contacts', 'ContactController@index')->middleware('verified');

    Route::get('/business-developpers', 'BusinessDevlopperController@index')->middleware('verified');

    Route::get('deal/{dealId}/view-action', 'ActionController@show')->middleware('verified');

    //create
    Route::get('/create-business-developper', 'BusinessDevlopperController@store')->middleware('verified');

    Route::get('/create-deal', 'DealController@store')->middleware('verified');

    Route::get('/create-contact', 'ContactController@store')->middleware('verified');

    Route::get('/create-action-parameter', 'ParamActionController@store')->middleware('verified');

    Route::get('/create-contact-parameter', 'ParamContactController@store')->middleware('verified');
    
    Route::get('/create-todo-parameter', 'ParamTodoController@store')->middleware('verified');

    Route::get('deal/{dealId}/create-action', 'ActionController@store')->middleware('verified');
    //edit
    Route::get('/business-developper/{developperId}', 'BusinessDevlopperController@edit')->middleware('verified');

    Route::get('/contact/{contactId}', 'ContactController@edit')->middleware('verified');

    Route::get('/deal/{dealId}', 'DealController@edit')->middleware('verified');
    //auth
    Route::get('comptes', function(){

    });

});
Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');
