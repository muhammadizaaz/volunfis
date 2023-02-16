<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TablesController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/activity-list', function () {
    return view('activity-list');   
});

//test route

Route::get('/test', function () {
    return view('test');
});

Route::get('/upload-file', function () {
    return view('student.upload-file');
});

Route::get('/profile', function () {
    return view('lecturer.profile');
});

Route::get('/table', function () {
    return view('lecturer.applicant');
});

Route::get('/dashboard', function () {
    return view('lecturer.dashboard');
});




//auth route for lecturer
Route::group(['middleware' => ['auth', 'role:lecturer']], function() { 
    Route::get('/lecturer',[DashboardController::class,'index'])->name('dashboard');
});

// for student
Route::group(['middleware' => ['auth', 'role:student']], function() { 
    Route::get('/student', [DashboardController::class, 'myprofile'])->name('dashboard.myprofile');
});

require __DIR__.'/auth.php';
