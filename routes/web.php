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


Route::get('/information', function () {
    return view('information');
});
Route::get('/', function () {
    return redirect('/statistiques');
});


Route::get('/statistiques/{country}', 'App\Http\Controllers\ApiController@main');
Route::get('/statistiques', 'App\Http\Controllers\ApiController@main');


