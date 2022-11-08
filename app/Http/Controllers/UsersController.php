<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UsersController extends Controller
{
    
    public function login(){
        return view('users.login');
    }

    public function create(){
        return view('users.register');
    }

    public function store(Request $request){
        $formFields = $request->validate([
            'name' => 'required',
            'email' => ['required','email', Rule::unique('users', 'email')],
            'password' => 'required|confirmed|min:8'
        ]);

        $formFields['password'] = bcrypt($formFields['password']);

        $user = User::create($formFields);

        //cria e automaticamente se loga
        auth()->Login($user);


        return redirect('/index')->with('message', 'Usuário criado com sucesso e logado');
    }

    public function authenticate(Request $request){

        $formFields = $request->validate([
            'email' => ['required','email'],
            'password' => 'required'
        ]);

        if(auth()->attempt($formFields)){
            $request->session()->regenerate();
            return redirect('/index')->with('message', 'Agora você está logado!');
        }

        return redirect('/')->withErrors(['email' => 'Credenciais Inválidas'])->onlyInput('email');

    }

    public function logout(Request $request){
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message', 'Usuário deslogado!');
    }

}
