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
    return view('pages.siswa.sub-materi-1.orientasi');
});

// Negara Jepang
Route::get('/halaman-13', function() {
    return view('pages.siswa.sub-materi-1.jepang.lokasi');
});
Route::get('/halaman-14', function() {
    return view('pages.siswa.sub-materi-1.jepang.iklim');
});
Route::get('/halaman-15', function() {
    return view('pages.siswa.sub-materi-1.jepang.bentuk');
});
Route::get('/halaman-16', function() {
    return view('pages.siswa.sub-materi-1.jepang.geologi');
});
Route::get('/halaman-17', function() {
    return view('pages.siswa.sub-materi-1.jepang.flora-fauna');
});
Route::get('/halaman-18', function() {
    return view('pages.siswa.sub-materi-1.jepang.kondisi');
});

// Negara Indonesia
Route::get('/halaman-19', function() {
    return view('pages.siswa.sub-materi-1.indonesia.lokasi');
});
Route::get('/halaman-20', function() {
    return view('pages.siswa.sub-materi-1.indonesia.iklim');
});
Route::get('/halaman-21', function() {
    return view('pages.siswa.sub-materi-1.indonesia.bentuk');
});
Route::get('/halaman-22', function() {
    return view('pages.siswa.sub-materi-1.indonesia.geologi');
});
Route::get('/halaman-23', function() {
    return view('pages.siswa.sub-materi-1.indonesia.flora-fauna');
});
Route::get('/halaman-24', function() {
    return view('pages.siswa.sub-materi-1.indonesia.kondisi');
});

// Negara Arab Saudi
Route::get('/halaman-25', function() {
    return view('pages.siswa.sub-materi-1.arab-saudi.lokasi');
});
Route::get('/halaman-26', function() {
    return view('pages.siswa.sub-materi-1.arab-saudi.iklim');
});
Route::get('/halaman-27', function() {
    return view('pages.siswa.sub-materi-1.arab-saudi.bentuk');
});
Route::get('/halaman-28', function() {
    return view('pages.siswa.sub-materi-1.arab-saudi.geologi');
});
Route::get('/halaman-29', function() {
    return view('pages.siswa.sub-materi-1.arab-saudi.flora-fauna');
});
Route::get('/halaman-30', function() {
    return view('pages.siswa.sub-materi-1.arab-saudi.kondisi');
});

// Negara Amerika Serikat
Route::get('/halaman-31', function() {
    return view('pages.siswa.sub-materi-1.amerika-serikat.lokasi');
});
Route::get('/halaman-32', function() {
    return view('pages.siswa.sub-materi-1.amerika-serikat.iklim');
});
Route::get('/halaman-33', function() {
    return view('pages.siswa.sub-materi-1.amerika-serikat.bentuk');
});
Route::get('/halaman-34', function() {
    return view('pages.siswa.sub-materi-1.amerika-serikat.geologi');
});
Route::get('/halaman-35', function() {
    return view('pages.siswa.sub-materi-1.amerika-serikat.flora-fauna');
});
Route::get('/halaman-36', function() {
    return view('pages.siswa.sub-materi-1.amerika-serikat.kondisi');
});

// Negara Inggris
Route::get('/halaman-37', function() {
    return view('pages.siswa.sub-materi-1.inggris.lokasi');
});
Route::get('/halaman-38', function() {
    return view('pages.siswa.sub-materi-1.inggris.iklim');
});
Route::get('/halaman-39', function() {
    return view('pages.siswa.sub-materi-1.inggris.bentuk');
});
Route::get('/halaman-40', function() {
    return view('pages.siswa.sub-materi-1.inggris.geologi');
});
Route::get('/halaman-41', function() {
    return view('pages.siswa.sub-materi-1.inggris.flora-fauna');
});
Route::get('/halaman-42', function() {
    return view('pages.siswa.sub-materi-1.inggris.kondisi');
});

// Negara Mesir
Route::get('/halaman-43', function() {
    return view('pages.siswa.sub-materi-1.mesir.lokasi');
});
Route::get('/halaman-44', function() {
    return view('pages.siswa.sub-materi-1.mesir.iklim');
});
Route::get('/halaman-45', function() {
    return view('pages.siswa.sub-materi-1.mesir.bentuk');
});
Route::get('/halaman-46', function() {
    return view('pages.siswa.sub-materi-1.mesir.geologi');
});
Route::get('/halaman-47', function() {
    return view('pages.siswa.sub-materi-1.mesir.flora-fauna');
});
Route::get('/halaman-48', function() {
    return view('pages.siswa.sub-materi-1.mesir.kondisi');
});

