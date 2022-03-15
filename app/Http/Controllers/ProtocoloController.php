<?php

namespace App\Http\Controllers;
use View;
use Illuminate\Http\Request;
use App\Http\Requests\SeriesFormRequest; 

use App\Protocolo;
use App\Pessoa;

class ProtocoloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
        {
        $pessoa = Pessoa::all();  
        $protocolo = Protocolo::all();
        return view('prot/lista', compact('pessoa', $pessoa, 'protocolo', $protocolo));
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
        $pessoa = Pessoa::all();
        return view ('prot.create', compact("pessoa"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */





    public function store(Request $request)
    {
            $protocolo= new Protocolo();
            $protocolo->contribuinte = $request->input('contribuinte');
            $protocolo->descricao = $request->input('descricao');
            $protocolo->data = $request->input('data');
            $protocolo->prazo = $request->input('prazo');

           
        
            $protocolo->save();

            return redirect('/lista')->with('success','Protocolo cadastrado com sucesso!');;
    }

    public function show ($numeroprot) 
    {
        $protocolo = Protocolo::find($numeroprot);
        return view ('prot/showprot', ['protocolo' => $protocolo]);
    }



    public function edit($numeroprot) 
    {
        $protocolo = Protocolo::find($numeroprot);
        $pessoa = Pessoa::find($numeroprot);
        
        return view ('prot/editprot', compact('pessoa', 'protocolo'));
        
    }


    public function update(Request $request, $numeroprot)
    {
        
      $protocolo = Protocolo::findOrFail($numeroprot);
      $pessoa = Pessoa::find($numeroprot);
        $protocolo->update([
          'contribuinte' => $request -> contribuinte,
          'descricao' => $request -> descricao,
          'data' => $request -> prazo,
          'prazo' => $request -> prazo,
         

      ]);
        

        return redirect('/lista')->with('success','Protocolo editado com sucesso!');
      
        
    }

    public function delete($numeroprot)
    {
        $protocolo = protocolo::find($numeroprot);
        $protocolo->delete();
        return redirect('/lista')->with('warning','Protocolo excluido com sucesso!');;
    }

}