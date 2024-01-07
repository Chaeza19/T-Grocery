<?php

use Illuminate\Support\Facades\Route;




Route::get('/', App\Livewire\Home::class)->name('home');

Route::middleware('guest')->group(function () {
  Route::get('signIn', App\Livewire\SignIn\Index::class)->name('signIn.index');
  Route::get('signIn/customer', App\Livewire\SignIn\Customer::class)->name('signIn.customer');
  Route::get('signIn/seller', App\Livewire\SignIn\Seller::class)->name('signIn.seller');
  
  Route::get('signUp', App\Livewire\SignUp\Index::class)->name('signUp.index');
  Route::get('signUp/customer', App\Livewire\SignUp\Customer::class)->name('signUp.customer');
  Route::get('signUp/seller', App\Livewire\SignUp\Seller::class)->name('signUp.seller');
});

Route::get('explore', App\Livewire\Explore\Index::class)->name('explore');
Route::get('market/{mart:slug}', App\Livewire\Market\Index::class)->name('market');
Route::get('category/{category:slug}', App\Livewire\Category\Index::class)->name('category');

Route::middleware(['auth'])->group(function () {
  Route::get('cart', App\Livewire\Customer\Cart\Index::class)->name('cart');
  Route::get('delivery', App\Livewire\Customer\Delivery::class)->name('delivery');
  Route::get('payment', App\Livewire\Customer\Payment::class)->name('payment');
  Route::get('order', App\Livewire\Customer\Order\Index::class)->name('order');
});

Route::middleware(['seller'])->group(function () {
  Route::prefix("seller")->group(function () {
    Route::get('', App\Livewire\Seller\Home\Index::class)->name('seller.index');
    Route::get('order', App\Livewire\Seller\Order\Index::class)->name('seller.order');
    Route::get('product/create', App\Livewire\Seller\Product\Create::class)->name('seller.product.create');
    Route::get('product/{product}/edit', App\Livewire\Seller\Product\Edit::class)->name('seller.product.edit');
  });
});

Route::get('/showOrder', fn()=> view('livewire.customer.order.show'))->name('customer.order.showOrder');
Route::get('/emptyOrder', fn()=> view('livewire.customer.order.emptyOrder'))->name('customer.order.emptyOrder');
Route::get('/orderRejected', fn()=> view('livewire.customer.order.orderRejected'))->name('customer.order.orderRejected');