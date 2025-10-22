<?php

use App\Http\Controllers\EmployeeController; //import controllers
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\PositionController;
use App\Models\Department;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('employees', EmployeeController::class);

Route::resource('departments', DepartmentController::class);

Route::resource('positions', PositionController::class);