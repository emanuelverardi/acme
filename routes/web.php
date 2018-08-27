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

Route::get('/', 'IndexController@index')->name('home');

Auth::routes();

/*
|--------------------------------------------------------------------------
| Control Panel Routes
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => '/controlpanel', 'namespace' => 'ControlPanel', 'middleware' => ['minifyHtml', 'admin']], function () {

    Route::get('/dashboard', 'DashboardController@index')->name('Dashboard');
    Route::get('/questions', 'QuestionController@list')->name('Questions');

    /**
     * To be implemented
     */

    Route::get('/answers', function(){
        return view('controlpanel.empty');
    })->name('Answer');

    Route::get('/answer-structures', function(){
        return view('controlpanel.empty');
    })->name('Answer Structures');

    Route::get('/answer-metadatas', function(){
        return view('controlpanel.empty');
    })->name('Answer Type Metadata');

    Route::get('/users', function(){
        return view('controlpanel.empty');
    })->name('Users');

});

Route::group(['prefix' => '/user-response', 'namespace' => 'UserResponse', 'middleware' => ['auth', 'minifyHtml']],
function () {

    Route::get('/', 'UserResponseController@index');

});

