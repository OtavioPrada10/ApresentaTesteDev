1 - Primeiramente é necessario instalar o Laravel <a href="https://laravel.com/docs/10.x/installation">Clique aqui para ler mais</a>...<br>
2 - Após isso instale o node.js <a href="https://nodejs.org/en">Clique aqui para ler mais</a>...<br>
3 - Agora instale o Composer <a href="https://getcomposer.org">Clique aqui para ler mais</a>...<br> 
4 - Pelo terminal abra a pasta do projeto e inicie com (php artisan serve). <br>
5 - os comandos a seguir são para criar arquivos caso ainda não tenham sido criados.
    composer require laravel/ui <br>
    php artisan ui vue --auth <br>
6 - Pelo terminal abra a pasta do projeto e de um (npm install) e em seguida (npm run dev).<br>
7 - Criar uma base de dados com o nome apresentaTesteDev(CREATE database apresentatestedev).<br>
8 - Execute no terminal da aplicação o comando para criar as tabelas (php artisan migrate).<br><br>

Agora dentro do sistema deve criar um usuário no botão "Register" preenchendo as informações.<br>
Dentro do sistema é possível ver a consulta de Pessoas pelo botão "Lista de Pessoa".<br>
Dentro da Lista de pessoas é possível inserir um registro pelo botão "Incluir Pessoa", preencher os dados e clicar em Cadastrar, sera redirecionado para a Lista.<br>
com um registro inserido é possível Alterar e Excluir.
