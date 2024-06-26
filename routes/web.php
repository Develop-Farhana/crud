<?php

use App\Http\Controllers\BannerController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\CustomerfrontController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;



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

Route::get('/logout', function () {
    Session::forget('user');
    return redirect('/');
});


Route::view("/","login");
Route::post("/",[UserController::class,'login']);
Route::get('Dashboard',[ProductController::class,'showData']);
Route::get('delete/{id}',[ProductController::class,'delete']);
Route::get('edit/{id}',[ProductController::class,'saveData']);
Route::post('edit',[ProductController::class,'update']);
Route::view('add','add');
Route::post('add',[ProductController::class,'addData']);


//project
Route::get('project',[ProjectController::class,'showProject']);

Route::view('addprojects','add-proj');
Route::post('addprojects',[ProjectController::class,'addProject']);


Route::get('edit-proj/{id}',[ProjectController::class,'editDemo']);


// Route::get('/projects/{id}/edit',[ProjectController::class,'editDemo']);
Route::post('edit-proj',[ProjectController::class,'editProject']);

Route::get('delete-proj/{id}',[ProjectController::class,'destroy']);



Route::get('home', [FrontController::class, 'show'])->name('home');
Route::get('/single-project/{id}', [FrontController::class, 'view'])->name('single-projects');

//home page backend

Route::get('home-page',[BannerController:: class, 'index'])->name('home-page');

// Route::get('home-page', [BannerController::class, 'index'])->name('home-page');
Route::get('/add-banner', [BannerController::class, 'create'])->name('add-banner');

// adding services
Route::post('/post-banner', [BannerController::class, 'store'])->name('post-banner.store');

//editing services
Route::get('/post-banner/{id}', [BannerController::class, 'edit'])->name('post-banner.edit');

Route::put('/update/{id}', [BannerController::class, 'update'])->name('post-banner.update');

// deleting the services

Route::get('/remove-banner/{banner}', [BannerController::class, 'destroy'])->name('remove-banner.destroy');


//customer

Route::get('customer',[CustomerController::class,'index']);
Route::get('banner-front',[FrontController::class,'showBanner']);
Route::get('banner-front',[CustomerfrontController::class,'showCustomer']);