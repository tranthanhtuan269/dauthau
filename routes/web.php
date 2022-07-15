<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Resources\CategoryResource;
use App\Models\Category;
use App\Http\Resources\StoryResource;
use App\Models\Story;

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

Route::get('/stories', function () {
    return StoryResource::collection(Story::all());
});

Route::get('/categories', function () {
    return CategoryResource::collection(Category::all());
});