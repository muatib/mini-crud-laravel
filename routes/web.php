<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('tasks', TaskController::class);
Route::resource('tasks', TaskController::class)->except(['destroy']); 
Route::delete('/tasks/{task}', [TaskController::class, 'destroy'])->name('tasks.destroy'); 

