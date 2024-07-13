<?php

use App\Http\Controllers\AbsentController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EvaluationController;
use App\Http\Controllers\SpaceController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ModuleController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\QuizController;
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


Route::middleware(['auth'])->resource('/spaces', SpaceController::class);
Route::middleware(['auth'])->resource('/users', UserController::class);
Route::middleware(['auth'])->resource('/absent', AbsentController::class);
Route::middleware(['auth'])->resource('/modules', ModuleController::class);
Route::middleware(['auth'])->resource('/articles', ArticleController::class);
Route::middleware(['auth'])->resource('/quizzes', QuizController::class);
Route::middleware(['auth'])->resource('/evaluations', EvaluationController::class);
Route::middleware(['auth'])->resource('/questions', QuestionController::class);

Route::get("/auth/login", [AuthController::class, 'login'])->name("login");
Route::post("/auth/login", [AuthController::class, 'validation'])->name("login-validation");

Route::get("/auth/loginTeacher", [AuthController::class, 'loginTeacher'])->name("loginTeacher");
Route::post("/auth/loginTeacher", [AuthController::class, 'validationTeacher'])->name("loginTeacher-validation");

Route::get("/auth/loginParent", [AuthController::class, 'loginParent'])->name("loginParent");
Route::post("/auth/loginParent", [AuthController::class, 'validationParent'])->name("loginParent-validation");

Route::post("/auth/logout", [AuthController::class, 'logout'])->name("logout");
