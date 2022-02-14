<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Protocolos Cadastrados</title>
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    
    
</head>


<body>
    <header>
        <nav >
            <a class="logo" href="home">Prefeitura</a>
            <div class="mobile-menu">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
            <ul class="nav-list">
                <li><a href="http://127.0.0.1:8000/home">Inicio</a></li>
                <li><a href="http://127.0.0.1:8000/cadastrop">Cadastrar nova Pessoa</a></li>
                <li><a href="http://127.0.0.1:8000/cadastroprot">Cadastrar novo Protocolo</a></li>
                <li><a href="http://127.0.0.1:8000/index">Pessoas Cadastradas</a></li>
                <li><a href="http://127.0.0.1:8000/lista">Protocolos Cadastrados</a></li>
            </ul>
        </nav>
    </header>      
    <main></main>

    <section class="vh-100" style="background-color:#d8d8d8ce">
        <div class ="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-50">
                <div class="col-12 col-md-10 col-lg-10 col-xl-10">
                    <div class="card shadow-2-strong" style="border-radius: 1rem;">
                      <div class="card-body p-5 text-center">    
<div class ="container">
    <h1> Listagem de Protocolos</h1>    


<table class ="table table-condensed">
        <thead>
            <tr>
                <td>Numero de Protocolo</td>
                <td>Contribuinte</td>
                <td>Descrição</td>
                
            </tr>    
        </thead>
        
        <tbody>
           
            @foreach($protocolo as $protocolo)
            <tr>
                <td>{{ $protocolo->numeroprot }}</td>
                <td>{{ $protocolo->contribuinte }}</td>
                <td>{{ $protocolo->descricao }} </td>
                <td>
                    <a href="{{ route('showprot', $protocolo->numeroprot) }}" class="btn btn-primary" style="float: right">Ver</a>
                    <a href="{{ route('editprot', $protocolo->numeroprot) }}" class="btn btn-success" style="float: right">Editar</a>
                    <form action="/deleteprot/{{ $protocolo->numeroprot }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit"  class="btn btn-danger" style="float: right"><i class='fa fa-trash'></i> Delete</a></button>
    
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    
    </div>
    
    <script src="{{asset('js/validation/validation-pessoas/validation-pessoas-create.js')}}"></script>
    <script src="{{asset('js/messages_pt_BR.js')}}"></script>
    <script src='jquery.min.js'></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
    
</body>
    </html>