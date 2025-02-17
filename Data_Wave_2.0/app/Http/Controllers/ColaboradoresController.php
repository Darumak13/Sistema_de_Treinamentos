<?php

namespace App\Http\Controllers;

use App\Models\Colaboradores;
use App\Models\Cargos;
use App\Models\Treinamentos;
use App\Models\Usuarios;
use Illuminate\Http\Request;
use App\Models\LoginRequest;


class ColaboradoresController extends Controller
{
    public function index()
    {
        $colaborador = Colaboradores::get();
        return view('colaboradores.index', compact('colaborador'));
    }

    public function colaborador($id = null)
    {
        $resultado = null;
        if($id){
            $resultado = Colaboradores::find($id);
        }

        return view('colaboradores.colaborador', compact('resultado'));
    }


    public function cadastro($id = null)
    {
        $resultado = null;
        if ($id) {
            $resultado = Colaboradores::find($id);    
        }

        $cargos = Cargos::get();
        return view('colaboradores.cadastro', compact('resultado','cargos'));
    }

    public function salvar(Request $request)
    {
        if ($request->id) {
            $u = Colaboradores::find($request->id);
        } else {
            $u = new Colaboradores;
        }

        $u->idCargo = $request->idCargo;
        $u->nome = $request->nome;
        $u->permissao = $request->permissao; 
        $u->email = $request->email;
        $u->senha = bcrypt($request->senha);
        $u->save();

        return redirect('/colaboradores/colaborador');
    }

    public function remover($id)
    {
        $r = Colaboradores::find($id);
        $r->delete();

        return redirect('/colaboradores');
    }
    
};