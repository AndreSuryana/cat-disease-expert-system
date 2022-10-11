<?php

use App\Http\Controllers\DiagnoseController;
use App\Http\Controllers\MainController;
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

Route::get('/', [MainController::class, 'index'])
    ->name('root');
Route::get('/diagnose', [DiagnoseController::class, 'index'])
    ->name('diagnose.index');
Route::post('/diagnose', [DiagnoseController::class, 'diagnose'])
    ->name('diagnose.process');
Route::get('/diagnose/result', [DiagnoseController::class, 'result'])
    ->name('diagnose.result');