<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;

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


Route::get('/dashboard', [ProductsController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware('auth')->group(function () {
    Route::get('/products', [ProductsController::class, 'get'])->name('products.get');
    Route::get('/products_by_user/{id}', [ProductsController::class, 'get_by_userid'])->name('products.get_by_id');
    Route::get('/my_products', [ProductsController::class, 'my_products'])->name('products.my_products');
    Route::post('/update', [ProductsController::class, 'update'])->name('products.update');
    Route::post('/products', [ProductsController::class, 'create'])->name('products.create');
    Route::get('/view_update/{id}', [ProductsController::class, 'view_update'])->name('products.view_update');
    Route::get('/delete_products/{id}', [ProductsController::class, 'destroy'])->name('products.destroy');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
