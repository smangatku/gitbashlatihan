<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\DepartemenController;

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
    return view('welcome');
});
Route::get('/karyawan', [KaryawanController::class, 'index'])->name('index');
// Route::get('/karyawan/$employee_id', [KaryawanController::class, 'show'])->name('show');
Route::get('/karyawan-info',[KaryawanController::class, 'show'])->name('show');
route::get('/karyawan-data',[KaryawanController::class, 'data'])->name('data');
//Route::get('/karyawan/{employeeId}', [KaryawanController::class, 'show'])->name('show');

Route::get('/departemen', [DepartemenController::class, 'index'])->name('index');
