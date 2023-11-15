<?php

use App\Http\Controllers\LayananController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserManagementController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('main');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth:admin', 'verified'])->name('admin.dashboard');
Route::get('/admin/dashboard/layanan', [LayananController::class, 'index']);
Route::post('/admin/dashboard/layanan', [LayananController::class, 'store']);
Route::get('/admin/dashboard/usermanagement', [UserManagementController::class, 'index']);

Route::controller(LayananController::class)->group(function () {
    Route::get('/admin/dashboard/layanan', 'index')->name('home');
    Route::post('/admin/dashboard/layanan', 'store')->name('store.info');
    Route::get('/admin/dashboard/layanan', 'show')->name('show.info');
    Route::get('/admin/dashboard/layanan/edit/{id}', 'edit')->name('edit.info');
    Route::post('/admin/dashboard/layanan/update', 'update')->name('update.info');
    Route::post('/admin/dashboard/layanan/delete', 'delete')->name('delete.info');
});
require __DIR__ . '/adminauth.php';
