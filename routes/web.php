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

Route::middleware('auth')->middleware('can:view-users','verified')->group(function(){

    //view

    Route::get('/', 'MonitoringController@index');

    Route::get('/deals/{dealId}/action', 'ActionController@show');

    //create
    
    Route::get('/deals/{dealId}/action/create', 'ActionController@store');
    
    //resources

    Route::Resource('/business-developpers', 'BusinessDevlopperController')->middleware('can:manage-users');
    
    Route::Resource('/contacts', 'ContactController');

    Route::Resource('/deals', 'DealController');

    Route::Resource('/action-parameter', 'ParamActionController');

    Route::Resource('/contact-parameter', 'ParamContactController');
    
    Route::Resource('/todo-parameter', 'ParamTodoController');

    Route::Resource('/parameters', 'ParameterController');

    //auth
    
    Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function(){
        Route::resource('users', 'UsersController');

    });

});
Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');
