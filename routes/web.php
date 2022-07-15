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
Route::get('/process', [HomeController::class, 'process']);


Route::get('/categories', [HomeController::class, 'getCategories']);
Route::get('/categories/{id}', [HomeController::class, 'getStories']);
Route::get('/stories/{id}', [HomeController::class, 'getChapters']);
Route::get('/chapters/{id}', [HomeController::class, 'getChapter']);