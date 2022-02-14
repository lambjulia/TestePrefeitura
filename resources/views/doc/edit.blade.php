<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <title>Editar Pessoa</title>
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

    <section class="vh-100" style="background-color:#d8d8d8ce">
        <div class ="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card shadow-2-strong" style="border-radius: 1rem;">
                      <div class="card-body p-5 text-center">    
    <form action="{{ route('alterar_cadastro', $pessoa->id) }}" method="POST">
        {{csrf_field()}}
    
        <label for="">Nome:</label> <br>
        <input type="text" name="nome" value =" {{ $pessoa->nome }}"><br>
        <label for="">Data de nascimento:</label><br>
        <input type="text" name="data_de_nascimento"  value =" {{ $pessoa->data_de_nascimento }}"><br>
        <label for="">CPF:</label><br>
        <input type="text" name="cpf"  value =" {{ $pessoa->cpf }}"><br>
        <label for="">Sexo:</label><br>
        <input type="text" name="sexo"  value =" {{ $pessoa->sexo }}"><br>
        <label for="">Cidade:</label><br>
        <input type="text" name="cidade"  value =" {{ $pessoa->cidade }}"><br>
        <label for="">Bairro:</label><br>
        <input type="text" name="bairro" value =" {{ $pessoa->bairro }}"><br>
        <label for="">Rua:</label><br>
        <input type="text" name="rua"  value =" {{ $pessoa->rua }}"><br>
        <label for="">Numero:</label><br>
        <input type="text" name="numero" value =" {{ $pessoa->numero }}"><br>
        <label for="">Complemento:</label><br>
        <input type="text" name="complemento"  value =" {{ $pessoa->complemento }}"><br>
    
   

    
    

    <button type="submit"  class="btn btn-success">Enviar</button>



</form>   




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>