<?php

use App\Http\Controllers\PDFController;
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

Route::get('/', [PDFController::class, 'index']);
Route::get('/pdf',[PDFController::class, 'crearInforme']);
Route::get('/pdf-edit',[PDFController::class, 'viewtempalte']);
Route::get('/excel-export', [PDFController::class, 'exportExcel']);