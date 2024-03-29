<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <title>Editar Protocolo</title>
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

    <section class="vh-100" style="background-color:#d8d8d8ce">
        <div class ="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-30">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card shadow-2-strong" style="border-radius: 1rem;">
                      <div class="card-body p-5 text-center">    
    <form action="{{ route('alterar_protocolo', $protocolo->numeroprot)}}" method="POST">
        @csrf
        <h3>Edite o protocolo aqui:</h3>
    <div class="text-center" style=" text-align:left; padding-top: 40px">
   

    <input type="text" name="descricao"  style="background-color: #d8d8d8ce" class="form-control form-control-lg form-control-borderless"  value =" {{ $protocolo->descricao }}" placeholder="Descrição" required><br>
    
    <input type="text" name="data"  style="background-color: #d8d8d8ce" class="form-control form-control-lg form-control-borderless"  value =" {{ $protocolo->data }}" placeholder="Data" required><br>
    
    <input type="text" name="prazo"  style="background-color: #d8d8d8ce" class="form-control form-control-lg form-control-borderless"  value =" {{ $protocolo->prazo }}" placeholder="Prazo" required><br>
   
    <input type="text" name="contribuinte"  style="background-color: #d8d8d8ce" class="form-control form-control-lg form-control-borderless"  value="{{ $pessoa->nome }}" placeholder="Contribuinte"  required><br>
 
   

    
     

    <button type="submit"  class="btn btn-success" style="float: right">Enviar</button>
</div>
</form>   





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>