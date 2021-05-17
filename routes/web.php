<?php

use Illuminate\Support\Facades\App;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/', \App\Http\Livewire\home::class)->name('home');

// Route::get('/products', \App\Http\Livewire\product::class)->name('products');
    // Route::livewire('/products/liga/{ligaId}', 'product-liga')->name('products.liga');
    // Route::livewire('/products/{id}', 'product-detail')->name('products.detail');
    // Route::livewire('/keranjang', 'keranjang')->name('keranjang');
    // Route::livewire('/checkout', 'checkout')->name('checkout');
    // Route::livewire('/history', 'history')->name('history');
