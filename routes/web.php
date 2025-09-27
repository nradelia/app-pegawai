<?php

use App\Http\Controllers\EmployeeController; //import controllers
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('employees', EmployeeController::class);
