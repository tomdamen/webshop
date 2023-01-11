<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CatalogueController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShoppingcartController;

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

Route::get('/', [HomeController::class, 'show']);

Route::get('/home', [HomeController::class, 'show']);

Route::get('/about', [AboutController::class, 'show']);

Route::get('/catalogue', [CatalogueController::class, 'show']);

Route::get('/product/{id}', [ProductController::class, 'show']);

Route::get('/shoppingcart', [ShoppingcartController::class, 'show']);

Route::post('/shoppingcart/add', [ShoppingcartController::class, 'add']);


