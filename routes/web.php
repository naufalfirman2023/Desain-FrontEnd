<?php

use App\Http\Controllers\LandingPage;
use App\Http\Controllers\Product;
use App\Http\Controllers\PromoController;
use App\Http\Controllers\Team;
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

Route::get('/', [LandingPage::class, 'index']);
Route::get('/team', [Team::class, 'index']);
Route::get('/produk', [Product::class, 'index']);
Route::get('/promo', [PromoController::class, 'index']);
