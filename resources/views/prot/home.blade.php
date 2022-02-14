<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet" type="text/css" />
    <title>Prefeitura</title>
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
  
</head>
<body style="background-color:#d8d8d8ce">
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
  
<h1 class="text-center">Seja bem vindo!</h3>
    <section class="vh-100" style="background-color:#d8d8d8ce">
        <div class ="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-50">
                <div class="col-12 col-md-10 col-lg-10 col-xl-12">
                    <div class="card shadow-2-strong" style="border-radius: 1rem;">
                      <div class="card-body p-5 text-center">  
                          
                        

                       
                        <div class="container">
                            <br/>
                            <div class="row justify-content-center">
                                                <div class="col-12 col-md-10 col-lg-8">
                                                
                                                        <div class="card-body row no-gutters align-items-center">
                                                            <div class="col-auto">
                                                                <i class="fas fa-search h4 text-body"></i>
                                                            </div>
                                                            <!--end of col-->
                                                            <div class="col">
                                                                <form action="{{ url('/search') }}" method="GET">
                                                                     <h4 style="font-family: Verdana, Geneva, Tahoma, sans-serif">Procure por dado de Pessoa</h4>
                                                                <input style="background-color: #d8d8d8ce" name="query" class="form-control form-control-lg form-control-borderless" type="search" placeholder="Pesquise o dado aqui">
                                                            </div>
                                                            <!--end of col-->
                                                            <div class="col-auto">
                                                                <button class="btn btn-lg btn-success" type="submit">Pesquisar</button>
                                                            </div>
                                                            <!--end of col-->
                                                        </div>
                                                    </form>
                                                </div>
                                                <!--end of col-->
                                            </div>
                        </div>
                        <br><br>

  
        
        
            <div class="container">
                <br/>
                <div class="row justify-content-center">
                                    <div class="col-12 col-md-10 col-lg-8">
                                    
                                            <div class="card-body row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <i class="fas fa-search h4 text-body"></i>
                                                </div>
                                                <!--end of col-->
                                                
                                                <div class="col">
                                                    <form action="{{ url('/searchprot') }}" method="GET">
                                                        <h4 style="font-family: Verdana, Geneva, Tahoma, sans-serif">Procure por dado de Protocolo</h4>
                                                    <input style="background-color: #d8d8d8ce" name="query" class="form-control form-control-lg form-control-borderless" type="search" placeholder="Pesquise o dado aqui">
                                                </div>
                                                <!--end of col-->
                                                <div class="col-auto">
                                                    <button class="btn btn-lg btn-success" type="submit">Pesquisar</button>
                                                </div>
                                                <!--end of col-->
                                            </div>
                                        </form>
                                    </div>
                                    <!--end of col-->
                                </div>
            </div>

</body>

</html>