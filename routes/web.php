<?php
/*
|--------------------------------------------------------------------------
| Back Routes
|--------------------------------------------------------------------------
*/

Route::get('admin/panel','Back\Dashboard@index')->name('admin.dashboard');
Route::get('admin/giris','Back\AuthController@login')->name('admin.login');
Route::post('admin/giris','Back\AuthController@loginPost')->name('admin.login.post');
Route::get('admin/cikis','Back\AuthController@logout')->name('admin.logout');


/*
|--------------------------------------------------------------------------
| Front Routes
|--------------------------------------------------------------------------
*/

Route::get('/','Front\Home@index')->name('home');
Route::get('sayfa','Front\Home@index');
Route::get('/iletisim','Front\Home@contact')->name('contact');
Route::post('/iletisim','Front\Home@contactpost')->name('contact.post');
Route::get('/kategori/{category}','Front\Home@category')->name('category');
Route::get('/{category}/{slug}','Front\Home@single')->name('single');
Route::get('/{sayfa}','Front\Home@page')->name('page');
