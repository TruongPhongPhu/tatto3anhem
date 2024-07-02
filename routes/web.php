<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AuthController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\BookingformController;
use App\Http\Controllers\BookingadminController;
use App\Http\Controllers\BookingCOntroller;

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

Route::get('/customer2', function () {
    return view('welcome2');
});

Route::post('dashboard/index',[DashboardController::class,'index'])->name('dashboard.index');
Route::get('admin',[AuthController::class,'index'])->name('auth.admin');
Route::post('dashboard',[AuthController::class,'login'])->name('auth.login');
Route::get('/logout', [AuthController::class,'logout'])->name('logout');

Route::get('/customer',[CustomerController::class,'index'])->name('user.customer');
Route::get('/customer_add',[CustomerController::class,  'customerAdd'])->name('user.add');
//Route::post('/post_add_customer',[CustomerController::class,'postCustomerAdd'])->name('post_add_customer');
Route::post('customer_add', [CustomerController::class, 'store'])->name('user.store');
Route::get('edit-customer/{customer_id}', [CustomerController::class, 'edit'])->name('user.edit');
Route::post('update-customer/{customer_id}', [CustomerController::class, 'update'])->name('user.update');
Route::delete('delete-customer/{customer_id}', [CustomerController::class, 'delete'])->name('user.delete');

Route::get('/signup','App\Http\Controllers\Frontend\LoginController@signup' );
Route::get('/signin','App\Http\Controllers\Frontend\LoginController@signin' ); 
Route::post('/create-signup','App\Http\Controllers\Frontend\LoginController@create_signup' );
Route::post('/login-customer','App\Http\Controllers\Frontend\LoginController@login_customer' );
Route::get('/logout','App\Http\Controllers\Frontend\LoginController@logout' ); 
Route::get('/product','App\Http\Controllers\Frontend\LoginController@product' );
Route::get('/kemduong','App\Http\Controllers\Frontend\LoginController@kemduong' );
Route::get('/kemduong2','App\Http\Controllers\Frontend\LoginController@kemduong2' );
Route::get('/product2','App\Http\Controllers\Frontend\LoginController@product2' );


Route::get('/bookingform_add',[BookingformController::class,'bookingformAdd'])->name('home.bookingform');
Route::post('/bookingform_add',[BookingformController::class,'store'])->name('home.store');
Route::get('edit-bookingform/{bookingtype_id}', [BookingformController::class, 'edit'])->name('home.edit');
Route::post('update-bookingform /{bookingtype_id}', [BookingformController::class, 'update'])->name('home.update');
Route::delete('delete-bookingform/{bookingtype_id}', [BookingformController::class, 'delete'])->name('home.delete');
Route::get('bookingadmin',[BookingadminController::class,'index'])->name('home.bookingadmin');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('booking',[BookingController::class,'index'])->name('booking.customer');
Route::get('/booking_add',[BookingController::class,'bookingAdd'])->name('booking.add');
Route::post('booking_add', [BookingController::class, 'store'])->name('booking.store');
Route::get('edit-booking/{booking_id}', [BookingController::class, 'edit'])->name('booking.edit');
Route::post('update-booking/{booking_id}', [BookingController::class, 'update'])->name('booking.update');
Route::delete('delete-booking/{booking_id}', [BookingController::class, 'delete'])->name('booking.delete');
Route::get('/latest-booking', [BookingController::class, 'showLatestBooking'])->name('booking.show');





