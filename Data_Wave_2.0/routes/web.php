<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\CargosController;
use App\Http\Controllers\ColaboradoresController;
use App\Http\Controllers\TreinamentosController;
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

Route::get('/', function () {
    return view('index');
});

/*              ROTAS USUÁRIOS            */
Route::get('/usuarios', [UsuariosController::class, 'index']);
Route::get('/usuarios/cadastro',[UsuariosController::class, 'cadastro']);
Route::get('/usuarios/cadastro/{id}',[UsuariosController::class, 'cadastro']);
Route::post('/usuarios/salvar',[UsuariosController::class,'salvar']);
Route::get('/usuarios/remover/{id}',[UsuariosController::class, 'remover']);

/*              ROTAS CARGOS              */
Route::get('/cargos', [CargosController::class, 'listar']);
Route::get('/cargos/cadastro', [CargosController::class, 'cadastro']);
Route::get('/cargos/cadastro/{id}',[CargosController::class, 'cadastro']);
Route::post('/cargos/cadastrar', [CargosController::class, 'cadastrar']);
Route::get('/cargos/remover/{id}', [CargosController::class, 'remover']);

/*              ROTAS COLABORADORES       */
Route::get('/colaboradores', [ColaboradoresController::class, 'index']);
Route::get('/login', [ColaboradoresController::class, 'login']);
Route::get('/colaboradores/cadastro', [ColaboradoresController::class, 'cadastro']);
Route::get('/colaboradores/cadastro/{id}',[ColaboradoresController::class, 'cadastro']);
Route::post('/colaboradores/salvar', [ColaboradoresController::class, 'salvar']);
Route::get('/colaboradores/remover/{id}', [ColaboradoresController::class, 'remover']);


/*              ROTAS TREINAMENTOS       */
Route::get('/treinamentos', [TreinamentosController::class, 'index']);
Route::get('/treinamentos/cadastro', [TreinamentosController::class, 'cadastro']);
Route::get('/treinamentos/cadastro/{id}',[TreinamentosController::class, 'cadastro']);
Route::post('/treinamentos/salvar', [TreinamentosController::class, 'salvar']);
Route::get('/treinamentos/remover/{id}', [TreinamentosController::class, 'remover']);
