<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Projeto</title>
</head>
<body>
    <div class="container">
        <h1>Detalhes do Projeto</h1>
        <a href="{{ route('home') }}">Voltar para o Menu</a>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $projeto->titulo }}</h5>
                <p class="card-text"><strong>Descrição:</strong> {{ $projeto->descricao }}</p>
                <p class="card-text"><strong>ID:</strong> {{ $projeto->id }}</p>
                <p class="card-text"><strong>Criado em:</strong> {{ $projeto->created_at }}</p>
                <p class="card-text"><strong>Atualizado em:</strong> {{ $projeto->updated_at }}</p>
            </div>
        </div>

        <a href="{{ route('projetos.index') }}">Voltar para a lista de projetos</a>
        <br><br>
        <a href="{{ route('tarefas.create', ['projeto' => $projeto->id]) }}">Cadastrar Tarefa</a>
    </div>
</body>
</html>