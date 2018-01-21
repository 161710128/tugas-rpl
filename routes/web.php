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

Route::get('test','tugasController@template');
Route::get('test2','tugasController@template2');
Route::get('test3','tugasController@template3');
Route::get('test4','tugasController@template4');
Route::get('test5','tugasController@template6');
Route::get('test6','tugasController@template5');