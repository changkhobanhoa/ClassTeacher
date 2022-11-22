<?php

use App\Http\Controllers\Admin\AdminConTroller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Teacher\TeacherController;
use Illuminate\Support\Facades\Route;

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

Route::get('/logout', [HomeController::class, 'logout'])->name('logout');

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::middleware([ 
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::middleware('checkadmin')->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AdminConTroller::class, 'index'])->name('index');
    Route::get('/danh-sach', [AdminConTroller::class, 'index'])->name('index');
    Route::get('/', [AdminConTroller::class, 'index'])->name('index');
});
Route::middleware('checkteacher')->prefix('teacher')->name('teacher.')->group(function () {
    Route::prefix('/lop-hoc')->name('lophoc.')->controller(TeacherController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/them', 'create')->name('create');
        Route::get('/store', 'store')->name('store');
        Route::get('/danhsachsinhvien/{id}','chitietsv')->name('chitietsv');
    });
 
    
});
Route::middleware('checkstudent')->prefix('student')->name('student.')->group(function () {
    Route::get('/', [HomeController::class, 'view'])->name('home');
    Route::get('/danh-sach', [HomeController::class, 'view'])->name('view');
    Route::get('/them', [HomeController::class, 'create'])->name('create');
});
