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
#srf
Route::get('/','Front\Home@index')->name('home');
Route::get('sayfa','Front\Home@index');
Route::get('/kategori/{category}','Front\Home@category')->name('category');
Route::get('/{category}/{slug}','Front\Home@single')->name('single');
