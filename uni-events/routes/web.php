<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RStudentController;
use App\Http\Controllers\StdController;

use App\Http\Middleware\Admin;
use App\Http\Middleware\Rstd;
use App\Http\Middleware\Auser;

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});

Route::get('/about', [HomeController::class,'about'])->name('about');

Route::get('/home', [HomeController::class,'home'])->name('home');

Route::get('/eventlist', [HomeController::class,'eventlist'])->name('eventlist');

Route::get('/updateuser/{id}', [AdminController::class,'updateuser'])->name('updateuser');

Route::post('/updateauser/{id}', [AdminController::class,'updateauser'])->name('updateauser');

Route::get('/deleteuser/{id}', [AdminController::class,'deleteuser'])->name('deleteuser');

Route::get('/eventcreation', [RStudentController::class,'eventcreation'])->name('eventcreation');

Route::post('/updateanevent', [RStudentController::class,'updateanevent'])->name('updateanevent'); // there is a issue with this

Route::get('/stddashboard', [StdController::class,'stddashboard'])->name('stddashboard');

Route::get('/rstddashboard', [RStudentController::class,'rstddashboard'])->name('rstddashboard')->middleware(['auth','rstd']);

Route::get('/auserdashboard', [AuserController::class,'auserdashboard'])->name('auserdashboard')->middleware(['auth','auser']);

Route::get('/admindashboard', [AdminController::class, 'admindashboard'])->name('admindashboard')->middleware('auth', 'admin');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
