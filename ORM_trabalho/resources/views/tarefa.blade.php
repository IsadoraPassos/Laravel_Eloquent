<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Cadastrar Tarefa</title>
</head>
<body>
    <h1>Cadastrar Tarefa</h1><br>
    <a href="{{ route('home') }}">Voltar para o Menu</a><br><br>
    
    <form action="{{ route('tarefas.store') }}" method="POST">
        @csrf
        <label for="projetos_id">Projeto:</label><br><br>
        <select name="projetos_id" id="projetos_id">
            <option value="">Selecione um projeto</option>
            @foreach($projetos as $projeto)
                <option value="{{ $projeto->id }}" @if($projetoSelecionado && $projetoSelecionado->id == $projeto->id) selected @endif>
                    {{ $projeto->titulo }}
                </option>
            @endforeach
        </select>
        <br><br>
        <label for="titulo">Título:</label><br><br>
        <input type="text" name="titulo" id="titulo">
        <br><br>
        <label for="descricao">Descrição:</label><br><br>
        <textarea name="descricao" id="descricao"></textarea>
        <br><br>
        <label for="prazo">Prazo:</label><br><br>
        <input type="date" name="prazo" id="prazo">
        <br><br>
        <button type="submit">Criar Tarefa</button>
    </form>
</body>
</html>