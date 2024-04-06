<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index.v1.users.index');
});
