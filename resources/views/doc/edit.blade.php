<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"
    integrity="sha256-Kg2zTcFO9LXOc7IwcBx1YeUBJmekycsnTsq2RuFHSZU=" crossorigin="anonymous"></script>

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
                <li><a href="{{url('home')}}">Inicio</a></li> 
                <li><a href="{{url('cadastrop')}}">Cadastrar nova Pessoa</a></li>
                <li><a href="{{url('cadastroprot')}}">Cadastrar novo Protocolo</a></li>
                <li><a href="{{url('index')}}">Pessoas Cadastradas</a></li>
                <li><a href="{{url('lista')}}">Protocolos Cadastrados</a></li>
            </ul>
        </nav>
    </header>  

    <section  class="vh-100" style="background-color:#d8d8d8ce">
        <div class ="container py-5 h-50">
            <div class="row d-flex justify-content-center align-items-center h-50">
                <div class="col-5 col-md-5 col-lg-5 col-xl-6">
                    <div class="card shadow-2-strong" style="border-radius: 1rem;">
                      <div class="card-body p-10 text-center">     
    <form action="{{ route('alterar_cadastro', $pessoa->id) }}" method="POST">
        {{csrf_field()}}
    <h3>Edite o cadastro<h3>
        @csrf
        <div class="text-center" style=" text-align:left; padding-top: 30px, font-size:0em, padding-bottom: 30px">
        
            <input type="text" name="nome" id="nome" style="background-color: #d8d8d8ce" class="form-control form-control-lg form-control-borderless" value =" {{ $pessoa->nome }}" placeholder="nome" required><br>
            <input type="text" name="data_de_nascimento" id="data_de_nascimento" style="background-color: #d8d8d8ce" class="form-control form-control-lg form-control-borderless" value =" {{ $pessoa->data_de_nascimento }}" placeholder="Data de Nacimento" required><br>

            <input type="text" name="cpf" id="cpf" style="background-color: #d8d8d8ce" class="form-control form-control-lg form-control-borderless" value =" {{ $pessoa->cpf }}" placeholder="CPF" required><br>
        
            <div style="background-color: #d8d8d8ce" class="form-control form-control-lg form-control-borderless">
            <input type="radio" name="sexo" value="masculino" id="masculino" checked>
            <label style="font-size:large" for="masculino">Masculino</label>
            <input type="radio" name="sexo"  value="feminino" id="feminino">
            <label style="font-size: large" for="feminino">Feminino</label>
            </div>
            <br>
        
            <input type="text" name="cidade" id="cidade" style="background-color: #d8d8d8ce" class="form-control form-control-lg form-control-borderless"value =" {{ $pessoa->cidade }}" placeholder="Cidade" required><br>
           
            <input type="text" name="bairro" id="bairro" style="background-color: #d8d8d8ce" class="form-control form-control-lg form-control-borderless"value =" {{ $pessoa->bairro }}" placeholder="Bairro" required><br>
          
            <input type="text" name="rua" id="rua" style="background-color: #d8d8d8ce" class="form-control form-control-lg form-control-borderless" value =" {{ $pessoa->rua }}" placeholder="Rua" required><br>
           
            <input type="text" name="numero" id="numero" style="background-color: #d8d8d8ce" class="form-control form-control-lg form-control-borderless"value =" {{ $pessoa->numero }}" placeholder="Numero" required><br>
           
            <input type="text" name="complemento" id="complemento" style="background-color: #d8d8d8ce" class="form-control form-control-lg form-control-borderless" value =" {{ $pessoa->complemento }}" placeholder="Complemento" required>
    <br><button type="submit"  class="btn btn-success" style="float: right">Enviar</button>

</div>
</div>
</div>
</div>
</div>


</form>   
<br><br><br>
<script>
    $(document).ready(function(){

  $('#cpf').mask('000.000.000-00', {reverse: true});

  });
    </script>

</section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>