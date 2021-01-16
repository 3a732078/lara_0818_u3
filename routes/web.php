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
    return view('welcome');
});

Route::get('home',[\App\Http\Controllers\posts::class,
    'home'])->name('home');

Route::get('about',[\App\Http\Controllers\posts::class,
    'about'])->name('about');

Route::get('contact',[\App\Http\Controllers\posts::class,
    'contact'])->name('contact');

Route::get('post',[\App\Http\Controllers\posts::class,
    'post'])->name('post');
