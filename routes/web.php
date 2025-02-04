<?php

use App\Http\Controllers\BukuController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/book',[BukuController::class,'index'])->name('buku.index');
Route::get('/book/create',[BukuController::class,'create'])->name('buku.create');
Route::get('/book/show',[BukuController::class,'show'])->name('buku.show');
Route::get('/book/{id}/edit',[BukuController::class,'edit'])->name('buku.edit');
Route::put('/book/{id}',[BukuController::class,'update'])->name('buku.update');
Route::post('/book/store',[BukuController::class,'store'])->name('buku.store');
Route::delete('/book/{id}',[BukuController::class,'destroy'])->name('buku.delete');