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

Route::resource('stacje.zwrotnice', 'RailroadController')->names([
    'index' => 'railroad.index',
    'create' => 'railroad.create',
    'store' => 'railroad.store',
    'edit' => 'railroad.edit',
    'update' => 'railroad.update',
    'destroy' => 'railroad.destroy',
    ])->except(['update']);
Route::put('stacje/{id}/zwrotnice', 'RailroadController@update')->name('railroad.update');
Route::resource('zaklady_linii_kolejowych', 'izController')->names([
    'index' => 'iz.index',
    'edit' => 'iz.edit',
    ])->only(['index', 'edit']);
Route::resource('linie_kolejowe', 'lkController')->names([
    'index' => 'lk.index',
    'edit' => 'lk.edit',
    'create' => 'lk.create',
    ]);
// Auth::routes();
//
Route::get('/', 'StationController@index')->name('home');
