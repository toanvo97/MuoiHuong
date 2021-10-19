<?php

use App\Http\Controllers\client\ContactController;
use App\Http\Controllers\client\HomeController;
use App\Http\Controllers\client\NewsController;
use App\Http\Controllers\client\NewsDetailController;
use App\Http\Controllers\client\Products_DetailController;
use App\Http\Controllers\client\ProductsController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class,'index']);
Route::get('/san-pham',[ProductsController::class,'index'])->name('products');
Route::get('/chi-tiet-san-pham',[Products_DetailController::class,'index'])->name('productDetail');
Route::get('/lien-he',[ContactController::class,'index'])->name('contact');
Route::get('/tin-tuc', [NewsController::class,'index'])->name('news');
Route::get('/chi-tiet-tin-tuc', [NewsDetailController::class,'index'])->name('newsDetail');
