<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::get('/', [App\Http\Controllers\RoomController::class, 'index'])->name('room.index');
Route::get('/room/create', [App\Http\Controllers\RoomController::class, 'create'])->name('room.create');
Route::post('/room/store', [App\Http\Controllers\RoomController::class, 'store'])->name('room.store');
Route::get('/room/{room}', [App\Http\Controllers\RoomController::class, 'show'])->name('room.show');

Route::get('student/room/create', [App\Http\Controllers\StudentRoomController::class, 'create'])->name('studentroom.create');
Route::post('student/room/store', [App\Http\Controllers\StudentRoomController::class, 'store'])->name('studentroom.store');


Route::get('/teacher/create', [App\Http\Controllers\TeacherController::class, 'create'])->name('teacher.create');
Route::post('/teacher/store', [App\Http\Controllers\TeacherController::class, 'store'])->name('teacher.store');

Route::get('/student/create', [App\Http\Controllers\StudentController::class, 'create'])->name('student.create');
Route::post('/student/sotre', [App\Http\Controllers\StudentController::class, 'store'])->name('student.store');
Route::get('/student/{student}', [App\Http\Controllers\StudentController::class, 'show'])->name('student.show');

Route::post('/calllist', [App\Http\Controllers\CallListController::class, 'store'])->name('calllist.store');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});
