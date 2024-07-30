<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Middleware\Admin;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});

Route::get('/about', [HomeController::class,'about'])->name('about');

Route::get('/home', [HomeController::class,'home'])->name('home');

Route::get('/eventlist', [HomeController::class,'eventlist'])->name('eventlist');

Route::get('/eventcreation', [AdminController::class,'eventcreation'])->name('eventcreation');

Route::get('/admindashboard', [HomeController::class,'index'])->name('index');

Route::get('/updateuser/{id}', [AdminController::class,'updateuser'])->name('updateuser');

Route::post('/updateauser/{id}', [AdminController::class,'updateauser'])->name('updateauser');

Route::get('/deleteuser/{id}', [AdminController::class,'deleteuser'])->name('deleteuser');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
