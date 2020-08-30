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

$adminPrefix = "";
Route::group(['prefix' => $adminPrefix, 'middleware' => ['admin']], function() {
    Route::match(['get', 'post'], 'admin-dashboard', ['as' => 'admin-dashboard', 'uses' => 'backend\dashboard\DashboardController@dashboard']);
    
    
    Route::match(['get', 'post'], 'my-profile', ['as' => 'my-profile', 'uses' => 'backend\dashboard\MyproifiledController@myprofile']);

});
// Route::get('users/{user}',  ['as' => 'users.edit', 'uses' => 'backend\users\UserController@edit']);
// Route::patch('users/{user}/update',  ['as' => 'users.update', 'uses' => 'backend\users\UserController@update']);
// Route::get('/changePassword','HomeController@showChangePasswordForm');
