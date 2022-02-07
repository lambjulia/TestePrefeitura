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

            return redirect('/index');
    }

    public function show ($id) 
    {
        $protocolo = Protocolo::find($id);
        return view ('doc/show', ['protocolo' => $protocolo]);
    }



    public function edit($id) 
    {
        $protocolo = protocolo::find($id);
        return view('doc/edit', ['protocolo' => $protocolo]);
    }


    public function update(Request $request, $id)
    {
        
      $protocolo = protocolo::findOrFail($id);
      $protocolo->update([
          'descricao' => $request -> descricao,
          'data' => $request -> prazo,
          'prazo' => $request -> prazo,
         

      ]);
        

        return redirect('/index');
      
        
    }

    public function delete($id)
    {
        $protocolo = protocolo::find($id);
        $protocolo->delete();
        return redirect('/index');
    }

}