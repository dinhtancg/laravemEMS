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

Route::group(['prefix' => 'admin',  'middleware' => 'auth'], function(){
    Route::get('/', 'Admin\AdminController@index')->name('admin.index');
    Route::prefix('category')->group(function (){
        Route::get('', 'Admin\CategoryController@index')->name('admin.category.index')->middleware('can:view-category');
        Route::get('create','Admin\CategoryController@create')->name('admin.category.create')->middleware('can:create-category');
        Route::post('create', 'Admin\CategoryController@createCategory')-> name('admin.category.createCategory');
        Route::get('edit/{id}', 'Admin\CategoryController@edit')->name('admin.category.edit')->middleware('can:update-category');
        Route::delete('/{id}', 'Admin\CategoryController@destroy')->name('admin.category.destroy')->middleware('can:delete-category');
    });
    Route::prefix('articles')->group(function (){
        Route::get('', 'Admin\ArticleController@index')->name('admin.article.index');
        Route::get('create','Admin\ArticleController@create')->name('admin.article.create')->middleware('can:create-article');
        Route::post('create', 'Admin\ArticleController@createArticle')-> name('admin.article.createArticle')->middleware('can:create-article');
        Route::get('edit/{id}', 'Admin\ArticleController@edit')->name('admin.article.edit') ;
        Route::delete('/{id}', 'Admin\ArticleController@destroy')->name('admin.article.destroy');
    });
    Route::prefix('users')->group(function (){
        Route::get('','Admin\UsersController@index')->name('admin.user.index');
        Route::get('create','Admin\UsersController@create')->name('admin.user.create');
        Route::post('create', 'Admin\UsersController@createUser')-> name('admin.user.createUser');
        Route::get('edit/{id}', 'Admin\UsersController@edit')->name('admin.user.edit');
        Route::delete('/{id}', 'Admin\UsersController@destroy')->name('admin.user.destroy');
    });

});