<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\PageController;
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

Route::get('/', [PageController::class, 'index'])->name('home');

Route::get('/logIn', [PageController::class, 'logIn'])->name('login');

Route::get('/categories/{category:slug}', [CategoryController::class, 'show'])->name('categories.show');

Route::group(['prefix' => '/feedback', 'as' => 'feedback.'], function () {
    Route::get('/', [FeedbackController::class, 'index'])->name('index');
    Route::post('/', [FeedbackController::class, 'store'])->name('store');
});
