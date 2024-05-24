<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\SpaceController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::resource('/spaces', SpaceController::class);

Route::get("/auth/login", [AuthController::class, 'login'])->name("login-view");
Route::post("/auth/login", [AuthController::class, 'validation'])->name("login-validation");
