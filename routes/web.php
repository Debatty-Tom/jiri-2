<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\JiriController::class, 'index'])->name('jiris.home');
Route::get('/jiris', [App\Http\Controllers\JiriController::class, 'index'])->name('jiris.index');
Route::get('/jiris/create', [App\Http\Controllers\JiriController::class, 'create'])->name('jiris.create');
Route::get('/jiris/{jiri}', [App\Http\Controllers\JiriController::class, 'show'])->name('jiris.show');
Route::get('/jiris/{jiri}/edit', [App\Http\Controllers\JiriController::class, 'edit'])->name('jiris.edit');

Route::post('/jiris', [App\Http\Controllers\JiriController::class, 'store'])->name('jiris.store');
Route::patch('/jiris/{jiri}', [App\Http\Controllers\JiriController::class, 'update'])->name('jiris.update');
Route::delete('/jiris/{jiri}', [App\Http\Controllers\JiriController::class, 'destroy'])->name('jiris.delete');



Route::get('/contacts', [App\Http\Controllers\ContactController::class, 'index'])->name('contacts.index');
Route::get('/contacts/create', [App\Http\Controllers\ContactController::class, 'create'])->name('contacts.create');
Route::get('/contacts/{contact}', [App\Http\Controllers\ContactController::class, 'show'])->name('contacts.show');
Route::get('/contacts/{contact}/edit', [App\Http\Controllers\ContactController::class, 'edit'])->name('contacts.edit');

Route::post('/contacts', [App\Http\Controllers\ContactController::class, 'store'])->name('contacts.store');
Route::patch('/contacts/{contact}', [App\Http\Controllers\ContactController::class, 'update'])->name('contacts.update');
Route::delete('/contacts/{contact}', [App\Http\Controllers\ContactController::class, 'destroy'])->name('contacts.delete');



Route::get('/projects', [App\Http\Controllers\ProjectController::class, 'index'])->name('projects.index');
Route::get('/projects/create', [App\Http\Controllers\ProjectController::class, 'create'])->name('projects.create');
Route::get('/projects/{project}', [App\Http\Controllers\ProjectController::class, 'show'])->name('projects.show');
Route::get('/projects/{project}/edit', [App\Http\Controllers\ProjectController::class, 'edit'])->name('projects.edit');

Route::post('/projects', [App\Http\Controllers\ProjectController::class, 'store'])->name('projects.store');
Route::patch('/projects/{project}', [App\Http\Controllers\ProjectController::class, 'update'])->name('projects.update');
Route::delete('/projects/{project}', [App\Http\Controllers\ProjectController::class, 'destroy'])->name('projects.delete');
