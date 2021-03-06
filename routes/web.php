<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\BackArticleController;
use App\Http\Controllers\BackhomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Models\BackArticle;
use App\Models\Home;
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

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/article', [ArticleController::class, 'index'])->name('article');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/back', function () {
    return view('back');
});
Route::get('/backhome', [BackhomeController::class, 'index'])->name('backhome');
Route::get('/backarticle', [BackArticleController::class, 'index'])->name('backarticle');
Route::post('add-store', [BackArticleController::class, 'store']);
Route::post('delete/{id}', [BackArticleController::class, 'destroy']);
Route::get('backshow/{id}', [BackArticleController::class, 'show']);