<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SeriesFormRequest; 
use App\User;
use Session;

class RegistroController extends Controller
{
    public function create()
    {
        return view('prot.cadastro');
    }

    public function store(Request $request)
    {
       
        $user = User::create(request(['name', 'email', 'password']));
        
        auth()->login($user);
        

            return redirect('/')->with('success','Login cadastrado com sucesso!');
    }
}
