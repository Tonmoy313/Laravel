<?php
use App\Http\Controllers\Backend\BackendController;
use App\Http\Middleware\isUser;
use Illuminate\Support\Facades\Route;

//frontend
Route::get('/', function () {
    return view('welcome');
})->name('home');
//backend
// Route::get('dashboard',[BackendController::class,'index'])->middleware(isUser::class)->name('dashboard');
Route::prefix('backend')->middleware(isUser::class)->group(function () {
    Route::get('dashboard',[BackendController::class,'index'])->name('dashboard');
    Route::get('posts',[BackendController::class,'anotherPage'])->name('posts');
});
require __DIR__.'/auth.php';
