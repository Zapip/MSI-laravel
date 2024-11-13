<?php

use App\Http\Controllers\ChatBotController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;


Route::get('/', [ProductController::class, 'index']);
Route::get('/add', [ProductController::class, 'create'])->name('add');
Route::post('/add', [ProductController::class, 'store']);
Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('edit');
Route::put('/edit/{id}', [ProductController::class, 'update']);
Route::delete('/destroy/{id}', [ProductController::class, 'destroy'])->name('destroy');

Route::get('/chatbot', [ChatBotController::class, 'index'])->name('chatbot');
Route::post('/chatbot', [ChatBotController::class, 'replies'])->name('chatbot');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//route tambah data
Route::get('/supplier/tambah_data', [App\Http\Controllers\supplierController::class, 'tambah_data']);
//route simpan data
Route::post('/supplier/simpan_data', [App\Http\Controllers\supplierController::class, 'simpan_data']);

//route tampil data
Route::get('/supplier/tampil_data', [App\Http\Controllers\supplierController::class, 'tampil_data']);
Route::get('/supplier/edit_data/{id}', [App\Http\Controllers\supplierController::class, 'edit_data']);
Route::post('/supplier/update_data', [App\Http\Controllers\supplierController::class, 'update_data']);
Route::get('/supplier/hapus_data/{id}', [App\Http\Controllers\supplierController::class, 'hapus_data']);
