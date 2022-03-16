<?php

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
    return view('courses');
})->middleware(['auth', 'admin'])->name('courses');

// Route::middleware(['auth', 'admin'])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard')->name('dashboard');
//     });
// });


require __DIR__ . '/auth.php';
