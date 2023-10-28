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
Route::get('/quizzes/create', [QuizController::class, 'create']);
Route::get('/quizzes/{id}/edit', [QuizController::class, 'edit']);
Route::post('/quizzes/{id?}', [QuizController::class, 'store']);