<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\StudentController;



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
//HomePage
Route::get('/', function () {
    return view('welcome');
});
//Student Detail Page
Route::get('show', function(){
    return view('studentDetail');
});
//staff login page
Route::post('staff', [StudentController::class, 'staffUse']);
Route::view('stafflogin', 'staff');
