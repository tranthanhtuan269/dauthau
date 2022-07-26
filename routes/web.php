<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index']);
Route::get('/gioi-thieu', [HomeController::class, 'about']);
Route::get('/dich-vu', [HomeController::class, 'service']);
Route::get('/du-an', [HomeController::class, 'project']);
Route::get('/lien-he', [HomeController::class, 'contact']);
Route::get('/dau-thau', [HomeController::class, 'dauthau']);

Route::get('/process', [HomeController::class, 'process']);