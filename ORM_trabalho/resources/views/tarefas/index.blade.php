<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Tarefas</title>
</head>
<body>
    <h1>Tarefas</h1><br>
    <a href="{{ route('home') }}">Voltar para o Menu</a><br><br>

    <a href="{{ route('tarefas.create') }}">Criar Nova Tarefa</a>
    <br><br>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Descrição</th>
                <th>Prazo</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tarefas as $tarefa)
            <tr>
                <td>{{ $tarefa->id }}</td>
                <td>{{ $tarefa->titulo }}</td>
                <td>{{ $tarefa->descricao }}</td>
                <td>{{ $tarefa->prazo }}</td>
                <td class="actions">
                    <a href="{{ route('tarefas.show', $tarefa->id) }}">Visualizar</a>
                    <a href="{{ route('tarefas.edit', $tarefa->id) }}">Editar</a>
                    <form action="{{ route('tarefas.destroy', $tarefa->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="actions">Excluir</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>