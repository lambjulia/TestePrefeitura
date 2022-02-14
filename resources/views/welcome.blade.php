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
                <li><a href="http://127.0.0.1:8000/home">Inicio</a></li>
                <li><a href="http://127.0.0.1:8000/cadastrop">Cadastrar nova Pessoa</a></li>
                <li><a href="http://127.0.0.1:8000/cadastroprot">Cadastrar novo Protocolo</a></li>
                <li><a href="http://127.0.0.1:8000/index">Pessoas Cadastradas</a></li>
                <li><a href="http://127.0.0.1:8000/lista">Protocolos Cadastrados</a></li>
            </ul>
        </nav>
    </header>      

    <section class="vh-50" style="background-color:#d8d8d8ce">
        <div class ="container py-5 h-50">
            <div class="row d-flex justify-content-center align-items-center h-50">
                <div class="col-5 col-md-5 col-lg-5 col-xl-5">
                    <div class="card shadow-2-strong" style="border-radius: 1rem;">
                      <div class="card-body p-10 text-center">    

    <form action="{{ route('store')}}" method="POST">

        <h2>Cadastrar Nova Pessoa</h2>
        @csrf
    <div class="form-holder" style=" text-align:left; padding-top: 40px">
    <input type="text" name="nome" id="nome" style="background-color: #d8d8d8ce" class="form-control form-control-lg form-control-borderless" placeholder="Nome" required><br>
    <input type="date" name="data_de_nascimento" id="data_de_nascimento" style="background-color: #d8d8d8ce" class="form-control form-control-lg form-control-borderless" placeholder="Data de Nascimento" required><br>
    <input type="text" name="cpf" id="cpf" style="background-color: #d8d8d8ce" class="form-control form-control-lg form-control-borderless" placeholder="CPF" required><br>

    <div style="background-color: #d8d8d8ce" class="form-control form-control-lg form-control-borderless">
    <input type="radio" name="sexo" value="masculino" id="masculino" checked>
    <label style="font-size:large" for="masculino">Masculino</label>
    <input type="radio" name="sexo"  value="feminino" id="feminino">
    <label style="font-size: large" for="feminino">Feminino</label>
    </div>
    <br>

    <input type="text" name="cidade" id="cidade" style="background-color: #d8d8d8ce" class="form-control form-control-lg form-control-borderless" placeholder="Cidade" required><br>
    <input type="text" name="bairro" id="bairro" style="background-color: #d8d8d8ce" class="form-control form-control-lg form-control-borderless" placeholder="Bairro" required><br>
    <input type="text" name="rua" id="rua" style="background-color: #d8d8d8ce" class="form-control form-control-lg form-control-borderless" placeholder="Rua" required><br>
    <input type="text" name="numero" id="numero" style="background-color: #d8d8d8ce" class="form-control form-control-lg form-control-borderless" placeholder="Número" required><br>
    <input type="text" name="complemento" id="complemento" style="background-color: #d8d8d8ce" class="form-control form-control-lg form-control-borderless" placeholder="Complemento" required><br>
    
    
   

    
     

    <button type="submit" style="float:right"  class="btn btn-success">Enviar</button>
</div>
</form>   




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</div>
</div>
</div>
</div>
</div>
</section>
</html>