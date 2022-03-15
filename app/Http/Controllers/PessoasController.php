<?php

namespace App\Http\Controllers;
use View;
use Illuminate\Http\Request;
use App\Http\Requests\SeriesFormRequest; 

use App\Pessoa;

class PessoasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        $pessoa = \App\Pessoa::all(); 
        $protocolo = \App\Protocolo::all();
        return view('index', compact('pessoa', $pessoa, 'protocolo', $protocolo));
    }

      


     public function cadastro()
    {
        return view('welcome');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('pessoas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */





    public function store(Request $request)
    {
             $pessoa = new Pessoa();
            $pessoa->nome = $request->input('nome');
            $pessoa->data_de_nascimento = $request->input('data_de_nascimento');
            $pessoa->cpf = $request->input('cpf');
            $pessoa->sexo = $request->input('sexo');
            $pessoa->cidade = $request->input('cidade');
            $pessoa->bairro = $request->input('bairro');
            $pessoa->rua = $request->input('rua');
            $pessoa->numero = $request->input('numero');
            $pessoa->complemento = $request->input('complemento');
        
            $pessoa->save();


            return redirect('/index')->with('success','Pessoa cadastrada com sucesso!');
    }

    public function show ($id) 
    {
        $pessoa = Pessoa::find($id);
        return view ('doc/show', ['pessoa' => $pessoa]);
    }



    public function edit($id) 
    {
        $pessoa = Pessoa::find($id);
        return view('doc/edit', ['pessoa' => $pessoa]);
    }


    public function update(Request $request, $id)
    {
        
      $pessoa = Pessoa::findOrFail($id);
      $pessoa->update([
          'nome' => $request -> nome,
          'data_de_nascimento' => $request -> data_de_nascimento,
          'cpf' => $request -> cpf,
          'sexo' => $request -> sexo,
          'cidade' => $request -> cidade,
          'bairro' => $request -> bairro,
          'rua' => $request -> rua,
          'numero' => $request -> numero,
          'complemento' => $request -> complemento,

      ]);
        

        return redirect('/index')->with('success','Pessoa editada com sucesso!');
      
        
    }

    public function delete($id)
    {
        $pessoa = Pessoa::find($id);
        $pessoa->delete();
        return redirect('/index')->with('warning','Pessoa excluida com sucesso!');
    }

 

    /**
     * 
     * 
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
  

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
  

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

}
