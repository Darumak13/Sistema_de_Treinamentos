<?php

namespace App\Http\Controllers;

use App\Models\Cargos;
use Illuminate\Http\Request;
use App\Models\LoginRequest;


class CargosController extends Controller
{
    /*  LISTAR */
    public function listar()
    {
        $cargos = Cargos::all();
        return view('cargos.listar', compact('cargos'));
    }

    /*  CADASTRO */
    public function cadastro($id = null)
    {
        $resultado = null;
        if ($id) {
            $resultado = Cargos::find($id);
        }
        return view('cargos.cadastro', compact('resultado'));
    }

    /*  CADASTRAR */
    public function cadastrar(Request $request)
    {
        if ($request->id) {
            $cargos = Cargos::find($request->id);
        } else {
            $cargos = new Cargos;
        }
        $cargos->nome = $request->nome;
        $cargos->save();
        return redirect()->back();
    }

    /*  REMOVER */
    public function remover($id)
    {
        $cargo = Cargos::find($id);
        if (!$cargo) {
            echo "Cargo não encontrado";
            exit();
        }
        $cargo->delete();

        return redirect()->back();
    }


};
