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



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
    Route::post('/login', 'LoginController@postLogin')->name('voyager.login');
    // Route::get('portarias', function(){
    //     $portarias = \App\Portaria::all();

    //     return $portarias;
    // });
});
