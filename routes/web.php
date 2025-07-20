<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PriceController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TestimonialController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// Route::get('/index', function () {
//     return view('frontend.home.index');
// })->name('index');


Route::get('/index',[HomeController::class, 'index'])->name('index');

Route::get('/about',[AboutController::class, 'index'])->name('about');

Route::get('/service',[ServiceController::class,'index'])->name('service');

Route::get('/contact',[ContactController::class,'index'])->name('contact');

Route::get('/appointment',[AppointmentController::class,'index'])->name('appointment');

Route::get('/price',[PriceController::class,'index'])->name('price');

Route::get('/testimonials',[TestimonialController::class,'index'])->name('testimonial');


Route::get('/team',[TeamController::class,'index'])->name('team');

// Route::get('/team',)

require __DIR__.'/auth.php';
