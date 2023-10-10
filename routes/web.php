<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Site\HomeController;
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

Route::group(['prefix' => 'admin'], function () {
Route::get('admin/login', [AuthController::class, 'showLoginForm'])->name('admin.LoginPage');
Route::post('admin/login', [AuthController::class, 'login']);
});


Route::group(['prefix'=> 'admin', 'middleware' => 'auth:admin'],function (){
    Route::resource('slider', SliderController::class);

    Route::resource('admins', AdminController::class);

    Route::get('/admins', [AdminController::class, 'index'])->name('admin.index');

    Route::resource('categories', CategoryController::class);

    Route::resource('sponsors', SponsorsController::class);

    Route::resource('products', ProductController::class);

    Route::resource('contact', ContactController::class);

    Route::resource('about', AboutController::class);
    Route::Put('about.edit', [AboutController::class,'edit'])->name('about.edit');

    Route::resource('reviews', ReviewController::class);

    Route:: get ('/{page}',[SliderController::class,'home']);

    Route::get('admin/logout', [AuthController::class, 'logout'])->name('logout');

});


// index page
Route::get('index', [HomeController::class,'index'])->name('index');

// about page
Route::get('about', [HomeController::class,'about'])->name('about');

## contact us
Route::get('contact', [HomeController::class,'contact'])->name('contact');


