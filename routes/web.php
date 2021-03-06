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

Route::get('/', 'Web\BlogController@index')->name('blog.home');
 
Route::get('/category/{category}','Web\BlogController@category')->name('category');

Route::get('/blog/{post}','Web\BlogController@show')->name('blog.show');

Route::prefix('blog')->group(function () {
    Auth::routes();
});


// Route::get('/home', 'HomeController@index')->name('home');
