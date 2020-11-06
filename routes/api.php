<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('/logs', [App\Http\Controllers\LogsController::class, 'postLogs']);
Route::get('/logs', [App\Http\Controllers\LogsController::class, 'getLogs']);

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');})->name('dashboard');

// Route::middleware(['auth:sanctum', 'verified'])->get('/logs', [App\Http\Controllers\LogsController::class, 'getLogs']);