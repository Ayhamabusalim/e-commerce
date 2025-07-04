<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SubCategoryController;

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
  return view('dashboard');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
Route::get('/master', function () {
    return view('layout.master');
});


Route::get('/category', [CategoryController::class, 'index'])->name('category.index');

Route::get('/category-create', [CategoryController::class, 'create']);
Route::post('/category-store', [CategoryController::class, 'store'])->name('category.store');




Route::get('/category-edit/{category}', [CategoryController::class, 'edit']);
Route::put('/category-update/{category}', [CategoryController::class, 'update'])->name('category.update');
Route::delete('/category-delete/{category}', [CategoryController::class, 'destroy'])->name('category.delete');
route::resource('product', ProductController::class);
route::resource('subcategory', SubCategoryController::class);
