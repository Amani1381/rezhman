<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;

Route::get('/', function () {
    return view('index.v1.users.index');
});
//@@@@@@@@


Route::group(['prefix'=>'admin','namespace'=>'App\Http\Controllers\Admin'],function (){
    Route::resource('categories','CategoryController');
    Route::Patch('categories/update/{id}','CategoryController@update')->name('update.category');
    Route::get('categories/delete/{id}','CategoryController@delete')->name('categories.delete');
    Route::get('blog/delete/{id}','BlogController@delete')->name('blog.delete');
    Route::resource('blogs','BlogController');
    });
