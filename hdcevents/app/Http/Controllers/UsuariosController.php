<?php
namespace App\Http\Controllers;

use App\Models\Usuarios;
use App\Models\Produtos;

use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function index()
    {
        $usuario = Usuarios::get();
        return view('usuarios.index',compact('usuario'));

    }

    public function cadastro($id=null)
    {
        $resultado = null;
        if($id){
            $resultado = Usuarios::find($id); 
        }
        return view('usuarios.cadastro', compact('resultado'));
    }

    public function salvar(Request $request)
    {
        if($request->id){
            $u = Usuarios::find($request->id);
        }else{
            $u = new Usuarios;
        }

        $u->nome = $request->nome;
        $u->email = $request->email;
        $u->senha = bcrypt($request->senha);
        $u->save();

        return redirect('/usuarios');
    }

    public function remover($id)
    {
        $r = Usuarios::find($id);
        $r->delete();

        return redirect('/usuarios');
    }
}
