<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    Champion,
    HomeController,
    FuncaoController,
    PersonagemController,
    GameController
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
Route::get('/campea/show/{id}', [Champion::class, 'show'])->name('campeao.show');

Route::get('/campeao/nome', [Champion::class, 'draven'])->name('campeao.index.draven');

//funcao
Route::get('/funcao', [FuncaoController::class, 'index'])->name('funcao.index');
Route::get('/funcao/create', [FuncaoController::class, 'create'])->name('funcao.create');
Route::post('/funcoes', [FuncaoController::class, 'store'])->name('funcoes.store');

//personagem
Route::get('/personagem', [PersonagemController::class, 'create'])->name('personagem.create');
Route::post('/personagem', [PersonagemController::class, 'store'])->name('personagem.store');


Route::get('/teste', [GameController::class, 'home'])->name('home');
Route::get('/jogo', [GameController::class, 'showGame'])->name('game');
Route::get('/baralhos', [GameController::class, 'showDeckTypes'])->name('decks');
Route::get('/campeoes', [GameController::class, 'showChampions'])->name('champions');
Route::get('/hero', [GameController::class, 'hero'])->name('hero');
