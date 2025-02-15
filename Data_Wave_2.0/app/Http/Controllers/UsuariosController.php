<?php
namespace App\Http\Controllers;

use App\Models\Usuarios;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function index()
    {
        $usuario = Usuarios::get();
        return view('usuarios.index',compact('usuario'));

    }

    public function loginProcess(LoginRequest $request){

        // Validar o formulário
        $request->validated();

        // Validar o usuário e a password com as informações do banco de dados
        $autheticade = Auth::attempt(['email' => $request-> email, 'password'=>$request->password, 'permissao' =>$request->permissao]);


    }

    public function Adm(){
        $ADM = Usuarios::get();
        return view('admnistrativo.index',compact('ADM'));
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
        $u->password = bcrypt($request->password);
        $u->permissao = $request->permissao;
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
