<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;
use App\Http\Controllers\HomeController;
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
Route::get('/', [HomeController::class, 'home']);
Route::get('/user_data_laundry', [HomeController::class, 'user_data_laundry']);

Route::get('/datas', [DataController::class, 'index']);

Route::get('/datas/{param}', [DataController::class, 'show']);

// Update
Route::post('/datas', [DataController::class, 'store']);

// Fungsinya untuk mengedit data
Route::patch('/datas/{key}', [DataController::class, 'update']);

// Untuk delete data
Route::delete('/datas/{key}', [DataController::class, 'destroy']);
