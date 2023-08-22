<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Listar Projetos</title>
</head>
<body>
    <h1>Projetos</h1><br>

    <a href="{{ route('home') }}">Voltar para o Menu</a><br>

    <div class="container">
        <h1>Lista de Projetos</h1>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Título</th>
                    <th>Descrição</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($projetos as $projeto)
                    <tr>
                        <td>{{ $projeto->id }}</td>
                        <td>{{ $projeto->titulo }}</td>
                        <td>{{ $projeto->descricao }}</td>
                        <td class="actions">
                            <a href="{{ route('projetos.show', $projeto->id) }}">Visualizar</a>
                            <a href="{{ route('projetos.edit', $projeto->id) }}">Editar</a>
                            <form action="{{ route('projetos.destroy', $projeto->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja excluir este projeto?')">Excluir</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>