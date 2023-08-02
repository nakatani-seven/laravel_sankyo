<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

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

Route::get('/welcome', function () {
  return view('welcome');
});
Route::get('/', function () {
  return view('index');
});
Route::get('/company', function () {
  return view('company');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::resource('article', ArticleController::class);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/user/article', [ArticleController::class, 'user_index'])->name('article_user.index');
    Route::get('/user/article/{id}', [ArticleController::class, 'update'])->name('article_user.update');
    Route::get('/user/article/{id}', [ArticleController::class, 'destroy'])->name('article_user.destroy');
});

require __DIR__.'/auth.php';
