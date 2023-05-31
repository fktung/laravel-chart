<?php

use App\Http\Controllers\PegawaiController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [PegawaiController::class, 'index']);
Route::get('/add', [PegawaiController::class, 'create']);
Route::get('/edit/{id}', [PegawaiController::class, 'edit']);
Route::put('/{id}', [PegawaiController::class, 'update']);
Route::delete('/{id}', [PegawaiController::class, 'destroy']);
Route::post('/', [PegawaiController::class, 'store']);
