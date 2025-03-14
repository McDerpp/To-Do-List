<?php

use App\Http\Controllers\TaskController;
use App\Http\Controllers\SubTaskController;
use Illuminate\Support\Facades\Route;

// Task Routes
Route::apiResource('tasks', TaskController::class);
Route::post('/tasks', [TaskController::class, 'store']);
Route::patch('/tasks/{task}', [TaskController::class, 'update']);
Route::delete('/tasks/{task}', [TaskController::class, 'destroy']);
Route::get('/tasks/{task}', [TaskController::class, 'show']);


// SubTask Routes
Route::apiResource('subtasks', SubTaskController::class);
Route::get('subtasks/task/{taskId}', [SubTaskController::class, 'showByTaskId']);
Route::patch('/subtasks/{subTask}', [SubTaskController::class, 'update']);
Route::delete('/subtasks/{id}', [SubTaskController::class, 'destroy']);
