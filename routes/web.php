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
//list
Route::get('employee-list', [EmployeeController::class, 'employee_list']);

//view and editview
Route::get('employee-view', [EmployeeController::class, 'employee_view']);

//add
Route::post('/employee-add', [EmployeeController::class, 'employeeAdd'])->name('employee-add');

Route::get('employee-delete', [EmployeeController::class, 'employee_delete']);

//edit and update
Route::post('employee-edit', [EmployeeController::class, 'employee_edit']);
