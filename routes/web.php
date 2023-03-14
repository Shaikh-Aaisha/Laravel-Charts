<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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
Route::get('/userspiechart', [UserController::class, 'index'])->name('index');
Route::get('/usersradar', [UserController::class, 'radar'])->name('radar');
Route::get('/usersdonut', [UserController::class, 'donut'])->name('donut');
Route::get('/usersradial', [UserController::class, 'radial'])->name('radial');
Route::get('/userspolar', [UserController::class, 'polararea'])->name('polar');
Route::get('/usersline', [UserController::class, 'line'])->name('line');
Route::get('/usersarea', [UserController::class, 'area'])->name('area');
Route::get('/usersbar', [UserController::class, 'bar'])->name('bar');
Route::get('/usersHorizontalBar', [UserController::class, 'HorizontalBar'])->name('HorizontalBar');
Route::get('/usersHeatMap', [UserController::class, 'HeatMap'])->name('HeatMap');
