<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AdminController;


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

Route::get('/', [MainController::class, 'index']);
Route::post('/submit', [MainController::class, 'submit'])->name('submit');
Route::get('/locale/{id}', [MainController::class, 'language']);



Route::group(['middleware' => ['auth'], 'prefix' => 'admin'], function () {
    Route::get('/', [AdminController::class, 'index'])->name('dashboard');
    Route::post('/add_why', [AdminController::class, 'add_why'])->name('add_why');
    Route::post('/add_about', [AdminController::class, 'add_about'])->name('add_about');

});

