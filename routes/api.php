<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\UserController;
use App\Http\Controllers\CourseController;

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

/**
 * Public routes
 */
Route::post('register', [UserController::class, 'register'])->name('register');
Route::post('login', [UserController::class, 'login'])->name('login');
Route::get('courses', [CourseController::class, 'getCourses'])->name('getCourses');
Route::get('courses/{id}', [CourseController::class, 'getCourseByID'])->name('getCourseByID');


/**
 * Protected routes
 */
Route::middleware(['auth:sanctum'])->group(function () {
    Route::post('logout', [UserController::class, 'logout'])->name('logout');
});
