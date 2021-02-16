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
    return view('layouts/page2');
});


Route::get('/graph', 'App\Http\Controllers\StatisticsController@StatData');

Route::get('/country/{country}', 'App\Http\Controllers\ApiController@main');
Route::get('/country', 'App\Http\Controllers\ApiController@main');
