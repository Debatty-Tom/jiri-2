<?php

use Illuminate\Support\Facades\Route;


Route::get('/contacts', [App\Http\Controllers\ContactController::class, 'index'])->name('contacts.index');
Route::get('/contacts/create', [App\Http\Controllers\ContactController::class, 'create'])->name('contacts.create');
Route::get('/contacts/{contact}', [App\Http\Controllers\ContactController::class, 'show'])->name('contacts.show');
Route::get('/contacts/{contact}/edit', [App\Http\Controllers\ContactController::class, 'edit'])->name('contacts.edit');

Route::post('/contacts', [App\Http\Controllers\ContactController::class, 'store'])->name('contacts.store');
Route::patch('/contacts/{contact}', [App\Http\Controllers\ContactController::class, 'update'])->name('contacts.update');
Route::delete('/contacts/{contact}', [App\Http\Controllers\ContactController::class, 'destroy'])->name('contacts.delete');
