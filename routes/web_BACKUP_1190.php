<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\BlogController;



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';


Route::group(['prefix'=>'admin','namespace'=>'App\Http\Controllers\Admin'],function (){
    Route::resource('categories','CategoryController');
    Route::Patch('categories/update/{id}','CategoryController@update')->name('update.category');
    Route::get('categories/delete/{id}','CategoryController@delete')->name('categories.delete');
    Route::get('blog/delete/{id}','BlogController@delete')->name('blog.delete');
    Route::resource('blogs','BlogController');
    });

