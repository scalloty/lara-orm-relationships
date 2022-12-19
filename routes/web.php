<?php

use App\Http\Controllers\HR\EmployeeContorller;
use App\Http\Controllers\Park\ParkingController;
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

Route::get('employees', [EmployeeContorller::class, 'index'])->name('employee');
Route::get('parking', [ParkingController::class, 'index'])->name('parking');