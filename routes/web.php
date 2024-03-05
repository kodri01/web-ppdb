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
Route::post('store', [RegisterController::class, 'store'])->name('siswa.store');

Route::get('dashboard/siswa', [DashboardController::class, 'dashboard_siswa'])->name('dashboard.siswa');
Route::get('dashboard/print', [DashboardController::class, 'print_noregist'])->name('save_pdf');
Route::get('logout/siswa', [LoginController::class, 'logout_siswa'])->name('logout.siswa');

Route::get('siswa/bayar/{id}', [SiswaController::class, 'bayar'])->name('bayar.siswa');
Route::post('siswa/bayar/{id}', [SiswaController::class, 'add_bayar'])->name('add_bayar.siswa');
Route::get('siswa/regist/{id}', [SiswaController::class, 'registrasi_ulang'])->name('regist.siswa');
Route::post('siswa/regist_ulang/{id}', [SiswaController::class, 'add_regist'])->name('add_regist.siswa');


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
    Route::get('siswa/show/{id}', [SiswaController::class, 'show'])->name('details.siswa');
    Route::post('siswa/store', [SiswaController::class, 'store'])->name('store.siswa');
    Route::post('siswa/update/{id}', [SiswaController::class, 'update'])->name('update.siswa');
    Route::post('siswa/tolak/{id}', [SiswaController::class, 'siswa_tolak'])->name('tolak.siswa');
    Route::post('siswa/regist_terima/{id}', [SiswaController::class, 'regist_terima'])->name('regist_terima.siswa');
    Route::post('siswa/regist_tolak/{id}', [SiswaController::class, 'regist_tolak'])->name('regist_tolak.siswa');
    Route::delete('siswa/delete/{id}', [SiswaController::class, 'destroy'])->name('delete.siswa');
});


Route::get('/hapus-sesi', function () {
    // Menghapus sesi 'siswa'
    session()->forget('siswa');
    return response()->json(); // Menampilkan pesan berhasil (opsional)
});