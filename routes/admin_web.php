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

Route::prefix('admin')->name('admin.')->namespace('backend')->middleware('auth:admin_user')
    ->group(function () {
        Route::get('/', 'PageController@home')->name('home');
        Route::resource('admin-users', 'AdminUserController');
        Route::get('admin-user/datatable/ssd', 'AdminUserController@ssd');
    });
