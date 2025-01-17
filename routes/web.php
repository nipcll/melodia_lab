<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\CursosController;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\ModuloController;
use App\Http\Controllers\AulaController;
use App\Http\Controllers\ProvaController;

Route::get('/', function () {
    return view('welcome');
});

//login
// Rotas para autenticação de usuários
Route::prefix('login')->group(function () {
    Route::get('/', [UsuarioController::class, 'showLoginForm'])->name('login.login'); // Tela de login
    Route::post('/', [UsuarioController::class, 'login'])->name('login'); // Ação de login
});

    Route::get('/register', [UsuarioController::class, 'showRegisterForm'])->name('register'); // Tela de registro
    Route::post('/register', [UsuarioController::class, 'register'])->name('register.store'); // Ação de registro

    Route::post('/logout', [UsuarioController::class, 'logout'])->name('logout'); // Rota para logout



Route::get('/perfil', [PerfilController::class, 'index'])->middleware('auth')->name('perfil.index');


//cursos
Route::prefix('cursos')->group(function () {
    Route::get('/', [CursosController::class, 'index'])->name('cursos.index');
    Route::get('/create', [CursosController::class, 'create'])->name('cursos.create');
    Route::post('/', [CursosController::class, 'store'])->name('cursos.store');
    Route::get('/{id}/edit', [CursosController::class, 'edit'])->name('cursos.edit');
    Route::put('/{id}', [CursosController::class, 'update'])->name('cursos.update');
    Route::delete('/{id}', [CursosController::class, 'destroy'])->name('cursos.destroy');

});


// Módulos
Route::prefix('modulos')->group(function () {
    Route::get('/{cursoId}', [ModuloController::class, 'index'])->name('modulos.index');
    Route::get('/{cursoId}/create', [ModuloController::class, 'create'])->name('modulos.create');
    Route::post('/{cursoId}', [ModuloController::class, 'store'])->name('modulos.store');
    Route::get('/{id}/edit', [ModuloController::class, 'edit'])->name('modulos.edit');
    Route::put('/{id}', [ModuloController::class, 'update'])->name('modulos.update');
    Route::delete('/{id}', [ModuloController::class, 'destroy'])->name('modulos.destroy');
});

// Aulas
Route::prefix('aulas')->group(function () {
    Route::get('/{moduloId}', [AulaController::class, 'index'])->name('aulas.index');
    Route::get('/{moduloId}/create', [AulaController::class, 'create'])->name('aulas.create');
    Route::post('/{moduloId}', [AulaController::class, 'store'])->name('aulas.store');
    Route::get('/{id}/edit', [AulaController::class, 'edit'])->name('aulas.edit');
    Route::put('/{id}', [AulaController::class, 'update'])->name('aulas.update');
});
// Provas
Route::prefix('provas')->group(function () {
    Route::get('/{moduloId}', [ProvaController::class, 'index'])->name('provas.index');
    Route::get('/{moduloId}/create', [ProvaController::class, 'create'])->name('provas.create');
    Route::post('/{moduloId}', [ProvaController::class, 'store'])->name('provas.store');
    Route::get('/{id}/edit', [ProvaController::class, 'edit'])->name('provas.edit');
    Route::put('/{id}', [ProvaController::class, 'update'])->name('provas.update');
});
// Perguntas
Route::prefix('perguntas')->group(function () {
    Route::get('/{provaId}', [PerguntaController::class, 'index'])->name('perguntas.index');
    Route::get('/{provaId}/create', [PerguntaController::class, 'create'])->name('perguntas.create');
    Route::post('/{provaId}', [PerguntaController::class, 'store'])->name('perguntas.store');
    Route::get('/{id}/edit', [PerguntaController::class, 'edit'])->name('perguntas.edit');
    Route::put('/{id}', [PerguntaController::class, 'update'])->name('perguntas.update');
});
// Respostas
Route::prefix('respostas')->group(function () {
    Route::get('/{perguntaId}', [RespostaController::class, 'index'])->name('respostas.index');
    Route::get('/{perguntaId}/create', [RespostaController::class, 'create'])->name('respostas.create');
    Route::post('/{perguntaId}', [RespostaController::class, 'store'])->name('respostas.store');
    Route::get('/{id}/edit', [RespostaController::class, 'edit'])->name('respostas.edit');
    Route::put('/{id}', [RespostaController::class, 'update'])->name('respostas.update');
});