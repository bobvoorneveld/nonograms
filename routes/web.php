<?php

use Illuminate\Support\Facades\Route;
use App\Nonogram;

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

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/example', function () {
    $nonograms = Nonogram::first()->get();
    $nonogram = $nonograms[0];
    return view('example');
});
