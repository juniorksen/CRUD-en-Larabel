<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NotesController;

Route::get('/', [NotesController::class, 'index'])->name ('note.index');

Route::get('/notes/created',[NotesController::class, 'create'])->name ('note.create');
Route::post('/notes/store',[NotesController::class, 'store'])->name ('note.store');
Route::get('/notes/edit/{note}',[NotesController::class, 'edit'])->name ('note.edit');
Route::put('/notes/update/{note}',[NotesController::class, 'update'])->name ('note.update');
Route::get('/notes/show/{note}',[NotesController::class, 'show'])->name ('note.show');
Route::delete('/notes/destroy/{note}',[NotesController::class, 'destroy'])->name ('note.destroy');
