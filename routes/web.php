<?php

use App\Http\Controllers\DaftarController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataFeedController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\uploadController;

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

Route::redirect('/', 'login');
  

Route::middleware(['auth:sanctum', 'verified'])->group(function () {

    // Route for the getting the data feed
    Route::get('/json-data-feed', [DataFeedController::class, 'getDataFeed'])->name('json_data_feed');

    // route dashboard laporan keuangan
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::post('/filter', [DashboardController::class, 'filter'])->name('filter');

    // route upload laporan keuangan
    Route::get('/upload', function(){return view('pages.uploadLaporan.upload');})->name('upload');

    Route::post('/upload', [uploadController::class, 'index'])->name('upload');


    //route detail laporan keuangan
    Route::get('/detail/{tanggal}/{id}/{satker}', [DetailController::class, 'index']);
    Route::get('/filter/{tanggal}/{id}/{satker}', [DetailController::class, 'filterPersen']);
    
    Route::fallback(function() {
        return view('pages/utility/404');
    });    
});