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



//Admin
Route::middleware('auth')->prefix('admin')->group(function (){
    Route::get('category', [\App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('admin_category');
    Route::get('category/add', [\App\Http\Controllers\Admin\CategoryController::class, 'add'])->name('admin_category_add');
    Route::get('category/update', [\App\Http\Controllers\Admin\CategoryController::class, 'update'])->name('admin_category_update');
    Route::get('category/delete', [\App\Http\Controllers\Admin\CategoryController::class, 'destroy'])->name('admin_category_delete');
    Route::get('category/show', [\App\Http\Controllers\Admin\CategoryController::class, 'show'])->name('admin_category_show');
});





Route::get('/admin',[\App\Http\Controllers\Admin\HomeController::class, 'index']) -> name('admin_home')->middleware("auth");


//Admin Login
Route::get('/admin/login', [\App\Http\Controllers\HomeController::class, 'login'])->name('admin_login');
Route::post('/admin/logincheck', [\App\Http\Controllers\HomeController::class, 'logincheck'])->name('admin_login_check');
Route::get('/admin/logout', [\App\Http\Controllers\HomeController::class, 'logout'])->name('admin_log_out');























Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
