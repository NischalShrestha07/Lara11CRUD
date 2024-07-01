<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('student-list', [StudentController::class, 'index']);
Route::get('add-student', [StudentController::class, 'addStudent']);
Route::post('save-student', [StudentController::class, 'saveStudent']);
