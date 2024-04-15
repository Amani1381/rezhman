<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index.v1.users.index');
});
Route::get('/episodes', function () {
    return view('index.v1.users.episodes');
});
Route::get('/episodes-details', function () {
    return view('index.v1.users.episodes-details');
});

Route::group(['prefix'=>'admin','namespace'=>'App\Http\Controllers\َAdmin'],function (){
    Route::resource('categories','CategoryController');
    Route::get('categories/delete/{id}','CategoryController@delete')->name('categories.delete');
    Route::resource('blogs','BlogController');
    Route::get('blog/delete/{id}','BlogController@delete')->name('blog.delete');
    });
