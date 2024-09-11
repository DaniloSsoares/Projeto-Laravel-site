<?php

use App\Http\Controllers\JogoController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::get('/listar', [JogoController::class, 'listar'])->name('jogo.listar');

Route::get('/cadastrar', [JogoController::class, 'cadastrar'])->name('jogo.cadastrar');

Route::get('/atualizar', function () {
    return view('atualizacao');
});

Route::get('/deletar', function () {
    return view('deletar');
});




Route::post('/adicionarJogo', [JogoController::class, 'adicionar'])->name('adicionar.jogo');


Route::post("/atualizar/{id}", [JogoController::class, 'atualizar']);

Route::get("/excluir/{id}",[JogoController::class, 'excluir'])->name('Excluir.jogo'); 

Route::get("/editar/{id}",[JogoController::class, 'editar'])->name('Editar.jogo');