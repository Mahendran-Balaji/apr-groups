<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PayslipController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\DashboardController;

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');

    Route::get('/payslip',[PayslipController::class,'index'])->name('webzeee_payslip');

    Route::get('/new-employee',[EmployeeController::class,'index'])->name('add_employee');
    Route::post('/new-employee',[EmployeeController::class,'join_new_employee'])->name('add_new_employee');
    Route::get('/get-details-for-payslip/{empid}',[EmployeeController::class,'get_details_for_payslip'])->name('employee-details-payslip');

});
