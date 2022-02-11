<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login() 
    {
        return view('prot/login');
    }

    
  
    public function auth(Request $request) {

        $this->validate($request, [
            'email'=>'required',
            'password'=>'required',
          ]);    
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            dd('logou');       
        } else {
            return redirect()->back()->with('danger', 'email ou senha invalida');
        }
         
       
    }
}
