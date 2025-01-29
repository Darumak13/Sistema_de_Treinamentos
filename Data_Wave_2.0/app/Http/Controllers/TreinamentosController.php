<?php

namespace App\Http\Controllers;

use App\Models\Treinamentos;
use App\Models\Cargos;
use App\Models\Produtos;

use Illuminate\Http\Request;

class TreinamentosController extends Controller
{
    public function index()
    {
        $treinamentos = Treinamentos::get();
        return view('treinamentos.index', compact('treinamentos'));
    }

    public function cadastro($id = null)
    {
        $resultado = null;
        if ($id) {
            $resultado = Treinamentos::find($id);    
        }

        $cargos = Cargos::get();
        return view('treinamentos.cadastro', compact('resultado','cargos'));
    }

    public function salvar(Request $request)
    {
        if ($request->id) {
            $u = Treinamentos::find($request->id);
        } else {
            $u = new Treinamentos;
        }

        $u->idCargo = $request->idCargo; 
        $u->nome = $request->nome;
        $u->created_at = $request->created_at;
        $u->validade_meses = $request->validade_meses;
        $u->save();

        return redirect('/treinamentos');
    }

    public function remover($id)
    {
        $r = Treinamentos::find($id);
        $r->delete();

        return redirect('/treinamentos');
    }
}
