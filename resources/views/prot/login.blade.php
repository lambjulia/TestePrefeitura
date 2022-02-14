<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Login Prefeitura</title>

    <section class="vh-100" style="background-color: black;">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
          
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
              <div class="card shadow-2-strong" style="border-radius: 1rem;">
                <div class="card-body p-5 text-center">
                  @if ($errors->any())
                    <div class="alert alert-danger">
                      <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                      </ul>
                    </div>
                    @endif

                  @if(session('danger'))
                  <div class="alert alert-danger">
                  {{ session('danger') }}
                  </div> 
                  @endif

                  <h3 class="mb-5">Entre em sua conta</h3>
      
                  
          
                
                  <div class="form-outline mb-4">

                    <form action={{ route('login') }} method="post">
                      @csrf
                    <input name="usuario" value="{{ old('usuario') }}" type="text" placeholder="Usuário" class="form-control form-control-lg" />
                   
                  </div>
      
                  <div class="form-outline mb-4">
                    <input name="senha" value="{{ old('senha') }}" type="password" placeholder="Senha" class="form-control form-control-lg" />
                    
                  </div>
      
            
                  
      
                  <button class="btn btn-dark" type="submit">Login</button><br>
      
                </form>

                {{ isset($erro) && $erro != '' ? $erro : '' }}

                  <hr class="my-4">
      
                  <div>
                    <p class="mb-0"><a href="cadastro" class="text-black-50 fw-bold">Se Cadastre</a></p>
                  </div>
      
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

  </html>