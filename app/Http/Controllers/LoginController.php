<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class LoginController extends Controller
{
    


public function cadastrar() {

}

public function login(Request $request){
    
    $erro = '';
    if($request->get('erro') == 1) {
        $erro = 'Usuário e ou senha não existe';
    }

    return view('prot.login', ['erro'=>$erro]);
}

public function autenticar(Request $request) {
    //regras de validação
    $regras = [
        'usuario' => 'email',
        'senha' => 'required'
    ];

    //as mensagens de feedback de validação

    $feedback = [
        'usuario.email' => 'O campo usuário(email) é obrigatório',
        'senha.required' => 'O campo senha é obrigatório'
    ];

    $request->validate($regras, $feedback);

    $email= $request->get('usuario');
    $password= $request->get('senha');
    
    

    //iniciar o model user
    $user = new User();

    $usuario = $user->where('email', $email)->where('password', $password)->get()->first();


     if(isset($usuario->name)) {
         session_start();
         $_SESSION['name'] = $usuario->name;
         $_SESSION['email'] = $usuario->email;

        return redirect()->route('home');
     }else {
         return redirect()->route('home', ['erro' => '1']);
     }
     

}







}
