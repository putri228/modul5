<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EmployeeController;

Route::get('/', function () {
    return view('welcome');
});

//HomeController
Route::get('home', [HomeController::class, 'index'])->name('home');

//ProfileController
Route::get('profile', ProfileController::class)->name('profile');

//EmployeeList
Route::resource('employees', EmployeeController::class);
