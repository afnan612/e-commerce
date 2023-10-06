<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\SponsorsController;
use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix'=> 'admin'],function (){
    Route::resource('slider', SliderController::class);

    Route::resource('admins', AdminController::class);

    Route::resource('categories', CategoryController::class);

    Route::resource('sponsors', SponsorsController::class);

    Route::resource('products', ProductController::class);

    Route::resource('contact', ContactController::class);

    Route::resource('about', AboutController::class);

    Route::resource('reviews', ReviewController::class);

});

Route::get('admin/login', [AuthController::class, 'showLoginForm'])->name('admin.LoginPage');
