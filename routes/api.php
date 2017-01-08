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


Route::group(['prefix' => 'translate'], function () {

    Route::get('/get/{appId}/{moduleId}/{languageId}', 'Translate\IndexController@index');

    Route::post('/create', 'Translate\IndexController@createTranslate');

});
