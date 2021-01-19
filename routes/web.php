<?php

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

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index']);




#Admin
Route::get('/admin',[\App\Http\Controllers\Admin\HomeController::class, 'index']) -> name('admin_home')->middleware("auth");
Route::get('/admin/login', [\App\Http\Controllers\HomeController::class, 'login'])->name('admin_login');
Route::post('/admin/logincheck', [\App\Http\Controllers\HomeController::class, 'logincheck'])->name('admin_login_check');
Route::get('/admin/logout', [\App\Http\Controllers\HomeController::class, 'logout'])->name('admin_log_out');


Route::middleware('auth')->prefix('admin')->group(function (){
    Route::get('category', [\App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('admin_category');
    Route::get('category/add', [\App\Http\Controllers\Admin\CategoryController::class, 'add'])->name('admin_category_add');
    Route::post('category/create', [\App\Http\Controllers\Admin\CategoryController::class, 'create'])->name('admin_category_create');
    Route::get('category/edit/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'edit'])->name('admin_category_edit');
    Route::post('category/update/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'update'])->name('admin_category_update');
    Route::get('category/delete/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'destroy'])->name('admin_category_delete');
    Route::get('category/show', [\App\Http\Controllers\Admin\CategoryController::class, 'show'])->name('admin_category_show');


    #Hotel
    Route::prefix('hotel')->group(function (){
        Route::get('/',[\App\Http\Controllers\Admin\HotelController::class, 'index'])->name('admin_hotels');
        Route::get('/create',[\App\Http\Controllers\Admin\HotelController::class, 'create'])->name('admin_hotel_add');
        Route::post('/store',[\App\Http\Controllers\Admin\HotelController::class, 'store'])->name('admin_hotel_store');
        Route::get('/edit/{id}',[\App\Http\Controllers\Admin\HotelController::class, 'edit'])->name('admin_hotel_edit');
        Route::post('/update/{id}',[\App\Http\Controllers\Admin\HotelController::class, 'update'])->name('admin_hotel_update');
        Route::get('/delete/{id}',[\App\Http\Controllers\Admin\HotelController::class, 'destroy'])->name('admin_hotel_delete');
        Route::get('/show',[\App\Http\Controllers\Admin\HotelController::class, 'show'])->name('admin_hotel_show');
    });
    #Product Image Gallery
    Route::prefix('image')->group(function (){
        Route::get('/create/{hotel_id}',[\App\Http\Controllers\Admin\ImageController::class, 'create'])->name('admin_image_add');
        Route::post('/store/{hotel_id}',[\App\Http\Controllers\Admin\ImageController::class, 'store'])->name('admin_image_store');
        Route::get('/delete/{id}/{hotel_id}',[\App\Http\Controllers\Admin\ImageController::class, 'destroy'])->name('admin_image_delete');
        Route::get('/show',[\App\Http\Controllers\Admin\ImageController::class, 'show'])->name('admin_image_show');
    });
});
































Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
