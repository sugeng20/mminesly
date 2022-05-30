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

Route::get('/selamat-datang', [SiswaController::class, 'index']);
Route::get('/kompetensi-dasar', [SiswaController::class, 'kompetensiDasar']);
Route::get('/indikator', [SiswaController::class, 'indikator']);
