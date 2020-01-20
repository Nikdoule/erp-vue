<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::prefix('1.0')->group(function () {

    Route::apiResource('projects', 'Api\v1a\ProjectController');
    
    Route::apiResource('business-developpers', 'Api\v1a\BusinessDevelopperController');

    Route::apiResource('projects/{id}/tasks', 'Api\v1a\TaskController');

    Route::apiResource('deals', 'Api\v1a\DealController');

    Route::apiResource('contacts', 'Api\v1a\ContactController');

    Route::apiResource('deals/{dealId}/actions', 'Api\v1a\ActionController');

    Route::apiResource('parameters-actions', 'Api\v1a\ParamActionController');

    Route::apiResource('parameters-contacts', 'Api\v1a\ParamContactController');

    Route::apiResource('parameters-todos', 'Api\v1a\ParamTodoController');
});
Route::fallback(function () {
    return response()->json([
        'message' => 'No entry API for this url'
    ], 404);
});
