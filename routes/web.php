<?php

use App\Models\Course;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\Auth\UserController;

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

/*
|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('auth.login');
});

/*
|--------------------------------------------------------------------------
| Private Routes with middleware admin
|--------------------------------------------------------------------------
*/
// Authentication
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'admin'])->name('dashboard');

// Courses
Route::get('/courses', function () {
    $courses = Course::all();
    $selectedCourse = isset($_GET['selectedCourse']) ? Course::find($_GET['selectedCourse']) : '';

    return view('courses', compact('courses', 'selectedCourse'));
})->middleware(['auth', 'admin'])->name('courses');


require __DIR__ . '/auth.php';
