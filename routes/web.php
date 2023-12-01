<?php

use App\Http\Controllers\EmployeeController;
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
    return view('employee');
});

Route::get('employee-list', [EmployeeController::class, 'employee_list']);

Route::post('/employee-add', [EmployeeController::class, 'employeeAdd'])->name('employee-add');
