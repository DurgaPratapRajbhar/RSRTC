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

Route::post('/', function () {

	//echo phpinfo();
    return view('dashboard.index');
});


Route::get('login', function () {

	//echo phpinfo();
    return view('dashboard.login1');
});

Route::get('normal','DashboardController@normal_pass');
Route::get('submit-registration','DashboardController@submit_fn');

Route::get('menu','DashboardController@menu_fn');