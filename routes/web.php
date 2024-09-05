<?php


use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\CheckoutController;
//use App\Http\Controllers\ProductController;


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

Route::get('/', function () {
    return view('welcome');
});
Route::post('/auth',[UserController::class, 'auth']);
Route::get('/user',[UserController::class, 'user']);
Route::get('/logout',[UserController::class, 'logout']);
Route::get('/user/show/{id}', [UserController::class, 'show'])->name('user.show');
Route::get('/user/cekout', [UserController::class, 'cekout']);
Route::get('/cart', [UserController::class, 'cart']);

// Rute untuk halaman checkout berhasil
Route::get('/checkout', [UserController::class, 'checkout']);


//Route::get('/user/show',[UserController::class, 'add']);

//Route::get('/product', [ProductController::class, 'index'])->name('product.index');
//Route::post('/product/{id}', [ProductController::class, 'show'])->name('product.show');
//Route::post('/product/{id}/add-to-cart', [ProductController::class, 'addToCart'])->name('product.addToCart');
//Route::get('/cart', [ProductController::class, 'cart'])->name('product.cart');
