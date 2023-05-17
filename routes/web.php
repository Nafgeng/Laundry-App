<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CheckRoleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;
use App\Http\Controllers\DefaultController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ExportExcelController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Menampilkan View
Route::get('/', [DefaultController::class, 'home']);

//Untuk Mengecheck Role
Route::get('redirects', [CheckRoleController::class, 'check_role']);

//view form
Route::get('/form_laundry', [AdminController::class, 'form_laundry']);
Route::get('/edit_laundry/{id}', [AdminController::class, 'edit_form']);
Route::put('/edit/{id}/edit_laundry', [AdminController::class, 'update']);
Route::post('/add-laundry', [AdminController::class, 'store']); //route tambah data

//view admin
Route::get('/admin_data_laundry', [AdminController::class, 'admin_data_laundry']);
Route::get('/admin_tambah_laundry', [AdminController::class, 'admin_tambah_laundry']);

//view user
Route::get('/user_data_laundry', [UserController::class, 'user_data_laundry']);
Route::get('/user_artikel_laundry', [UserController::class, 'user_artikel_laundry']);

//-------- DETAIL ARTIKEL VIEWW --------//
Route::get('/user_detail_artikel1', [UserController::class, 'user_detail_artike1']);
Route::get('/user_detail_artikel2', [UserController::class, 'user_detail_artikel2']);
Route::get('/user_detail_artikel3', [UserController::class, 'user_detail_artike3']);
Route::get('/user_detail_artikel4', [UserController::class, 'user_detail_artike4']);
Route::get('/user_detail_artikel5', [UserController::class, 'user_detail_artike5']);
Route::get('/user_detail_artikel6', [UserController::class, 'user_detail_artike6']);
Route::get('/user_detail_artikel7', [UserController::class, 'user_detail_artike7']);


// Delete
Route::delete('/delete/{id}', [AdminController::class, 'destroy']);

// Export to excel
Route::get('export/excel',[AdminController::class,'export'] )->name('export.excel');
