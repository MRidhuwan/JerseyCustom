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

Route::get('/products', \App\Http\Livewire\productindex::class)
    ->name('products');

Route::get('/products/liga/{ligaId}', \App\Http\Livewire\productliga::class)
    ->name('products.liga');

Route::get('/products/{id}', \App\Http\Livewire\ProductDetail::class)
    ->name('products.detail');

Route::get('/keranjang', \App\Http\Livewire\Keranjang::class)
    ->name('keranjang');

Route::get('/checkout', \App\Http\Livewire\Checkout::class)
    ->name('checkout');

Route::get('/history', \App\Http\Livewire\history::class)
    ->name('history');