// Negara Australia
Route::get('/halaman-49', function() {
    return view('pages.siswa.sub-materi-1.australia.lokasi');
});
Route::get('/halaman-50', function() {
    return view('pages.siswa.sub-materi-1.australia.iklim');
});
Route::get('/halaman-51', function() {
    return view('pages.siswa.sub-materi-1.australia.bentuk');
});
Route::get('/halaman-52', function() {
    return view('pages.siswa.sub-materi-1.australia.geologi');
});
Route::get('/halaman-53', function() {
    return view('pages.siswa.sub-materi-1.australia.flora-fauna');
});
Route::get('/halaman-54', function() {
    return view('pages.siswa.sub-materi-1.australia.kondisi');
});

// Sub materi 2
Route::get('/halaman-55', function() {
    return view('pages.siswa.sub-materi-2.benua-asia.bidang-pertanian');
});
Route::get('/halaman-56', function() {
    return view('pages.siswa.sub-materi-2.benua-asia.bidang-pertambangan');
});
Route::get('/halaman-57', function() {
    return view('pages.siswa.sub-materi-2.benua-amerika.bidang-pertanian');
});
Route::get('/halaman-58', function() {
    return view('pages.siswa.sub-materi-2.benua-amerika.bidang-pertambangan');
});
Route::get('/halaman-59', function() {
    return view('pages.siswa.sub-materi-2.benua-eropa.bidang-pertanian');
});
Route::get('/halaman-60', function() {
    return view('pages.siswa.sub-materi-2.benua-eropa.bidang-pertambangan');
});
Route::get('/halaman-61', function() {
    return view('pages.siswa.sub-materi-2.benua-eropa.bidang-perikanan');
});
Route::get('/halaman-62', function() {
    return view('pages.siswa.sub-materi-2.benua-afrika.bidang-pertanian');
});
Route::get('/halaman-63', function() {
    return view('pages.siswa.sub-materi-2.benua-afrika.bidang-pertambangan');
});
Route::get('/halaman-64', function() {
    return view('pages.siswa.sub-materi-2.benua-australia.bidang-pertanian');
});
Route::get('/halaman-65', function() {
    return view('pages.siswa.sub-materi-2.benua-australia.bidang-pertambangan');
});

// Sub materi 3
Route::get('/halaman-66', function() {
    return view('pages.siswa.sub-materi-3.dinamika-penduduk-asia');
});
Route::get('/halaman-67', function() {
    return view('pages.siswa.sub-materi-3.dinamika-penduduk-amerika');
});
Route::get('/halaman-68', function() {
    return view('pages.siswa.sub-materi-3.dinamika-penduduk-eropa');
});
Route::get('/halaman-69', function() {
    return view('pages.siswa.sub-materi-3.dinamika-penduduk-afrika');
});
Route::get('/halaman-70', function() {
    return view('pages.siswa.sub-materi-3.dinamika-penduduk-australia');
});

// Sub Materi 4
Route::get('/halaman-71', function() {
    return view('pages.siswa.sub-materi-4.distribusi-potensi-wilayah-penduduk');
});
Route::get('/halaman-72', function() {
    return view('pages.siswa.sub-materi-4.distribusi-potensi-sosial');
});
Route::get('/halaman-73', function() {
    return view('pages.siswa.sub-materi-4.distribusi-potensi-budaya');
});

// Sub Materi 5
Route::get('/halaman-74', function() {
    return view('pages.siswa.sub-materi-5.konsep-dampak-interaksi-anatarruang-benua-asia-dan-benua-lainnya');
});
Route::get('/halaman-75', function() {
    return view('pages.siswa.sub-materi-5.dampak-perubahan-dan-interaksi-di-bidang-ekonomi');
});
Route::get('/halaman-76', function() {
    return view('pages.siswa.sub-materi-5.dampak-perubahan-dan-interaksi-di-bidang-sosial');
});
Route::get('/halaman-77', function() {
    return view('pages.siswa.sub-materi-5.dampak-perubahan-dan-interaksi-di-bidang-budaya');
});
Route::get('/halaman-78', function() {
    return view('pages.siswa.sub-materi-5.dampak-perubahan-dan-interaksi-di-bidang-politik');
});
Route::get('/halaman-79', function() {
    return view('pages.siswa.sub-materi-5.dampak-perubahan-dan-interaksi-di-bidang-pendidikan');
});
Route::get('/halaman-80', function() {
    return view('pages.siswa.sub-materi-5.distribusi-potensi-budaya');
});
Route::get('/halaman-81', function() {
    return view('pages.siswa.sub-materi-5.distribusi-potensi-budaya');
});

