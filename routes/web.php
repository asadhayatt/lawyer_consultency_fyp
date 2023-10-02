<?php

use App\Http\Controllers\Client\Dashboard\DashboardController;
use App\Http\Controllers\Client\Login\LoginController;
use App\Http\Controllers\Lawyer\ContactUs\ContactUsController;
use App\Http\Controllers\Lawyer\Dashboard\DashboardController as DashController;
use App\Http\Controllers\Lawyer\Post\PostController;
use App\Http\Controllers\Web\HomeController;
use Illuminate\Support\Facades\Auth;
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


// ------------------------------------------------------
// Clients Routes
// ------------------------------------------------------
// Login Routes
Route::get('/sign-up',[LoginController::class,'showSignUpPage'])->name('login');
Route::post('/store-sign-up',[LoginController::class,'storeSignUp']);


// Clients Dashboard

Route::prefix('client/')->group(function(){
    
    Route::middleware('auth')->group(function(){

        Route::get('dashboard',[DashboardController::class,'index']);
        Route::get('logout',function(){
            Auth::logout();
            return redirect()->to('sign-up');
        });
    
    });
});









// ------------------------------------------------------
        // Lawyer Routes
// ------------------------------------------------------

Route::prefix('admin/')->group(function(){
    //dashboard routes
    Route::get('dashboard',[DashController::class,'index']);
    //posts routes
    Route::get('posts',[PostController::class,'postList']);
    //contact us routes
   Route::get('contact-us',[ContactUsController::class,'index']);
   Route::get('delete-contact-us/{id}',[ContactUsController::class,'delete']);
});

// ------------------------------------------------------
        // Web Routes
// ------------------------------------------------------



Route::get('/',[HomeController::class,'index']);
Route::get('/about',[HomeController::class,'about']);
Route::get('/services',[HomeController::class,'services']);
Route::get('/contact',[HomeController::class,'contact']);
Route::get('/blog',[HomeController::class,'blog']);
Route::get('/blog-detail',[HomeController::class,'blogDetail']);
Route::post('/store-contact',[HomeController::class,'storeContact']);
