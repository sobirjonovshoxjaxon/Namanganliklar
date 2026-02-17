<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

//PageController 
Route::get('/',[PageController::class, 'index'])->name('index.page');
Route::get('/post/{slug}',[PageController::class, 'post'])->name('post.page');
Route::get('/postdetail/{slug}',[PageController::class, 'postDetail'])->name('postdetail.page');
Route::get('/contact',[PageController::class, 'contact'])->name('contact.page');


//HomeController 
Route::get('/admin/panel',[HomeController::class, 'admin'])->name('admin.dashboard');



//Dashboard Breeze 
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});




require __DIR__.'/auth.php';
