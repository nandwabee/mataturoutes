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

Route::get('/', 'HomeController@index')
  ->name('homepage');

Auth::routes();

Route::get('/home', 'HomeController@home')->name('home');

/**
 * Route management
 */
 Route::get('/route/{route_number}','Routes\RoutesController@show')
     ->name('route.show');
     
Route::get('/admin/routes/add','Routes\RoutesController@create')
    ->name('route.add')
    ->middleware(['auth','admin']);

Route::post('/admin/routes','Routes\RoutesController@store')
    ->name('route.store')
    ->middleware(['auth','admin']);

/**
 * Admin Routes
 */
Route::get('/admin','HomeController@admin')
    ->name('admin')
    ->middleware(['auth','admin']);
