<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BackOfficeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\HeaderController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PortfolioController;
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
    return view('welcome');
});

Route::get('/home', [HomeController::class, "index"]);
Route::get('/backoffice',[BackOfficeController::class, "index"])->middleware(['auth', 'admin']);
Route::resource('/header', HeaderController::class)->middleware(['auth', 'admin']);
Route::resource('/about', AboutController::class)->middleware(['auth', 'admin']);
Route::resource('/portfolio', PortfolioController::class)->middleware(['auth', 'admin']);
Route::resource('/contact', ContactController::class)->middleware(['auth', 'admin']);
Route::resource('/footer', FooterController::class)->middleware(['auth', 'admin']);



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
