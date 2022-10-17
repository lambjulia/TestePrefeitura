<h1> Projeto TestePrefeitura </h1>
<h4> Esse projeto foi desenvolvido para o teste de uma vaga de estagiário na Prefeitura de São Leopoldo - RS.</h4>

<h3>Sobre o projeto:</h3>

<p>No teste da prefeitura pedia uma versão reduzida e simplificada de um 
sistema de atendimento ao contribuinte para ser utilizado pelo setor de 
protocolo de uma Prefeitura.</p>
<p>O teste pedia cadastro de pessoas e de protocolos vinculados a essas pessoas cadastradas.</p>
<p>Na tela inicial botei duas barras de pesquisa em que o usuário pode pesquisar por pessoas e protocolos.</p>
<p>Também na tela inicial esta uma navbar com botões para o cadastro de pessoas, cadastro de protocolos e botões para as listas de pessoas
e protocolos.</p>
<p>No cadastro de uma pessoa consta o nome, data de nascimento, CPF, sexo, cidade, bairro, rua, número e complemento.</p>
<p>No cadastro de protocolo consta a descrição do protocolo, a data, o prazo e uma dropdown list com as pessoas cadastradas, um protocolo não pode ser registrado sem uma pessoa para ser vinculada.</p>
<p>O sistema possui tabelas listando as pessoas cadastradas e os protocolos, onde se pode ser os cadastros, editar e excluir.</p>
<p>O sistema também tem cadastro de usuarios para fazer login.</p>

<h3>Como instalar o projeto:</h3>
<p>A .env já esta no projeto.</p>
<p>Você pode baixar o projeto ou usar o comando:</p>
<p>git clone https://github.com/lambjulia/TestePrefeitura.git</p>
<p>Crie um banco com o nome 'TestePrefeitura'</p>
<p>No terminal do projeto rode os seguintes comandos:</p>
<p>composer install</p>
<p>php artisan migrate</p>
<p>php artisan serve</p>
<p>E abra o servidor no navegador com http://127.0.0.1:8000/</p>

