<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return Auth::check() ? redirect('/home/dashboard') : view('welcome');
});

Route::get('/home', function () {
    return view('home');
})->middleware(['verified']);

Route::get('/term', function () {
    return 'terms page';
})->name('term');

Route::get('/about', function () {
    return 'about page';
})->name('about');
