<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Editar Projeto</title>
</head>
<body>
    <div class="container">
        <h1>Editando Projeto</h1>
        <a href="{{ route('projetos.index') }}" class="btn btn-secondary mt-3">Voltar para a lista de projetos</a>
        <br>
        <form action="{{ route('projetos.update', $projeto->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="titulo">Título:</label>
                <input type="text" name="titulo" id="titulo" class="form-control" value="{{ $projeto->titulo }}" required>
            </div>

            <div class="form-group">
                <label for="descricao">Descrição:</label>
                <textarea name="descricao" id="descricao" class="form-control" required>{{ $projeto->descricao }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Atualizar</button>
        </form>
    </div>
</body>
</html>