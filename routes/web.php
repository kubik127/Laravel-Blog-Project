<?php
/*
|--------------------------------------------------------------------------
| Back Routes
|--------------------------------------------------------------------------
*/
Route::prefix('admin')->name('admin.')->middleware('isLogin')->group(function(){
Route::get('giris','Back\AuthController@login')->name('login');
Route::post('giris','Back\AuthController@loginPost')->name('login.post');
});

Route::prefix('admin')->name('admin.')->middleware('isAdmin')->group(function(){
Route::get('panel','Back\Dashboard@index')->name('dashboard');
// Makale routes
Route::get('makaleler/silinenler','Back\ArticleController@trashed')->name('trashed.article');
Route::resource('makaleler','Back\ArticleController');
Route::get('/switch','Back\ArticleController@switch')->name('switch');
Route::get('/deletearticle/{id}','Back\ArticleController@delete')->name('delete.article');
Route::get('/harDeletearticle/{id}','Back\ArticleController@hardDelete')->name('hard.delete.article');
Route::get('/recoverarticle/{id}','Back\ArticleController@recover')->name('recover.article');
// Kategori Routes
Route::get('/kategoriler','Back\CategoryController@index')->name('category.index');
Route::post('/kategoriler/create','Back\CategoryController@create')->name('category.create');
Route::get('/kategori/status','Back\CategoryController@switch')->name('category.switch');
Route::get('cikis','Back\AuthController@logout')->name('logout');
});

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
