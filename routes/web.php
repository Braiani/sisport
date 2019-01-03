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

Route::get('/', function () {
    return redirect()->route('voyager.login');
});



Route::group(['prefix' => 'admin', 'middleware' => 'checPass'], function () {
    Route::get('/portarias/getData', 'PortariasController@get_data')->middleware('admin.user')->name('voyager.portarias.getData');
    Route::get('/portarias/download', 'PortariasController@download')->middleware('admin.user')->name('voyager.portarias.download');
    Voyager::routes();
    Route::post('/login', 'LoginController@postLogin')->name('voyager.login');
});
