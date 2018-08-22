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

    Route::get('/dashboard', 'DashboardController@index');

});

Route::group(['prefix' => '/user-response', 'namespace' => 'UserResponse', 'middleware' => ['auth', 'minifyHtml']],
function () {

    Route::get('/', 'UserResponseController@index');

});

