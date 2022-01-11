<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\OfficeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\LoginController;
use Laravel\Socialite\Facades\Socialite;
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

Route::get('/', function () {
    return view('layouts.sample');
});

Route::get('/', function () {
    return view('welcome');
})->middleware('checktype');

// Route::get('test', function () {
//     Storage::disk('google')->put('test.txt', 'Hello World');
// });

Route::get('auth/google', [LoginController::class, 'redirectToGoogle'])->name('google-login');
Route::get('auth/google/callback', [LoginController::class, 'handleGoogleCallback'])->name('google-callback');




//ADMINISTRATOR
Route::middleware('admin')->prefix('administrator')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin-dashboard');
    Route::get('/school-office', [AdminController::class, 'office'])->name('admin-office');
});


//SCHOOL OFFICES
Route::middleware('office')->prefix('office')->group(function () {
    Route::get('/', [OfficeController::class, 'index'])->name('office-dashboard');
    Route::get('/query', [OfficeController::class, 'query'])->name('office-query');
    Route::get('/query/{id}', [OfficeController::class, 'openQuery'])->name('office-openquery');
    Route::get('/service', [OfficeController::class, 'service'])->name('office-service');
    Route::get('/appointment', [OfficeController::class, 'appointment'])->name('office-appointment');
    Route::get('/calendar', [OfficeController::class, 'calendar'])->name('office-calendar');
    Route::get('/manage-appointment', [OfficeController::class, 'manageAppointment'])->name('office-manageAppointment');
});


//STUDENT
Route::middleware('student')->prefix('student')->group(function () {
    Route::get('/', [StudentController::class, 'index'])->name('student-dashboard');
    Route::get('/query/{id}', [StudentController::class, 'query'])->name('student-query');
    Route::get('/student-service', [StudentController::class, 'service'])->name('student-service');
    Route::get('/student-appointment', [StudentController::class, 'appointment'])->name('student-appointment');
});




// Route::get('/admin/dashboard', function () {
//     return view('admin.dashboard');
// })->name('admin-dashboard');
// Route::get('/admin/school-office', function () {
//     return view('admin.school_office');
// })->name('admin-office');


Route::get('/redirect', fn () => view('login'))->middleware(['checktype', 'auth']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
