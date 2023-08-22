<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Trabalho ORM</title>
</head>
<body>
    <div class="container">
        <h1>Trabalho sobre ORM</h1>
        <p>Escolha uma opção:</p>
        
        <ul>
            <li><a href="{{ route('projetos.index') }}">Listar Projetos</a></li>
            <li><a href="{{ route('tarefas.index') }}">Listar Tarefas</a></li>
        </ul>
        
        <hr>
        
        <h2>Cadastrar Novo</h2>
        
        <ul>
            <li><a href="{{ route('projetos.create') }}">Cadastrar Projeto</a></li>
            <li><a href="{{ route('tarefas.create') }}">Cadastrar Tarefa</a></li>
        </ul>
    </div>
</body>
</html>