<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WordController;
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

Route::get('/',[WordController::class,'viewhomebaselogin'])
->name('all.user');
Route::get('/User-Home',[UserController::class,'viewhome'])
->name('user.homes');
Route::get('/User-Jadwal',[UserController::class,'viewjadwal'])
->name('user.jadwal');
Route::get('/User-Create-Jadwal',[UserController::class,'viewforcreatejadwal'])
->name('user.view-create.jadwal');
Route::get('/User-Create-account',[UserController::class,'viewforcreateaccount'])
->name('user.viewcreate.account');
Route::get('/User-Login-account',[UserController::class,'viewforloginaccount'])
->name('user.viewlogin.account');
