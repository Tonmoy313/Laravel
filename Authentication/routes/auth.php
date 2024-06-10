<?php
use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;

//login
Route::get('login',[AuthController::class,'index'])->name('loginPg');
Route::post('login',[AuthController::class,'login'])->name('login');
//logout
Route::get('logout',[AuthController::class,'logout'])->name('logout');
//register
Route::get('register',[AuthController::class,'signup'])->name('registerPg');
Route::post('register',[AuthController::class,'register'])->name('register');