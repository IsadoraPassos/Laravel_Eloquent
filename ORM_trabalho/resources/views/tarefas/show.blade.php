<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Tarefa</title>
</head>
<body>
    <h1>Detalhes da Tarefa</h1><br>
    <p><strong>ID:</strong> {{ $tarefa->id }}</p>
    <p><strong>Título:</strong> {{ $tarefa->titulo }}</p>
    <p><strong>Descrição:</strong> {{ $tarefa->descricao }}</p>
    <p><strong>Prazo:</strong> {{ $tarefa->prazo }}</p>
    <p><strong>Projeto:</strong> {{ $projeto->titulo }}</p>
    <a href="{{ route('tarefas.index') }}">Voltar para a lista de tarefas</a>
</body>
</html>