<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;
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



Route::get('/', [HomeController::class, 'index']);
Route::get('/trangchu', [HomeController::class, 'index']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/support', [HomeController::class, 'support']);
Route::get('/blog', [BlogController::class, 'blog']);


Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/productcategory', [ProductController::class, 'productCategory']);

Route::get('/productcategory/{id_nhomsp}', [ProductController::class, 'productcategory'])->name('productcategory');


// admin page
Route::get('/createproduct', [App\Http\Controllers\AdminController::class, 'createproduct'])->name('createproduct');
Route::get('/productlists', [App\Http\Controllers\AdminController::class, 'productlists'])->name('productlists');
Route::get('/dashboard', [App\Http\Controllers\AdminController::class, 'dashboard'])->name('dashboard');