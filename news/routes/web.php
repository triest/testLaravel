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

use Illuminate\Support\Facades\Input;

Auth::routes();

Route::get('/', 'mainController@index')->name('main');
Route::get('/createBlock', 'mainController@create')->name('createBlock');

Route::get('/news', 'NewsController@newsList')->name('mainNews');
Route::get('news/detail/{id}', 'NewsController@detail')->name('detail');

Route::get('/galeray', 'ImageController@index')->name('galeray');
Route::get('/galeray/{id}', 'ImageController@show')->name('imagedetail');

Route::get('/tag/{name}', 'NewsController@seachByTag')->name('seachByTag');

Route::get('/dataformain', 'mainController@dataforAjax');


Route::group(['middleware' => 'auth'], function () {

    Route::get('/createnews', 'NewsController@createNews')->name('createNews');
    Route::post('/storenews', 'NewsController@storeNews')->name('storeNews');

    //edit news
    Route::get('/edit/{id}', 'NewsController@edit')->name('edit');
    Route::post('/saveedit/{id}', 'NewsController@saveEdit')->name('saveedit');
    Route::get('/delete/{id}', 'NewsController@delete')->name('newsdelete');

    //galeray

    Route::post('/galeray', 'ImageController@store')->name('uploadImage');

    Route::get('/galeray/delete/{id}', 'ImageController@delete')->name('imagedelete');

    //tegs
    Route::get('/tags', 'TagController@index')->name('mainTag');
    Route::post('/storetag', 'TagController@store')->name('storeTag');

    //main page
    Route::get('/addblock', 'mainController@create')->name('createBlock');

    //store block
    Route::post('/storeblock', 'mainController@store')->name('storeBlock');
    Route::get('block/delete/{id}', 'mainController@delete')->name('blockdelete');
    Route::get('block/edit/{id}', 'mainController@edit')->name('blockedit');
    Route::post('block/saveedit/', 'mainController@saveedit')->name('saveEditBlock');


});

