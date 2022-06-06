<?php

use App\Http\Controllers\AuthController;
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

Route::get('/', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'register']);
Route::get('/lupa-password', [AuthController::class, 'lupaPassword']);
Route::post('/authenticate', [AuthController::class, 'authenticate']);

Route::get('/materi', [SiswaController::class, 'index']);

Route::get('/selamat-datang', function() {
    return view('pages.siswa.selamat-datang');
});
Route::get('/halaman-1', function() {
    return view('pages.siswa.kompetensi-dasar');
});
Route::get('/halaman-2', function() {
    return view('pages.siswa.indikator');
});
Route::get('/halaman-3', function() {
    return view('pages.siswa.tujuan-pembelajaran');
});
Route::get('/halaman-4', function() {
    return view('pages.siswa.petunjuk-penggunaan');
});
Route::get('/halaman-5', function() {
    return view('pages.siswa.peta-konsep');
});
Route::get('/halaman-6', function() {
    return view('pages.siswa.materi-pembahasan');
});

// Sub Materi 1
Route::get('/halaman-7', function() {
    return view('pages.siswa.sub-materi-1.benua-asia');
});
Route::get('/halaman-8', function() {
    return view('pages.siswa.sub-materi-1.benua-amerika');
});
Route::get('/halaman-9', function() {
    return view('pages.siswa.sub-materi-1.benua-eropa');
});
Route::get('/halaman-10', function() {
    return view('pages.siswa.sub-materi-1.benua-afrika');
});
Route::get('/halaman-11', function() {
    return view('pages.siswa.sub-materi-1.benua-australia');
});
Route::get('/halaman-12', function() {
    return view('pages.siswa.sub-materi-1.jepang-lokasi');
});
Route::get('/halaman-13', function() {
    return view('pages.siswa.sub-materi-1.jepang-iklim');
});
Route::get('/halaman-14', function() {
    return view('pages.siswa.sub-materi-1.jepang-bentuk');
});
Route::get('/halaman-15', function() {
    return view('pages.siswa.sub-materi-1.jepang-geologi');
});
Route::get('/halaman-16', function() {
    return view('pages.siswa.sub-materi-1.jepang-flora-fauna');
});
Route::get('/halaman-17', function() {
    return view('pages.siswa.sub-materi-1.jepang-kondisi');
});

