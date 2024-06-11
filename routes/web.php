<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\SpaceController;
use App\Http\Controllers\UserController;
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
Route::resource('/users', UserController::class);

Route::get("/auth/login", [AuthController::class, 'login'])->name("login");
Route::post("/auth/login", [AuthController::class, 'validation'])->name("login-validation");

Route::get("/auth/loginTeacher", [AuthController::class, 'loginTeacher'])->name("loginTeacher");
Route::post("/auth/loginTeacher", [AuthController::class, 'validationTeacher'])->name("loginTeacher-validation");

Route::get("/auth/loginParent", [AuthController::class, 'loginParent'])->name("loginParent");
Route::post("/auth/loginParent", [AuthController::class, 'validationParent'])->name("loginParent-validation");

Route::post("/auth/logout", [AuthController::class, 'logout'])->name("logout");
