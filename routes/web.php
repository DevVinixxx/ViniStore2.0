<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShopController;
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

Route::get('/', [ShopController::class, 'index'])->name('index');

Route::middleware(['auth'])->group(function(){
    
    Route::get('/produto/criar',[ProductController::class, 'create'])->name('create');

    Route::post('/product/create', [ProductController::class, 'store'])->name('store');

    Route::get('/carrinho', [ShopController::class, 'cart'])->name('cart');

    Route::get('/dashboard', [ShopController::class, 'dashboard'])->name('dashboard');

});




Route::get('/sobre', [ShopController::class, 'about'])->name('about');

Route::get('/contato', [ShopController::class, 'contact'])->name('contact');

Route::get('/produtos', [ProductController::class, 'index'])->name('products');

Route::get('/produto/{id?}/', [ProductController::class, 'show'])->name('product');



require __DIR__.'/auth.php';
