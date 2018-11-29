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



Auth::routes();

Route::get('/', 'IndexController@index')->name('main');

Route::get('/news', 'NewsController@newsList')->name('mainNews');
Route::get('/detail/{id}', 'NewsController@detail')->name('detail');

Route::get('/galeray','ImageController@index')->name('galeray');

Route::group(['middleware' => 'auth'], function () {

    Route::get('/createnews', 'NewsController@createNews')->name('createNews');
    Route::post('/storenews', 'NewsController@storeNews')->name('storeNews');

    //edit news
    Route::get('/edit/{id}', 'NewsController@edit')->name('edit');
    Route::post('/saveedit/{id}', 'NewsController@saveEdit')->name('saveedit');

    //galeray

    Route::post('/galeray','ImageController@store')->name('uploadImage');
    Route::get('/galeray/{id}','ImageController@show')->name('imagedetail');
});

