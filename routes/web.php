<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminPagesController;
use App\Http\Controllers\VisitorsController;
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
    return view('index');
});
Route::get('/kunjungan', function () {
    return view('kunjungan');
});
Route::get('/admin', [AdminPagesController::class, 'index']);
Route::get('/admin/logout', [AdminPagesController::class, 'logout']);
Route::get('/admin/daftar', [VisitorsController::class, 'index']);
Route::post('/kunjungan', [VisitorsController::class, 'store']);
Route::delete('admin/daftar/{visitor}', [VisitorsController::class, 'destroy']);