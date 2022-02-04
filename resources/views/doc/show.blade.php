<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
</head>
<body>
  
    <label for="">Nome:</label> <br>
    <input type="text" name="nome" value =" {{ $pessoa->nome }}"><br>
    <label for="">Data de nascimento:</label><br>
    <input type="date" name="data_de_nascimento"  value =" {{ $pessoa->data_de_nascimento }}"><br>
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
    
   

  




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>