<?php
/*
|--------------------------------------------------------------------------
| Posts Routes
|--------------------------------------------------------------------------
*/

Route::group(['prefix'=>'posts'],function (){
    Route::get('/','PostsController@index')->name('posts.index');
   


});