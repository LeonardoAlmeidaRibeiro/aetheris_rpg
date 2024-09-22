<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    Champion,
    HomeController,
    FuncaoController,
    PersonagemController
};

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/old', function () {
    return view('welcome');
});
Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/teste', [HomeController::class, 'teste'])->name('home.teste');

//campeões
Route::get('/campeao', [Champion::class, 'index'])->name('campeao.index');
Route::get('/campeao/nome', [Champion::class, 'draven'])->name('campeao.index.draven');

//funcao
Route::get('/funcao', [FuncaoController::class, 'index'])->name('funcao.index');
Route::get('/funcao/create', [FuncaoController::class, 'create'])->name('funcao.create');
Route::post('/funcoes', [FuncaoController::class, 'store'])->name('funcoes.store');

//personagem
Route::get('/personagem', [PersonagemController::class, 'create'])->name('personagem.create');
Route::post('/personagem', [FuncaoController::class, 'store'])->name('personagem.store');