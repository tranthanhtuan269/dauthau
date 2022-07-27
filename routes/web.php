<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\GoiThauController;
use App\Http\Controllers\BenMoiThauController;
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

Route::get('/', [HomeController::class, 'index'])->name('/');
Route::get('/gioi-thieu', [HomeController::class, 'about'])->name('gioi-thieu');
Route::get('/dich-vu', [HomeController::class, 'service'])->name('dich-vu');
Route::get('/du-an', [HomeController::class, 'project'])->name('du-an');
Route::get('/lien-he', [HomeController::class, 'contact'])->name('lien-he');
Route::get('/goi-thau', [GoiThauController::class, 'index'])->name('goi-thau');
Route::get('/goi-thau/{id}', [GoiThauController::class, 'show'])->name('goi-thau/show');
Route::get('/ben-moi-thau/{id}', [BenMoiThauController::class, 'show'])->name('ben-moi-thau/show');

Route::get('/process', [HomeController::class, 'process']);