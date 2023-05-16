<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CheckRoleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;
use App\Http\Controllers\DefaultController;
use App\Http\Controllers\UserController;
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

// Delete
Route::delete('/delete/{id}', [AdminController::class, 'destroy']);
