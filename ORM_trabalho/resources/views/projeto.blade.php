<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Cadastrar Projeto</title>
</head>
<body>
    <h1>Cadastrar Projeto</h1><br>

    <a href="{{ route('home') }}">Voltar para o Menu</a><br><br>

    <form action="{{ route('projetos.store') }}" method="POST">
        @csrf
        <label for="titulo">Título:</label>
        <input type="text" name="titulo" id="titulo"><br><br>
        
        <label for="descricao">Descrição:</label><br>
        <textarea name="descricao" id="descricao"></textarea><br><br>
        
        <button type="submit">Criar Projeto</button>
    </form>
</body>
</html>