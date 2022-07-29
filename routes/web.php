<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\userController;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['middleware' => ['auth','admin']], function () {
    Route::get('admin-view', [HomeController::class, 'adminView'])->name('admin.view');
    Route::get('create-user', [userController::class, 'create'])->name('user.create');
    Route::get('edit-user/{id}', [userController::class, 'edit'])->name('user.edit');
    Route::get('hapus-user/{id}', [userController::class, 'destroy'])->name('user.destroy');
    Route::put('edit-user/{id}', [userController::class, 'update'])->name('user.update');
    Route::post('create-user', [userController::class, 'store'])->name('user.store');
});
Route::group(['middleware' => ['auth','pegawai']], function () {
    Route::get('pegawai-view', [HomeController::class, 'pegawaiView'])->name('pegawai.view');
});