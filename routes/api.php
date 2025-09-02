<?php

use App\Http\Controllers\AlunoController;
use App\Models\Aluno;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


// Route::get('/alunos', [AlunoController::class, 'index'])->name('alunos.index');
// Route::get('/alunos/{aluno}', [AlunoController::class, 'show'])->name('alunos.show');
// Route::post('/alunos', [AlunoController::class, 'store'])->name('alunos.store');
// Route::put('/alunos/{aluno}', [AlunoController::class, 'update'])->name('alunos.update');
// Route::delete('/alunos/{aluno}', [AlunoController::class, 'destroy'])->name('alunos.destroy');


Route::apiResource('alunos', AlunoController::class);

