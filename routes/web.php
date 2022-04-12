<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/product',[ProductController::class,'index']);
Route::get('/create-product',[ProductController::class,'create'])->name('create.product');
Route::post('/store-product',[ProductController::class,'store'])->name('store.product');
Route::post('/edit-product',[ProductController::class,'edit'])->name('edit.product');
Route::post('/update-product',[ProductController::class,'update'])->name('update.product');
Route::post('/delete-product',[ProductController::class,'destroy'])->name('delete.product');
