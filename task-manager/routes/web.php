<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/', [TaskController::class, 'index']);

Route::controller(TaskController::class)->group(function () {

    Route::get('/tasks', 'index')->name('task.list');

    Route::get('/tasks/new', 'create')->name('task.new');

    Route::post('/tasks', 'store')->name('task.save');

    Route::get('/tasks/{task}/edit', 'edit')->name('task.edit');

    Route::put('/tasks/{task}', 'update')->name('task.update');

    Route::delete('/tasks/{task}', 'destroy')->name('task.delete');

});