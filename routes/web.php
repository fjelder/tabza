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

Route::resource('stacje', 'StationController')->names([
    'index' => 'stations.index',
    'create' => 'stations.create',
    'store' => 'stations.store',
    'show' => 'stations.show',
    'edit' => 'stations.edit',
    'update' => 'stations.update',
    'destroy' => 'stations.destroy',
    ]);

Route::resource('stacje.zwrotnice', 'RailroadController');

Auth::routes();
//
Route::get('/', 'StationController@index')->name('home');
