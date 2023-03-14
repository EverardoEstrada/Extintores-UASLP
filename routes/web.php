<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FireExtController;

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

Route::get('/', [FireExtController::class, 'show']);
Route::post('/save', [FireExtController::class, 'save']);
Route::post('/update', [FireExtController::class, 'update']);
Route::get('/delete/{id}', [FireExtController::class, 'delete']);


