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
    return view('index');
});

Route::prefix('test')->group(function ()
{
  Route::get('redis','TestController@redisTest');
  Route::get('mysql','TestController@mysqlTest');
});

Auth::routes(['register' => false]);

Route::get('/admin', 'AdminController@index')->middleware('auth');

Route::get('/admin/release_create','ContentController@release_create');
