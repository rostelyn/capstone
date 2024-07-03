<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StudentListController;
use App\Http\Controllers\EventController;
use App\Models\Event;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\CourselistController;
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



Route::get('/', [DashboardController::class,'index'])->name('dashboard');
Route::get('/studentlist', [StudentListController::class,'index'])->name('studentlist');
Route::get('/calendar', [CalendarController::class, 'index']);
Route::post('/calendar/update', [CalendarController::class, 'update'])->name('calendar.update');
Route::get('/courselist', [CourselistController::class,'index'])->name('courselist');
Route::get('/course', [CourseController::class,'index'])->name('course');


