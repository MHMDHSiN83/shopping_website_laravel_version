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
Route::post('/setfavorite', [App\Http\Controllers\user\FavoriteController::class, 'setFavorite'])->name('setfavorite');
Route::post('/deletefavorite', [App\Http\Controllers\user\FavoriteController::class, 'deleteFavorite'])->name('deletefavorite');

Route::get('/', function () {
    return view('index');
})->name('index');
Route::get('/product', function () {
    return view('uesr.product');
});

Route::get('products', [App\Http\Controllers\user\ProductController::class, 'index'])->name('user.products.index');
Route::get('product/{product}', [App\Http\Controllers\user\ProductController::class, 'show'])->name('user.product.show');
Route::post('comments/{product}', [App\Http\Controllers\user\CommentController::class, 'store'])->name('user.comments.store');
Route::get('comments/like/{comment}', [App\Http\Controllers\user\CommentController::class, 'like'])->name('user.comments.like');
Route::get('comments/dislike/{comment}', [App\Http\Controllers\user\CommentController::class, 'dislike'])->name('user.comments.dislike');

Route::middleware('admin')->prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('admin.index');
    })->name('admin.index');
    // Route::resource('categories', CategoryController::class);
    Route::prefix('categories')->group(function () {
        Route::get('/', [App\Http\Controllers\admin\CategoryController::class, 'index'])->name('categories.index');
        Route::post('/', [App\Http\Controllers\admin\CategoryController::class, 'store'])->name('categories.store');
        Route::delete('/{category}', [App\Http\Controllers\admin\CategoryController::class, 'destroy'])->name('categories.destroy');
    });
    Route::prefix('users')->group(function () {
        Route::get('/', [App\Http\Controllers\admin\UserController::class, 'index'])->name('users.index');
        Route::get('/changeRole{user}', [App\Http\Controllers\admin\UserController::class, 'changeRole'])->name('users.changeRole');
        Route::get('/changeStatus{user}', [App\Http\Controllers\admin\UserController::class, 'changeStatus'])->name('users.changeStatus');
        Route::delete('/{user}', [App\Http\Controllers\admin\UserController::class, 'destroy'])->name('users.destroy');
    });
    Route::resource('products', App\Http\Controllers\admin\ProductController::class);
    Route::prefix('products')->group(function () {
        Route::get('/changeStatus{product}', [App\Http\Controllers\admin\ProductController::class, 'changeStatus'])->name('products.changeStatus');
    });
    Route::resource('comments', App\Http\Controllers\admin\CommentController::class);
    Route::prefix('comments')->group(function () {
        Route::get('/changeStatus/{comment}', [App\Http\Controllers\admin\CommentController::class, 'changeStatus'])->name('comments.changeStatus');
    });

});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});
