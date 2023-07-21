<?php

use App\Http\Controllers\DaftarController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataFeedController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\DirektoratController;
use App\Http\Controllers\RiwayatLaporanController;
use App\Http\Controllers\SatkerController;
use App\Http\Controllers\uploadController;
use App\Http\Controllers\UserResourceController;
use Illuminate\Support\Facades\Response;

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


    // route dashboard laporan keuangan
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::post('/filter', [DashboardController::class, 'filter'])->name('filter');

    // route upload laporan keuangan
    Route::get('/upload', function(){return view('pages.uploadLaporan.upload');})->name('upload')->middleware('admin');
    Route::post('/upload', [uploadController::class, 'index'])->name('upload');

    Route::resource('/direktorat',DirektoratController::class)->middleware('admin');
    Route::resource('/satker',SatkerController::class)->middleware('admin');
    Route::resource('/riwayat',RiwayatLaporanController::class)->middleware('admin');
    Route::get('/pengguna',[UserResourceController::class,'index'])->middleware('admin');
    Route::get('/pengguna/{id}',[UserResourceController::class,'destroy'])->middleware('admin');

    //route detail laporan keuangan
    Route::get('/detail/{tanggal}/{id}/{satker}', [DetailController::class, 'index']);
    Route::get('/filter/{tanggal}/{id}/{satker}', [DetailController::class, 'filterPersen']);
    
    Route::fallback(function() {
        return view('pages/utility/404');
    });    

    Route::get('/download-excel', function () {
        $file = public_path('/excel/template1.xlsx');
    
        return Response::download($file, 'template1.xlsx');
    })->name('download.excel')->middleware('admin');
});