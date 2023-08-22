<?php

namespace App\Http\Controllers;

use App\Models\Projeto;
use App\Models\Tarefa;
use Illuminate\Http\Request;

class TarefaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //obter todas as tarefas do banco de dados
        $tarefas = Tarefa::all();

        return view('tarefas.index', compact('tarefas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //pega todos os projetos do banco de dados para serem passados por referencia para o formulario
        //de cadastro de atividades
        $projetos = Projeto::all();

        //logica para verificar se o projeto já foi pre-selecionado
        $projetoSelecionado = null;
        if ($request->has('projeto')) {
            $projetoSelecionado = Projeto::find($request->projeto);
        }


        return view('tarefa', compact('projetos', 'projetoSelecionado'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'projetos_id' => 'required',
            'titulo' => 'required',
            'descricao' => 'required',
            'prazo' => 'required|date',
        ]);
    
        $tarefa = new Tarefa();
        $tarefa->projeto_id = $request->projetos_id;
        $tarefa->titulo = $request->titulo;
        $tarefa->descricao = $request->descricao;
        $tarefa->prazo = $request->prazo;
        $tarefa->save();
    
        return redirect()->route('tarefas.index')->with('success', 'Tarefa criada com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tarefa = Tarefa::findOrFail($id);
        $projeto = Projeto::find($tarefa->projeto_id);

        return view('tarefas.show', compact('tarefa', 'projeto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tarefa = Tarefa::findOrFail($id);
        return view('tarefas.edit', compact('tarefa'));
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
        $tarefa = Tarefa::findOrFail($id);
    
        $tarefa->titulo = $request->input('titulo');
        $tarefa->descricao = $request->input('descricao');
        $tarefa->prazo = $request->input('prazo');
        
        $tarefa->save();
        
        return redirect()->route('tarefas.show', $tarefa->id)->with('success', 'Tarefa atualizada com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tarefa = Tarefa::findOrFail($id);
        $tarefa->delete();
        
        return redirect()->route('tarefas.index')->with('success', 'Tarefa excluída com sucesso.');
    }
}
