<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Editar Tarefa</title>
</head>
<body>
    <h1>Editar Tarefa</h1><br>
    <a href="{{ route('tarefas.index') }}">Voltar para a lista de tarefas</a><br><br>
    <form action="{{ route('tarefas.update', $tarefa->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <label for="titulo">Título:</label><br><br>
        <input type="text" name="titulo" id="titulo" value="{{ $tarefa->titulo }}">
        <br><br>
        <label for="descricao">Descrição:</label><br><br>
        <textarea name="descricao" id="descricao">{{ $tarefa->descricao }}</textarea>
        <br><br>    
        <label for="prazo">Prazo:</label><br><br>
        <input type="date" name="prazo" id="prazo" value="{{ $tarefa->prazo }}">
        <br><br>
        <button type="submit">Atualizar Tarefa</button>
    </form>
</body>
</html>