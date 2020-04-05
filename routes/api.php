<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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


Route::prefix('v1')->group(function () {

    Route::get('/{id?}', function ($id = null) {
        return $id;
    })->where(['id' => '^.{8}$']);




    // Route::get('/{id?}', function ($id = null) {
    //     return 'номер автообиля=' . $id;
    // })->where(['id' => '^.{8}$']);

    Route::post('/{id}', function ($id) {
        return 'GROUP Post api v1 User=' . $id;
    })->where(['id' => '^.{36}$']);
});
