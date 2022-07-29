<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\ImportController;

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
    // return view('welcome');
    return redirect('/admin-data-pelanggan');
});

Route::get('/admin-dashboard',[PelangganController::class,'be_dashboard'])->name('be.dashboard');
Route::get('/admin-data-pelanggan',[PelangganController::class,'be_pelanggan'])->name('be.pelanggan');
Route::get('/admin-data-pelanggan-data',[PelangganController::class,'be_pelanggan_data'])->name('be.pelanggan.data');
Route::get('/admin-pelanggan-print',[PelangganController::class,'be_print_pelanggan'])->name('be.print.pelanggan');


Route::post('/admin-import-pelanggan',[ImportController::class,'import_pelanggan'])->name('import.pelanggan');
Route::post('/admin-add-pelanggan',[PelangganController::class,'be_add_pelanggan'])->name('be.add.pelanggan');
Route::post('/admin-remove-pelanggan',[PelangganController::class,'be_remove_pelanggan'])->name('be.remove.pelanggan');