<?php

use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\HotelController;
use App\Http\Controllers\Admin\ImageController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReservationController;
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
Route::get('/faq', [HomeController::class, 'faq'])->name('faq');
Route::post('/sendmessage', [HomeController::class, 'sendmessage'])->name('sendmessage');
Route::get('/services', [HomeController::class, 'services'])->name('services');
Route::get('/hotels', [HomeController::class, 'hotels'])->name('hotels');
Route::get('/categoryhotels/{id}/{slug}', [HomeController::class, 'categoryhotels'])->name('categoryhotels');
Route::get('/references', [HomeController::class, 'references'])->name('references');
Route::get('/blank', [HomeController::class, 'blank'])->name('blank');
Route::get('hotel/{id}/{slug}', [HomeController::class, 'hotel'])->name('hotel');
Route::get('booknow/{id}', [HomeController::class, 'booknow'])->whereNumber('id')->name('booknow');
Route::get('/gethotel', [HomeController::class,'gethotel'])->name('gethotel');


#User
Route::middleware('auth')->prefix('user')->namespace('user')->group(function (){

    #Reservation
    Route::prefix('reservation')->group(function (){
        Route::get('/',[ReservationController::class, 'index'])->name('user_reservations');
        Route::post('/create',[ReservationController::class, 'create'])->name('user_reservation_add');
        Route::post('/store',[ReservationController::class, 'store'])->name('user_reservation_store');
        Route::get('/edit/{id}',[ReservationController::class, 'edit'])->name('user_reservation_edit');
        Route::post('/update/{id}',[ReservationController::class, 'update'])->name('user_reservation_update');
        Route::get('/delete/{id}',[ReservationController::class, 'destroy'])->name('user_reservation_delete');
        Route::get('/show/{created_at}',[ReservationController::class, 'show'])->name('user_reservation_show');
    });
});



