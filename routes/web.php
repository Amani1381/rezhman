<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;

Route::get('/', function () {
    return view('index.v1.users.index');
});
Route::get('/episodes', function () {
    return view('index.v1.users.episodes');
});
Route::get('/episodes-details', function () {
    return view('index.v1.users.episodes-details');
});
Route::get('/catadd', function () {
    return view('index.v1.admin.categories.add');
});
Route::group(['prefix'=>'admin','namespace'=>'App\Http\Controllers\Admin'],function (){
    Route::resource('categories','CategoryController');
    Route::Patch('categories/update/{id}','CategoryController@update')->name('update.category');
    Route::get('categories/delete/{id}','CategoryController@delete')->name('categories.delete');
    });
