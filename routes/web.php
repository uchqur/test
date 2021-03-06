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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['prefix'=>'blog'],function (){
    Route::get('/', 'BlogsController@index')->name('blog.home');
    Route::get('/create', 'BlogsController@create')->name('blog.create');
    Route::get('/show/{id}', 'BlogsController@show')->name('blog.show');
    Route::post('/store', 'BlogsController@store')->name('blog.store');
}

);
