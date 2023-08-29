<?php

use App\Http\Controllers\ProductCrudController;
use App\Models\ProductCrud;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [ProductCrudController::class, 'showData']);
Route::get('/add_product', [ProductCrudController::class, 'addData']);
Route::post('/store_product', [ProductCrudController::class, 'storeData']);
Route::get('/edit_product/{id}', [ProductCrudController::class, 'editData'])->name('product.edit');
