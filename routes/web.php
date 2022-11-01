<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BackendController;
use App\Http\Controllers\AdminController;

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
Route::get("backend/form_buat_landmark",[BackendController::class, "form_buat_landmark"])->name("backend.form_buat_landmark");
Route::post('backend/buat_landmark/', [BackendController::class, 'buat_landmark'])->name('backend.buat_landmark');

Route::get('backend/form_ubah_landmark/{id}', [BackendController::class, 'form_ubah_landmark'])->name('backend.form_ubah_landmark');
Route::post('backend/ubah_landmark/', [BackendController::class, 'ubah_landmark'])->name('backend.ubah_landmark');

Route::get("backend/details/{id}",[BackendController::class, "details"])->name("backend.details");
Route::get("backend/ubah_status/{id}",[BackendController::class, "ubah_status"])->name("backend.ubah_status");

Route::get("backend/lihat_qrcode/{qrcode}",[BackendController::class, "lihat_qrcode"])->name("backend.lihat_qrcode");



Route::get("backend/log_tour_guide",[BackendController::class, "log_tour_guide"])->name("backend.log_tour_guide");
Route::get("backend/hapus_log{id}",[BackendController::class, "hapus_log"])->name("backend.hapus_log");


//users

Route::get("backend/admin/registrasi",[AdminController::class, "admin_register_form"])->name("backend.admin_register_form")->middleware("guest");
Route::post("backend/admin/registrasi",[AdminController::class, "admin_register"])->name("backend.admin_register");

Route::get("backend/admin/login",[AdminController::class, "admin_login_form"])->name("backend.admin_login_form")->middleware("guest");
Route::post("backend/admin/login",[AdminController::class, "admin_login"])->name("backend.admin_login");