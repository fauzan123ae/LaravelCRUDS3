<?php

use App\Http\Controllers\TaskController;


Route::get("/", [TaskController::class,"index"])->name("tasks.index");
Route::resource('tasks', TaskController::class);
Route::get('/tasks/create', [TaskController::class, 'create'])->name('tasks.create');
Route::post('/tasks', [TaskController::class, 'store'])->name('tasks.store');
Route::get('/tasks', [TaskController::class, 'show'])->name('tasks.show');