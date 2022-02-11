<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    
    <title>Cadastrar Pessoa</title>
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
                <li><a href="cadastro">Cadastrar nova Pessoa</a></li>
                <li><a href="cadastroprot">Cadastrar novo Protocolo</a></li>
                <li><a href="index">Pessoas Cadastradas</a></li>
                <li><a href="lista">Protocolos Cadastrados</a></li>
            </ul>
        </nav>
    </header>      

    <form action="{{ route('store')}}" method="POST">
        @csrf
    <div class="text-center" style=" text-align:left; padding-top: 200px">
    <label for="nome">Nome:</label>
    <input type="text" name="nome" id="nome" required><br>
    <label for="data_de_nascimento">Data de nascimento:</label>
    <input type="date" name="data_de_nascimento" id="data_de_nascimento" required><br>
    <label for="cpf">CPF:</label>
    <input type="text" name="cpf" id="cpf" required><br>
    <label for="sexo">Sexo:</label>
    <input type="text" name="sexo" id="sexo" required><br>
    <label for="cidade">Cidade:</label>
    <input type="text" name="cidade" id="cidade"><br>
    <label for="bairro">Bairro:</label>
    <input type="text" name="bairro" id="bairro"><br>
    <label for="rua">Rua:</label>
    <input type="text" name="rua" id="rua"><br>
    <label for="numero">Numero:</label>
    <input type="text" name="numero" id="numero"><br>
    <label for="complemento">Complemento:</label>
    <input type="text" name="complemento" id="complemento"><br>
    
   

    
     

    <button type="submit">Enviar</button>
</div>
</form>   




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>