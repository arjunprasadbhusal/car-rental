<?php

use App\Http\Controllers\brandcontroller;
use App\Http\Controllers\cartcontroller;
use App\Http\Controllers\categorycontroller;
use App\Http\Controllers\Dashboardcontroller;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\productscontroller;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/',[PagesController::class,'home'])->name('home');
Route::get('/about',[PagesController::class,'about'])->name('about');
Route::get('/contact',[PagesController::class,'contact'])->name('contact');
Route::get('/categoryproduct/{id}',[PagesController::class,'categoryproduct'])->name('categoryproduct');

Route::get('/viewproduct/{id}',[PagesController::class,'viewproduct'])->name('viewproduct');
Route::middleware('auth')->group(function(){
    Route::post('cart/store',[cartcontroller::class,'store'])->name('cart.store');
    Route::get('mycart',[cartcontroller::class,'mycart'])->name('mycart');
    Route::delete('cart/destroy',[cartcontroller::class,'destroy'])->name('cart.destroy');
    Route::get('checkout/{id}',[cartcontroller::class,'checkout'])->name('checkout');

    //order
    Route::post('order/store',[OrderController::class,'store'])->name('order.store');



});
Route::get('/dashboard',[Dashboardcontroller::class,'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');
Route::middleware('auth')->group(function(){ 

Route::get('/category',[categorycontroller::class,'index'])->name('category.index');
Route::get('/category/create',[categorycontroller::class,'create'])->name('category.create');
 
Route::get('/category/{id}/edit',[categorycontroller::class,'edit'])->name('category.edit');
Route::post('/category/{id} update',[categorycontroller::class,'update'])->name('category.update');
Route::get('/category/{id}/destroy',[categorycontroller::class,'destroy'])->name('category.destroy');

Route::get('/brand',[brandcontroller::class,'index'])->name('brand.index');
Route::get('/brand/create',[brandcontroller::class,'create'])->name('brand.create');
Route::post('/brand/store',[brandcontroller::class,'store'])->name('brand.store');
Route::get('/brand/{id}/edit',[brandcontroller::class,'edit'])->name('brand.edit');
Route::post('/brand/{id}/update',[brandcontroller::class,'update'])->name('brand.update');
Route::get('/brand/{id}/destroy',[brandcontroller::class,'destroy'])->name('brand.destroy');

Route::get('/products',[productscontroller::class,'index'])->name('products.index');
Route::get('/products/create',[productscontroller::class,'create'])->name('products.create');
Route::post('/products/store',[productscontroller::class,'store'])->name('products.store');
Route::get('/products/{id}/edit',[productscontroller::class,'edit'])->name('products.edit');
Route::post('/products/{id}/update',[productscontroller::class,'update'])->name('products.update');
Route::get('/products/{id}/destroy',[productscontroller::class,'destroy'])->name('products.destroy');

//order
Route::get('/orders',[OrderController::class,'index'])->name('orders.index');
Route::get('/orders/{id}/status/{status}',[OrderController::class,'status'])->name('orders.status');

});




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
