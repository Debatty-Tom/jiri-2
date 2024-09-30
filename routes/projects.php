<?php

use Illuminate\Support\Facades\Route;

Route::get('/projects', [App\Http\Controllers\ProjectController::class, 'index'])->name('projects.index');
Route::get('/projects/create', [App\Http\Controllers\ProjectController::class, 'create'])->name('projects.create');
Route::get('/projects/{project}', [App\Http\Controllers\ProjectController::class, 'show'])->name('projects.show');
Route::get('/projects/{project}/edit', [App\Http\Controllers\ProjectController::class, 'edit'])->name('projects.edit');

Route::post('/projects', [App\Http\Controllers\ProjectController::class, 'store'])->name('projects.store');
Route::patch('/projects/{project}', [App\Http\Controllers\ProjectController::class, 'update'])->name('projects.update');
Route::delete('/projects/{project}', [App\Http\Controllers\ProjectController::class, 'destroy'])->name('projects.delete');
