<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SiswaController;
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


Route::get('/', [DashboardController::class, 'index'])->name('/');
Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('admin/login', [LoginController::class, 'admin'])->name('admin.login');

Route::get('siswa/login', [LoginController::class, 'siswa'])->name('siswa.login');
Route::post('siswa/loggin', [LoginController::class, 'login_siswa'])->name('siswa.loggin');

Route::get('siswa/register', [RegisterController::class, 'index'])->name('siswa.register');
Route::post('siswa/store', [RegisterController::class, 'store'])->name('siswa.store');

Route::get('dashboard/siswa', [DashboardController::class, 'dashboard_siswa'])->name('dashboard.siswa');
Route::get('logout/siswa', [LoginController::class, 'logout_siswa'])->name('logout.siswa');



Route::group(['middleware' => 'auth'], function () {
    Route::get('logout', [LoginController::class, 'logout'])->name('logout');

    Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

    Route::get('admin', [AdminController::class, 'index'])->name('admin');
    Route::get('admin/add', [AdminController::class, 'create'])->name('add.admin');
    Route::post('admin/store', [AdminController::class, 'store'])->name('store.admin');
    Route::get('admin/edit/{id}', [AdminController::class, 'edit'])->name('edit.admin');
    Route::post('admin/update/{id}', [AdminController::class, 'update'])->name('update.admin');
    Route::delete('admin/delete/{id}', [AdminController::class, 'destroy'])->name('delete.admin');

    Route::get('siswa', [SiswaController::class, 'index'])->name('data.siswa');
    Route::get('siswa/add', [SiswaController::class, 'create'])->name('add.siswa');
    Route::post('siswa/store', [SiswaController::class, 'store'])->name('store.siswa');
    Route::post('siswa/update/{id}', [SiswaController::class, 'update'])->name('update.siswa');
    Route::delete('siswa/delete/{id}', [SiswaController::class, 'destroy'])->name('delete.siswa');
});
