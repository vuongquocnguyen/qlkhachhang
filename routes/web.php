<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\sanphamController;
use App\Http\Controllers\khachhangController;

Route::get('/', function () {
    return view('welcome');
});


Route::group(['prefix' => 'trangchu', 'as' => 'trangchu.'],function () {
    
    Route::get('/tc1',[homeController::class,'tc'])->name('tc');
    Route::get('/tb1',[homeController::class,'tb'])->name('tb');
    Route::get('/kh1',[homeController::class,'kh'])->name('kh');
    // Route::get('/themhanghoa',[homeController::class,'them'])->name('them');
    // Route::post('/themhang-post',[homeController::class,'themhangpost'])->name('themhangpost');
});

Route::group(['prefix' => 'sanpham', 'as' => 'sanpham.'],function () {
    

    Route::get('/themhanghoa',[homeController::class,'them'])->name('them');
    Route::post('/themhang-post',[homeController::class,'themhangpost'])->name('themhangpost');
    Route::get('delete/{id}',[homeController::class,'delete'])->name('delete');
});

