<?php

use Illuminate\Support\Facades\Route;
// ルーティングを設定するコントローラを宣言する
use App\Http\Controllers\HelloController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\ResponseController;
use App\Http\Controllers\SignInController;
use App\Http\Controllers\CookieController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', [HelloController::class, 'index']);

Route::get('/products', [ProductController::class, 'index']);

Route::get('/products/create', [ProductController::class, 'create']);
 
Route::post('/products/store', [ProductController::class, 'store'])->name('products.store');

Route::get('/products/{id}', [ProductController::class, 'show']);

Route::get('/vendors/create', [VendorController::class, 'create']);
 
Route::post('/vendors/store', [VendorController::class, 'store'])->name('vendors.store');

Route::get('/vendors/{id}', [VendorController::class, 'show']);

Route::get('/requests/create', [RequestController::class, 'create']);
 
Route::post('/requests/confirm', [RequestController::class, 'confirm'])->name('requests.confirm');

Route::get('/responses', [ResponseController::class, 'index']);

Route::get('/sign-in', [SignInController::class, 'create']);
 
Route::post('/sign-in', [SignInController::class, 'store'])->name('sign-in.store');

Route::get('/cookies', [CookieController::class, 'index']);
 
Route::get('/cookies/create', [CookieController::class, 'create'])->name('cookies.create');

Route::post('/cookies/store', [CookieController::class, 'store'])->name('cookies.store');

Route::delete('/cookies/destroy', [CookieController::class, 'destroy'])->name('cookies.destroy');