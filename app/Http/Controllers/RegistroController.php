<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SeriesFormRequest; 
use App\User;
use Session;
use Illuminate\Support\Facades\Hash;

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

        $request->user()->fill([
            'password' => Hash::make($request->Password)
        ])->save();

       
        

            return redirect('/')->with('success','Login cadastrado com sucesso!');
    }
}
