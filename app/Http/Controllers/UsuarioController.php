<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    // Método para exibir o formulário de login
    public function showLoginForm()
    {
        return view('login.login');
    }

    // Método para exibir o formulário de registro
    public function showRegisterForm()
    {
        return view('login.register'); 
    }

    // Método para registrar um novo usuário
    public function register(Request $request)
{


    $request->validate([
        'nome' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:usuario',
        'senha' => 'required|string|min:8|confirmed',
    ]);

    // Cria o usuário
    Usuario::create([
        'nome' => $request->nome,
        'email' => $request->email,
        'senha' => Hash::make($request->senha),
    ]);

    return redirect()->route('login.login')->with('success', 'Registro realizado com sucesso. Você pode fazer login agora.');
}
    // Método para logar o usuário
    public function login(Request $request)
{
    $request->validate([
        'email' => 'required|string|email',
        'senha' => 'required|string',
    ]);

    // Busca o usuário pelo e-mail
    $usuario = Usuario::where('email', $request->email)->first();

    // Verifica se o usuário existe e se a senha está correta
    if ($usuario && Hash::check($request->senha, $usuario->senha)) {
        Auth::login($usuario); // Loga o usuário
        return redirect()->route('perfil.index'); // Redireciona para a página de perfil após login
    }

    return redirect()->back()->withErrors(['email' => 'As credenciais fornecidas não correspondem aos nossos registros.']);
}
public function logout(Request $request)
{
    Auth::logout(); // Faz logout do usuário autenticado
    return redirect()->route('login.login')->with('success', 'Você foi desconectado com sucesso.'); // Redireciona para a página de login
}

}
