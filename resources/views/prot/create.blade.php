<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    
    <title>Cadastrar Protocolo</title>
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
                <li><a href="home">Inicio</a></li>
                <li><a href="cadastrop">Cadastrar nova Pessoa</a></li>
                <li><a href="cadastroprot">Cadastrar novo Protocolo</a></li>
                <li><a href="index">Pessoas Cadastradas</a></li>
                <li><a href="lista">Protocolos Cadastrados</a></li>
            </ul>
        </nav>
    </header>      
    <main></main>

    <section class="vh-100" style="background-color:#d8d8d8ce">
        <div class ="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-45">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card shadow-2-strong" style="border-radius: 1rem;">
                      <div class="card-body p-5 text-center">    

    <form action="{{ route('store_protocolo')}}" method="POST">
        @csrf
    
        <h2>Cadastrar Novo Protocolo</h2>
    <div class="form-holder" style=" text-align:left; padding-top: 60px">
    <label for="descricao">Descrição:</label>
    <input type="text" name="descricao" numeroprot="descricao" required><br>
    <label for="data">Data:</label>
    <input type="date" name="data" numeroprot="data" required><br>
    <label for="prazo">Prazo:</label>
    <input type="text" name="prazo" numeroprot="prazo" required><br>

    <select  name="contribuinte" id="">
        <option value="">Selecione uma pessoa</option>    
        @foreach ($pessoa as $p)
        <option value="{{ $p->nome }}"> 
        {{ $p->nome }}
        </option>
        @endforeach
    </select> 
   

    
     

    <button type="submit"  class="btn btn-success">Enviar</button>
</div>
</form>   




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>