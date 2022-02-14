<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pessoa;
use App\Protocolo;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('prot/home');
    }

    public function search() {
        $search = $_GET['query'];
        $pessoa = Pessoa::where('nome', 'LIKE', '%' .$search. '%')->orWhere('cpf', 'LIKE', '%' .$search. '%')
       ->orWhere('data_de_nascimento', 'LIKE', '%' .$search. '%')
       ->orWhere('cpf', 'LIKE', '%' .$search. '%')
       ->orWhere('sexo', 'LIKE', '%' .$search. '%')
       ->orWhere('cidade', 'LIKE', '%' .$search. '%')
       ->orWhere('bairro', 'LIKE', '%' .$search. '%')
       ->orWhere('rua', 'LIKE', '%' .$search. '%')
       ->orWhere('numero', 'LIKE', '%' .$search. '%')
       ->orWhere('complemento', 'LIKE', '%' .$search. '%')->get();

        return view('prot/search', compact('pessoa'));
    }

    public function searchprot(){
        $search = $_GET['query'];
       $protocolo = Protocolo::where('descricao', 'LIKE', '%' .$search. '%')
       ->orWhere('data', 'LIKE', '%' .$search. '%')
       ->orWhere('contribuinte', 'LIKE', '%' .$search. '%')
       ->orWhere('prazo', 'LIKE', '%' .$search. '%')->get();

        return view('prot/searchprot', compact('protocolo'));
    }
}


