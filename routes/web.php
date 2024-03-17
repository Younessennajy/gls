<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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
// routes/web.php



Route::get('/filtered-courses', 'CourseController@filter')->name('filtered-courses');


Route::get('/', function () {
    return view('welcome');
});

Route::fallback(function () {
    return view('courses.notFound');
});

Route::get('/courses/filter',  [CourseController::class,'filter'])->name('courses.filter');


Route::get('/home', [HomeController::class,'index'])->middleware('auth')->name('home');
Route::get('/dash', [HomeController::class,'filter'])->middleware('auth')->name('dash');
Route::get('/create', [CourseController::class,'create'])->middleware('auth')->name('create');
Route::resource('courses', CourseController::class)->middleware(['auth','admin']);



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// Route::post('/contact/submit', [ContactController::class, 'submitForm'])->name('contact.submit');











// In your routes file (web.php or another)

require __DIR__.'/auth.php';
