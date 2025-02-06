<?php
namespace App\Http\Controllers;

use App\Models\Usuarios;
use App\Models\Produtos;
use App\Http\Requests\LoginRequest;

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

        // Validar o usuário e a senha com as informações do banco de dados
        $autheticade = Auth::attempt(['email' => $request-> email, 'senha'=>$request->senha]);

        // Verificar se o usuário foi autenticado
        if(!$autheticade){
            //Redirecionar o usuário para a pagina anterior "login", enviar a mensagem erro
            return back() ->withInput()->with('error', 'E-mail ou senha inválido!');
        }
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
