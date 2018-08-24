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

Route::middleware('api')->prefix('v1')->namespace('Api\V1')->group(function () {

    /**
     * Question Routes
     */
    Route::prefix('questions')->group(function () {
        Route::get('list', 'QuestionController@list');
        Route::get('get/{questionId}', 'QuestionController@getQuestionById');
        Route::post('create', 'QuestionController@updateOrCreate');
        Route::put('update', 'QuestionController@updateOrCreate');
        Route::delete('delete/{id}', 'QuestionController@delete');
    });


    /**
     * Answer Routes
     */
    Route::prefix('answers')->group(function () {
        Route::prefix('structures')->group(function () {
            Route::get('list', 'AnswerController@getStructures');
        });
    });

});
