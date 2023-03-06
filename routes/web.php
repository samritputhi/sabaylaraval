<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin\DarshboardController;
use App\Http\Controllers\Admin\{MenuController,CategoryController,NewController};
use App\Http\Controllers\HomeController;





/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/',[HomeController::class,'index'])->name('home.index');
Route::get('/category/{id}',[HomeController::class,'category'])->name('home.category');
Route::get('/detail/{id}',[HomeController::class,'detail'])->name('home.detail');


Route::get('admin/darshboard',[DarshboardController::class,'index'])->name('admin.darshboard.index');

Route::get('admin/menu/index',[MenuController::class,'index'])->name('admin.menu.index');
Route::get('admin/menu/create',[MenuController::class,'create'])->name('admin.menu.create');
Route::post('admin/menu/store',[MenuController::class,'store'])->name('admin.menu.store');
Route::get('admin/menu/edit/{id}',[MenuController::class,'edit'])->name('admin.menu.edit');
Route::post('admin/menu/update/{id}',[MenuController::class,'update'])->name('admin.menu.update');
Route::get('admin/menu/delete/{id}',[MenuController::class,'delete'])->name('admin.menu.delete');

Route::get('admin/category/index',[CategoryController::class,'index'])->name('admin.category.index');
Route::get('admin/category/create',[CategoryController::class,'create'])->name('admin.category.create');
Route::post('admin/category/store',[CategoryController::class,'store'])->name('admin.category.store');
Route::get('admin/category/edit/{id}',[CategoryController::class,'edit'])->name('admin.category.edit');
Route::post('admin/category/update/{id}',[CategoryController::class,'update'])->name('admin.category.update');
Route::get('admin/category/delete/{id}',[CategoryController::class,'delete'])->name('admin.category.delete');

Route::get('admin/news/index',[NewController::class,'index'])->name('admin.news.index');
Route::get('admin/news/create',[NewController::class,'create'])->name('admin.news.create');
Route::post('admin/news/store',[NewController::class,'store'])->name('admin.news.store');
Route::get('admin/news/edit/{id}',[NewController::class,'edit'])->name('admin.news.edit');
Route::post('admin/news/update/{id}',[NewController::class,'update'])->name('admin.news.update');
Route::get('admin/news/delete/{id}',[NewController::class,'delete'])->name('admin.news.delete');
