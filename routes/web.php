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

Route::middleware('auth')->middleware('can:view-users')->group(function(){

    //view

    Route::get('/', 'MonitoringController@index')->middleware('verified');

    Route::get('/deals/{dealId}/action', 'ActionController@show')->middleware('verified');

    //create
    
    Route::get('/deals/{dealId}/action/create', 'ActionController@store')->middleware('verified');
    
    //resources

    Route::Resource('/business-developpers', 'BusinessDevlopperController')->middleware('can:manage-users');
    
    Route::Resource('/contacts', 'ContactController')->middleware('verified');

    Route::Resource('/deals', 'DealController')->middleware('verified');

    Route::Resource('/action-parameter', 'ParamActionController')->middleware('verified');

    Route::Resource('/contact-parameter', 'ParamContactController')->middleware('verified');
    
    Route::Resource('/todo-parameter', 'ParamTodoController')->middleware('verified');

    Route::Resource('/parameters', 'ParameterController');

    //auth
    
    Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function(){
        Route::resource('users', 'UsersController');

    });

});
Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');
