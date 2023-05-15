<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\StudentController;
use Illuminate\Http\Request;
use App\Models\Student; 

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

// Home Page
Route::get('/', function () {
    return view('welcome');
});

// Staff login page
Route::post('staff', [StudentController::class, 'staffUse']);
Route::view('staff', 'staff');

// Homepage (duplicate)
Route::get('/', function () {
    return view('welcome');
});

// Search functionality
Route::post('/search', [StudentController::class, 'searchStudents'])->name('students.search');
