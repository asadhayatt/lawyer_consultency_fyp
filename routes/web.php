<?php

use App\Http\Controllers\Web\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[HomeController::class,'index']);
Route::get('/about',[HomeController::class,'about']);
Route::get('/services',[HomeController::class,'services']);
Route::get('/contact',[HomeController::class,'contact']);
Route::get('/blog',[HomeController::class,'blog']);
Route::get('/blog-detail',[HomeController::class,'blogDetail']);
Route::post('/store-contact',[HomeController::class,'storeContact']);