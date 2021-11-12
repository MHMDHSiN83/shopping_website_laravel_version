<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Auth;
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
    return view('index');
})->name('index');
Route::get('/product', function () {
    return view('uesr/product');
});

Route::middleware('admin')->prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('admin.index');
    })->name('admin.index');
    // Route::resource('categories', CategoryController::class);
    Route::prefix('categories')->group(function () {
        Route::get('/', [App\Http\Controllers\CategoryController::class, 'index'])->name('categories.index');
        Route::post('/', [App\Http\Controllers\CategoryController::class, 'store'])->name('categories.store');
        Route::delete('/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');
    });
    Route::prefix('users')->group(function () {
        Route::get('/', [App\Http\Controllers\UserController::class, 'index'])->name('users.index');
        Route::get('/changeRole{user}', [App\Http\Controllers\UserController::class, 'changeRole'])->name('users.changeRole');
        Route::get('/changeStatus{user}', [App\Http\Controllers\UserController::class, 'changeStatus'])->name('users.changeStatus');
        Route::delete('/{user}', [App\Http\Controllers\UserController::class, 'destroy'])->name('users.destroy');
    });
    Route::prefix('products')->group(function () {
        Route::resource('products', App\Http\Controllers\ProductController::class);
        Route::get('/changeStatus{product}', [App\Http\Controllers\ProductController::class, 'changeStatus'])->name('products.changeStatus');
    });

});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});
