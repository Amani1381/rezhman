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
Route::get('/catadd', function () {
    return view('index.v1.admin.categories.add');
});
