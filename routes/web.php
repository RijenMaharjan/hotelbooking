<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CustomerController;
use App\Http\controllers\RoomtypeController;
use App\Http\controllers\BookingController;
use App\Http\controllers\PageController;

use App\Http\controllers\HomeController;

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

Route::get('/', [HomeController::class, 'home']);
Route::get('page/contact-us',[PageController::class,'contact_us']);

// admin Login
Route::get('admin/login', [AdminController::class, 'login']);
Route::post('admin/login', [AdminController::class, 'check_login']);
Route::get('admin/logout', [AdminController::class, 'logout']);

// admin dashboard
Route::get('admin', [AdminController::class, 'dashboard']);

// RoomType routes 
Route::get('admin/roomtype/{id}/delete', [RoomtypeController::class, 'destroy']);
Route::resource('admin/roomtype', RoomtypeController::class);

// Room Routes
Route::get('admin/rooms/{id}/delete', [RoomController::class, 'destroy']);
Route::resource('admin/rooms',RoomController::class);

// // Customer Routes
Route::get('admin/customer/{id}/delete', [CustomerController::class, 'destroy']);
Route::resource('admin/customer', CustomerController::class);

// Delete Images Routes
Route::get('admin/roomtypeimage/delete/{id}', [RoomtypeController::class, 'destroy_image']);

// // Booking
Route::get('admin/booking/{id}/delete',[BookingController::class, 'destroy']);
Route::get('admin/booking/available-rooms/{checkin_date}',[BookingController::class, 'available_rooms']);
Route::resource('admin/booking',BookingController::class);

//
Route::get('login', [CustomerController::class, 'login']);
Route::post('customer/login', [CustomerController::class, 'customer_login']);
Route::get('register', [CustomerController::class, 'register']);
Route::get('logout', [CustomerController::class, 'logout']);

Route::get('booking', [BookingController::class, 'front_booking']);
Route::get('room', [AdminController::class, 'home']);
Route::get('checkroom', [AdminController::class,'display']);

//Testimonial
Route::get('customer/add-testimonial',[HomeController::class,'add_testimonial']);
Route::post('customer/save-testimonial',[HomeController::class,'save_testimonial']);
Route::get('admin/testimonial/{id}/delete',[AdminController::class,'destroy_testimonial']);
Route::get('admin/testimonials',[AdminController::class,'testimonials']);
Route::post('save-contactus',[PageController::class,'save_contactus']);