<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ListAplikasiController;


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
Route::get('/', function () {
    return view('index',[
        "title" => "Home"
    ]);
});
Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);
Route::get('/dashboard', function(){
    return view('dashboard.index');
});
Route::get('/dashboard/listaplikasi', [DashboardController::class, 'index']);
Route::get('/dashboard/listaplikasi/create', [DashboardController::class, 'create']);
Route::post('/dashboard/listaplikasi/store', [DashboardController::class, 'store']);
Route::get('/dashboard/listaplikasi/edit/{id}', [DashboardController::class, 'edit']);
Route::put('/dashboard/listaplikasi/update/{id}', [DashboardController::class, 'update']);
Route::get('/dashboard/listaplikasi/delete/{id}', [DashboardController::class, 'delete']);

Route::get('/listaplikasi', [ListAplikasiController::class, 'index']);
Route::get('/listaplikasi/{listaplikasii:id}', [ListAplikasiController::class, 'show']);