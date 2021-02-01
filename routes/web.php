<?php

use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\HotelController;
use App\Http\Controllers\Admin\ImageController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::redirect('/anasayfa', '/');
Route::redirect('/home', '/');

Route::get('/', [HomeController::class, 'index'])->name('home_home');
Route::get('/aboutus', [HomeController::class, 'aboutus'])->name('aboutus');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/services', [HomeController::class, 'services'])->name('services');
Route::get('/hotels', [HomeController::class, 'hotels'])->name('hotels');
Route::get('/references', [HomeController::class, 'references'])->name('references');
Route::get('/blank', [HomeController::class, 'blank'])->name('blank');





#Admin
Route::get('/admin',[AdminHomeController::class, 'index']) -> name('admin_home')->middleware("auth");
Route::get('/admin/login', [AdminHomeController::class, 'login'])->name('admin_login');
Route::post('/admin/logincheck', [AdminHomeController::class, 'logincheck'])->name('admin_login_check');
Route::get('/logout', [AdminHomeController::class, 'logout'])->name('admin_log_out');


Route::middleware('auth')->prefix('admin')->group(function (){
    Route::get('category', [CategoryController::class, 'index'])->name('admin_category');
    Route::get('category/add', [CategoryController::class, 'add'])->name('admin_category_add');
    Route::post('category/create', [CategoryController::class, 'create'])->name('admin_category_create');
    Route::get('category/edit/{id}', [CategoryController::class, 'edit'])->name('admin_category_edit');
    Route::post('category/update/{id}', [CategoryController::class, 'update'])->name('admin_category_update');
    Route::get('category/delete/{id}', [CategoryController::class, 'destroy'])->name('admin_category_delete');
    Route::get('category/show', [CategoryController::class, 'show'])->name('admin_category_show');


    #Hotel
    Route::prefix('hotel')->group(function (){
        Route::get('/',[HotelController::class, 'index'])->name('admin_hotels');
        Route::get('/create',[HotelController::class, 'create'])->name('admin_hotel_add');
        Route::post('/store',[HotelController::class, 'store'])->name('admin_hotel_store');
        Route::get('/edit/{id}',[HotelController::class, 'edit'])->name('admin_hotel_edit');
        Route::post('/update/{id}',[HotelController::class, 'update'])->name('admin_hotel_update');
        Route::get('/delete/{id}',[HotelController::class, 'destroy'])->name('admin_hotel_delete');
        Route::get('/show',[HotelController::class, 'show'])->name('admin_hotel_show');
    });
    #Product Image Gallery
    Route::prefix('image')->group(function (){
        Route::get('/create/{hotel_id}',[ImageController::class, 'create'])->name('admin_image_add');
        Route::post('/store/{hotel_id}',[ImageController::class, 'store'])->name('admin_image_store');
        Route::get('/delete/{id}/{hotel_id}',[ImageController::class, 'destroy'])->name('admin_image_delete');
        Route::get('/show',[ImageController::class, 'show'])->name('admin_image_show');
    });
    #Setting
    Route::get('setting', [SettingController::class, 'index'])->name('admin_setting');
    Route::post('setting/update',[SettingController::class, 'update'])->name('admin_setting_update');
});

Route::middleware('auth')->prefix('myaccount')->namespace('myaccount')->group(function (){
    Route::get('/',[UserController::class, 'index'])->name('myprofile');
});

//Route::middleware('auth')->prefix('user')->namespace('user')->group(function (){
//    Route::get('/profile',[UserController::class, 'index'])->name('userprofile');
//});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
