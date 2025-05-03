<?php

use App\Http\Controllers\StaffController;
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

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

// Route::get('/attendance', function () {
//     return view('attendance');
// })->middleware(['auth'])->name('attendance');  // 後で認証を有効化するときに再利用可能

Route::get('/attendance', [StaffController::class, 'attendance'])->name('attendance-staff');

