<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DonasiController;
use App\Http\Controllers\DonasiMasukController;
use App\Http\Controllers\StatusValidasiController;
use App\Models\Donasi;
use App\Models\DonasiMasuk;

//proses verivikasi donasi
Route::patch('/donasi/validate/{id}', [DonasiMasukController::class, 'validasi'])->name('donasi.validate');
Route::patch('/validateDonasi/{id}', [DonasiMasukController::class, 'validateDonasi'])->name('donasi.validateDonasi');

//crud donatur donasi masuk
Route::get('/form_donasi', [DonasiMasukController::class, 'index'])->name('form-donasi');
Route::get('/form_create', [DonasiMasukController::class, 'create'])->name('form-create');
Route::post('/form-save', [DonasiMasukController::class, 'store'])->name('form-save');
Route::get('/form-delete', [DonasiMasukController::class, 'delete'])->name('form-delete');


//crud admin donasi
 Route::get('/data_donasi', [DonasiController::class, 'index'])->name('data-donasi');
 Route::get('/create-donasi', [DonasiController::class, 'create'])->name('create-donasi');
 Route::post('/simpan-donasi', [DonasiController::class, 'store'])->name('simpan-donasi');
 Route::get('/hapus-donasi/{id}', [DonasiController::class, 'delete'])->name('hapus-donasi');
 Route::post('/donasi.update/{id}', [DonasiController::class, 'update'])->name('donasi.update');
 Route::get('/edit-donasi/{id}', [DonasiController::class, 'edit'])->name('edit-donasi');
 Route::get('/beranda-admin', [DonasiController::class, 'store'])->name('admin.beranda-admin');


// // Rute untuk halaman login
 Route::get('/', [LoginController::class, 'login'])->name('login');
 Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');
 Route::get('admin.login-admin', [AdminAuthController::class, 'showLoginForm'])->name('admin.login-admin');


 Route::get('home', [HomeController::class, 'index'])->name('home')->middleware('auth');
 Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');

 //laporan donasi

// Rute-rute lainnya...



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
     return view('home');
 });

 Route::get('/home', function () {
     return view('home');
 });

 Route::get('/validasi', function () {
    $dtMasuk = \App\Models\DonasiMasuk::select('id', 'nama', 'email', 'golongan', 'jumlah_donasi', 'jenis_bank', 'bukti_donasi', 'catatan', 'created_at', 'status_validasi')->get();
    $dtMasukDonasi = \App\Models\Donasi::select('name')->get();
     return view('admin.validasi', [
         "title" => "VALIDASI",
         'dtMasuk' => $dtMasuk,
         'dtMasukDonasi' => $dtMasukDonasi
     ]);
 });

 Route::get('/validasi-history', function () {
     return view('admin.validasi-history', [
         "title" => "RIWAYAT VALIDASI"
     ]);
 });

 Route::get('/belum-valid', function () {
     return view('admin.belum-valid', [ 
         "title" => "DONASI BELUM VALID"
     ]);
 });

// In your route
Route::get('/laporan-donasi', function () {
    $verifiedDonations = App\Models\DonasiMasuk::where('status_validasi', 'sudah tervalidasi')->get();
    $totalDonations = $verifiedDonations->sum('jumlah_donasi');
    return view('admin.laporan-donasi', [
        "title" => "LAPORAN DONASI",
        "verifiedDonations" => $verifiedDonations,
        "totalDonations" => $totalDonations
    ]);
});

 Route::get('/beranda-admin', function () {
     $dtDonasi = \App\Models\Donasi::select('id', 'name', 'detail', 'image')->get();
     return view('admin.beranda-admin', [
         "title" => "BERANDA ADMIN",
         'dtDonasi' => $dtDonasi,
         'donasi' => $dtDonasi
     ]);
 });

 Route::get('/login-admin', function () {
     return view('admin.login-admin', [
         "title" => "LOGIN ADMIN"
     ]);
 });

 Route::get('/beranda-donatur', function () {
    $dtDonasi = \App\Models\Donasi::select('id', 'name', 'detail', 'image', 'created_at')->get();
    $totalDonations = App\Models\DonasiMasuk::where('status_validasi', 'sudah tervalidasi')->sum('jumlah_donasi');
     return view('donatur.beranda-donatur', [
         "title" => "BERANDA DONATUR",
         'dtDonasi' => $dtDonasi,
         "totalDonations" => $totalDonations
     ]);
 });

 Route::get('/form-donasi', function () {
     return view('donatur.form-donasi', [
         "title" => "Form Donasi"
     ]);
});