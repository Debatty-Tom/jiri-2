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
