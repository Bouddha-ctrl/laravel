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
    return view('home');
});


Route::get('/test', function () {
    return view('test');
});
Route::get('/nouvelles', function () {
    return view('nouvelles');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/aproposdenous', function () {
    return view('aboutus');
});
Route::get('/aproposducorona', function () {
    return view('aboutcovid');
});
Route::post('/contact/submit', 'MessagesController@submit');


Route::get('/statistiques/{country}', 'App\Http\Controllers\ApiController@main');
Route::get('/statistiques', 'App\Http\Controllers\ApiController@main');

