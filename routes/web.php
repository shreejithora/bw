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
    return view('welcome');
});
Route::get('/login','logincontroller@getloginpage')->name('getloginpage');
Route::post('/login/submit','logincontroller@login')->name('login');
Route::get('/signup','RegisterController@create')->name('signup');
Route::post('/user/submit/','RegisterController@store')->name('userregister');
