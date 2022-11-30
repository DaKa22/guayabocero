<?php

use App\Http\Controllers\ReviewController;
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

// Route::view('', 'pages.home')->name('home');
Route::get('/', [ReviewController::class, 'index'])->name('home');
Route::post('store', [ReviewController::class, 'store'])->name('store');
