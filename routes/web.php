<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\UserController;

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

Route::get('/',[NewsController::class,'index'])->name('index.news');

Route::get('/news/create',[NewsController::class,'create'])->name('create.news');
Route::post('/news/store',[NewsController::class,'store'])->name('store.news');
Route::get('/news/search',[NewsController::class,'search'])->name('search.news');
Route::get('/news/{news}',[NewsController::class,'show'])->name('show.news');
Route::post('/city', [CityController::class,'selectCity'])->name('select.city');
Route::post('/favorites',[UserController::class,'addFavoritesNews'])->name('favorites.user');
Route::get('/favorites',[UserController::class,'indexFavorites'])->name('indexFavorites.user');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

