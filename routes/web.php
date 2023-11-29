<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\OfferController;
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
Route::get('login', [AuthController::class, 'showLoginForm'])->name('admin.LoginPage');
Route::post('login', [AuthController::class, 'login']);
});


Route::group(['prefix'=> 'admin', 'middleware' => 'auth:admin'],function (){

    Route::get('logout', [AuthController::class, 'logout'])->name('logout');


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

    Route::get('offers', [OfferController::class, 'index'])->name('offers.index');
    Route::Put('offers.update', [OfferController::class,'update'])->name('offers.update');


    Route:: get ('/{page}',[SliderController::class,'home']);

//    Route:: get ('admin/home',[SliderController::class,'home']);

});

// index page
Route::get('/', [HomeController::class,'index'])->name('index');

// about page
Route::get('about', [HomeController::class,'about'])->name('about');

## contact us
Route::get('contact', [HomeController::class,'contact'])->name('contact');

Route::post('ContactUs', [HomeController::class,'ContactUs'])->name('ContactUs');

//## single_product
Route::get('singleProduct/{id}', [HomeController::class,'singleProduct'])->name('singleProduct');

Route::get('category/{id}', [HomeController::class,'getCategory'])->name('category');

Route::get('shop', [HomeController::class,'shop'])->name('shop');
