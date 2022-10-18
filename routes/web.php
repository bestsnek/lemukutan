<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BackendController;

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

Route::get("backend",[BackendController::class, "landing"])->name("backend.landing");
Route::get("backend/details/{id}",[BackendController::class, "details"])->name("backend.details");
Route::get("backend/lihat_qrcode/{qrcode}",[BackendController::class, "lihat_qrcode"])->name("backend.lihat_qrcode");
Route::get("backend/log_tour_guide",[BackendController::class, "log_tour_guide"])->name("backend.log_tour_guide");
Route::get("backend/hapus_log{id}",[BackendController::class, "hapus_log"])->name("backend.hapus_log");