Route::get('/logout', [AdminHomeController::class, 'logout'])->name('admin_log_out');
Route::get('/adminlogin', [AdminHomeController::class, 'login'])->name('admin_login');
#Admin
Route::middleware('auth')->prefix('admin')->group(function (){
    #Admin Role
    Route::middleware('admin')->group(function(){

        #Admin Login
        Route::get('/',[AdminHomeController::class, 'index']) -> name('admin_home');

        Route::post('/logincheck', [AdminHomeController::class, 'logincheck'])->name('admin_login_check');


        #Category
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

        #Message
        Route::prefix('message')->group(function (){
            Route::get('/',[MessageController::class, 'index'])->name('admin_message');
            Route::get('/edit/{id}',[MessageController::class, 'edit'])->name('admin_message_edit');
            Route::post('/update/{id}',[MessageController::class, 'update'])->name('admin_message_update');
            Route::get('/delete/{id}',[MessageController::class, 'destroy'])->name('admin_message_delete');
            Route::get('/show',[MessageController::class, 'show'])->name('admin_message_show');
        });

        #Faq
        Route::prefix('faq')->group(function () {
            Route::get('/', [FaqController::class, 'index'])->name('admin_faq');
            Route::get('/create', [FaqController::class, 'create'])->name('admin_faq_add');
            Route::post('/store', [FaqController::class, 'store'])->name('admin_faq_store');
            Route::get('/edit/{id}', [FaqController::class, 'edit'])->name('admin_faq_edit');
            Route::post('/update/{id}', [FaqController::class, 'update'])->name('admin_faq_update');
            Route::get('/delete/{id}', [FaqController::class, 'destroy'])->name('admin_faq_delete');
            Route::get('/show', [FaqController::class, 'show'])->name('admin_faq_show' );
        });

        #Admin Reservation
        Route::prefix('reservation')->group(function (){
            Route::get('/',[\App\Http\Controllers\Admin\ReservationController::class, 'index'])->name('admin_reservations');
            Route::get('/list/{status}',[\App\Http\Controllers\Admin\ReservationController::class, 'list'])->name('admin_reservation_list');
            Route::get('/create/{id}',[\App\Http\Controllers\Admin\ReservationController::class, 'create'])->name('admin_reservation_add');
            Route::post('/store',[\App\Http\Controllers\Admin\ReservationController::class, 'store'])->name('admin_reservation_store');
            Route::get('/edit/{id}',[\App\Http\Controllers\Admin\ReservationController::class, 'edit'])->name('admin_reservation_edit');
            Route::post('/update/{id}',[\App\Http\Controllers\Admin\ReservationController::class, 'update'])->name('admin_reservation_update');
            Route::post('/detail/update/{id}',[\App\Http\Controllers\Admin\ReservationController::class, 'detailupdate'])->name('admin_reservation_detail_update');
            Route::get('/delete/{id}',[\App\Http\Controllers\Admin\ReservationController::class, 'destroy'])->name('admin_reservation_delete');
            Route::get('/show/{id}',[\App\Http\Controllers\Admin\ReservationController::class, 'show'])->name('admin_reservation_show');
        });

        #Admin User
        Route::prefix('user')->group(function (){
            Route::get('/',[\App\Http\Controllers\Admin\UserController::class, 'index'])->name('admin_users');
            Route::get('/create',[\App\Http\Controllers\Admin\UserController::class, 'create'])->name('admin_user_add');
            Route::post('/store',[\App\Http\Controllers\Admin\UserController::class, 'store'])->name('admin_user_store');
            Route::get('/edit/{id}',[\App\Http\Controllers\Admin\UserController::class, 'edit'])->name('admin_user_edit');
            Route::post('/update/{id}',[\App\Http\Controllers\Admin\UserController::class, 'update'])->name('admin_user_update');
            Route::get('/delete/{id}',[\App\Http\Controllers\Admin\UserController::class, 'destroy'])->name('admin_user_delete');
            Route::get('/show/{id}',[\App\Http\Controllers\Admin\UserController::class, 'show'])->name('admin_user_show');
            Route::get('/userrole/{id}',[\App\Http\Controllers\Admin\UserController::class, 'user_roles'])->name('admin_user_roles');
            Route::post('/userrolestore/{id}',[\App\Http\Controllers\Admin\UserController::class, 'user_role_store'])->name('admin_user_role_add');
            Route::get('userroledelete/{userid}/{roleid}',[\App\Http\Controllers\Admin\UserController::class, 'user_role_delete'])->name('admin_user_role_delete');
        });
    });#Admin
});#Auth

Route::middleware('auth')->prefix('myaccount')->namespace('myaccount')->group(function (){

    Route::get('/',[UserController::class, 'index'])->name('myprofile');
    Route::get('/mybookings',[ReservationController::class, 'index'])->name('mybookings');

    #Hotel
    Route::prefix('hotel')->group(function (){
        Route::get('/',[\App\Http\Controllers\HotelController::class, 'index'])->name('user_hotels');
        Route::get('/create',[\App\Http\Controllers\HotelController::class, 'create'])->name('user_hotel_add');
        Route::post('/store',[\App\Http\Controllers\HotelController::class, 'store'])->name('user_hotel_store');
        Route::get('/edit/{id}',[\App\Http\Controllers\HotelController::class, 'edit'])->name('user_hotel_edit');
        Route::post('/update/{id}',[\App\Http\Controllers\HotelController::class, 'update'])->name('user_hotel_update');
        Route::get('/delete/{id}',[\App\Http\Controllers\HotelController::class, 'destroy'])->name('user_hotel_delete');
        Route::get('/show',[\App\Http\Controllers\HotelController::class, 'show'])->name('user_hotel_show');
    });
});



//Route::middleware('auth')->prefix('user')->namespace('user')->group(function (){
//    Route::get('/profile',[UserController::class, 'index'])->name('userprofile');
//});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


