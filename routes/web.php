<?php

use Illuminate\Support\Facades\Route;

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

Route::match(['get', 'post'], 'login', ['as' => 'login', 'uses' => 'backend\login\LoginController@login']);
Route::match(['get', 'post'], 'logout', ['as' => 'logout', 'uses' => 'backend\login\LoginController@logout']);

