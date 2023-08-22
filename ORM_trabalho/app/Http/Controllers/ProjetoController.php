<?php

namespace App\Http\Controllers;

use App\Models\Projeto;
use Illuminate\Http\Request;

class ProjetoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Obter todos os projetos do banco de dados
        $projetos = Projeto::all();

        return view('projetos.index', compact('projetos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('projeto');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validação dos dados do formulário
        $request->validate([
            'titulo' => 'required',
            'descricao' => 'required',
        ]);

        // Criação de um novo projeto com os dados do formulário
        $projeto = new Projeto();
        $projeto->titulo = $request->titulo;
        $projeto->descricao = $request->descricao;
        $projeto->save();

        return redirect()->route('projetos.show', $projeto->id)->with('success', 'Projeto criado com sucesso!');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $projeto = Projeto::findOrFail($id);
    
        return view('projetos.show', compact('projeto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $projeto = Projeto::findOrFail($id);
    
        return view('projetos.edit', compact('projeto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Validação dos dados recebidos do formulário
        $request->validate([
            'titulo' => 'required',
            'descricao' => 'required',
        ]);

        // Busca o projeto pelo ID
        $projeto = Projeto::findOrFail($id);

        // Atualiza os campos do projeto com base nos valores enviados pelo formulário
        $projeto->titulo = $request->input('titulo');
        $projeto->descricao = $request->input('descricao');

        // Salva as alterações no banco de dados
        $projeto->save();

        // Redireciona para a página de exibição do projeto
        return redirect()->route('projetos.show', $projeto->id)
                        ->with('success', 'Projeto atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Busca o projeto pelo ID
        $projeto = Projeto::findOrFail($id);

        // Exclui o projeto
        $projeto->delete();

        // Redireciona para a página de listagem de projetos
        return redirect()->route('projetos.index')
                        ->with('success', 'Projeto excluído com sucesso!');
    }
}
