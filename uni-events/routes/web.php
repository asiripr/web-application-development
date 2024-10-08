<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RStudentController;
use App\Http\Controllers\StdController;
use App\Http\Controllers\EventController;


use App\Http\Middleware\Admin;
use App\Http\Middleware\Rstd;
use App\Http\Middleware\Auser;

use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', [HomeController::class,'home'])->name('home');

Route::get('/about', [HomeController::class,'about'])->name('about');

Route::get('/home', [HomeController::class,'home'])->name('home');

Route::get('/eventlist', [HomeController::class,'eventlist'])->name('eventlist');

Route::get('/updateuser/{id}', [AdminController::class,'updateuser'])->name('updateuser');

Route::post('/updateauser/{id}', [AdminController::class,'updateauser'])->name('updateauser');

Route::get('/deleteuser/{id}', [AdminController::class,'deleteuser'])->name('deleteuser');

Route::post('/updateanevent', [RStudentController::class,'updateanevent'])->name('updateanevent'); // there is an issue with this

Route::get('/stddashboard', [StdController::class,'stddashboard'])->name('stddashboard');

Route::get('/eventcreation', [RStudentController::class,'eventcreation'])->name('eventcreation')->middleware(['auth', 'rstd']);;

Route::get('/rstddashboard', [RStudentController::class,'rstddashboard'])->name('rstddashboard')->middleware(['auth','rstd']);

Route::get('/auserdashboard', [AuserController::class,'auserdashboard'])->name('auserdashboard')->middleware(['auth','auser']);

Route::get('/admindashboard', [AdminController::class, 'admindashboard'])->name('admindashboard')->middleware(['auth', 'admin']);

Route::post('/approveevent/{id}', [EventController::class,'approve'])->name('approve');

Route::post('/rejectevent/{id}', [EventController::class,'reject'])->name('reject');

Route::get('/downloadproposal/{id}', [AuserController::class,'downloadproposal'])->name('downloadproposal');

Route::get('/search', [HomeController::class,'search'])->name('search');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
