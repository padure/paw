<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\StudentController;

Route::get('/', [MainController::class, 'index'])->name('index');
Route::resource('students', StudentController::class);
