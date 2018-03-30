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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->group(function () {
    Route::get('/', 'Admin\AdminController@index')->name('admin.index');
    Route::prefix('category')->group(function (){
        Route::get('', 'Admin\CategoryController@index')->name('admin.category.index');
        Route::get('create','Admin\CategoryController@create')->name('admin.category.create');
        Route::post('create', 'Admin\CategoryController@createCategory')-> name('admin.category.createCategory');
        Route::get('edit/{id}', 'Admin\CategoryController@edit')->name('admin.category.edit');
        Route::delete('/{id}', 'Admin\CategoryController@destroy')->name('admin.category.destroy');
    });

});