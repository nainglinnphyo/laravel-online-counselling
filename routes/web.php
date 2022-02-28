<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CounsellorController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\QAController;
use App\Models\Counsellor;
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

Route::get('/register',[AuthController::class,'registerindex'])->name('register');
Route::post('/register',[AuthController::class,'register'])->name('register');
Route::get('/login',[AuthController::class,'loginindex'])->name('login');
Route::post('/login',[AuthController::class,'login'])->name('login');
Route::post('/logout',[AuthController::class,'logout'])->name('logout');

Route::post('/getstart',[QAController::class,'store']);
Route::get('/getstart',[QAController::class,'index'])->name('getstart');

Route::get('/', [HomeController::class,'index'])->name('home');

Route::get('/counsellor_details/{id}',[CounsellorController::class,'details'])->name('counsellor_details');

Route::post('/bookappointment/{cs_id}',[AppointmentController::class,'store'])->name('bookappointment');
Route::get('/appointment',[AppointmentController::class,'index'])->name('appointment');

Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');

Route::get('/createcounsellor',[CounsellorController::class,'index'])->name('createcounsellor')->middleware('is_admin');
Route::get('/counsellor/edit/{id}',[CounsellorController::class,'edit'])->name('editcounsellor')->middleware('is_admin');
Route::post('/counsellor/delete/{id}',[CounsellorController::class,'delete'])->name('deletecounsellor')->middleware('is_admin');
Route::put('/counsellor/update/{id}',[CounsellorController::class,'update'])->name('updatecounsellor')->middleware('is_admin');
Route::post('/createcounsellor',[CounsellorController::class,'store'])->name('createcounsellor')->middleware('is_admin');